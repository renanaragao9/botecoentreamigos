<?php

namespace Database\Seeders;

use App\Models\ContactInfo;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
{
    public function run(): void
    {
        ContactInfo::create([
            'business_name' => 'Entreamigos',
            'hero_title' => 'Bem-Vindo ao ENTREAMIGOS',
            'hero_subtitle' => 'Há mais de 5 anos entregando comida de qualidade!',
            'address' => 'Rua monsenhor salazar, 882. Fortaleza-CE',
            'open_hours' => 'Terça-Sabado: 17:00 PM - 00:00 PM',
            'email' => 'botecoentreamigos@gmail.com',
            'phone' => '+55 (85) 99222-6196',
            'whatsapp' => '5585992226196',
            'instagram_url' => 'https://www.instagram.com/botecoentreofc/',
            'facebook_url' => 'https://www.facebook.com/search/top?q=entre%20amigos%20bar%20%26%20espetaria',
            'map_embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254799.8914225813!2d-38.775650175000024!3d-3.756035399999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c748c4106e946d%3A0x46068ee848e765de!2sBar%26Poker%20%23Entreamigos!5e0!3m2!1spt-BR!2sbr!4v1655907924950!5m2!1spt-BR!2sbr',
            'seo_title' => 'Entreamigos - Bar e Espetaria em Fortaleza-CE',
            'seo_description' => 'Boteco Entreamigos: bar e espetaria em Fortaleza-CE. Espetos, feijão verde, carne do sol e camarão. Aberto de terça a sábado, reserve sua mesa ou seu evento.',
        ]);
    }
}
