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

        $product = DB::table("product")
                      ->select("product.*", "product.name as productname", "category.name as categoryname", "productimage.*", "specialprice.*", "specialprice.name as specialname", "specialprice.price as specialprice")
                      ->join("category", 'category.id_category', '=', 'product.categoryid')
                      ->leftjoin("specialprice", "specialprice.productid", '=', "product.id_product")
                      ->leftjoin("productimage", 'productimage.productid', '=', 'product.id_product')
                      ->groupBy("product.id_product")
                      ->where("product.tofront", "Y")
                      ->get()->toArray();

        return view("home_front", compact('data', 'sosmed', 'category', 'featured', 'slideimage', 'product'));
    }

    public function caraorder() {
      $data = SettingController::getSetting();
      $category = CategoryController::getCategory();
      $sosmed = SosmedController::getSosmed();

      return view("caraorder", compact('data', 'category', 'sosmed'));
    }
}
