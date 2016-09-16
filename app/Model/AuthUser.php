<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AuthUser extends Model
{
    //
    protected $table = 'auth_users';

 public function getAuthFromEmail($emailid,$pass)
    {
        // first()
        // get()
        return AuthUser::where('email', $emailid)
                        ->where('password',$pass)
                        ->first();
    }
    public function getUserList()
    {
        return AuthUser::all();
    }
    public function getUserFromId($userId)
    {
        return AuthUser::where('id',$userId)
                        ->get();
    }
    public function Blog()
    {
        return $this->hasMany('App\Model\Blog','user_id');
    }
    public function showUser()
    {
        return $this->hasOne('App\Model\Blog','user_id');
    }
}

