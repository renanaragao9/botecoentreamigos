<?php

namespace Database\Seeders;

use App\Models\AllergenGuide;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AllergenGuideSeeder extends Seeder
{
    public function run(): void
    {
        Storage::disk('public')->put('allergen-guides/alert.svg', <<<'SVG'
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" role="img" aria-label="Alérgeno"><path fill="#cda45e" d="M30.3 7.8a2 2 0 0 1 3.4 0l25 43.3a2 2 0 0 1-1.7 3H7a2 2 0 0 1-1.7-3z"/><path fill="#1a1814" d="M29 24h6l-.8 16h-4.4zm3 22.5a3.2 3.2 0 1 1 0 6.4 3.2 3.2 0 0 1 0-6.4z"/></svg>
SVG);

        foreach ([
            'Trigo (inclui centeio, cevada e aveia)' => 'wheat',
            'Crustáceos' => 'crustaceans',
            'Ovos' => 'eggs',
            'Peixes' => 'fish',
            'Amendoim' => 'peanut',
            'Soja' => 'soya',
            'Leite de todos os mamíferos' => 'milk',
            'Amêndoa' => 'treenut',
            'Avelã' => 'treenut',
            'Castanha de caju' => 'treenut',
            'Castanha-do-pará' => 'treenut',
            'Macadâmia' => 'treenut',
            'Nozes' => 'treenut',
            'Pecã' => 'treenut',
            'Pistaches' => 'treenut',
            'Pinoli' => 'treenut',
            'Castanhas' => 'treenut',
            'Aipo' => 'celery',
            'Mostarda' => 'mustard',
            'Gergelim' => 'sesame',
            'Dióxido de enxofre e sulfitos' => 'sulphurdioxide',
            'Tremoços' => 'lupin',
            'Moluscos' => 'molluscs',
            'Látex natural' => null,
        ] as $name => $source) {
            $icon = $source ? "allergen-guides/{$source}.png" : 'allergen-guides/alert.svg';

            if ($source) {
                Storage::disk('public')->put(
                    $icon,
                    File::get(public_path("assets/img/icons/{$source}/{$source}.png")),
                );
            }

            AllergenGuide::updateOrCreate(
                ['name' => $name],
                ['icon' => $icon],
            );
        }
    }
}
