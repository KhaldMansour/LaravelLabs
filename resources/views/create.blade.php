
@extends('app')


@section('content')


<form method="POST" action="{{route('post.store')}}">
@csrf

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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

    <!-- <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
   -->
  <!-- <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01" name="img">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div> -->

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection