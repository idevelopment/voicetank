<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaValidator;
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
        return redirect()->back();
    }
}
