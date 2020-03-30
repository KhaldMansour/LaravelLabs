<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{

    public function index ()
    {

    $posts = Post::all();
     

     return view('index' , [
         'posts' => $posts,
     ]);
    }

    public function show()
    {
        $request = request();
        $postId = $request->post; 
        $post = Post::find($postId);
        // dd($post);

        return view('show', [
            'post' => $post,
        ]); 
   }

   public function create()
   {
    $users = User::all();
    return view('create',[
        "users" => $users
    ]);
   }

   public function store()
   {
    $request = request();

    //    dd($request->user_id);
    Post::create([
        'title' => $request->title,
        'description' => $request->desc,
        'user_id' => $request->user_id,
    ]);

    return redirect()->route('post.index');
   }


   public function update ()
   {

    $users = User::all();
    return view('update1',[
        "users" => $users
    ]); 
   }  


}
