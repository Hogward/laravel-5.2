<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    /**
     * 应该被调整为日期的属性
     *
     * @var array
     */
//    protected $deleted_at = ['deleted_at'];

    /**
     * 可以被批量赋值的属性.
     *
     * @var array
     */
    protected $fillable = ['phone', 'address'];

    /*
     * 一对一
     * 获取关联到 Contact 的 User
     * */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
