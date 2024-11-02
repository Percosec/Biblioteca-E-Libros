<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $books = Book::where('id','<=',8)->get();

        return view('welcome',compact('books'));
    }
}
