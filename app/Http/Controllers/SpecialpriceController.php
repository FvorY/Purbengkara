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

class SpecialpriceController extends Controller
{
    public static function getProduct()
    {
        $data = DB::table("product")
            ->get()->toArray();

        return $data;
    }

    public static function getSpecialprice()
    {
        $data = DB::table("specialprice")
            ->select("specialprice.*", "product.name as productname")
            ->join("product", "product.id_product", '=', 'specialprice.productid')
            ->get()->toArray();

        return $data;
    }

    public function index()
    {
        $data = SpecialpriceController::getSpecialprice();

        return view('admin.specialprice.index', compact('data'));
    }

    public function datatable()
    {
        $data = SpecialpriceController::getSpecialprice();

        return Datatables::of($data)
            ->addColumn('aksi', function ($data) {
                return  '<div class="btn-group">' .
                    '<button type="button" onclick="edit(\'' . Crypt::encryptString($data->id_specialprice) . '\')" class="btn btn-info btn-lg" title="edit">' .
                    '<label class="fa fa-pencil-alt"></label></button>' .
                    '<button type="button" onclick="hapus(' . $data->id_specialprice . ')" class="btn btn-danger btn-lg" title="hapus">' .
                    '<label class="fa fa-trash"></label></button>' .
                    '</div>';
            })
            ->rawColumns(['aksi'])
            ->addIndexColumn()
            ->make(true);
    }
    public function tambahspecialprice()
    {
        $data_product = ProductController::getProduct();
        return view('admin.specialprice.tambahspecialprice', compact('data_product'));
    }

    public function simpan(Request $req)
    {


        if ($req->id == null) {
            try {
                $price = str_replace("Rp. ", "", $req->price);
                $price = str_replace(".", "", $price);

                DB::beginTransaction();

                $max = DB::table("specialprice")->max('id_specialprice') + 1;

                DB::table("specialprice")
                    ->insert([
                        "id_specialprice" => $max,
                        "productid" => $req->productid,
                        "name" => $req->name,
                        "price" => $price,
                    ]);

                DB::commit();
                Session::flash('sukses', 'sukses');
                return back()->with('sukses', 'sukses');
            } catch (\Exception $e) {
                DB::rollback();
            }
            Session::flash('gagal', 'gagal');
            return back()->with('gagal', 'gagal');
        } else {
            DB::beginTransaction();
            try {

                DB::table("specialprice")
                    ->where('id_specialprice', $req->id)
                    ->update([
                        "id_specialprice" => $max,
                        "productid" => $req->productid,
                        "name" => $req->name,
                        "price" => $req->price,
                    ]);

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
            DB::table("specialprice")
                ->where("id_specialprice", $req->id)
                ->delete();

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

        $data = DB::table("specialprice")
            ->where("id_specialprice", $id)
            ->first();
        $data_product = ProductController::getProduct();

        return view('admin.specialprice.tambahspecialprice', [
            "data" => $data,
            "data_product" => $data_product,
        ]);
    }
}
