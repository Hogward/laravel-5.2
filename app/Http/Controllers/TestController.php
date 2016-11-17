<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Post;
use App\Role;
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
        $user = new User();
        $role = new Role();
        $contact = new Contact();
        $post = new Post();

        $user = $user->find(1);
        foreach($user->roles as $role){
            dd($role->pivot);
        }


        //多对多测试
//        Schema::table('role_user', function ($table) {
//            $table->timestamps();
//        });

        // 一对一 测试
//        echo 'ORM OneToOne';
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
//        $contactArr = array(
//            'phone'=>'13343438765',
//            'address'=>'创意园区save'
//        );
//        $user = User::find(1);
//        $contact->update($contactArr);
//        $contact = new Contact($contactArr);
//        $user->contact()->save($contact);
//        $user->contact()->create($contactArr);
//
//        $rtn = $user->contact;
//        dd($user->contact);
//        echo 'ORM OneToMany';
//        $user = $user->find(1);
//        $posts = $user->find(1)->posts;
//        $posts = $user->find(1)->posts()->get();
//        $user = $post->find(1)->user;
//        $user = $post->find(1)->user()->first();
//        $postArr1 = array(
//            'title' => '文章四',
//            'content' => '文章四的文章内容'
//        );
//        $postArr2 = array(
//            'title' => '文章五',
//            'content' => '文章五的文章内容'
//        );
//        $tempArr = [new Post($postArr1), new Post($postArr2)];
//        $posts = $user->posts()->withTrashed()->get();
//        $posts = $user->posts;
//        foreach ($posts as $_item){
//            $_item->title = 'Post Title';
//            $_item->save();
//            break;
//        }
//        $post = $user->posts()->where('id',1)->first();
//        $post->title = 'Title Changed';
//        $post->save();
//        $contact = $user->contact;
//        $contactArr = array(
//            'phone'=>'13365442534',
//            'address'=>'创意园区update'
//        );
//        $user->contact()->update($contactArr);
//       $user = $user->find(1);
//        $user->contact->phone = '1345678901';
//        $user->save();

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
//        echo '插入一个新的 contact 实例';
//        $contact = new Contact;
//        $contact->user_id = 1;
//        $contact->phone = 13386248765;
//        $contact->address = '澳门路477号9号楼401室';
//        $contact->save();
//        echo '插入一个新的 post 实例';
//        $post = new Post();
//        $post->user_id = 1;
//
//        $post->title = '文章三';
//        $post->content = '文章三的文章内容三';
//        $post->save();
//        echo '插入一个新的 user 实例';
//        $user = new User();
//        $userArr = array(
//            'name' => 'test',
//            'password' => '123456',
//        );
//        $user->insert($userArr);
//        echo 'SUCCESS';
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
