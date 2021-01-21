@extends('layouts.main')

 @section('content')   

       <div class="container mt-5">
            <h1 class="text-center mt-5 mb-5">Book {{$book->id}}  detail:</h1>
            <h2 class="mb-2">Title: {{$book->title}}</h2>
            <h3 class="mb-3">Author: {{$book->author}}</h3>
            <h6 class="mb-2">ID: {{$book->id}}</h6>
            <p>Plot:{{$book->plot}}</p>
       </div>

@endsection
