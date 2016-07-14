<?php

namespace App\Http\Controllers;

use App\Ideas;
use Illuminate\Http\Request;

use App\Http\Requests;

class IdeaController extends Controller
{
    /**
     * IdeaController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get all the ideas.
     * 
     * @url    /ideas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['ideas'] = Ideas::paginate(5);
        return view('ideas.index', $data);
    }
}
