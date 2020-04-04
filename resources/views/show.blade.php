@extends('app')

@section('content')

    
    <!-- <h1> {{$post['id']}} </h1> -->

    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Post Title : {{$post ->title}}</h5>
    <p class="card-text">Post Description : {{$post ->description}}</p>
    <p class="card-text">Created by : {{$post->user ? $post->user->name : "not exist"}}</p>
    <p class="card-text">Slug : {{$post->slug ? $post->slug : "not exist"}}</p>
    <p class="card-text">comments : {{$post->comment ? $post->comment->body : "not exist"}} </p>

  </div>


  <form method="POST" action="{{route('post.addcomment', ['post' => $post['id']] )}}">
  @csrf
        <div class="form-group">
          <label for="exampleInputPassword1">Add Comment</label>
          <textarea name="body" class="form-control">
          </textarea>
            </div>
      </div>

      <div class="form-group" class="form-control">
      <label> User : </label>
    <select name="user_id" class="form-control">
      @foreach($users as $user)
        <option  value="{{$user->id}}"> {{$user->name}} </option>
      @endforeach
      </select>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>

  </form>


<a href="{{route('post.index')}}" class="btn btn-primary">Go Home</a>

    @endsection
                
            



