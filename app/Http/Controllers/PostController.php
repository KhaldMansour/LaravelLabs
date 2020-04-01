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

   public function showall()
   {
    $posts = Post::all();
     

    return view('showall' , [
        'posts' => $posts,
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
    $validateData = $request-> validate(
        [
            'title' => 'required| min:3',
            'desc' => 'required| min:5',
        ],
        [
            'title.min' => 'title length is below required',
            'desc.min' => 'Description must be more than that',
        ]
        );
    Post::create([
        'title' => $request->title,
        'description' => $request->desc,
        'user_id' => $request->user_id,
    ]);

    return redirect()->route('post.index');
   }


  

   public function edit ()
   {
    $request = Request();
    // dd($request->post);
    $postId = $request->post; 
       $post = Post::find($postId);
    $users = User::all();
    return view('edit',[
        "users" => $users,
        'post' => $post

    ]);
   }

   public function update()
   {
       
       $request = Request();
       $postId = $request->post; 
       $post = Post::find($postId);
    //    dd($request);
        $post ->update([
            'title' => $request->title,
            'description' => $request->desc,
            'user_id' => $request->user_id,
        ]);
        // dd($post);
        return redirect()->route('post.index');

   }

   public function destroy(){
    $request=request();
    $postId=$request->post;
    $post=Post::find($postId);
    $post->delete();
    return redirect()->route('post.index');
}

}
