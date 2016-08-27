<?php

namespace App\Http\Controllers;

use App\Teams;
use Illuminate\Http\Request;

use App\Http\Requests;

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
}
