<?php

namespace Tests\Feature;

use App\Models\ContactInfo;
use App\Models\AllergenGuide;
use App\Models\MenuCategory;
use App\Models\MenuItem;
use Database\Seeders\AllergenGuideSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_the_home_uses_the_site_settings(): void
    {
        ContactInfo::create([
            'business_name' => 'Buteco Teste',
            'hero_title' => 'A melhor mesa da cidade',
            'hero_subtitle' => 'Reserve hoje',
            'address' => 'Rua de Teste, 123',
            'open_hours' => 'Seg-Sáb: 17:00 - 00:00',
            'email' => 'contato@example.com',
            'phone' => '(85) 99999-9999',
            'whatsapp' => '5585999999999',
            'instagram_url' => 'https://instagram.com/butecoteste',
            'facebook_url' => 'https://facebook.com/butecoteste',
            'seo_title' => 'Buteco Teste',
            'seo_description' => 'Descrição de teste',
        ]);

        $this->get('/')
            ->assertOk()
            ->assertSee('A melhor mesa da cidade')
            ->assertSee('Descrição de teste')
            ->assertSee('https://wa.me/5585999999999', false);
    }

    public function test_the_digital_menu_displays_items_grouped_by_category(): void
    {
        $category = MenuCategory::create(['name' => 'Petiscos']);
        $item = MenuItem::create([
            'menu_category_id' => $category->id,
            'name' => 'Batata frita',
            'price' => '20.00',
            'active' => true,
        ]);

        $this->assertSame('20.00', $item->fresh()->price);

        $this->get(route('menu'))
            ->assertOk()
            ->assertSee('Petiscos')
            ->assertSee('Batata frita')
            ->assertSee('menu-item-detail-trigger', false)
            ->assertSee('data-bs-toggle="modal"', false)
            ->assertSee('menu-item-modals', false)
            ->assertSee('R$ 20,00');
    }

    public function test_a_menu_item_can_reference_multiple_allergen_guides(): void
    {
        $category = MenuCategory::create(['name' => 'Petiscos']);
        $lactoseGuide = AllergenGuide::create(['name' => 'Contém lactose', 'icon' => 'allergen-guides/lactose.png']);
        $glutenGuide = AllergenGuide::create(['name' => 'Contém glúten', 'icon' => 'allergen-guides/gluten.png']);

        $item = MenuItem::create([
            'menu_category_id' => $category->id,
            'name' => 'Queijo coalho',
            'price' => '12.00',
        ]);
        $item->allergenGuides()->attach([$lactoseGuide->id, $glutenGuide->id]);

        $this->assertCount(2, $item->allergenGuides);
        $this->assertTrue($lactoseGuide->menuItems->contains($item));
        $this->assertTrue($glutenGuide->menuItems->contains($item));

        $this->get(route('menu'))
            ->assertOk()
            ->assertSee('Alérgenos:')
            ->assertSee('Contém lactose')
            ->assertSee('menu-item-modal-allergens', false)
            ->assertSee('/storage/allergen-guides/lactose.png', false);
    }

    public function test_allergen_guide_seeder_creates_the_primary_allergen_list(): void
    {
        Storage::fake('public');

        $this->seed(AllergenGuideSeeder::class);

        $this->assertSame(24, AllergenGuide::count());
        Storage::disk('public')->assertExists('allergen-guides/alert.svg');
        Storage::disk('public')->assertExists('allergen-guides/peanut.png');
        $this->assertDatabaseHas('allergen_guides', [
            'name' => 'Amendoim',
            'icon' => 'allergen-guides/peanut.png',
        ]);
    }
}
