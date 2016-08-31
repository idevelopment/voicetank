<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use PhpParser\Node\Stmt\Label;

/**
 * Class LabelController
 * @package App\Http\Controllers
 */
class LabelController extends Controller
{
    /**
     * LabelController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('lang');
    }

    /**
     * Get all the labels in the backend.
     *
     * @url:platform  GET\HEAD: /feedback/labels
     * @see:phpunit
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['labels'] = '';
        return view('labels.index', $data);
    }

    /**
     * Store a new label in the database.
     *
     * @url:platform  POST: /feedback/labels
     * @see:phpunit
     *
     * @param  Requests\LabelValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\LabelValidator $input)
    {
        session()->flash('class', 'alert alert-success');
        session()->flash('message', '');

        return redirect()->back();
    }

    /**
     * Display a specific label in the application.
     *
     * @url:platform  GET\HEAD: /feedback/labels/{id}
     * @see:phpunit
     *
     * @param  int $id the label id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('');
    }

    /**
     * Update a label in the database.
     *
     * @url:platform  POST: /feedback/labels/update/{id}
     * @see:phpunit
     *
     * @param  Requests\LabelValidator $input
     * @param  int $id the id for the label in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Requests\LabelValidator $input, $id)
    {
        session()->flash('class', 'alert alert-success');
        session()->flash('message', '');

        return redirect()->back();
    }

    /**
     * Destroy a label out off the database.
     *
     * @url:platform  GET\HEAD:  /feedback/labels/destroy/{id}
     * @see:phpunit
     *
     * @param  int $id the id for the label in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        session()->flash('class', 'alert alert-success');
        session()->flash('message', '');

        return redirect()->back();
    }
}