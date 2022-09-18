<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mMember;

use App\Authentication;
use Carbon\Carbon;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{

     public static function getSetting() {
       $data = DB::table("setting")
         ->where('id', 1)->first();

        return $data;
     }

     public function index() {

       $data = SettingController::getSetting();

       return view("admin.setting.index", compact("data"));
     }

     public function save(Request $req) {
       DB::beginTransaction();
       try {

            $imgPath = null;
            $tgl = carbon::now('Asia/Jakarta');
            $folder = $tgl->year . $tgl->month . $tgl->timestamp;
            $dir = 'image/uploads/icon';
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

            $data = DB::table("setting")->get();

            if (count($data) != 0) {

              if ($imgPath != null) {
                DB::table("setting")
                  ->where('id', 1)
                  ->update([
                    "maps_link" => $req->maps_link,
                    "address" => $req->address,
                    "email" => $req->email,
                    "telepon" => $req->telepon,
                    "whatsapp" => $req->whatsapp,
                    "seo_keyword" => $req->seo_keyword,
                    "seo_title" => $req->seo_title,
                    "seo_description" => $req->seo_description,
                    "cara_order" => $req->cara_order,
                    'logo_website' => $imgPath,
                  ]);
              } else {
                DB::table("setting")
                  ->where('id', 1)
                  ->update([
                    "maps_link" => $req->maps_link,
                    "address" => $req->address,
                    "email" => $req->email,
                    "telepon" => $req->telepon,
                    "whatsapp" => $req->whatsapp,
                    "seo_keyword" => $req->seo_keyword,
                    "seo_title" => $req->seo_title,
                    "seo_description" => $req->seo_description,
                    "cara_order" => $req->cara_order,
                  ]);
              }

            } else {
                if ($imgPath != null) {
                  DB::table("setting")
                    ->insert([
                      "maps_link" => $req->maps_link,
                      "address" => $req->address,
                      "email" => $req->email,
                      "telepon" => $req->telepon,
                      "whatsapp" => $req->whatsapp,
                      "seo_keyword" => $req->seo_keyword,
                      "seo_title" => $req->seo_title,
                      "seo_description" => $req->seo_description,
                      "cara_order" => $req->cara_order,
                      'logo_website' => $imgPath,
                    ]);
                } else {
                  DB::table("setting")
                    ->insert([
                      "maps_link" => $req->maps_link,
                      "address" => $req->address,
                      "email" => $req->email,
                      "telepon" => $req->telepon,
                      "whatsapp" => $req->whatsapp,
                      "seo_keyword" => $req->seo_keyword,
                      "seo_title" => $req->seo_title,
                      "seo_description" => $req->seo_description,
                      "cara_order" => $req->cara_order,
                    ]);
                }
            }


            DB::commit();
            Session::flash('sukses', 'sukses');

            return back()->with('sukses','sukses');
       } catch (\Exception $e) {
            DB::rollback();
            Session::flash('gagal', 'gagal');

            return back()->with('gagal','gagal');
       }

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
