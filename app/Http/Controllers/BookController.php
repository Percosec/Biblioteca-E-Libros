<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function createBook(Request $request){
        
        $request->validate([
            "title" => 'required|string|max:255',
            "author" => 'required|string|max:255',
            "description" => 'required|string|min:10',
            "image" => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            "price" => 'required|numeric|min:0',
        ]);

        Book::create($request->all());

        return redirect('/admin/books');
    }


    public function editBook($id){
        
        $book = Book::find($id);
        return view('admin.bookEdit', compact('book'));
    }

    public function updateBook(Request $request, $id){

        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'description' => 'required|string|min:10',
            'image' => 'required',
            'price' => 'required|numeric|min:0',
        ]);

        

        $book = Book::find($id);
        $book->update($request->all());

        return redirect()->route('admin.books');
    }

    
    public function deleteBook($id){

        $book = Book::find($id);
        $book->delete();
        return redirect()->route('admin.books');
    }

    


}
