<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
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

    /**
     * GET|HEAD: /users/departments
     * ROUTE:    departments.index
     *
     * @group all
     * @group departments
     */
    public function testOverviewTeams()
    {

    }

    /**
     * GET|HEAD: /users/departments/{id}
     * ROUTE:    departments.show
     *
     * @group all
     * @group departments
     */
    public function testShowSpecificTeam()
    {

    }

    /**
     * POST:     /users/departments/saved
     * ROUTE:    departments.save
     *
     * - Without validation errors
     *
     * @group all
     * @group departments
     */
    public function testInsertTeamWithoutErrors()
    {

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
    public function testInsertNewTeamWithErrors()
    {

    }

    /**
     * GET|HEAD: /users/departments/destroy/{id}
     * ROUTE:    departments.destroy
     *
     * @group all
     * @group departments
     */
    public function testDestroyingTeam()
    {

    }
}
