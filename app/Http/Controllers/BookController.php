<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books= Book::all();
        return view('books.index', compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // Validation
        $request->validate([
            'title' => 'required|unique:books|max:30',
            'author' => 'required',
            'plot' => 'required'
        ]);

        // Save data on DB
        $book = new Book();
        /* $book->title = $data['title'];
        $book->author = $data['author'];+
        $book->plot = $data['plot']; */

        $book->fill($data);

        $saved = $book->save();
        //dd($saved);

        // Redirect
        if($saved){
            return redirect()->route('books.show', $book->id );
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);

        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);

        return view ('books.edit' , compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Data from form 
        $data = $request->all();
        $book = Book::find($id);

        // Validation 
        $request->validate([
            'title' =>[
                'required',
                Rule::unique('books')->ignore($id),
                'max:30'
            ],
            'author' => 'required',
            'plot' => 'required'
        ]);

        // Update data DB
        $updated = $book->update($data);

        if($updated){
            return redirect()->route('books.show', $book->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $reference = $book->title;

        $deleted=$book->delete();

        if($deleted){
            return redirect()->route('books.index')->with('deleted', $reference);
        }
    }
}
