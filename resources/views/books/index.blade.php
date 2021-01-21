@extends('layouts.main')

 @section('content')   

       <div class="container">
            <h1 class="text-center mt-5 mb-5">Book list</h1>

         <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{$book->id}}</td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td class="text-center d-flex" width="100">
                                <a href="{{ route('books.show', $book->id)}}" class="btn btn-success mr-2">
                                    Info  
                                </a>
                                <a href="{{ route('books.show', $book->id)}}" class="btn btn-primary mr-2">
                                    Edit
                                </a>
                                <a href="{{ route('books.show', $book->id)}}" class="btn btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 
       </div>


@endsection
