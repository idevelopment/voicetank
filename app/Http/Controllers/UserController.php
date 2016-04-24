<?php

namespace App\Http\Controllers;

use Bouncer;
use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->middleware('blocked');
        $this->middleware('auth');
    }

    public function index()
    {
        $data['query'] = User::all();
        return view('auth.index', $data);
    }

    /**
     * Register view - to create a new user.
     *
     * @return mixed
     */
    public function registerView()
    {
        // TODO create view
        return view('backend.register');
    }

    public function ProfileEditView($id)
    {
        // TODO: create view.

        $data['query'] = User::find($id);
        return view('auth.edit', $data);
    }

    /**
     * Update view for account configuration.
     *
     * @param  Requests\UserValidator $input
     * @param  int, $id, the user id in the database.
     * @return mixed
     */
    public function ProfileEditPost(Requests\UserValidator $input , $id)
    {
        User::find($id)->update($input->except('_token'));
        session()->flash('message', 'Your info is updated');

        return redirect()->back(302);
    }

    /**
     * Block a  user in the system.
     *
     * @param  int, $id, the user id in the database.
     * @return mixed
     */
    public function block($id)
    {
        // TODO: Implement bouncer and block logic.

        $user = User::find($id);

        Bouncer::retract('active')->from($user);
        Bouncer::assign('blocked')->to($user);

        session()->flash('message', $user->name . ' is blocked in the system');

        return redirect()->back(302);
    }

    /**
     * Unblock a user in the system.
     *
     * @param  int, $id, the user id in the database.
     * @return mixed
     */
    public function unblock($id)
    {
        $user = User::find($id);

        Bouncer::retract('blocked')->from($user);
        Bouncer::assign('active')->to($user);

        session()->flash('message', $user->name .' is unblocked in the system.');

        return redirect()->back(302);
    }

    /**
     * Delete a user out of the system.
     *
     * @param  int $id, the user id in the database.
     * @return mixed
     */
    public function userDestroy($id)
    {
        User::destroy($id);
        User::find($id)->roles()->sync([]);

        session()->flash('message', 'The user is deleted.');

        return redirect()->back(302);
    }
}
