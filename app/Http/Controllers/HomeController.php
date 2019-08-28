<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Log;


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
    public function index(Request $request)
    {
        //$memberfiles = \App\Member::all()->paginate(3);

        $memberfiles = \App\Member::paginate(3);

        Log::debug($memberfiles);
        return view('home', ['success'=>$request->query('success'), 'memberfiles' => $memberfiles]);
    }
    

}