<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class DepartmentsTest
 */
class DepartmentsTest extends TestCase
{
    // DatabaseMigrations   = Used for the database migrations.
    // DatabaseTransactions = Used fo all the database transactions.
    use DatabaseMigrations, DatabaseTransactions;

    /** @var array $user Database users */
    protected $user;

    /** @var array $department Database departments */
    protected $department;

    /** @var int $paramId The selector id for named routes. */
    protected $paramId;

    /**
     * Set up all the needed factories.
     */
    protected function setUp()
    {
        parent::setUp();

        // Database transactions factories.
        $this->user          = factory(App\User::class)->create();
        $this->department    = factory(App\Departments::class)->create();

        // Database relations Insert.
        $this->department->managers()->attach($this->user->id);

        // Parameters for named routes.
        $this->paramId['id'] = $this->user->id;
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
     * GET|HEAD: /users/departments
     * ROUTE:    departments.index
     *
     * @group all
     * @group departments
     */
    public function testOverviewDepartments()
    {
        $route = route('departments.index');

        // Authencation.
        $this->authencation();

        // Test the route.
        $this->visit($route);
        $this->seeStatusCode(200);

        // Test the database output
        $this->see('#D' . $this->department->id);
        $this->see($this->department->name);
    }

    /**
     * GET|HEAD: /users/departments/{id}
     * ROUTE:    departments.show
     *
     * @group all
     * @group departments
     */
    public function testShowSpecificDepartment()
    {
        $route = route('departments.show', $this->paramId);

        // Authencation
        $this->authencation();

        // Test the route.
        $this->visit($route);
        $this->seeStatusCode(200);

        // Test the database output
        $this->see('#D' . $this->department->id);
        $this->see($this->department->name);
    }

    /**
     * POST:     /users/departments/save
     * ROUTE:    departments.save
     *
     * - Without validation errors
     *
     * @group all
     * @group departments
     */
    public function testInsertDepartmentsWithoutErrors()
    {
        $route = route('departments.save');

        // Input fields
        $input['name']        = 'PHPUnit test department';
        $input['description'] = 'PHPUnit test department description';
        $input['manager']     = $this->user->id;

        // Disable middleware.
        $this->withoutMiddleware();

        // Authencation.
        $this->authencation();

        // Test route and insert.
        $this->post($route, $input);
        $this->seeStatusCode(302);

        // Database check
        $this->seeInDatabase('departments', [
            'name'        => $input['name'],
            'description' => $input['description']
        ]);

        $this->seeInDatabase('departments_user', [
            'user_id'        => $this->user->id,
            'departments_id' => 2
        ]);

        // Session check
        $this->session([
            'class'   => 'alert alert-success',
            'message' => 'The department has been added.'
        ]);
    }

    /**
     * POST:     /users/departments/saved
     * ROUTE:    departments.save
     *
     * - With validation errors
     *
     * @group all
     * @group departments
     */
    public function testInsertNewDepartmentsWithErrors()
    {
        $route = route('departments.save');

        // Disable middleware.
        $this->withoutMiddleware();

        // Authencation
        $this->authencation();

        // Route
        $this->post($route, []);
        $this->seeStatusCode(302);

        // Test input & flash messages
        $this->assertHasOldInput();
        $this->assertSessionHasErrors();
    }

    /**
     * GET|HEAD: /users/departments/destroy/{id}
     * ROUTE:    departments.destroy
     *
     * @group all
     * @group departments
     */
    public function testDestroyingDepartment()
    {
        $route = route('departments.destroy', $this->paramId);

        // Database check point.
        $managers['departments_id'] = $this->department->id;
        $managers['user_id']        = $this->user->id;

        $department['name']         = $this->department->name;
        $department['description']  = $this->department->description;

        // Test database before delete.
        $this->seeInDatabase('departments_user', $managers);
        $this->seeInDatabase('departments', $department);

        // Authencation
        $this->authencation();

        // Route test
        $this->visit($route);
        $this->seeStatusCode(200);
        $this->session([
            'class'   => 'alert alert-success',
            'message' => 'The department has been deleted.',
        ]);

        // Test after delete.
        $this->dontSeeInDatabase('departments_user', $managers);
        $this->dontSeeInDatabase('departments', $department);
    }
}
