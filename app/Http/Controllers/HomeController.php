<?php

namespace App\Http\Controllers;

use App\User;
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
        $this->middleware('auth');//->except(['index']);//authenticates other functions except index
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

    public function index2()
    {


        $users = User::where('admin',1)->get();
        return view('dashboard.index2', compact('users'));//returns a view of index in the dashboardfolder.
    }

}
