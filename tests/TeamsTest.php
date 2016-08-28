<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class TeamsTest
 */
class TeamsTest extends TestCase
{
    // DatabaseMigrations   = Used for the database migrations.
    // DatabaseTransactions = Used fo all the database transactions.
    use DatabaseMigrations, DatabaseTransactions;

    /** @var array $user Database users */
    protected $user;

    /** @var array $department Database departments */
    protected $department;

    /**
     * Set up all the needed factories.
     */
    protected function setUp()
    {
        parent::setUp();

        // Database transactions factories.
        $this->user          = factory(App\User::class)->create();
        $this->department    = factory(App\Departments::class)->create();
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
     * GET|HEAD:  /users/teams/register
     * ROUTE:     teams.register
     *
     * @group all
     * @group teams
     */
    public function testCreateWizardView()
    {
        $route = route('teams.register');

        $this->authencation();
        $this->visit($route);
        $this->seeStatusCode(200);
    }

    /**
     * POST:     /users/teams/save
     * ROUTE:    teams.save
     *
     * - Without errors
     *
     * @group all
     * @group teams
     */
    public function testTeamStoreMethodWithoutErrors()
    {

    }

    /**
     * POST:     /users/teams/save
     * ROUTE:    teams.save
     *
     * - With errors
     *
     * @group all
     * @group teams
     */
    public function testTeamStoreMethodWithErrors()
    {

    }

    /**
     * GET|HEAD: /users/teams
     * ROUTE:    teams.index
     *
     * @group all
     * @group teams
     */
    public function testTeamOverview()
    {
        $route = route('teams.index');

        $this->authencation();
        $this->visit($route);
        $this->seeStatusCode(200);

        // TODO: set tests for seeing database output.
    }
}
