<?php

namespace Tests\Feature;

use App\Models\ContactInfo;
use App\Models\MenuCategory;
use App\Models\MenuItem;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
        MenuItem::create([
            'menu_category_id' => $category->id,
            'name' => 'Batata frita',
            'price' => 'R$ 20,00',
            'active' => true,
        ]);

        $this->get(route('menu'))
            ->assertOk()
            ->assertSee('Petiscos')
            ->assertSee('Batata frita')
            ->assertSee('R$ 20,00');
    }
}
