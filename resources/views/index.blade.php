@extends('app')

    @section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Iti Blog</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('post.showall')}}">All posts <span class="sr-only">(current)</span></a>
                    </li>
                 
                    </li>
                    </ul>
                </div>
                </nav>

            <a  href="{{route('post.create')}}" class="btn btn-success mb-5"> Create Post</a>
                <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Created On</th>
                <th scope="col">Author</th>
                <th></th>
                <th>Actions</th>
                <th></th>

                </tr>
            </thead>
            <tbody>
          
            @foreach($posts as $post)
                <tr>
                <th scope="row">{{$post['id']}}</th>
                <td>{{$post['title']}}</td>
                <td>{{$post['description']}}</td>
                <td>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</td>
                <td>{{$post->user ? $post->user->name : "not exist"}}</td>
                <td> <a href="{{route('post.show' , ['post' =>$post['id']])}}" class="btn btn-primary btn-sm"> View Details </a> </td>
                <td> <a href="{{route('post.edit' , ['post' =>$post['id']])}}" class="btn btn-secondary btn-sm"> Edit Post </a> </td>
                <td> <a href="{{route('post.delete' , ['post' =>$post['id']])}}" class="btn btn-danger btn-sm"                onclick="return confirm('Are you sure that you want to delete this post ?')">
                          Delete Post </a> </td>

                </tr>
              @endforeach

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  </body>
            @endsection

