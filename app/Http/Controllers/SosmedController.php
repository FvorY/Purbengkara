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

class SosmedController extends Controller
{
  public static function getSosmed()
  {
    $data = DB::table("sosmed")
      ->get()->toArray();

    return $data;
  }

  public function index()
  {
    $data = SettingController::getSetting();
    return view('admin.sosmed.index', compact('data'));
  }

  public function datatable()
  {
    $data = DB::table('sosmed')
      ->get()->toArray();


    // return $data;
    // $xyzab = collect($data);
    // return $xyzab;
    // return $xyzab->i_price;
    return Datatables::of($data)
      ->addColumn("image", function ($data) {
        return '<div> <img src="' . $data->icon . '" style="height: 100px; width:100px; border-radius: 0px;" class="img-responsive"> </img> </div>';
      })
      ->addColumn('aksi', function ($data) {
        return  '<div class="btn-group">' .
          '<button type="button" onclick="edit(' . $data->id_sosmed . ')" class="btn btn-info btn-lg" title="edit">' .
          '<label class="fa fa-pencil-alt"></label></button>' .
          '<button type="button" onclick="hapus(' . $data->id_sosmed . ')" class="btn btn-danger btn-lg" title="hapus">' .
          '<label class="fa fa-trash"></label></button>' .
          '</div>';
      })
      ->rawColumns(['aksi', 'image'])
      ->addIndexColumn()
      ->make(true);
  }

  public function simpan(Request $req)
  {
    // dd(;
    if ($req->id == null) {
      DB::beginTransaction();
      try {

        $max = DB::table("sosmed")->max('id_sosmed') + 1;

        $imgPath = null;
        $tgl = carbon::now('Asia/Jakarta');
        $folder = $tgl->year . $tgl->month . $tgl->timestamp;
        $dir = 'image/uploads/sosmed' . $max;
        $childPath = $dir . '/';
        $path = $childPath;

        $file = $req->file('image');
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

        DB::table("sosmed")
          ->insert([
            "id_sosmed" => $max,
            "name" => $req->name,
            "icon" => $imgPath,
            "url" => $req->url,
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

        $imgPath = null;
        $tgl = carbon::now('Asia/Jakarta');
        $folder = $tgl->year . $tgl->month . $tgl->timestamp;
        $dir = 'image/uploads/sosmed' . $req->id;
        $childPath = $dir . '/';
        $path = $childPath;

        $file = $req->file('image');
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

        if ($imgPath == null) {
          DB::table("sosmed")
            ->where('id_sosmed', $req->id)
            ->update([
              "name" => $req->name,
              "url" => $req->url,
            ]);
        } else {
          DB::table("sosmed")
            ->where('id_sosmed', $req->id)
            ->update([
              "name" => $req->name,
              "icon" => $imgPath,
              "url" => $req->url,
            ]);
        }

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

      DB::table("sosmed")
        ->where("id_sosmed", $req->id)
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
    $data = DB::table("sosmed")
      ->where("id_sosmed", $req->id)
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
