<?php

namespace App\Http\Controllers;

use App\Countries;
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
        // $this->middleware('lang');
    }

    /**
     * Update page for the user profile.
     *
     * @url:platform  GET|HEAD:
     * @see:phpunit   ProfileTest::testProfileSettingsView()
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['countries'] = Countries::all();
        return view('profile.index', $data);
    }

    /**
     * Update the account contact information.
     *
     * @url:platform  POST:
     * @see:phpunit   ProfileTest::testUpdateContactInfoWithErrors()
     * @see:phpunit   Profiletest::testUpdateContactInfoWithoutErrors()
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
     * @see:phpunit   Profiletest::testUpdateInfoWithErrors()
     * @see:phpunit   Profiletest::testUpdateInfoWithoutErrors()
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
     * @see:phpunit   ProfileTest::testUpdatePasswordWithoutErrors()
     * @see:phpunit   ProfileTest::testUpdatePasswordWithErrors()
     *
     * @param  ProfilePasswordValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(ProfilePasswordValidator $input)
    {
        return redirect()->back();
    }
}
