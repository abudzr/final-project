@extends('master')
@section('content')


<div class="jumbotron ml-5 mr-5 mt-5 " >

<ul class="nav justify-content-end">
  <li>
    <h5 class="mb-5">{{$post->updated_at}}</h5>
  </li>
</ul>

<!-- like dislike -->
<ul class="nav justify-content-end">
  <li>
    <a href="#" class="fa-3x fas fa-thumbs-up mr-5 text-decoration-none ">
    <h5 class="text-dark">1</h5>
    </a>
  </li>
  <li>
    <a href="#" class="fa-3x fas fa-thumbs-down ml-5 text-decoration-none text-danger">
    <h5 class="text-dark">1</h5></a>
  </li>
</ul>

<!-- pertanyaan -->
  <h1 class="display-4">{{$post->judul}}</h1>
  <p class="lead">{{$post->isi}}</p>

  <!-- jawaban -->
  <hr class="my-4">
 
  <ul class="nav">
    <li>
      <p>tanggaldibuat</p>
    </li>
  </ul>

  <ul class="nav">
    <li>
        <a href="#" class="fa-1x fas fa-thumbs-up mr-2 text-decoration-none">
         <h5  class="text-dark">1</h5>
        </a>
    </li>
    <li>
        <a href="#" class="fa-1x fas fa-thumbs-down ml-2 text-decoration-none text-danger">
         <h5  class="text-dark">1</h5></a>
    </li>
    <li>
      <p class ="ml-3">jawaban</p>
    </li>

</ul>



<!-- komentar -->
  <hr class="my-4">
  

  <ul class="nav">
    <li>
      <p>tanggaldibuat</p>
    </li>
  </ul>


  <ul class="nav">
    <li>
        <a href="#" class="fa-1x fas fa-thumbs-up mr-2 ml-5 text-decoration-none"  >
         <h5 class="text-dark">1</h5>
        </a>
    </li>
    <li>
        <a href="#" class="fa-1x fas fa-thumbs-down ml-2 text-decoration-none text-danger">
         <h5 class="text-dark">1</h5></a>
    </li>
    <li>
       <p class="ml-3"> komentar</p>
    </li>

  </ul>

  <ul class="nav justify-content-end">
   <li>
      <a class="btn btn-primary mt-5 " href="/post/{{$post->id}}/edit">Edit Pertanyaan</a>
   </li>
   
   <form method="POST" action="/post/{{$post->id}}" >
        @csrf
        @method('DELETE')
    
        <input type="submit" value="Hapus Pertanyaan" class="btn btn-danger btn-sm mt-5 ml-2">
    </form>
   
  </ul>
</div>
@endsection