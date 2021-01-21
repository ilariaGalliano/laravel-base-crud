@extends('layouts.main')

 @section('content')   

       <div class="container mt-5">
           <h1 class="text-center mb-3">Add New Books:</h1>
           <p class="mb-3"> And here <span style="color: #058e24;">ADD</span> few more books that you highly recommend:</p>

           @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
           @endif



           <form action="{{ route('books.store') }}" method="POST">
                @csrf
                @method('POST')

                <div>
                    <label for="title">Book Title</label>
                    <input class="form-control" type="text" name="title">
                </div>
                <div>
                    <label for="author">Author</label>
                    <input class="form-control" type="text" name="author">
                </div>
                <div>
                    <label for="plot">Summary-Plot</label>
                    <textarea class="form-control" name="plot"></textarea>
                </div>
                <div>
                    <input class="btn btn-success mt-3" type="submit" value="Add">
                </div>
           </form>

       </div>

@endsection
