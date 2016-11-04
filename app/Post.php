<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    /**
     * 指定不能被批量赋值的属性，
     * @var array
     */
    protected $guarded = ['id'];

    /*
     * 一对多
     * 获取关联到 Post 的 User
     * */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
