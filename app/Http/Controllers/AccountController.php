<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileInfoValidator;
use App\Http\Requests\ProfilePasswordValidator;
use App\User;
use App\Http\Requests\ProfileContactValidator;
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

    /**
     * Update the account contact information.
     *
     * @url:platform  POST:
     * @see:phpunit
     * @see:phpunit
     *
     * @param  ProfileContactValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateContact(ProfileContactValidator $input)
    {
        return redirect()->back();
    }

    /**
     * Update the account information.
     *
     * @url:platform  POST:
     * @see:phpunit
     * @see:phpunit
     *
     * @param  ProfileInfoValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateInfo(ProfileInfoValidator $input)
    {
        return redirect()->back();
    }

    /**
     * Update the profile password.
     *
     * @url:platform  POST:
     * @see:phpunit
     * @see:phpunit
     *
     * @param  ProfilePasswordValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(ProfilePasswordValidator $input)
    {
        return redirect()->back();
    }
}
