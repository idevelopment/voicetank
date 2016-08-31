<?php

namespace App\Http\Controllers;

use App\Labels;
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
     * @see:phpunit   LabelsTest::testLabelOverview()
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['labels'] = Label::paginate(15);
        return view('index', $data);
    }

    /**
     * Store a new label in the database.
     *
     * @url:platform  POST: /feedback/labels
     * @see:phpunit   LabelsTest::testLabelCreateWithoutErrors()
     * @see:phpunit   LabelsTest::testLabelCreateWithErrors()
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
     * @see:phpunit   LabelsTest::testLabelShowMethod()
     *
     * @param  int $id the label id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $data['label'] = Labels::find($id);
        return view('', $data);
    }

    /**
     * Update a label in the database.
     *
     * @url:platform  POST: /feedback/labels/update/{id}
     * @see:phpunit   LabelsTest::testLabelUpdateWithoutErrors()
     * @see:phpunit   LabelsTest::testLabelUpdateWithErrors()
     *
     * @param  Requests\LabelValidator $input
     * @param  int $id the id for the label in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Requests\LabelValidator $input, $id)
    {
        Labels::find($id)->update($input->except('_token'));

        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'The label has been updated.');

        return redirect()->back();
    }

    /**
     * Destroy a label out off the database.
     *
     * @url:platform  GET\HEAD:  /feedback/labels/destroy/{id}
     * @see:phpunit   LabelsTest::testLabelDelete()
     *
     * @param  int $id the id for the label in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Labels::destroy($id);

        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'The label has been deleted');

        return redirect()->back();
    }
}
