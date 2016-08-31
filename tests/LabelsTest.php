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

    /** @var array paramId the id parameter for the route */
    protected $paramId;

    /**
     * Set up all the needed factories.
     */
    protected function setUp()
    {
        parent::setUp();

        // Database transactions factories.
        $this->user   = factory(App\User::class)->create();
        $this->labels = factory(App\Labels::class)->create();

        // Route parameters.
        $this->paramId = $this->labels->id;
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
        $this->authencation();
        $this->visit(route('labels.index'));
        $this->seeStatusCode(200);
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
        $session['class']   = 'alert alert-success';
        $session['message'] = 'The label has been deleted';

        $this->authencation();
        $this->seeInDatabase('labels', ['id' => $this->paramId]);
        $this->visit(route('labels.destroy', $this->paramId));
        $this->dontSeeInDatabase('labels', ['id' => $this->paramId]);
        $this->seeStatusCode(200);
        $this->session($session);
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
        $db['name']  = $this->labels->name;
        $db['color'] = $this->labels->color;

        $input['name']  = 'testing label';
        $input['color'] = 'testing color';

        $session['class']   = 'alert alert-success';
        $session['message'] = 'The label has been updated.';

        $this->withoutMiddleware();
        $this->authencation();
        $this->seeInDatabase('labels', $db);
        $this->post(route('labels.update', $this->paramId), $input);
        $this->dontSeeInDatabase('labels', $db);
        $this->seeInDatabase('labels', $input);
        $this->seeStatusCode(302);
        $this->session($session);
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
        $this->authencation();
        $this->post(route('labels.update', $this->paramId), []);
        $this->assertHasOldInput();
        $this->assertSessionHasErrors();
        $this->seeStatusCode(302);
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
        $input['name']  = 'Label name';
        $input['color'] = 'Label color';

        $session['class']   = 'alert alert-success';
        $session['message'] = 'The label has been created';

        $this->authencation();
        $this->post(route('labels.store'), $input);
        $this->seeInDatabase('labels', $input);
        $this->seeStatusCode(302);
        $this->session($session);
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
        $this->authencation();
        $this->post(route('labels.store'), []);
        $this->assertHasOldInput();
        $this->assertSessionHasErrors();
        $this->seeStatusCode(302);
    }
}
