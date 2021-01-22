@extends('layouts.main')

 @section('content')   

       <div class="container">
            <h1 class="text-center mt-5 mb-4">Book list</h1>
            <h3 class="text-center mb-4">Welcome to my paradise of books. </h3>

            <p class="font-weight-bold mb-4 text-center">I've put together this list of books I think would be a good addition to your "To Read" list.
                <br>
                Do you have a favourite you'd like to recommend? 
                If so, please click <a style="color: #058e24;" href="{{ route('books.index') }}">Here</a>. We'll be <a style="color: #058e24;"> SUPER HAPPY.</a>
            </p>

            @if (session('deleted'))
                <div class="alert alert-danger">
                    {{session('deleted')}} Successfully deleted
                </div>
            @endif

         <table class="table table-striped">
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
                            </td>
                            <td>
                                <a href="{{ route('books.edit', $book->id)}}" class="btn btn-primary mr-2">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('books.destroy', $book->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" class="btn btn-danger" value="Delete">

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 
       </div>


@endsection
