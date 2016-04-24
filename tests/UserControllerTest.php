<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Artisan;

class UserControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /Users
     *
     * @group all
     * @group users
     */
    public function testUsersIndex()
    {
        Artisan::call('bouncer:seed');

        $user   = factory(App\User::class)->create();
        $active = Bouncer::assign('active')->to($user);

        $this->assertTrue($active);

        $this->actingAs($user)
            ->seeIsAuthenticated()
            ->visit('users')
            ->seeStatusCode(200);
    }

    /**
     * GET: /users/register
     *
     * @group all
     * @group users
     */
    public function testUsersRegisterView()
    {
        Artisan::call('bouncer:seed');

        $user   = factory(App\User::class)->create();
        $active = Bouncer::assign('active')->to($user);

        $this->assertTrue($active);

        $this->actingAs($user)
            ->seeIsAuthenticated()
            ->visit('users/register')
            ->seeStatusCode(200);
    }
    
    /**
     * GET: /users/edit/{id}
     *
     * @group all
     * @group users
     */
    public function testUsersEditView()
    {
        Artisan::call('bouncer:seed');

        $user   = factory(App\User::class)->create();
        $active = Bouncer::assign('active')->to($user);

        $this->assertTrue($active);

        $this->actingAs($user)
            ->seeIsAuthenticated()
            ->visit('users/edit/' . $user->id)
            ->seeStatusCode(200);
    }
    
    /**
     * POST: /users/edit/{id}
     *
     * @group all
     * @group users
     */
    public function testUsersEditPost()
    {
        $this->withoutMiddleware();

        Artisan::call('bouncer:seed');

        $user   = factory(App\User::class)->create();
        $active = Bouncer::assign('active')->to($user);

        $oldDb['name']  = $user->name;
        $oldDb['email'] = $user->email;

        $input['name']  = 'Oliver Skykes';
        $input['email'] = 'example@domain.tld';

        $this->actingAs($user)
            ->seeIsAuthenticated()
            ->seeInDatabase('users', $oldDb)
            ->visit('users/edit/' . $user->id)
            ->seeStatusCode(200);
    }
    
    /**
     * GET: /users/block/{id}
     *
     * @group all
     * @group users
     */
    public function testUsersBlock()
    {
        Artisan::call('bouncer:seed');

        $user    = factory(App\User::class)->create();
        $role = Bouncer::assign('active')->to($user);

        $this->assertTrue($role);

        $this->actingAs($user)
            ->seeIsAuthenticated()
            ->visit('users/block/' . $user->id)
            ->seeStatusCode(200);
    }

    /**
     * GET: /users/unblock/{id}
     *
     * @group users
     * @group all
     */
    public function testUsersUnblock()
    {
        Artisan::call('bouncer:seed');

        $user    = factory(App\User::class)->create();
        $role = Bouncer::assign('blocked')->to($user);

        $this->assertTrue($role);

        $this->actingAs($user)
            ->seeIsAuthenticated()
            ->visit('users/unblock/' . $user->id)
            ->seeStatusCode(200);
    }

    /**
     * GET: /users/delete/{id}
     *
     * @group users
     * @group all
     */
    public function testUsersDestroy()
    {
        $user   = factory(App\User::class, 2)->create();
        Artisan::call('bouncer:seed');
        $active = Bouncer::assign('active')->to($user[0]);

        $this->assertTrue($active);

        $db['email'] = $user[1]->email;
        $db['name']  = $user[1]->name;

        $this->actingAs($user[0])
            ->seeIsAuthenticated()
            ->seeInDatabase('users', $db)
            ->visit('users/delete/' . $user[1]->id)
            ->dontSeeInDatabase('users', $db)
            ->seeStatusCode(200);
    }

}
