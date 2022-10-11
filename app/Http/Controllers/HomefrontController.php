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
      //->where("product.categoryid", '=', $categoryFilter)
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


  public function detailproduct($url_segment)
  {
    $sosmed = SosmedController::getSosmed();
    $category = CategoryController::getCategory();
    $featured = FeaturedController::getFeatured();
    $slideimage = SlideimageController::getSlideImage();

    $all = false;
    $sort = "terbaru";
    $show = 10;
    $categoryFilter = 0;

    $data_product = DB::table("product")
      ->where("url_segment", $url_segment)
      ->select("product.*", "productimage.*", "specialprice.*", "product.name as productname", "category.name as categoryname")
      ->join("category", "category.id_category", '=', 'product.categoryid')
      ->leftjoin("productimage", "productimage.productid", '=', "product.id_product")
      ->leftjoin("specialprice", "specialprice.productid", '=', "product.id_product")
      ->groupBy("product.id_product")
      ->first();

    $customTitle = "Purbengkara | " . $data_product->productname;
    $customImage = $data_product->image;
    $data = SettingController::getSettingProduk($data_product);

    $produk = DB::table("product")
      ->where("product.categoryid", '=', $data_product->categoryid)
      ->select("product.*", "product.name as productname", "category.name as categoryname", "productimage.*", "specialprice.*", "specialprice.name as specialname", "specialprice.price as specialprice")
      ->join("category", 'category.id_category', '=', 'product.categoryid')
      ->leftjoin("specialprice", "specialprice.productid", '=', "product.id_product")
      ->leftjoin("productimage", 'productimage.productid', '=', 'product.id_product')
      ->groupBy("product.id_product")
      ->latest()
      ->limit($show)
      ->get()
      ->map(function ($data) {
        $data->image = url('/') . '/' . $data->image;

        return $data;
      })
      ->toArray();

    $productimage = DB::table("productimage")
      ->where("productimage.productid", '=', $data_product->productid)
      ->get()->toArray();

    if ($data_product == null) {
      abort(404);
    }

    return view("detail_product", compact(
      "produk",
      "sort",
      "show",
      "categoryFilter",
      "data",
      "sosmed",
      "featured",
      "category",
      "slideimage",
      "data_product",
      "productimage",
      "customTitle",
      "customImage"
    ));
  }
}
