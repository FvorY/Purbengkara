<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomefrontController extends Controller
{
  public function index()
  {
    $data = SettingController::getSetting();

    $sosmed = SosmedController::getSosmed();

    $category = CategoryController::getCategory();

    $featured = FeaturedController::getFeatured();

    return view("home_front", compact('data', 'sosmed', 'category', 'featured'));
  }
}
