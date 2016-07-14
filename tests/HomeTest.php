<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /
     *
     * @group all
     */
    public function testHomeNotLoggedIn()
    {
        $this->visit('/')->seeStatusCode(200);
    }

    /**
     * GET: /home
     *
     * @group all
     */
    public function testHomeLoggedIn()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('/home')
            ->seeStatusCode(200);
    }
}
