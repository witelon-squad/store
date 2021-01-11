<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    protected function getDataUser(): array
    {
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        $pass = Auth::user()->password;
        return [
            'email' => $email,
            'name' => $name ,
            'pass' => $pass
        ];
    }
    public function index()
    {
        if(Auth::user()->verified == true)
        {
            return view('auth.verify');
        }
        else
        {
            $data = $this->getDataUser();
            return view('user.user',['data' =>$data]);
        }

    }
}
