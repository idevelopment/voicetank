<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class ProfileTest
 *
 * // TODO: write the tests
 * // TODO: write the docblocks
 * // TODO: document traits.
 */
class ProfileTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * GET|HEAD: /profile
     * ROUTE:    profile
     *
     * @group all
     * @group profile
     */
    public function testProfileSettingsView()
    {

    }

    /**
     * @group all
     * @group profile
     */
    public function testUpdateInfoWithErrors()
    {
        //
    }

    /**
     * @group all
     * @group profile
     */
    public function testUpdateInfoWithoutErrors()
    {
        //
    }

    /**
     * @group all
     * @group profile
     */
    public function testUpdatePasswordWithErrors()
    {
        //
    }

    /**
     * @group all
     * @group profile
     */
    public function testUpdatePasswordWithoutErrors()
    {
        //
    }


    /**
     * @group all
     * @group profile
     */
    public function testUpdateContactInfoWithErrors()
    {
        //
    }

    /**
     * @group all
     * @group profile
     */
    public function testUpdateContactInfoWithoutErrors()
    {
        //
    }
}
