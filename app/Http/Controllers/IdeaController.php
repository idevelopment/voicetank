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
        $data['items']      = Category::all();
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
        $idea = new Idea;
        $idea->title = $input->title;
        $idea->description = $input->description;

        $idea->creator()->associate(auth()->user()->id);
        $idea->category()->associate($input->category_id);
        $idea->save();

        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'Your suggestion is successfully saved.');

        return redirect()->back();
    }

    /**
     * Show a specific feedback item.
     *
     * @url:platform  GET|HEAD: /feedback/details/{fid}
     * @see:phpunit   TODO: Write test.
     *
     * @param  int $fid the feedback item id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($fid)
    {
        $data['item'] = Idea::find($fid);

        return view('feedback.details', $data);
    }

    /**
     * Delete a update item in the database.
     *
     * @url:platform  GET|HEAD: /feedback/destroy/{fid}
     * @see:phpunit   TODO: Write test.
     *
     * @param  int $fid The feedback item id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($fid)
    {
        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'Your feedback item has been deleted');

        return redirect()->back();
    }
}
