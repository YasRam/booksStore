<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookController extends Controller
{
    function index($count = 10)
    {
        $data = Book::Paginate($count);
        // $data = Book::select('title')->get();
        // $data = Book::where('id','=',1)->get();
        // $data = Book::select('title')->where('id','>',1)->paginate(1);
        // dd($data);
        return view('books.index', compact('data'));
    }
    function show($id)
    {
        $data = Book::find($id);
        return view('books.bookdetailes', compact('data'));
    }

    function add()
    {
        return view('books.addBook');
    }

    function store(Request $request)
    {
        // dd($request);
        // $request->validate([

        // ])
        // dd($request->authername);
        $request->validate([
            'title' => 'required|string',
            'authername' => 'required|integer'
        ]);

        Book::create([
            'title' => $request->title,
            'authername' => $request->authername
        ]);
        return redirect()->route('books.all');
        // return "aaa";
    }

    function update($id)
    {
        Session::put('path',request()->server("HTTP_REFERER"));
        // dd(request()->server("HTTP_REFERER"));
        $book = Book::find($id);
        return view('books.update', compact('book'));
    }
    function edit($id, Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:5',
            'authername' => 'required|integer'
        ]);

        $book = Book::find($id);
        $book->update([
            'title' => $request->title,
            'authername' => $request->authername
        ]);

// dd(Session::get("path"));
        return redirect(Session::get("path"));
    }

    function delete(Book $book) {
        $book -> delete();  
        return redirect()->route('books.all');

    }
}
