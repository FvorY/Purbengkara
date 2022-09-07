<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomefrontController extends Controller
{
    public function index() {
      $data = DB::table("setting")
        ->where('id', 1)->first();

      $sosmed = DB::table("sosmed")
        ->get();

      return view("home_front", compact('data', 'sosmed'));
    }
}
