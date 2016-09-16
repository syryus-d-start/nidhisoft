<?php namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
//use SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use SoftDeletes;
    //
    protected $dates=['deleted_at'];
    public function getBlogFromUserId($userid)
    {
        return Blog::where('user_id',$userid);
    }
      public function getBlogFromId($id)
    {
        return Blog::where('id',$id)->get();
    }
    public function Blog()
    {
        return $this->hasOne('App\Model\AuthUser','user_id');
    }
    public function author()
    {
        return $this->belongsTo('App\Model\AuthUser','user_id');
    }
}
