<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $list = Car::get();

        return view('frontend.welcome',['lists'=>$list]);

    }

    public function slugurl($slug){
        $list = Car::where('slug',$slug)->first();

        return view('frontend.singlecar',['list'=>$list]);


    }
}
