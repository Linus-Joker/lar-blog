<?php

namespace App\Http\Controllers;

use Socialite;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function facebookSignInProcess()
    {
        $redirect_url = env('FB_REDIRECT');

        return Socialite::driver('facebook')
            ->scopes(['user_friends'])
            ->redirectUrl($redirect_url)
            ->redirect();
    }

    public function facebookSignInCallbackProcess()
    { }
}
