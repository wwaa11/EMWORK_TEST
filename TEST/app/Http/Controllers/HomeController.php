<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class HomeController extends Controller
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
        $datas = Data::all();
        return view('home')->with('datas' , $datas);
    }
}
