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
        $this->middleware('auth');//->except(['index']);//authenticates other functions except index
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(){
       return view('home');
     }
    public function index2()
    {
        return view('dashboard.index2');//returns a view of index in the dashboardfolder.
    }

}
