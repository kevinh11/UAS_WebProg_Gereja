<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    private $req = [];
    private $res = []; 

    function index() {
        return view('pages.login', ['data'=> $this->res]);
    }

    function send_response($bool) {
        if ($bool) {
            $this->res = json_encode(['code'=>200, 'message'=> 'login succesful']);
        }
        else {
            $this->res = json_encode(['code'=>400, 'message'=>'login failed']);
        }

        echo $this->res;
    }
 
    function login(Request $request) {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            setcookie('loggedIn', true, time() + (86400*21));
            $request->session()->regenerate();
            $this->send_response(true);
            return redirect('/');
        }
        
        else {
            $this->send_response(false);
            return redirect('/admin-login');
        }
    }

    function logout() {
        Auth::logout();
        setcookie('loggedIn', false, time() - 86400);
        return redirect('/');
    }
}

?>
