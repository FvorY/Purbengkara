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

use Yajra\Datatables\Datatables;

class ProductController extends Controller
{
    public static function getProduct()
    {
        $data = DB::table("product")
            ->get()->toArray();

        return $data;
    }

    public function index()
    {
        $data = SettingController::getSetting();

        return view('admin.product.index', compact('data'));
    }
    public function tambahproduct()
    {
        $data = SettingController::getSetting();

        return view('admin.product.tambahproduct', compact('data'));
    }
}