<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /*
     *
     */
    /** @test */
    function it_loads_the_users_list_page()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get('/users')
            ->assertStatus(200)
            ->assertSee('Usuarios');
    }

    /** @test */
    function it_loads_the_users_details_page()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get('/users/2')
            ->assertStatus(200)
            ->assertSee('Datos de usuario');
    }

    /** @test */
    function it_loads_the_new_users_page()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get('/users/create')
            ->assertStatus(200)
            ->assertSee('Crear usuario');
    }

    /*
     * Redirect to login because this pages are protected by Authenticate
     */
    /** @test */
    function need_auth_to_loads_the_users_list_page()
    {
        $this->get('/users')
            ->assertStatus(302)
            ->assertRedirect('login');
    }
    /** @test */
    function need_auth_to_loads_the_users_details_page()
    {
        $this->get('/users/2')
            ->assertStatus(302)
            ->assertRedirect('login');
    }
    /** @test */
    function need_auth_to_loads_the_new_users_page()
    {
        $this->get('/users/create')
            ->assertStatus(302)
            ->assertRedirect('login');
    }
}
