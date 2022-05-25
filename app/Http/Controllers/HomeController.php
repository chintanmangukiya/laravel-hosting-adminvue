<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        if (auth()->user()->is_admin == 1) {
            return view('home');
        }else{
            return view('home');
        }
        // return view('home');
    }

    public function changeLocale(Request $request)
    {
        $language = $request->language ?? 'en';
        session(['selected_language' =>$language]);
    }
}
