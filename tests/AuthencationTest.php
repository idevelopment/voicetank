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

    }

    /**
     * POST: login
     *
     * @group auth
     * @group all
     */
    public function testLoginPost()
    {

    }

    /**
     * GET: logout
     *
     * @group auth
     * @group all
     */
    public function testLogout()
    {

    }

    /**
     * POST: /password/email
     *
     * @group auth
     * @group all
     */
    public function testEmailPasswordPost()
    {

    }

    /**
     * POST: /password/reset
     *
     * @group auth
     * @group all
     */
    public function testPasswordResetPost()
    {

    }

    /**
     * GET: /password/reset/{token?}
     *
     * @group auth
     * @group all
     */
    public function testPasswordResetToken()
    {

    }

    /**
     * POST: /register
     *
     * @group auth
     * @group all
     */
    public function registerPost()
    {

    }

    /**
     * GET: /register
     *
     * @group auth
     * @group all
     */
    public function registerGet()
    {

    }
}
