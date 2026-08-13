<?php

namespace Database\Seeders;

use App\Models\EventItem;
use Database\Seeders\Concerns\SeedImages;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    use SeedImages;

    public function run(): void
    {
        $events = [
            [
                'title' => 'Aniversários',
                'image' => 'aniversario.jpeg',
                'description' => 'Venha comemorar seu aniversario no entreamigos, aqui você terá diversão alegria e poderár curtir muito o seu grande dia!!',
                'features' => [
                    'Reserva de mesa para até 20 pessoas.',
                    'Lugar de facíl acesso e tranquilo.',
                    'Aniversariantes ganham brindes.',
                    'Confira as nossas condições.',
                ],
            ],
            [
                'title' => 'Encontro entre amigos',
                'image' => 'amigos.jpeg',
                'description' => 'Junte seus amigos e venha se divertir!!!',
                'features' => [
                    'Reserve uma mesa para ate 15 pessoas.',
                    'Facil acesso e tranquilo.',
                    'Confira as nossas condições.',
                ],
            ],
            [
                'title' => 'Jantar',
                'image' => 'casal.jpeg',
                'description' => 'Um otimo lugar para aquele seu encontro romantico!!',
                'features' => [
                    'Reserve uma mesa.',
                    'Facil acesso e tranquilo.',
                    'Confira as nossas condições.',
                ],
            ],
        ];

        foreach ($events as $i => $event) {
            $eventItem = EventItem::create([
                'title' => $event['title'],
                'image' => $this->seedImage($event['image'], 'events'),
                'description' => $event['description'],
                'order' => $i,
            ]);

            foreach ($event['features'] as $j => $text) {
                $eventItem->features()->create(['text' => $text, 'order' => $j]);
            }
        }
    }
}
