<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function updata()
    {
        $a = \App\User::find(Input::get('id'));                    
        $a->alamat = Input::get('alamat');      
        $a->no_telp = Input::get('no_telp');        
        $a->save();
        return redirect(url('/'));
    }
}
