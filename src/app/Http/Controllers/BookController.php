<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function search(Request $request)
    {
        //検索ワードをフォームに残す
        $title = $request->input('title');
        $author = $request->input('author');
        $publishing_company = $request->input('publishing_company');

        $query = Book::query();

        if (!empty($request->title)) {
            $query->where('title', 'LIKE', "%{$request->title}%");
        }

        if (!empty($request->author)) {
            $query->where('author', 'LIKE', "%{$request->author}%");
        }

        if (!empty($request->publishing_company)) {
            $query->where('publishing_company', 'LIKE', "%{$request->publishing_company}%");
        }

        $books = $query->get();

        return view('books.index', compact('books', 'title', 'author', 'publishing_company'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('books.index');
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $book->title = $request->title;
        $book->isbn_code = $request->isbn_code;
        $book->author = $request->author;
        $book->publishing_company = $request->publishing_company;
        $book->release_date = $request->release_date;
        $book->price = $request->price;
        $book->memo = $request->memo;

        $book->save();
        return redirect()->route('books.index');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
