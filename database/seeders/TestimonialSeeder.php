<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Database\Seeders\Concerns\SeedImages;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    use SeedImages;

    public function run(): void
    {
        foreach ([
            ['img' => 'mulher.jpg', 'name' => 'Amanda Portela', 'text' => 'Nossa experiência foi maravilhosa. Música boa, boa gastronomia, bom preço e bom atendimento. Fomos super bem atendidos pela jamile. Carismática, dava boas dicas do que pedir e muito atenciosa no atendimento. O sabor da comida estava sensacional, vale realmente a pena. A variedade dos drinks é surreal, mas me apaixonei pelo drink lagoa azul.. PEÇAM , rsrs. Pretendemos voltar mais vezes, com certeza'],
            ['img' => 'janaina.jpeg', 'name' => 'Janaina Rabelo', 'text' => 'Após indicação do genro, eu e meu esposo fomos conhecer o Boteco entreamigos. Fomos numa sexta a noite, estava lotado, fomos muito bem recebidos e fizemos a opção de sentarmos do lado de fora. Comemos um espeto, excelente, muito bom, farto e com um preço ótimo. Tomamos refrigerante e cerveja bohemia bem gelado. Voltamos na quinta, era aniversário do meu esposo, comemos feijao verde, dessa vez nos sentamos lá dentro. Excelente feijao verde, preço justo p duas pessoas, ótimo atendimento, enfim um local muito agradável com excelentes opções, preços bons e ótimo atendimento. Adoreiii!'],
            ['img' => 'edvan.jpeg', 'name' => 'Edivan Filho', 'text' => 'Comemorei meu aniversário com amigos no boteco entramigos,que otimo de boteco,comida maravilhosa, lugar aconchegante,os funcionários são educados! No final do jantar ainda me fizeram uma surpresa,cantando parabéns com um bolo tanto quanto estranho kkk! Super Recomendo! Procurem a atendente dudu uma simpatia e super educada!!'],
            ['img' => 'bruno.jpeg', 'name' => 'Bruno Tavares', 'text' => 'Bom atendimento. Preços razoáveis. Primeira visita no local e me agradou. Não cobram 10%.'],
            ['img' => 'testimonials-5.jpg', 'name' => 'João Alves Larson', 'text' => 'Muito bom caipirinha, espeto de carne, queijo e pão de alho e cerveja gelada...'],
        ] as $i => $t) {
            Testimonial::create([
                'name' => $t['name'],
                'image' => $this->seedImage($t['img'], 'testimonials', 'testimonials'),
                'text' => $t['text'],
                'source' => 'Google Avaliação',
                'order' => $i,
            ]);
        }
    }
}
