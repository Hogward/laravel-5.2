<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    /**
     * 指定不能被批量赋值的属性，
     * @var array
     */
    protected $guarded = ['id', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
     * 一对一
     * 获取关联到User的Contact
     * */
    public function contact(){
        return $this->hasOne('App\Contact');
    }

    /*
     * 一对多
     * 获取关联到User的Post
     * */
    public function posts(){
        return $this->hasMany('App\Post');
    }
}
