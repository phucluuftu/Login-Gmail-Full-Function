<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite, Auth, Redirect, Session, URL;
use App\User;
use Illuminate\Support\Facades\DB;

class SocialAuthController extends Controller
{
    /**

     * Handle Social login request

     *

     * @return response

     */

    public function redirectToProvider()

    {

        return Socialite::driver('google')->redirect();

    }

    /**

     * Obtain the user information from Social Logged in.

     * @param $social

     * @return Response

     */

    public function handleProviderCallback()

    {

        $userSocial = Socialite::driver('google')->user();

        $user = User::where(['email' => $userSocial->getEmail()])->first();

        if($user){

            Auth::login($user);
            DB::table('users')
                ->where('id', $user->id)
                ->update(['avatar' => $userSocial->avatar]);

            return redirect()->action('HomeController@index');

        }else{

            return Redirect::to('/');

        }

    }

    public function get_avatar()

    {

        $userSocial = Socialite::driver('google')->user();

        return $userSocial;

    }

    public function Logout(){
        auth()->logout();

        session()->flash('message', 'Some goodbye message');

        return redirect('/');
    }
}
