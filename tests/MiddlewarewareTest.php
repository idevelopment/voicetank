<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class MiddlwarewareTest
 */
class MiddlewarewareTest extends TestCase
{
    /**
     * Test language middlware
     *
     * @group ll
     * @group middleware
     */
    public function testLanguageMiddleware()
    {
        // Test dutch language
        $this->visit('lang=nl');
        $this->seeStatusCode(200);

        // test english language
        $this->visit('?lang=en');
        $this->seeStatusCode(200);
    }
}
