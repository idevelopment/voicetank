<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProfileTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: account/update
     *
     * @group all
     * @group acl
     */
    public function testUserUpdateForm()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('account/update')
            ->seeStatusCode(200);
    }

    /**
     * POST: account/update
     *
     * @group all
     * @group acl
     */
    public function testUserUpdateDatabaseWithoutPassword()
    {
        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();

        // Old database
        $oldDb['name']  = $user->name;
        $oldDb['email'] = $user->email;

        // Input
        $input['name']  = 'Jhon Doe';
        $input['email'] = 'example@domain.tld';

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->seeInDatabase('users', $oldDb)
            ->visit('account/update', $input);
    }

    /**
     * POST: account/update
     *
     * @group all
     * @group acl
     */
    public function testUserUpdateDatabaseWithPassword()
    {

    }
}
