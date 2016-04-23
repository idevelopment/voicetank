<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FaqTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;
    
    /**
     * GET: /faq
     *
     * @group all
     * @group faq
     */
    public function testFaqIndex()
    {
        $this->visit('/faq')->seeStatusCode(200);
    }
}
