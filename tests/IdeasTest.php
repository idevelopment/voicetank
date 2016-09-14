<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class IdeasTest
 */
class IdeasTest extends TestCase
{
    // DatabaseMigrations   = Used for the database migrations.
    // DatabaseTransactions = Used fo all the database transactions.
    use DatabaseMigrations, DatabaseTransactions;

    /** @var array $user Database users */
    protected $user;

    /** @var array $idea Database ides */
    protected $idea;

    /**
     * Set up all the needed factories.
     */
    protected function setUp()
    {
        parent::setUp();

        // Database transactions factories.
        $this->user = factory(App\User::class)->create();
        $this->idea = factory(App\User::class)->create();
    }

    /**
     * Set up the user authuencation that is used in every controller.
     */
    protected function authencation()
    {
        $this->actingAs($this->user);
        $this->seeIsAuthenticatedAs($this->user);
    }

    /**
     * POST:     /ideas/register
     * ROUTE:    idea.register
     *
     * - With validation errors
     *
     * @group all
     * @group ideas
     */
    public function testIdeaRegisterWithErrors()
    {
        $this->withoutMiddleware();
        $this->authencation();
        $this->dontSeeInDatabase('ideas', []);
    }

    /**
     * POST:     /ideas/register
     * ROUTE:    idea.register
     *
     * - Without validation errors
     *
     * @group all
     * @group ideas
     */
    public function testIdeaRegisterWitoutErrors()
    {
        $input['category_id'] = 1;
        $input['title']       = 'Title for my idea';
        $input['description'] = 'Description for my idea';
    }
}
