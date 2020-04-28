<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function index()
    {
        return view('home');
    }

    public function emailsubscribe(){
        $email = request()->all()['email']??NULL;
        DB::table('emails')->insert(['email'=>$email]);
        return view('welcome', ['regsuccess'=>$email]);
    }

    public function about(){
        return view('about');
    }
}
