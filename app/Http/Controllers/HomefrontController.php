<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomefrontController extends Controller
{
  public function index()
  {
    $data = SettingController::getSetting();
    $sosmed = SosmedController::getSosmed();
    $category = CategoryController::getCategory();
    $featured = FeaturedController::getFeatured();
    $slideimage = SlideimageController::getSlideImage();

    $sort = "terbaru";
    $all = false;
    $show = 10;
    $categoryFilter = 0;

    $product = DB::table("product")
      ->select("product.*", "product.name as productname", "category.name as categoryname", "productimage.*", "specialprice.*", "specialprice.name as specialname", "specialprice.price as specialprice")
      ->join("category", 'category.id_category', '=', 'product.categoryid')
      ->leftjoin("specialprice", "specialprice.productid", '=', "product.id_product")
      ->leftjoin("productimage", 'productimage.productid', '=', 'product.id_product')
      ->groupBy("product.id_product")
      ->where("product.tofront", "Y")
      ->get()->toArray();

    return view("home_front", compact('data', 'sosmed', 'category', 'featured', 'slideimage', 'product', 'show', 'sort', 'categoryFilter', 'all'));
  }

  public function caraorder()
  {
    $data = SettingController::getSetting();
    $category = CategoryController::getCategory();
    $sosmed = SosmedController::getSosmed();

    $all = false;
    $sort = "terbaru";
    $show = 10;
    $categoryFilter = 0;

    return view("caraorder", compact('data', 'category', 'sosmed', 'show', 'sort', 'categoryFilter', 'all'));
  }


  public function detailproduct($slug)
  {
    //$slug = "banner-phz";
    $data = SettingController::getSetting();
    $sosmed = SosmedController::getSosmed();
    $category = CategoryController::getCategory();
    $featured = FeaturedController::getFeatured();
    $slideimage = SlideimageController::getSlideImage();

    $all = false;
    $sort = "terbaru";
    $show = 10;
    $categoryFilter = 0;

    $data_product = DB::table("product")->where("url_segment", $slug)
      ->select("product.*", "productimage.*", "specialprice.*", "product.name as productname", "category.name as categoryname")
      ->join("category", "category.id_category", '=', 'product.categoryid')
      ->leftjoin("productimage", "productimage.productid", '=', "product.id_product")
      ->leftjoin("specialprice", "specialprice.productid", '=', "product.id_product")
      ->groupBy("product.id_product")
      ->get()
      ->first();

    //$product = DB::table("product")
    //  ->where("id_product", 1)
    //  ->first();
    //
    //$specialprice = DB::table("specialprice")
    //  ->where("id_specialprice", 2)
    //  ->first();

    if ($data_product == null) {
      abort(404);
    }
    return view("detail_product", compact("sort", "show", "categoryFilter", "data", "sosmed", "featured", "category", "slideimage", "data_product"));
  }
}
