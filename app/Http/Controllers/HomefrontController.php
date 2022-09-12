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
                      ->select("product.*", "category.name as categoryname", "productimage.*")
                      ->join("category", 'category.id_category', '=', 'product.categoryid')
                      ->leftjoin("productimage", 'productimage.productid', '=', 'product.id_product')
                      ->get()->toArray();

        return view("home_front", compact('data', 'sosmed', 'category', 'featured', 'slideimage', 'product'));
    }
}
