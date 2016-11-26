<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);


$email='jmdg771@hotmail.com';
$role = User::select('role')
                     ->where('email', '=',$email)
                     ->get();

            if($role=1){
                return $redirectTo='/homeD';
                
            }
            if($role==2){
              return $redirectTo='/homeD';                
            }
            
            if($role==3){
                
                  return $redirectTo='/home';
            }
          
        

    }
 protected $redirectTo = '/home';


}
