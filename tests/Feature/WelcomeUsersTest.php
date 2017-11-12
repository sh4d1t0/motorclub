<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/angel/shadito')
            ->assertStatus(200)
            ->assertSee('Bienvenido Angel, tu apodo es shadito');
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/angel/shadito')
            ->assertStatus(200)
            ->assertSee('Bienvenido Angel,');
    }
}
