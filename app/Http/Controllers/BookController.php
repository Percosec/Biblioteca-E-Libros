<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class BookController extends Controller
{
    
    public function showBooks($id){

        $user = Auth::user();
        $cartItems = Cart::count();
        $book = Book::find($id);

        return view('books.book',[
            "username" => $user->username,
            "email" => $user->email,
            "cartItems" => $cartItems,
            "book" => $book
        ]);
    }

    public function createBook(Request $request){
        
        $request->validate([
            "title" => 'required|string|max:255|regex:/^[^\d]/',
            "author" => 'required|string|regex:/^[^\d]*$/',
            "description" => 'required|string|max:255|regex:/^[^\s]/',
            "image" => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            "price" => 'required|numeric|min:0',
        ],[
            'title.required' => 'El titulo es requerido',
            'title.regex' => 'El titulo no puede comenzar con numeros',
            'author.regex' => 'Solo se permite letras',
            'author.required' => 'El autor es requerido',
            'price.required' => 'El precio es requerido',
            'description.required' => 'La descripción es requerida',
            'description.regex' => 'La descripción no permite espacios al inicio'
        ]);

        if($request->file('image')){

            //Capturamos la imagen
            $image = $request->file('image');

            //Usar el valor del campo "Titulo" como el nombre del archivo
            $imageName = $request->title . '.' . $image->getClientOriginalExtension();  // "Modelo.extensión"

            // Guardar la imagen en la carpeta "/images"
            $img = Storage::putFileAs('/images',$request->image,$imageName,'public');

        }else{
            $img = null;
        }

        Book::create([
            "title" => $request->title,
            "author" => $request->author,
            "description" => $request->description,
            "image" => $img,
            "price" => $request->price,
        ]);

        return redirect('/admin/books')->with('createSuccess','createSuccess');
    }


    public function editBook($id){
        
        $book = Book::find($id);
        return view('admin.bookEdit', compact('book'));
    }

    public function updateBook(Request $request, $id){

        $request->validate([
            "title" => 'required|string|max:255',
            "author" => 'required|string|regex:/^[^\d]*$/',
            "description" => 'required|string|regex:/^[^\s]/',
            "image" => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            "price" => 'required|numeric|min:0',
        ],[
            'author.regex' => 'El autor solo permite letras',
            'description.regex' => 'La descripcion no permite espacios al inicio'
        ]);

        $book = Book::find($id);

        if($request->file('image')){
            $image = $request->file('image');
            $imageName = $request->title. '.'. $image->getClientOriginalExtension();
            Storage::delete('/images/'.$book->image);
            $img = Storage::putFileAs('/images',$request->image,$imageName,'public');
        }

        
        $book->update([
            "title" => $request->title,
            "author" => $request->author,
            "description" => $request->description,
            "image" => $img,
            "price" => $request->price,
        ]);

        return redirect('/admin/books')->with('updateSuccess','updateSuccess');
    }

    
    public function deleteBook($id){

        $book = Book::find($id);
        $book->delete();
        return redirect()->route('admin.books')->with('success','success');
    }


    public function books(){

        $books = Book::where('id','>=',9)->paginate(8);

        return view('books.books',compact('books'));         
    }

    public function booksLogeado(){

        $user = Auth::user();
        $books = Book::where('id','>=',9)->paginate(8);
        $cartItems = Cart::count();

        return view('books.booksLogeado',[
            'username' => $user->username,
            'email' => $user->email,
            'books' => $books,
            'cartItems' => $cartItems,
        ]);
    }
}
