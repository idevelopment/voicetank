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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['labels'] = '';
        return view('');
    }

    /**
     * Store a new label in the database.
     */
    public function store()
    {
        session()->flash('', '');
        session()->flash('', '');

        return redirect()->back();
    }

    /**
     * Display a specific label in the application.
     *
     * @param  int $id the label id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        return view('')
    }

    /**
     * Update a label in the database.
     *
     * @param  Requests\LabelValidator $input
     * @param  int $id the id for the label in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Requests\LabelValidator $input, $id)
    {
        session()->flash('', '');
        session()->flash('', '');

        return redirect()->back();
    }

    /**
     * Destroy a label out off the database.
     *
     * @param  int $id the id for the label in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        session()->flash('', '');
        session()->flash('', '');

        return redirect()->back();
    }
}
