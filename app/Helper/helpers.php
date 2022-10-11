<?php

function hp($nohp)
{
  // kadang ada penulisan no hp 0811 239 345
  $nohp = str_replace(" ", "", $nohp);
  // kadang ada penulisan no hp (0274) 778787
  $nohp = str_replace("(", "", $nohp);
  // kadang ada penulisan no hp (0274) 778787
  $nohp = str_replace(")", "", $nohp);
  // kadang ada penulisan no hp 0811.239.345
  $nohp = str_replace(".", "", $nohp);

  // cek apakah no hp mengandung karakter + dan 0-9
  if (!preg_match('/[^+0-9]/', trim($nohp))) {
    // cek apakah no hp karakter 1-3 adalah +62
    if (substr(trim($nohp), 0, 3) == '+62') {
      $hp = trim($nohp);
    }
    // cek apakah no hp karakter 1 adalah 0
    elseif (substr(trim($nohp), 0, 1) == '0') {
      $hp = '+62' . substr(trim($nohp), 1);
    }
  }

  return $hp;
}

function unique_code($limit, $id)
{
  return substr(base_convert(sha1($id), 16, 36), 0, $limit);
}

function FormatRupiah($angka)
{
  $number = "Rp " . number_format($angka, 2, ',', '.');

  return $number;
}

function FormatRupiahFront($angka)
{
  $number = "Rp. " . number_format($angka, 0, ',', '.');

  return $number;
}

function getsingkatan($s)
{
  if (preg_match_all('/\b(\w)/', strtoupper($s), $m)) {
    $v = implode('', $m[1]); // $v is now SOQTU
  }

  return $v;
  // die();
}

function stringlimit($string, $limit, $end)
{
  return str_limit($string, $limit, $end);
}

function compressImage($type, $source, $destination, $quality)
{

  $info = getimagesize($source);

  if ($type == 'image/jpeg')
    $image = imagecreatefromjpeg($source);

  elseif ($type == 'image/gif')
    $image = imagecreatefromgif($source);

  elseif ($type == 'image/png')
    $image = imagecreatefrompng($source);

  elseif ($type == 'image/jpg')
    $image = imagecreatefromjpeg($source);

  elseif ($type == 'gif')
    $image = imagecreatefromgif($source);

  elseif ($type == 'png')
    $image = imagecreatefrompng($source);

  elseif ($type == 'jpg')
    $image = imagecreatefromjpeg($source);

  elseif ($type == 'jpeg')
    $image = imagecreatefromjpeg($source);

  imagejpeg($image, $destination, $quality);
}
