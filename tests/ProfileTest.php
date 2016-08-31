<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Class ProfileTest
 *
 * // TODO: write the tests
 */
class ProfileTest extends TestCase
{
    // DatabaseMigrations   = Used for the database migrations.
    // DatabaseTransactions = Used fo all the database transactions.
    use DatabaseMigrations, DatabaseTransactions;

    /** @var array $user Database users */
    protected $user;

    /**
     * Set up all the needed factories.
     */
    protected function setUp()
    {
        parent::setUp();

        // Database transactions factories.
        $this->user = factory(App\User::class)->create();
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
     * GET|HEAD: /profile
     * ROUTE:    profile
     *
     * @group all
     * @group profile
     */
    public function testProfileSettingsView()
    {
        $route = route('profile');

        $this->withoutMiddleware();
        $this->authencation();
        $this->visit('profile');
        $this->seeStatusCode(200);
    }

    /**
     * POST:     /profile/update/info
     * ROUTE:    profile.info
     *
     * @group all
     * @group profile
     */
    public function testUpdateInfoWithErrors()
    {
        $this->withoutMiddleware();
        $this->authencation();

        $this->post(route('profile.info'), []);
        $this->assertHasOldInput();
        $this->assertSessionHasErrors();
        $this->seeStatusCode(302);
    }

    /**
     * POST:     /profile/update/info
     * ROUTE:    profile.info
     *
     * @group all
     * @group profile
     */
    public function testUpdateInfoWithoutErrors()
    {
        $input['name']    = 'Lastname';
        $input['fname']   = 'Firstname';
        $input['address'] = 'My address';
        $input['zipcode'] = '3300';
        $input['city']    = 'City name';
        $input['country'] = 'Belguim';

        $this->withoutMiddleware();
        $this->authencation();
        $this->post(route('profile.info'), $input);
        $this->seeInDatabase('users', $input);
        $this->seeStatusCode(302);
        $this->session([
            'class'   => 'alert alert-success',
            'message' => 'The profile information has been updated',
        ]);

    }

    /**
     * POST:     /profile/update/security
     * ROUTE:    profile.security
     *
     * @group all
     * @group profile
     */
    public function testUpdatePasswordWithErrors()
    {
        $this->withoutMiddleware();
        $this->authencation();
        $this->post(route('profile.security'), []);
        $this->assertHasOldInput();
        $this->assertSessionHasErrors();
        $this->seeStatusCode(302);
    }

    /**
     * POST:     /profile/update/security
     * ROUTE:    profile.security
     *
     * @group all
     * @group profile
     */
    public function testUpdatePasswordWithoutErrors()
    {
        $input['password']              = 'password';
        $input['password_confirmation'] = 'password';

        $this->withoutMiddleware();
        $this->authencation();
        $this->post(route('profile.security'), $input);
        $this->seeStatusCode(302);
        $this->session([
            'class'   => 'alert alert-success',
            'message' => 'Profile password has been updated',
        ]);
    }


    /**
     * POST:     /profile/update/contact
     * ROUTE:    profile.contact
     *
     * @group all
     * @group profile
     */
    public function testUpdateContactInfoWithErrors()
    {
        $this->withoutMiddleware();
        $this->authencation();
        $this->post(route('profile.contact'), []);
        $this->seeStatusCode(302);
        $this->assertHasOldInput();
        $this->assertSessionHasErrors();
    }

    /**
     * POST:     /profile/update/contact
     * ROUTE:    profile.contact
     *
     * @group all
     * @group profile
     */
    public function testUpdateContactInfoWithoutErrors()
    {
        $input['home_phone']   = '0000/00.00.00';
        $input['office_phone'] = '0000/00.00.00';
        $input['mobile']       = '0000/00.00.00';

        $db['id']           = $this->user->id;
        $db['home_phone']   = $input['home_phone'];
        $db['office_phone'] = $input['office_phone'];
        $db['mobile']       = $input['mobile'];

        $this->withoutMiddleware();
        $this->authencation();
        $this->post(route('profile.contact'), $input);
        $this->seeInDatabase('users', $db);
        $this->seeStatusCode(302);
        $this->session([
            'class' => 'alert alert-success',
            'message' => 'The profile contact information has been updated'
        ]);
    }
}
