<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Exception;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;

/**
 * Class GithubController
 * @package App\Http\Controllers\Auth
 */
class GithubController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('github')->user();
        } catch (Exception $e) {
            return Redirect::to('auth/github');
        }

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return Redirect::to('home');
    }

    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $githubUser
     * @return User
     */
    private function findOrCreateUser($githubUser)
    {
        if ($authUser = User::where('github_id', $githubUser->id)->first()) {
            return $authUser;
        }

        return User::create([
            'name' => $githubUser->name,
            'email' => $githubUser->email,
            'avatar' => $githubUser->avatar
        ]);
    }
}
