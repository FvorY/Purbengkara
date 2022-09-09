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

class CategoryController extends Controller
{
    public function index()
    {
        $data = SettingController::getSetting();

        return view('admin.category.index', compact('data'));
    }

    public function datatable()
    {
        $data = DB::table('category')
            ->get()->toArray();


        // return $data;
        // $xyzab = collect($data);
        // return $xyzab;
        // return $xyzab->i_price;
        return Datatables::of($data)
            ->addColumn('aksi', function ($data) {
                return  '<div class="btn-group">' .
                    '<button type="button" onclick="edit(' . $data->id_category . ')" class="btn btn-info btn-lg" title="edit">' .
                    '<label class="fa fa-pencil-alt"></label></button>' .
                    '<button type="button" onclick="hapus(' . $data->id_category . ')" class="btn btn-danger btn-lg" title="hapus">' .
                    '<label class="fa fa-trash"></label></button>' .
                    '</div>';
            })
            ->rawColumns(['aksi'])
            ->addIndexColumn()
            ->make(true);
    }
}
