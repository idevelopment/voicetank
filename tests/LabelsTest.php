<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class LabelsTest
 */
class LabelsTest extends TestCase
{
    // DatabaseMigrations   = Used for the database migrations.
    // DatabaseTransactions = Used fo all the database transactions.
    use DatabaseMigrations, DatabaseTransactions;

    /** @var array $user Database users */
    protected $user;

    /** @var array $labels Database labels. */
    protected $labels;

    /**
     * Set up all the needed factories.
     */
    protected function setUp()
    {
        parent::setUp();

        // Database transactions factories.
        $this->user   = factory(App\User::class)->create();
        $this->labels = factory(App\Labels::class)->create();
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
     * GET|HEAD:  /feedback/labels
     * ROUTE:     labels.index
     *
     * @group all
     * @group labels
     */
    public function testLabelOverview()
    {
        //
    }

    /**
     * GET|HEAD:  /feedback/labels/{id}
     * ROUTE:     labels.show
     *
     * @group all
     * @group labels
     */
    public function testLabelShowMethod()
    {
        //
    }

    /**
     * GET|HEAD:  /feedback/labels/destroy\{id}
     * ROUTE:     labels.destroy
     *
     * @group all
     * @group labels
     */
    public function testLabelDelete()
    {
       //
    }


    /**
     * POST:     /feedback/labels/update/{id}
     * ROUTE:    labels.update
     *
     * - Without validation errors.
     *
     * @group all
     * @group labels
     */
    public function testLabelUpdateWithoutErrors()
    {
        //
    }

    /**
     * POST:     /feedback/labels/update/{id}
     * ROUTE:    labels.update
     *
     * - With validation errors.
     *
     * @group all
     * @group labels
     */
    public function testLabelUpdateWithErrors()
    {
        //
    }

    /**
     * POST:      /feedback/labels
     * ROUTE:     labels.store
     *
     * - Without validation errors
     *
     * @group all
     * @group labels
     */
    public function testLabelCreateWithoutErrors()
    {
        //
    }

    /**
     * POST:      /feedback/labels
     * ROUTE:     labels.store
     *
     * - With validation errors
     *
     * @group all
     * @group labels
     */
    public function testLabelCreateWithErrors()
    {
        //
    }
}
