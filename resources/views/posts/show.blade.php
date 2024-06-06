@extends('layout.app')

@section("title","post")
  
@section('content')
  



  @section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">{{ $post->title }}</h1>
            <p class="card-text">{{ $post->description }}</p>
            
            <img src="/images/{{ $post->image }}" style="width: 300px; height: 200px;" alt="{{ $post->title }}">
            <a href="/" class="btn btn-primary mt-3">Back to Home</a>
        </div>
    </div>

</div>
</div>
</div>
@endsection

