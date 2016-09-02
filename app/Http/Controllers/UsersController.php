<?php

namespace App\Http\Controllers;

use App\Countries;
use App\Http\Requests\UsersValidator;
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

    /**
     * Get the specific information for a user;
     *
     * @url:platform  GET|HEAD
     * @see:phpunit   UsersTest::testUsersSpecific()
     *
     * @param  int $id the user id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $data['query'] = User::find($id);
        return view('users.show', $data);
    }

    /**
     * Display the employee register view.
     *
     * @url:platform  GET|HEAD: /users/create
     * @see:phpunit   UsersTest::testUserRegisterView
     */
    public function register()
    {
        $data['countries'] = Countries::all();
        return view('users.register', $data);
    }

    /**
     * Save the new employee into the database.
     *
     * @url:platform  POST: /users/save
     * @see:phpunit   UsersTest::
     * @see:phpunit   UsersTest::
     *
     * @param  UsersValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(UsersValidator $input)
    {
        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'The employee has been created');

        return redirect()->back();
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
        $user = User::find($id);
        $user->manager()->sync([]);
        $user->teams()->sync([]);

        // Destroy the user out off the table
        User::destroy($id);

        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'The user has been deleted');

        return redirect()->back();
    }
}
