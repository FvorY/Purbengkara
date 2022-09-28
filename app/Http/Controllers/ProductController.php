<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\mMember;

use App\Authentication;

use Auth;

use Carbon\Carbon;

use Session;

use DB;

use File;

use Crypt;

use Yajra\Datatables\Datatables;

class ProductController extends Controller
{
  public static function getProduct()
  {
    $data = DB::table("product")
      ->get()->toArray();

    return $data;
  }

  public static function getProductImage()
  {
    $data = DB::table("productimage")
      ->get()->toArray();

    return $data;
  }

  public function search(Request $req)
  {
    $data = DB::table("product")
      ->join("productimage", "productimage.productid", '=', "product.id_product")
      ->where('name', 'like', '%' . $req->term . '%')
      ->groupBy("product.id_product")
      ->get()
      ->map(function ($data) {
        $data->image = url('/') . '/' . $data->image;

        return $data;
      })
      ->toArray();

    return response()->json($data);
  }

  public function index()
  {
    $data = ProductController::getProduct();

    return view('admin.product.index', compact('data'));
  }

  public function tambahproduct()
  {
    $data_category = CategoryController::getCategory();

    return view('admin.product.manageproduct', [
      'data2' => $data_category
    ]);
  }

  public function datatable()
  {
    $data = DB::table("product")
      ->select("product.*", "productimage.*", "category.name as categoryname")
      ->join("category", "category.id_category", '=', 'product.categoryid')
      ->join("productimage", "productimage.productid", '=', "product.id_product")
      ->groupBy("product.id_product")
      ->get()
      ->toArray();

    return Datatables::of($data)
      ->addColumn('aksi', function ($data) {
        if($data->tofront == "Y") {
          $actionfront = '<button type="button" onclick="toFront(' . $data->id_product . ')" class="btn btn-warning btn-lg" title="to Front">' .
                          '<label class="fa fa-minus"></label></button>';
        } else {
          $actionfront = '<button type="button" onclick="toFront(' . $data->id_product . ')" class="btn btn-success btn-lg" title="to Front">' .
                          '<label class="fa fa-plus"></label></button>';
        }

        return  '<div class="btn-group">' .
          $actionfront.
          '<button type="button" onclick="edit(\'' . Crypt::encryptString($data->id_product) . '\')" class="btn btn-info btn-lg" title="edit">' .
          '<label class="fa fa-pencil-alt"></label></button>' .
          '<button type="button" onclick="hapus(' . $data->id_product . ')" class="btn btn-danger btn-lg" title="hapus">' .
          '<label class="fa fa-trash"></label></button>' .
          '</div>';
      })
      ->addColumn('priceMax', function ($data) {
        return  FormatRupiahFront($data->priceMax);
      })
      ->addColumn('priceMin', function ($data) {
        return  FormatRupiahFront($data->priceMin);
      })
      ->addColumn("image", function ($data) {
        return '<div> <img src="' . $data->image . '" style="height: 100px; width:100px; border-radius: 0px;" class="img-responsive"> </img> </div>';
      })
      ->rawColumns(['aksi', 'image'])
      ->addIndexColumn()
      ->make(true);
  }

