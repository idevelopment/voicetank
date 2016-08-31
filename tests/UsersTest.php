<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UsersTest extends TestCase
{
    // DatabaseMigrations   = Used for the database migrations.
    // DatabaseTransactions = Used fo all the database transactions.
    use DatabaseMigrations, DatabaseTransactions;

    /** @var array $user Database users */
    protected $user;

    /**
     * Set up all the needed factories.
     */
    protected function setUp()
    {
        parent::setUp();

        // Database transactions factories.
        $this->user = factory(App\User::class)->create();
    }
    /**
     * Authencation class -> Used for test authencated routes.
     */
    protected function authencation()
    {
        $this->actingAs($this->user);
        $this->seeIsAuthenticatedAs($this->user);
    }

    /**
     * GET|HEAD:  /users/create
     * ROUTE:     users.register
     *
     * @group all
     * @group acl
     */
    public function testUserRegisterView()
    {
        $this->authencation();
        $this->visit(route('users.register'));
        $this->seeStatusCode(200);
    }

    /**
     * GET|HEAD:  /users/{id}
     * ROUTE:     users.show
     *
     * @group all
     * @group acl
     */
    public function testUsersSpecific()
    {
        $route = route('users.show', ['id' => $this->user->id]);

        $this->authencation();
        $this->visit($route);
        $this->seeStatusCode(200);
    }

    /**
     * GET|HEAD:  /users/list
     * ROUTE:     users.index
     *
     * @group all
     * @group acl
     */
    public function testUsersOverview()
    {
        $this->authencation();
        $this->visit(route('users.index'));
        $this->seeStatusCode(200);
    }

    /**
     * GET|HEAD:  /users/destroy/{id}
     * ROUTE:     users.destroy
     *
     * @group all
     * @group acl
     */
    public function testUsersDestroy()
    {

    }
}
