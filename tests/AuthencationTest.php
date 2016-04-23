<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthencationTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET: /login
     *
     * @group auth
     * @group all
     */
    public function testLoginGet()
    {
        $this->visit('login')->seeStatusCode(200);
    }

    /**
     * POST: login
     *
     * @group auth
     * @group all
     */
    public function testLoginPost()
    {
        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();

        $data['email']    = $user->email;
        $data['password'] = $user->password;

        $this->seeInDatabase('users', $data)
            ->post('login', $data)
            ->seeStatusCode(302);
    }

    /**
     * GET: logout
     *
     * @group auth
     * @group all
     */
    public function testLogout()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticatedAs($user)
            ->visit('logout')
            ->dontSeeIsAuthenticated();
    }

    /**
     * POST: /password/email
     *
     * @group auth
     * @group all
     */
    public function testEmailPasswordPost()
    {
        config(['mail.driver' => 'log']);
        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();

        $this->post('password/email', ['email' => $user->email])
            ->seeStatusCode(302);
    }

    /**
     * POST: /password/reset
     *
     * @group auth
     * @group all
     */
    public function testPasswordResetPost()
    {
        // TODO: write test.
    }

    /**
     * GET: /password/reset
     *
     * @group auth
     * @group all
     */
    public function testPasswordResetGet()
    {
        $this->visit('password/reset')->seeStatusCode(200);
    }

    /**
     * GET: /password/reset/{token?}
     *
     * @group auth
     * @group all
     */
    public function testPasswordResetToken()
    {
        // TODO: write test
    }

    /**
     * POST: /register
     *
     * @group auth
     * @group all
     */
    public function testRegisterPost()
    {
        $this->withoutMiddleware();

        $input['name']                  = 'Jhon DOe';
        $input['email']                 = 'JhonDoe@example.tld';
        $input['password']              = 'root1234';
        $input['password_confirmation'] = 'root1234';

        $this->post('register', $input)
            ->seeInDatabase('users', array_except($input, ['password', 'password_confirmation']))
            ->seeStatusCode(302)
            ->seeIsAuthenticated();
    }

    /**
     * GET: /register
     *
     * @group auth
     * @group all
     */
    public function testRegisterGet()
    {
        $this->visit('register')->seeStatusCode(200);
    }
}