  public function simpan(Request $req)
  {

    if ($req->id == null) {
      DB::beginTransaction();
      try {

        $idproduct = DB::table("product")->max('id_product') + 1;
        $priceMax = str_replace("Rp. ", "", $req->priceMax);
        $priceMax = str_replace(".", "", $priceMax);
        $priceMin = str_replace("Rp. ", "", $req->priceMin);
        $priceMin = str_replace(".", "", $priceMin);

        $urlsegment = strtolower(str_replace(" ", "-", $req->name));
        $cek = DB::table("product")->where("url_segment", $urlsegment)->first();

        if ($cek != null) {
          $urlsegment = strtolower(str_replace(" ", "-", $req->name)) . "-" . unique_code(3, $idproduct);
        }

        DB::table("product")
          ->insert([
            "id_product" => $idproduct,
            "name" => $req->name,
            "priceMin" => $priceMin,
            "priceMax" => $priceMax,
            "spek" => $req->spek,
            "url_segment" => $urlsegment,
            "categoryid" => $req->categoryid,
          ]);

        if (count($req->file())) {
          for ($i = 0; $i < count($req->file()); $i++) {
            $idimage = DB::table("productimage")->max('id_productImage') + 1;

            $imgPath = null;
            $tgl = carbon::now('Asia/Jakarta');
            $folder = $tgl->year . $tgl->month . $tgl->timestamp;
            $dir = 'image/uploads/product/' . $idproduct . '/' . $idimage;
            $childPath = $dir . '/';
            $path = $childPath;

            $file = $req->file('image' . $i);
            $name = null;
            if ($file != null) {
              $this->deleteDir($dir);
              $name = $folder . '.' . $file->getClientOriginalExtension();
              if (!File::exists($path)) {
                if (File::makeDirectory($path, 0777, true)) {
                  // compressImage($_FILES['image']['type'],$_FILES['image']['tmp_name'],$_FILES['image']['tmp_name'],50);
                  $file->move($path, $name);
                  $imgPath = $childPath . $name;
                } else
                  $imgPath = null;
              } else {
                return 'already exist';
              }
            }

            $insert = [
              "id_productImage" => $idimage,
              "productid" => $idproduct,
              "image" => $imgPath,
            ];

            DB::table("productimage")
              ->insert($insert);
          }
        }

        DB::commit();
        Session::flash('sukses', 'sukses');

        return back()->with('sukses', 'sukses');
      } catch (\Exception $e) {
        DB::rollback();
        Session::flash('gagal', 'gagal');

        return back()->with('gagal', 'gagal');
      }
    } else {
      DB::beginTransaction();
      try {
        $get = DB::table("product")->where("id_product", $req->id)->first();
        DB::table("product")->where("id_product", $req->id)->delete();

        $idproduct = $req->id;
        $priceMax = str_replace("Rp. ", "", $req->priceMax);
        $priceMax = str_replace(".", "", $priceMax);
        $priceMin = str_replace("Rp. ", "", $req->priceMin);
        $priceMin = str_replace(".", "", $priceMin);

        $urlsegment = strtolower(str_replace(" ", "-", $req->name));
        $cek = DB::table("product")->where("url_segment", $urlsegment)->first();

        if ($cek != null) {
          $urlsegment = strtolower(str_replace(" ", "-", $req->name)) . "-" . unique_code(3, $idproduct);
        }

        DB::table("product")
          ->insert([
            "id_product" => $idproduct,
            "name" => $req->name,
            "priceMin" => $priceMin,
            "priceMax" => $priceMax,
            "spek" => $req->spek,
            "url_segment" => $urlsegment,
            "categoryid" => $req->categoryid,
          ]);

        $getimage = DB::table("productimage")->where("productid", $req->id)->get()->toArray();

        if ($req->replaceImageID == null) {
          $replaceImageID = [];
        } else {
          $replaceImageID = explode(',', $req->replaceImageID);
        }

        if ($req->removeImageID == null) {
          $removeImageID = [];
        } else {
          $removeImageID = explode(',', $req->removeImageID);
        }

        if (count($removeImageID) == 0 && count($replaceImageID) == 0) {
          if (count($getimage) != ($req->countImage + 1)) {
            for ($i = count($getimage); $i < $req->countImage + 1; $i++) {
              $idimage = DB::table("productimage")->max('id_productImage') + 1;

              $imgPath = null;
              $tgl = carbon::now('Asia/Jakarta');
              $folder = $tgl->year . $tgl->month . $tgl->timestamp;
              $dir = 'image/uploads/product/' . $idproduct . '/' . $idimage;
              $childPath = $dir . '/';
              $path = $childPath;

              $file = $req->file('image' . $i);
              $name = null;
              if ($file != null) {
                $this->deleteDir($dir);
                $name = $folder . '.' . $file->getClientOriginalExtension();
                if (!File::exists($path)) {
                  if (File::makeDirectory($path, 0777, true)) {
                    // compressImage($_FILES['image']['type'],$_FILES['image']['tmp_name'],$_FILES['image']['tmp_name'],50);
                    $file->move($path, $name);
                    $imgPath = $childPath . $name;
                  } else
                    $imgPath = null;
                } else {
                  return 'already exist';
                }
              }

              if ($imgPath != null) {
                $insert = [
                  "id_productImage" => $idimage,
                  "productid" => $idproduct,
                  "image" => $imgPath,
                ];

                DB::table("productimage")
                  ->insert($insert);
              }
            }
          }
        } else {
          for ($i = 0; $i < count($removeImageID); $i++) {
            if ($removeImageID[$i] != "") {
              DB::table("productimage")->where("id_productImage", $getimage[$removeImageID[$i]]->id_productImage)->delete();

              $dir = 'image/uploads/product/' . $req->id . '/' . $getimage[$removeImageID[$i]]->id_productImage;

              $this->deleteDir($dir);
            }
          }

          for ($i = 0; $i < count($replaceImageID); $i++) {
            if ($replaceImageID[$i] != "") {
              DB::table("productimage")->where("id_productImage", $getimage[$replaceImageID[$i]]->id_productImage)->delete();

              $dir = 'image/uploads/product/' . $req->id . '/' . $getimage[$replaceImageID[$i]]->id_productImage;

              $this->deleteDir($dir);

              $idimage = $getimage[$replaceImageID[$i]]->id_productImage;

              $imgPath = null;
              $tgl = carbon::now('Asia/Jakarta');
              $folder = $tgl->year . $tgl->month . $tgl->timestamp;
              $dir = 'image/uploads/product/' . $idproduct . '/' . $idimage;
              $childPath = $dir . '/';
              $path = $childPath;

              $file = $req->file('image' . $replaceImageID[$i]);
              $name = null;
              if ($file != null) {
                $this->deleteDir($dir);
                $name = $folder . '.' . $file->getClientOriginalExtension();
                if (!File::exists($path)) {
                  if (File::makeDirectory($path, 0777, true)) {
                    // compressImage($_FILES['image']['type'],$_FILES['image']['tmp_name'],$_FILES['image']['tmp_name'],50);
                    $file->move($path, $name);
                    $imgPath = $childPath . $name;
                  } else
                    $imgPath = null;
                } else {
                  return 'already exist';
                }
              }

              $insert = [
                "id_productImage" => $idimage,
                "productid" => $idproduct,
                "image" => $imgPath,
              ];

              DB::table("productimage")
                ->insert($insert);
            }
          }
        }

        DB::commit();
        Session::flash('sukses', 'sukses');

        return back()->with('sukses', 'sukses');
      } catch (\Exception $e) {
        DB::rollback();
        Session::flash('gagal', 'gagal');

        return back()->with('gagal', 'gagal');
      }
    }
  }

