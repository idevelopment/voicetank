<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ContactTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;
    
    /**
     * GET: /contact
     *
     * @group all
     */
    public function testContactview()
    {
        $this->visit('contact')->seeStatusCode(200);
    }

    /**
     * POST: /contact
     *
     * @group all
     */
    public function testSend()
    {
        config(['mail.driver' => 'log']);
        $this->withoutMiddleware();

        $data['email'] = 'test@example.tld';
        $data['name']  = 'Jhon doe';

        $this->post('contact', $data)->seeStatusCode(302);
    }
}
