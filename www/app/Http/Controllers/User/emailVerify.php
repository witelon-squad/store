<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Auth;

class emailVerify extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function view()
    {
        if(Auth::user()->verified == false)
        {
            return view('auth.verify');
        }
        else {
            return view('layout.messages.succeededConfirmEmail');
        }


    }
}
