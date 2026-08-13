<?php

namespace Database\Seeders;

use App\Models\Special;
use Database\Seeders\Concerns\SeedImages;
use Illuminate\Database\Seeder;

class SpecialSeeder extends Seeder
{
    use SeedImages;

    public function run(): void
    {
        foreach ([
            ['title' => 'Feijão verde', 'image' => 'feijao.jpeg', 'subtitle' => 'Somos especialistas quando o assunto é feijão verde.', 'description' => 'Na literatura nao há consenso sobre o surgimento do feijão verde. Diverge-se se é do Peru ou da África Tropical, mas o fato é que o feijão verde que melhor se adaptou foi no nordeste feito com queijo, creme de leite e verduras da terra'],
            ['title' => 'Carne do sol c/ Macaxeira', 'image' => 'carne do sol.jpeg', 'subtitle' => null, 'description' => 'A técnica começou a ser usada no Brasil no século 17, segundo Costa. Ela mistura práticas dos índios, que secavam as carnes no fogo, e dos portugueses, que trouxeram o costume de usar o sal como conservante. Hoje em dia, ainda é usada no interior de estados do Nordeste, onde há um sol pra cada um.'],
            ['title' => 'Trinchado', 'image' => 'trinchado.jpeg', 'subtitle' => null, 'description' => 'O trinchado surgiu na região sul, na cidade de Santo Antônio da Patrulha com a abundância na carne bovina são feito com filé na brasa acompanhado com um molho barbecue'],
            ['title' => 'Costelinha suína', 'image' => 'costelinha.jpg', 'subtitle' => null, 'description' => "Esse prato surgiu por uma fatalidade econômica que reuniu dois elementos básicos da produção rio-grandense: o porco e o charque. O estado passou a ser um grande produtor desses alimentos, sendo que o charque é feito por meio de técnicas trazidas por uma família do Ceará.\n\nÉ um produto pré-cozido a base de pernil ou lombo suíno, com baixa taxa de gordura, a carne suína é cortada em mantas para garantir um produto mais homogêneo."],
            ['title' => 'Camarão Alho e Óleo', 'image' => 'camarao.jpeg', 'subtitle' => null, 'description' => "Camarão alho e óleo é um prato típico do Ceará, mas que encontrou morada por todo o país, inclusive onde não há mar, como é o caso de Curitiba. Sem segredo nenhum, rápido e tentador. Sentir o sabor rasgante do alho e rebater com cerveja gelada, não tem preço.\n\nCamarão é perfeito para petiscar. Ao bafo, à milanesa, em bolinhos, abraçadinho…seja como for, combina perfeitamente com cerveja e amigos."],
        ] as $i => $item) {
            $item['image'] = $this->seedImage($item['image'], 'specials');
            Special::create([...$item, 'order' => $i]);
        }
    }
}
