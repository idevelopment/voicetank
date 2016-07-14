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
    
    /**
     * GET: /faq/delete/{id}
     *
     * @group all
     * @group faq
     */
    public function testFaqDestroy()
    {
        $user = factory(App\User::class)->create();
        $item = factory(App\Faq::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticated()
            ->seeInDatabase('faqs', ['question' => $item->question])
            ->visit('faq/delete/' . $item->id)
            ->notSeeInDatabase('faqs', ['question' => $item->question])
            ->seeStatusCode(200);
    }

    /**
     * GET: /faq/edit/{id}
     *
     * @group all
     * @group faq
     */
    public function testEditView()
    {
        $user = factory(App\User::class)->create();
        $item = factory(App\Faq::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticated()
            ->visit('/faq/edit/' . $item->id)
            ->seeStatusCode(200);
    }

    /**
     * POST: /faq/edit/{id}
     *
     * @group all
     * @group faq
     */
    public function testEditPostMethod()
    {
        $this->withoutMiddleware();
        $user = factory(App\User::class)->create();
        $item = factory(App\Faq::class)->create();

        // Inputs
        $input['answer']   = 'Answer';
        $input['question'] = 'Question';

        // Database
        $oldDb['id']       = $item->id;
        $oldDb['answer']   = $item->answer;
        $oldDb['question'] = $item->question;

        $newDb['id']       = $item->id;
        $newDb['answer']   = $input['answer'];
        $newDb['question'] = $input['question'];

        $this->actingAs($user)
            ->seeIsAuthenticated()
            ->seeInDatabase('faqs', $oldDb)
            ->post('/faq/edit/' . $item->id, $input)
            ->dontSeeInDatabase('faqs', $oldDb)
            ->seeInDatabase('faqs', $newDb)
            ->seeStatusCode(302);
    }

    /**
     * GET: /faq/create
     *
     * @group all
     * @group faq
     */
    public function testCreateView()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->seeIsAuthenticated()
            ->visit('faq/create')
            ->seeStatusCode(200);
    }

    /**
     * POST: /faq/create
     *
     * @group all
     * @group faq
     */
    public function testStoreFaqMethod()
    {
        $user = factory(App\User::class)->create();

        $input['question'] = 'Question';
        $input['answer']   = 'Answer';

        $this->actingAs($user)
            ->seeIsAuthenticated()
            ->post('faq/create', $input)
            ->seeInDatabase('faqs', $input)
            ->seeStatusCode(302);
    }
}
