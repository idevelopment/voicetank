<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamsValidator;

use App\Departments;
use App\Teams;
use App\User;

use Illuminate\Http\Request;
use App\Http\Requests;

/**
 * Class TeamsController
 * @package App\Http\Controllers
 */
class TeamsController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a team overview in the application.
     *
     * @url:platform  GET|HEAD:
     * @see:phpunit
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['teams'] = Teams::with('departments')->paginate(15);
        $data['users'] = User::all();

        return view('teams.index', $data);
    }

    /**
     * Show the registration form.
     *
     * @url:platform  GET|HEAD:
     * @see:phpunit
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        $data['departmens'] = Departments::all();
        $data['users'] = User::all();

        return view('teams.create', $data);
    }

    /**
     * Show a specific team.
     *
     * @url:platform  GET|HEAD:
     * @see:phpunit
     *
     * @param  int $id the team id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        // TODO: Register route
        return view('teams.show');
    }

    /**
     * Update a team in the database.
     *
     * @url:platform  POST:
     * @see:phpunit
     *
     * @param  TeamsValidator $input
     * @param  int $id the team id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TeamsValidator $input, $id)
    {
        session()->flash('class', 'alert alert-success');
        session()->flash('message', '');

        return redirect()->back();
    }

    /**
     * Save a new team in the application.
     *
     * @url:platform  POST:
     * @see:phpunit
     *
     * @param  TeamsValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(TeamsValidator $input)
    {
        // TODO: Register route.

        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'The team has been added.');

        return redirect()->back();
    }
}
