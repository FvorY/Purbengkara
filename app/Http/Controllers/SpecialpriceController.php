<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\mMember;

use App\Authentication;

use Auth;

use Carbon\Carbon;

use Session;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

use Yajra\Datatables\Datatables;

class SpecialpriceController extends Controller
{
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
                    '<button type="button" onclick="edit(' . $data->id_specialprice . ')" class="btn btn-info btn-lg" title="edit">' .
                    '<label class="fa fa-pencil-alt"></label></button>' .
                    '<button type="button" onclick="hapus(' . $data->id_specialprice . ')" class="btn btn-danger btn-lg" title="hapus">' .
                    '<label class="fa fa-trash"></label></button>' .
                    '</div>';
            })
            ->rawColumns(['aksi'])
            ->addIndexColumn()
            ->make(true);
    }
}
