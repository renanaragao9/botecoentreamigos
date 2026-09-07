<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminResourcesTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_new_admin_pages_are_available_to_an_authenticated_user(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)->get('/admin/bookings')->assertOk();
        $this->actingAs($user)->get('/admin/users')->assertOk();
        $this->actingAs($user)->get('/admin/contact-infos')->assertOk();
    }
}
