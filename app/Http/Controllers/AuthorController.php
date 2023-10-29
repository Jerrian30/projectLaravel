<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class authorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        //1. validasi
        $request->validate([
            'author' => 'required|max:255',
            'email' => 'required|max:255|unique:authors,email',
            'address' => 'nullable',
        ]);

        //2. masukan data ke database
        $author = new Author();

        $author->author = $request->author;
        $author->email = $request->email;
        $author->address = $request->address;

        $author->save();

        //3. redirect
        return redirect()
            ->route('authors.index')
            ->with('pesan', 'Data berhasil disimpan');
    }

    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        //1. validasi
        $request->validate([
            'author' => 'required|max:255'. $author->id,
            'email' => 'required|max:255',
            'address' => 'nullable',
        ]);

        //2. update
        $author->author = $request->author;
        $author->email = $request->email;
        $author->address = $request->address;

        $author->save();

        //3. redirect
        return redirect()
            ->route('authors.index')
            ->with('pesan', 'Data berhasil diupdate');
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return redirect()
            ->route('authors.index')
            ->with('pesan', 'Data berhasil dihapus');
    }
}
