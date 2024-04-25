<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    function call_back()
    {
        try {
            $google = Socialite::driver('google')->user();
            $user = User::where('googel_id', $google->getId())->first();


            if (!$user) {
                $new_user = User::create([
                    'name' => $google->getName(),
                    'email' => $google->getEmail(),
                    'googel_id' => $google->getId()
                ]);
                Auth::login($new_user);
                return Redirect()->intended(route('Landing.index'));
            } else {
                Auth::login($user);
                return Redirect()->intended(route('Landing.index'));
            }
        } catch (\Throwable $th) {
            @dd('error' . $th->getMessage());
        }
    }
}
