<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {
        
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
    //     $user = Socialite::driver($provider)->stateless()->user();
    //    return $user->token;

          $user = Socialite::driver($provider)->stateless()->user();
          $authUser = $this->findOrCreateUser($user, $provider);
          Auth::login($authUser, true);    
          return redirect($this->redirectTo);
    }

    public function findOrCreateUser($user,$provider)
    {
        // Mengambil data user berdasarkan alamat E-mail.
        $user_data = User::where('email', $user->email)->first();

        if ($user_data) {
            // Mengembalikan data user-nya jika di database sudah ada.
            return $user_data;
        } else {
            // Menambah data user-nya jika di database belum ada.
            return User::create([
                'name' => $user->name,
                'email' => $user->email,
                'provider' => strtoupper($provider),
                'provider_id' => $user->id,
            ]);
        }
    }



}
