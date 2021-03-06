<?php

namespace App\Http\Controllers;

use App\Category;
use App\Idea;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['index']]);
        $this->middleware('lang');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Get the index page
     *
     * @url:platform  GET|HEAD /
     * @see:phpunit   TODO: write test.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        $data['ideas'] = Idea::with('comments')->paginate(10);
        return view('welcome', $data);
    }
}
