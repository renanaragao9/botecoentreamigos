<?php

namespace Database\Seeders;

use App\Models\AboutFeature;
use App\Models\AboutSection;
use App\Models\WhyUsItem;
use Database\Seeders\Concerns\SeedImages;
use Illuminate\Database\Seeder;

class AboutSectionSeeder extends Seeder
{
    use SeedImages;

    public function run(): void
    {
        AboutSection::create([
            'title' => 'Conheça o que sabemos fazer de melhor.',
            'intro_text' => 'Todos os nossos ingredientes foram pensados para levar ao melhor no seu prato. Aqui você tem vantagens de:',
            'closing_text' => 'Dias de jogos animados e divertidos, para você torcer para seu time',
            'image' => $this->seedImage('barrrr.jpeg', 'about'),
        ]);

        foreach ([
            'Entreamigos, um lugar para o melhor encontro em família.',
            'Seu gosto é atendido aqui.',
            'Ambiente animado e divertido',
            'Dudu',
        ] as $i => $text) {
            AboutFeature::create(['text' => $text, 'order' => $i]);
        }

        foreach ([
            ['title' => 'Ambiente', 'description' => 'Temos um ótimo ambiente para quem procura um lugar tranquilo e divertido'],
            ['title' => 'Encontro', 'description' => 'Lugar perfeito para você que quer organizar encontros entre amigos ou em família'],
            ['title' => 'Jogos', 'description' => 'Venha torcer para o seu time de coração em dias de jogos com o melhor espeto da região'],
        ] as $i => $item) {
            WhyUsItem::create([...$item, 'order' => $i]);
        }
    }
}
