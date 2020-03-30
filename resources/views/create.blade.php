
@extends('app')


@section('content')


<form method="POST" action="{{route('post.store')}}">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea name="desc" class="form-control">
    </textarea>
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
@endsection