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

use Illuminate\Support\Str;
use Yajra\Datatables\Datatables;

class ProductController extends Controller
{
    public static function getProduct()
    {
        $data = DB::table("product")
            ->join('productimage', 'product.id_product', '=', 'productimage.productid',)
            ->get()->toArray();

        return $data;
    }

    public function index()
    {
        $data = ProductController::getProduct();

        return view('admin.product.index', compact('data'));
    }
    public function tambahproduct()
    {
        $data_setting = SettingController::getSetting();
        $data_category = categoryController::getCategory();

        return view('admin.product.tambahproduct', [
            'data' => $data_setting,
            'data2' => $data_category
        ]);
    }

    public function datatable()
    {
        $data = ProductController::getProduct();

        // return $data;
        // $xyzab = collect($data);
        // return $xyzab;
        // return $xyzab->i_price;

        return Datatables::of($data)
            ->addColumn("image", function ($data) {
                return '<div> <img src="' . $data->image . '" style="height: 100px; width:100px; border-radius: 0px;" class="img-responsive"> </img> </div>';
            })
            ->addColumn('aksi', function ($data) {
                return  '<div class="btn-group">' .
                    '<button type="button" onclick="edit(' . $data->id_product . ')" class="btn btn-info btn-lg" title="edit">' .
                    '<label class="fa fa-pencil-alt"></label></button>' .
                    '<button type="button" onclick="hapus(' . $data->id_product . ')" class="btn btn-danger btn-lg" title="hapus">' .
                    '<label class="fa fa-trash"></label></button>' .
                    '</div>';
            })
            ->rawColumns(['aksi', 'image'])
            ->addIndexColumn()
            ->make(true);
    }

    public function simpan(Request $req)
    {

        $idproduct = DB::table("product")->max('id_product') + 1;
        DB::table("product")
            ->insert([
                "id_product" => $idproduct,
                "name" => $req->name,
                "url_segment" => Str::slug($req->name, '-'),
                "priceMin" => $req->priceMin,
                "priceMax" => $req->priceMax,
                "spek" => $req->spek,
                "categoryid" => $req->categoryid,

            ]);

        // if ($req->file('image0')) {
        //     $imageproduct = $req->file('image0')->store('product-image');
        // }

        if (count($req->file())) {

            $dir = 'image/uploads/product/';
            for ($i = 0; $i < count($req->file()); $i++) {

                $idimage = DB::table("productimage")->max('id_productImage') + 1;
                $imageproduct = $req->file('image' . $i)->move($dir);
                $insert = [
                    "id_productImage" => $idimage,
                    "productid" => $idproduct,
                    "image" => $imageproduct,
                ];
                DB::table("productimage")
                    ->insert($insert);
            }
        }

        return redirect('tambahproduct')->with('sukses', 'sukses');
    }

    public function hapus(Request $req)
    {
        DB::beginTransaction();
        try {

            DB::table("product")
                ->where("id_product", $req->id)
                ->delete();

            DB::commit();
            return response()->json(["status" => 5]);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(["status" => 6]);
        }
    }

    public function edit(Request $req)
    {
        $data = DB::table("product")
            ->where("id_product", $req->id)
            ->first();

        return response()->json($data);
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
