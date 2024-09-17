<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{   

    public function showCart(){

        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->with('book')->get();
        $cartItems = Cart::count();
    
        return view('cart.cartItems',['carts' => $cart,'username' => $user->name,'email' => $user->email,'cartItems'=>$cartItems]);
    }

    public function addCart(Request $request){

        $user = Auth::user();
        $book = Book::find($request->id);

        if(Cart::where('book_id',$book->id)->exists()){
            return redirect()->route('auth.logeado');
        }

        Cart::create([
            'user_id' => $user->id,
            'book_id' => $book->id,
        ]);

        

        return redirect()->route('auth.logeado');
        // return view('cart.cart',['cart' => $cart,
        //     'book_id' => $book->id,
        //     'bookImage'=> $book->image,
        //     'bookTitle'=>$book->title,
        //     'bookDescription'=>$book->description,
        //     'bookPrice'=>$book->price,
        //     'username' => $user->name,
        //     'email' => $user->email
        // ]);
    }


    public function deleteBookCart($id){

        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->route('showcart');
    }

}
    


