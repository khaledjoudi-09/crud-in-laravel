@extends('layout.app')

@section("title","edit post")
  


@section('content')
<div class="container mt-5">
  <h2 class="mb-4">EDIT POST</h2>
  
  <form action="/post/{{$post->id}}" method="POST" enctype="multipart/form-data style="display:inline;>
      @csrf
      @method('PUT') 
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" rows="4">{{ $post->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <img src="/images/{{ $post->image }}">
        <input type="file" name="image" class="form-control-file" id="image">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Send</button>
</form>
</div>
@endsection



























<!--
<1@section("content")
 








  

  <div class="container mt-5">
    <h2 class="mb-4"> ADD POST</h2>
    <form action="/post" method="POST" enctype="multipart/form-data">
     <1   1@csrf
        <div class="form-group"></div>
            <label for="title">title</label>
            <input type="text"  id="title" placeholder="enter title">
        
        <div class="form-group"></div>
            <label for="description">description</label>
            <textarea class="form-control" id="description" rows="4" placeholder="enter description "></textarea>
        <div class="form-group"></div>
            <label for="image"></label>
            <input type="file" class="form-control-file" id="image">
        <br>
        <br>
        <button type="submit" class="btn btn-primary">send</button>
    </form>
</div>


<1@endsection

-->



<!--
<form >              
    <div class="mb-3">           
      <label for="" class="form-label">Title</label>           
      <input type="text"  id="Title" aria-describedby="emailHelp">           
                 
    </div>           
    <div class="mb-3">           
      <label for="" class="form-label">description</label>           
     <input type="tixt"  id="description">           
    </div>           
    <div class="mb-3 form-check">           
      <input type="checkbox" class="form-check-input" id="exampleCheck1">          
      <label class="form-check-label" for="exampleCheck1">Check me out</label>          
    </div>           
    <input type="file" id="image" name="image">           
       </div>                 
    <button type="submit" class="btn btn-primary">Submit</button>          
  </form>      -->   