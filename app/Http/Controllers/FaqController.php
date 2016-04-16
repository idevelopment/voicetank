<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class FaqController
 * @package App\Http\Controllers
 */
class FaqController extends Controller
{
    /**
     * Fa
    publicqController constructor.
     */ function __construct()
    {
        $authControllers = ['create'];
        $this->middleware('auth', ['only' => $authControllers]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['query'] = Faq::paginate(15);
        return view('frontend.faq', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.faq.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Requests\FaqRequest $input
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\FaqRequest $input)
    {
        Faq::create($input->except('_token'));
        session()->flash('message', 'The faq item is created');

        return redirect()->back(302);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.faq.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param  Requests\FaqRequest $input
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\FaqRequest $input, $id)
    {
        Faq::find($id)->update($input->except('_token'));
        session()->flash('message', 'Faq item is successfull updated.');

        return redirect()->back(302);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Faq::destroy($id);
        session()->flash('message', 'The Faq item is successfully deleted');

        return redirect()->back(302);
    }
}
