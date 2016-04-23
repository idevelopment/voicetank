<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SettingsTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: settings
     *
     * @group all
     * @group settings
     */
    public function testIndex()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('settings')
            ->seeStatusCode(200);
    }
}
