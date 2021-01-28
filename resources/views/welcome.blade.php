@extends('layouts.app')
<script src="{{ mix('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/welcome.js') }}"></script>

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
      <H2 id="welcome">Welcome to Athlete Blog</H2>
    </div>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2" >
      <h3>Weather</h3>
      <span id="weather" inline-flex></span>
      <span>, </span>
      <span id="temp" inline-flex></span>
      <span>&#8451;</span>  
    </div>
  </div>
      
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card">
        <div class="container">
          @foreach($posts as $post)
            <div class="card" style="width: 20rem;">
              <img src="/storage/{{$post->image}}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text">{{$post->caption}}</p>
                </div>
            </div>                   
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>

@endsection