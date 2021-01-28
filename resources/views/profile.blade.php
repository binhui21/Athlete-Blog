@extends('layouts.app')
@section('content')

@if(session()->get('deleted'))
                    <div class="alert alert-success">
                        {{ session()->get('deleted') }}
                    </div>
                @endif
<div class="container">
@if(session('jsAlert'))
  <div class="alert alert-success">
    {{ session('jsAlert') }}
  </div>
@endif

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-3">
              <img class="rounded-circle" width="150" src="/storage/{{ $profile->image }}">
            </div>
            <div class="col-md-9">
              <h3>{{ $user->name }}</h3>
              <span><strong>{{ $postscount }}</strong> posts</span>
              <div class="pt-3">{{$profile->description}}</div>
              <div class="pt-3"><a href="/profile/edit">Edit profile</a></div>
            </div>
            </div>
          </div>
          <div class="container">
    <h1>{{ $user->name }}'s posts</h1>
    @foreach($posts as $post)
        <div class="card" style="width: 20rem;">

            <img src="/storage/{{$post->image}}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->caption}}</p>
            </div>
            
          </div>
          <div class="d-flex flex-row">
          <form action="{{ route('post.destroy',$post->id)}}" enctype="multipart/form-data" method="delete"> 
           @csrf
          <input type="hidden" name="id" value="{{ $post->id }}">
          <button type="submit" class="btn btn-primary m-1">Delete</button>
          </form>
          <form action="{{ route('post.edit',$post->id)}}" enctype="multipart/form-data" method="edit"> 
           @csrf
          <input type="hidden" name="id" value="{{ $post->id }}">
          <button type="submit" class="btn btn-primary m-1">Edit</button>
          </form>
            
          </div>       
    @endforeach
</div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection