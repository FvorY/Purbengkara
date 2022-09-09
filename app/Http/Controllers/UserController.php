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

class UserController extends Controller
{
  public function index()
  {
    $data = SettingController::getSetting();

    return view('admin.user.index', compact('data'));
  }

  public function datatable()
  {
    $data = DB::table('user')
      ->get()->toArray();


    // return $data;
    // $xyzab = collect($data);
    // return $xyzab;
    // return $xyzab->i_price;
    return Datatables::of($data)
      ->addColumn('aksi', function ($data) {
        return  '<div class="btn-group">' .
          '<button type="button" onclick="edit(' . $data->id_user . ')" class="btn btn-info btn-lg" title="edit">' .
          '<label class="fa fa-pencil-alt"></label></button>' .
          '<button type="button" onclick="hapus(' . $data->id_user . ')" class="btn btn-danger btn-lg" title="hapus">' .
          '<label class="fa fa-trash"></label></button>' .
          '</div>';
      })
      ->rawColumns(['aksi'])
      ->addIndexColumn()
      ->make(true);
  }

  public function simpan(Request $req)
  {
    if ($req->id == null) {
      DB::beginTransaction();
      try {

        $max = DB::table("user")->max('id_user') + 1;

        DB::table("user")
          ->insert([
            "id_user" => $max,
            "name" => $req->name,
            "role" => $req->role,
            "username" => $req->username,
            "password" => $req->password,
            "created_at" => Carbon::now('Asia/Jakarta'),
          ]);

        DB::commit();
        return response()->json(["status" => 1]);
      } catch (\Exception $e) {
        DB::rollback();
        return response()->json(["status" => 2]);
      }
    } else {
      DB::beginTransaction();
      try {

        DB::table("user")
          ->where('id_user', $req->id)
          ->update([
            "name" => $req->name,
            "role" => $req->role,
            "username" => $req->username,
            "password" => $req->password,
            "created_at" => Carbon::now('Asia/Jakarta'),
          ]);

        DB::commit();
        return response()->json(["status" => 3]);
      } catch (\Exception $e) {
        DB::rollback();
        return response()->json(["status" => 4]);
      }
    }
  }

  public function hapus(Request $req)
  {
    DB::beginTransaction();
    try {

      DB::table("user")
        ->where("id_user", $req->id)
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
    $data = DB::table("user")
      ->where("id_user", $req->id)
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
