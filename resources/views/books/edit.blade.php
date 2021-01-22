@extends('layouts.main')

 @section('content')   

       <div class="container mt-5">
           <h1 class="text-center mb-3">Edit Book: {{ $book->title }}:</h1>

           @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
           @endif



           <form action="{{ route('books.update',$book ->id) }}" method="POST">
                @csrf
                @method('PATCH')

                <div>
                    <label for="title">Book Title</label>
                    <input class="form-control" type="text" name="title" value="{{ old('title', $book->title ) }}">
                </div>
                <div>
                    <label for="author">Author</label>
                    <input class="form-control" type="text" name="author" value="{{ old('author', $book->author ) }}">
                </div>
                <div>
                    <label for="plot">Summary-Plot</label>
                    <textarea class="form-control" name="plot">{{ old('plot', $book->plot) }}</textarea>
                </div>
                <div>
                    <input class="btn btn-success mt-3" type="submit" value="Edit">
                </div>
           </form>

       </div>

@endsection
