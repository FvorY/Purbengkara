<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;
use Auth;

class mMember extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable,
        CanResetPassword;

    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $incrementing = false;
    public $remember_token = false;
    //public $timestamps = false;
    protected $fillable = ['id_user','name','role','password','username','created_at','updated_at'];

}
