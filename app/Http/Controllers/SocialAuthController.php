<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite, Auth, Redirect, Session, URL;
use App\User;

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

            return redirect()->action('HomeController@index');

        }else{

            return Redirect::to('/');

        }

    }

    public function Logout(){
        auth()->logout();

        session()->flash('message', 'Some goodbye message');

        return redirect('/');
    }
}
