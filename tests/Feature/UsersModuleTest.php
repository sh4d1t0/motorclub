<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /*
     * Redirect to login because this pages are protected by Authenticate
     */
    /** @test */
    function it_loads_the_users_list_page()
    {
        $this->get('/users')
            ->assertStatus(302)
            ->assertRedirect('login');
    }
    /** @test */
    function it_loads_the_users_details_page()
    {
        $this->get('/users/2')
            ->assertStatus(302)
            ->assertRedirect('login');
    }
    /** @test */
    function it_loads_the_new_users_page()
    {
        $this->get('/users/create')
            ->assertStatus(302)
            ->assertRedirect('login');
    }
}
