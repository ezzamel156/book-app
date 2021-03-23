<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        $grandTotal = $books->pluck('total')->sum();

        return view('books.index', compact('books','grandTotal'));
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'address' => ['required'],
            'qty' => ['required', 'integer', 'min:0'],
            'price' => ['required', 'integer', 'min:0'],
        ]);
        
        $book = Book::create($validatedData);        

        return redirect('/book');
    }
}
