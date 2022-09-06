<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mMember;

use App\Authentication;

use Auth;

use Carbon\Carbon;

use Session;

use DB;

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

     public function index() {
       $data = DB::table("setting")
         ->where('id', 1)->first();

       return view("home", compact('data'));
     }

    public function logout(){
        Session::flush();

        Auth::logout();

        Session::forget('key');
        return Redirect('/login');
    }
}
