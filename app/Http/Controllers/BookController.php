<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book.index', compact("books"));
    }

    public function create()
    {
        $authors = Author::all();
        $genres = Genre::all();
        return view('book.create', compact("authors", "genres"));
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->name = $request->get('name');
        $book->author_id = $request->get('author_id');
        $book->genre_id = $request->get('genre_id');
        $book->save();

        return redirect()->route("book.index");
    }

    public function show($id)
    {
        $book = Book::with("genre", "author")->find($id);
        
        return view('book.show', compact("book"));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        $authors = Author::all();
        $genres = Genre::all();
        
        return view('book.edit', compact("book", "authors", "genres"));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->name = $request->get('name');
        $book->author_id = $request->get('author_id');
        $book->genre_id = $request->get('genre_id');
        $book->save();
        
        return redirect()->route("book.index");
    }

    public function destroy(Request $request)
    {
        Book::destroy( $request->get("book_id") );

        return redirect()->route("book.index");
    }
}
