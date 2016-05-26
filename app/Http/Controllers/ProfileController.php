<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * ProfileController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get the profile page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile()
    {
        $id = auth()->user()->id;
        $data['user'] = User::find($id);
        return view('auth.profile', $data);
    }

    /**
     * Update the account in the database.
     *
     * @param Requests\ProfileValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UpdateAccount(Requests\ProfileValidator $input)
    {
        $userId = auth()->user()->id;
        $query  = User::find($userId);

        if(empty($input->password)) {
            $query->update($input->except('_token'));
        } else {
            $query->update($input->except(['_token', 'password']));
        }

        return redirect()->back(302);
    }
}
