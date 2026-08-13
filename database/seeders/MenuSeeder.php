<?php

namespace Database\Seeders;

use App\Models\MenuCategory;
use App\Models\MenuItem;
use Database\Seeders\Concerns\SeedImages;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    use SeedImages;

    public function run(): void
    {
        $categories = [
            'filter-starters' => MenuCategory::create(['name' => 'Entrada', 'order' => 0]),
            'filter-salads' => MenuCategory::create(['name' => 'Fritos', 'order' => 1]),
            'filter-specialty' => MenuCategory::create(['name' => 'Especialidades', 'order' => 2]),
        ];

        foreach ([
            ['img' => 'espetos.jpg', 'filter' => 'filter-starters', 'name' => 'Espetos', 'price' => 'R$9,00', 'desc' => 'Carne, Frango, Suíno, Coração, Calabresa e diversos outros sabores.'],
            ['img' => 'marao-rucula.jpg', 'filter' => 'filter-specialty', 'name' => 'Arroz de camarão', 'price' => 'R$34,90', 'desc' => 'Arroz de camarão'],
            ['img' => 'feijao_cremoso.jpg', 'filter' => 'filter-starters', 'name' => 'Baião', 'price' => 'R$14,90', 'desc' => 'Um delicioso baião feito com arroz e feijão de corda adicionado de um queijo coalho e creme de leite'],
            ['img' => 'isca.jpg', 'filter' => 'filter-salads', 'name' => 'Isca de peixe', 'price' => 'R$28,90', 'desc' => 'filé de peixe empanado com um molho especial'],
            ['img' => 'escondidinho-de-carne-do-sol-com-calabresa-6833.jpg', 'filter' => 'filter-specialty', 'name' => 'Escondidinho de carne do sol', 'price' => 'R$35,90', 'desc' => 'escondidinho de carne do sol'],
            ['img' => 'batata-frita-1200x900.jpg', 'filter' => 'filter-starters', 'name' => 'Batata Frita', 'price' => 'R$22,90', 'desc' => 'batata crocante!!'],
            ['img' => 'empanado_camarao.jpg', 'filter' => 'filter-salads', 'name' => 'Empanado de camarão', 'price' => 'R$32,90', 'desc' => 'camarao empanado'],
            ['img' => 'pasteis.jpg', 'filter' => 'filter-salads', 'name' => 'Pastelzinhos', 'price' => 'R$24,90', 'desc' => 'Carne, queijo, carne do sol.'],
            ['img' => 'batata-frita-1200x900.jpg', 'filter' => 'filter-specialty', 'name' => 'Torresmo', 'price' => 'R$25,90', 'desc' => 'Torresmo'],
        ] as $i => $item) {
            MenuItem::create([
                'menu_category_id' => $categories[$item['filter']]->id,
                'name' => $item['name'],
                'price' => $item['price'],
                'description' => $item['desc'],
                'image' => $this->seedImage($item['img'], 'menu', 'menu'),
                'order' => $i,
            ]);
        }
    }
}
