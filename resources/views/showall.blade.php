@extends('app')

@section('content')

    
    @foreach($posts as $post)

    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Post Title : {{$post ->title}}</h5>
    <p class="card-text">Post Description : {{$post ->description}}</p>
    <p class="card-text">Created by : {{$post->user ? $post->user->name : "not exist"}}</p>
    <p class="card-text">Slug : {{$post->slug ? $post->slug : "not exist"}}</p>


  </div>
</div>
    @endforeach

<a href="{{route('post.index')}}" class="btn btn-primary">Go Home</a>

@endsection