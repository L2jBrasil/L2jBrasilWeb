<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Config;
use DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Schema;
use Redirect;
use Functions;

use App\Models\Auth\Accounts;

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
    public function __construct() {
      $this->middleware('guest')->except('logout');
    }

    /**
     * [username description]
     * @return [type] [description]
     */
    public function username() {
        return 'email';
    }

    public function cLogin(Request $request){

        $Login = $request->input('login');
        $Password = $request->input('password');
        $checkLogin = DB::table('accounts')->where('login', $request->input('login'))->where('password', Functions::hashL2($Password))->get();

        if(sizeof($checkLogin) > 0):
        
            if (Auth::guard('accounts')->loginUsingId($Login))
            {
            return redirect('/');
            };
            else:
                return redirect('/login')
                    ->with('error', "
                    <div class='alert alert-primary' role='alert'>

                        Falhou! Reinsira os dados corretamente!

                    </div>")
                    ->withInput();   
        endif;
        
    }

    public function fmrLogin(){
        return view('modules.dashboard.login');
    }

    public function logout(){
        auth()->guard('accounts')->logout();
        return redirect('/');
    }
}
