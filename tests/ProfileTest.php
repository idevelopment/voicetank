<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class ProfileTest
 *
 * // TODO: write the tests
 * // TODO: write the docblocks
 */
class ProfileTest extends TestCase
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
     * GET|HEAD: /profile
     * ROUTE:    profile
     *
     * @group all
     * @group profile
     */
    public function testProfileSettingsView()
    {
        $route = route('profile');

        $this->withoutMiddleware();
        $this->authencation();
        $this->visit('profile');
        $this->seeStatusCode(200);
    }

    /**
     * POST:     /profile/update/info
     * ROUTE:    profile.info
     *
     * @group all
     * @group profile
     */
    public function testUpdateInfoWithErrors()
    {
        $this->withoutMiddleware();
        $this->authencation();
    }

    /**
     * POST:     /profile/update/info
     * ROUTE:    profile.info
     *
     * @group all
     * @group profile
     */
    public function testUpdateInfoWithoutErrors()
    {
        $this->withoutMiddleware();
        $this->authencation();
    }

    /**
     * POST:     /profile/update/security
     * ROUTE:    profile.security
     *
     * @group all
     * @group profile
     */
    public function testUpdatePasswordWithErrors()
    {
        $this->withoutMiddleware();
        $this->authencation();
    }

    /**
     * POST:     /profile/update/security
     * ROUTE:    profile.security
     *
     * @group all
     * @group profile
     */
    public function testUpdatePasswordWithoutErrors()
    {
        $this->withoutMiddleware();
        $this->authencation();
    }


    /**
     * POST:     /profile/update/contact
     * ROUTE:    profile.contact
     *
     * @group all
     * @group profile
     */
    public function testUpdateContactInfoWithErrors()
    {
        $this->withoutMiddleware();
        $this->authencation();
    }

    /**
     * POST:     /profile/update/contact
     * ROUTE:    profile.contact
     *
     * @group all
     * @group profile
     */
    public function testUpdateContactInfoWithoutErrors()
    {
        $this->withoutMiddleware();
        $this->authencation();
    }
}
