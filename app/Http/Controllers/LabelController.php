<?php

namespace App\Http\Controllers;

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

    }

    public function create()
    {

    }

    public function store()
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    /**
     * Destroy a label.
     * 
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
