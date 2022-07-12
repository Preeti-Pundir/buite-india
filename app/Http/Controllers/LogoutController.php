<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    public function index()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
    public function logout(Request $request ) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/login');
        }

    public function perform()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}
