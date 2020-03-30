@extends('app')

@section('content')
    <h1>hhhhhhhh </h1>

    
    <h1> {{$post['id']}} </h1>

    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$post ->title}}</h5>
    <p class="card-text">{{$post ->description}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    @endsection
                
            