  public function hapus(Request $req)
  {
    DB::beginTransaction();
    try {

      DB::table("product")
        ->where("id_product", $req->id)
        ->delete();

      DB::table("productimage")
        ->where("productid", $req->id)
        ->delete();

      $dir = 'image/uploads/product/' . $req->id;

      $this->deleteDir($dir);

      DB::commit();
      return response()->json(["status" => 5]);
    } catch (\Exception $e) {
      DB::rollback();
      return response()->json(["status" => 6]);
    }
  }

  public function tofront(Request $req)
  {
    DB::beginTransaction();
    try {

      $cek = DB::table("product")
              ->where("id_product", $req->id)
              ->first();

      if($cek->tofront == "Y") {
        DB::table("product")
          ->where("id_product", $req->id)
          ->update([
            "tofront" => "N"
          ]);
      } else {
        DB::table("product")
          ->where("id_product", $req->id)
          ->update([
            "tofront" => "Y"
          ]);
      }

      DB::commit();
      return response()->json(["status" => 5]);
    } catch (\Exception $e) {
      DB::rollback();
      return response()->json(["status" => 6]);
    }
  }

  public function edit($id)
  {
    $id = Crypt::decryptString($id);

    $data = DB::table("product")
      ->where("id_product", $id)
      ->first();

    $image = DB::table("productimage")
      ->where("productid", $id)
      ->get()->toArray();

    $data_category = categoryController::getCategory();

    return view('admin.product.manageproduct', [
      'data' => $data,
      'data2' => $data_category,
      'image' => $image
    ]);
  }

  public function deleteDir($dirPath)
  {
    if (!is_dir($dirPath)) {
      return false;
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
      $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
      if (is_dir($file)) {
        self::deleteDir($file);
      } else {
        unlink($file);
      }
    }
    rmdir($dirPath);
  }
}
