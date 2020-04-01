@extends('app')

@section('content')

    
    <!-- <h1> {{$post['id']}} </h1> -->

    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Post Title : {{$post ->title}}</h5>
    <p class="card-text">Post : Description : {{$post ->description}}</p>
  </div>
</div>
<a href="{{route('post.index')}}" class="btn btn-primary">Go Home</a>

    @endsection
                
            



