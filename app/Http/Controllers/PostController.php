<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Post;
use App\User;
use App\Comment;

use Illuminate\Support\Str;

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
        $users = User::all();
        $request = request();
        $postId = $request->post; 
        $post = Post::find($postId);

        $comment = Comment::all();


        // dd($post);

        return view('show', [
            'post' => $post,
            'users' => $users,
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

   public function store(StorePostRequest $request)
   {
    $request = request();
  
    $slug = Str::slug($request->title , '-');

    // $image =$request->hasfile('img');

    // dd($image);
    // $img_name = " 1 . "." . $image->getClientOriginalExtension()";

    // $image -> move(public_path("images") , $img_name);

    

    Post::create([
        'title' => $request->title,
        'description' => $request->desc,
        'user_id' => $request->user_id,
        'slug' => $slug,
        'img' => "hh",
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


public function storeComment()
{
    $request=request();

    $post = Post::find($request->post);

    Comment::create([
        'body' => $request->body,
        'user_id' => $request->user_id,
        'post_id' => $post->id,
    ]);
    return redirect()->route('post.index');
}

}
