<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class AccountController
 * @package App\Http\Controllers
 */
class AccountController extends Controller
{
    /**
     * AccountController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Update page for the user profile.
     *
     * @url:platform  GET|HEAD:
     * @see:phpunit
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('profile.index');
    }

    public function updateContact()
    {

    }

    public function updateInfo()
    {

    }

    public function updatePassword()
    {

    }
}
