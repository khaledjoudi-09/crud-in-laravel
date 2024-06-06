@extends('layout.app')

@section("title","posts")
  

@section("content")

<div class="container mt-5">
    <h2 class="mb-4 mt-5"> ADD NEW POST</h2>
    <form>
        <div class="form-group"></div>



<a href="/add" class="mb-4"> ADD POST</a>
<table>
    <thead>
        <TR>
            <th>id</th>
            <th>image</th>
            <th>title</th>
            <th>action</th>
            
        </TR>
    </thead>
    <tbody>
       
       @forelse ($posts as $post)   
       <tr>
        <td>{{$post->id}}</td>
        <td><img src="/image/{{$post->id}}"></td>
        <td>{{$post->title}}</td>
        <td>
            <a href="/post/{{$post->id}}">show </a>
             <a href="/post/{{$post->id}}">edit </a> 
             <form action="/post/{{$post->id}}" method="POST">
                @csrf
                @method("delete")
                <input type="submit" value=" delete">

             </form>
            </td>
       </tr>
       @empty
           <p>there is no post😒</p>
       @endforelse

       
    </tbody>
</table>



</form>
</div>

@endsection