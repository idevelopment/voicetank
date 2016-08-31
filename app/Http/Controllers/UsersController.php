<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

/**
 * Class UsersController
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Get the application users overview.
     *
     * @url:platfom  /users/list
     * @see:phpunit  UsersTest::testUsersOverview()
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data["users"] = User::all();
        return view('users/index', $data);
    }

    public function register()
    {

    }

    public function save()
    {

    }

    /**
     * Delete a employee out off the system.
     *
     * @url:platform  GET|HEAD: /users/destroy/{id}
     * @see:phpunit   UsersTest::testUsersDestroy()
     *
     * @param  int $id the id off the user in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Relation deletes.

        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'The user has been deleted');

        return redirect()->back();
    }
}
