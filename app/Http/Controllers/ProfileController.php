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
     * The update view for the user
     */
    public function AccountEdit()
    {
        $userId = auth()->user()->id;
        $data['user'] = User::find($userId);

        return view('profile.edit', $data);
    }

    /**
     * Update the account in the database.
     *
     * @param Requests\ProfileValidator $input
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
