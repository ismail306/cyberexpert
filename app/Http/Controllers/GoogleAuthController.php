<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle()
    {
        // Log::info('google auth request received in myControllerMethod');
        try {
            $google_user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $google_user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/');
            } else {
                $user = new User;
                $user->name = $google_user->name;
                $user->email = $google_user->email;
                $user->google_id = $google_user->id;
                $user->profile_pic = $google_user->avatar;
                // dd($user);
                // Log::info('google auth request received in s_tore');
                $user->save();
                Auth::login($user);
                return redirect('/');
            }
        } catch (\Exception $e) {
            return redirect('auth/google');
        }
    }
}
