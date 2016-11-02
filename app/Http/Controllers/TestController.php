<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Post;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        Schema::table('contacts',function($table){
//            $table->softDeletes();
//        });
//        die;
//        echo '使用 Schema::create 创建一个数据库的表：';
//        Schema::create('posts', function($table)
//        {
//            $table->increments('id');
//            $table->integer('user_id');
//            $table->string('title');
//            $table->text('content');
//            $table->timestamps();
//        });
//        die;
        echo 'Hello world';
        $user = new User();
        $contact = new Contact();
//        $user = DB::select('select * from users where id = ?', array(1));
//        $user = DB::table('users')->get();
//        $contact = User::find(1)->contact()->withTrashed()->get();
//        $contact = User::find(1)->contact()->first();
//        $contact->delete();
//        $contact->forceDelete();

//        $trashed_contact = Contact::withTrashed()
//                        ->where('phone', 'like', '%8624%')
//                        ->orderBy('created_at','asc')
//                        ->first();
//        $trashed_contact->restore();
//        $contact = Contact::findOrFail(1);
//        $model = App\Flight::where('legs', '>', 100)->firstOrFail();

        $contact = User::find(1)->contact;
//        $contact->history()->get();
        dd($contact);

        // 测试 直接更新 contact 的 address
//        $contact->address = '澳门路477号9号楼401室';
//        $contact->save();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo '插入一个新的 contact 实例';
        $contact = new Contact;
        $contact->user_id = 1;
        $contact->phone = 13386248765;
        $contact->address = '澳门路477号9号楼401室';
        $contact->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
