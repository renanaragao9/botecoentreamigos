<?php

namespace Tests\Feature;

use App\Livewire\BookTableForm;
use App\Mail\BookTableMail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;
use Tests\TestCase;

class BookTableFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_stores_a_booking_when_the_form_is_submitted(): void
    {
        Mail::fake();

        Livewire::test(BookTableForm::class)
            ->set('name', 'Maria Silva')
            ->set('email', 'maria@example.com')
            ->set('phone', '85999999999')
            ->set('date', '2026-10-10')
            ->set('time', '19:00')
            ->set('people', '4')
            ->set('event_type', 'Aniversário')
            ->set('message', 'Mesa perto do palco.')
            ->call('submit')
            ->assertSet('sent', true);

        $this->assertDatabaseHas('bookings', [
            'name' => 'Maria Silva',
            'email' => 'maria@example.com',
            'status' => 'pending',
        ]);

        Mail::assertSent(BookTableMail::class);
    }
}
