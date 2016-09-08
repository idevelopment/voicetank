<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\IdeaValidator;
use App\Idea;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class IdeaController
 * @package App\Http\Controllers
 */
class IdeaController extends Controller
{
    /**
     * IdeaController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     *
     * @url:platform  GET|HEAD: /feedback/create
     * @see:phpunit   TODO: Write test
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register()
    {
        $data['items'] = Category::all();
        return view('feedback/create', $data);
    }

    /**
     * Register a new idea in the database.
     *
     * @url:platform  POST:
     * @see:phpunit   IdeasTest::testIdeaRegisterWitoutErrors()
     * @see:phpunit   IdeasTest::testIdeaRegisterWithErrors()
     *
     * @param IdeaValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(IdeaValidator $input)
    {
        Idea::create($input->except('_token'));

        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'Your suggestion is successfully saved.');

        return redirect()->back();
    }
}
