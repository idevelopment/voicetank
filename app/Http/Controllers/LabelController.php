<?php

namespace App\Http\Controllers;

use App\Http\Requests\LabelValidator;
use App\Labels;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LabelController extends Controller
{
    /**
     * LabelController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get the label overview.
     *
     * TODO:   Needs testing.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['query'] = Labels::all();
        return view('labels.index', $data);
    }

    /**
     * Create a new label in the database.
     *
     * TODO:   Needs testing
     * @param  LabelValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LabelValidator $input)
    {
        Labels::create($input->except('_token'));
        session()->flash('message', 'Label created');
        return redirect()->back(302);
    }

    /**
     * Input form for a new label.
     *
     * TODO:   Needs testing
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('labels.create');
    }

    /**
     * Update a label.
     *
     * TODO:   Needs phpunit testing.
     * @param  int $id The database if in the database table
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['label'] = Labels::find($id);
        return view('label.edit', $data);
    }

    /**
     * Update a label in the database.
     *
     * TODO:   Needs phpunit test.
     * @param  LabelValidator $input
     * @param  int $id the database id off the label.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(LabelValidator $input, $id)
    {
        Labels::find($id)->update($input->except('_token'));
        session()->flash('message', 'Label has been update');
        return redirect()->back(302);
    }

    /**
     * Destroy a label.
     *
     * TODO:   Needs phpunit test.
     * @param  int $id the database id off the label
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Labels::destroy($id);
        session()->flash('message', 'Label deleted');
        return redirect()->back(302);
    }
}
