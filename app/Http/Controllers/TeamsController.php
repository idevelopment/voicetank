<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamsValidator;
use App\Teams;
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
        $data['teams'] = Teams::paginate(15);
        return view('teams.index', $data);
    }

    /**
     * Save a new team in the application.
     *
     * @url:platform
     * @see:phpunit
     *
     * @param  TeamsValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(TeamsValidator $input)
    {
        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'The team has been added.');

        return redirect()->back();
    }
}
