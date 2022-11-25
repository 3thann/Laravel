<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('author.index', compact("authors"));
    }

    public function create()
    {
        return view('author.create');
    }

    public function store(Request $request)
    {
        $author = new Author();
        $author->first_name = $request->get('first_name');
        $author->last_name = $request->get('last_name');
        $author->save();

        return redirect()->route("author.index");
    }

    public function show($id)
    {
        $author = Author::find($id);
        
        return view('author.show', compact("author"));
    }

    public function edit($id)
    {
        $author = Author::find($id);
        
        return view('author.edit', compact("author"));
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $author->first_name = $request->get('first_name');
        $author->last_name = $request->get('last_name');
        $author->save();
        
        return redirect()->route("author.index");
    }

    public function destroy(Request $request)
    {
        Author::destroy( $request->get("author_id") );

        return redirect()->route("author.index");
    }
}