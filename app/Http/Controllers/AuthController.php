<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Book;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showLoginForm()
    {   
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required|string|min:5|max:100",
            "email" => "required|email",
            "password" => "required|min:4",
        ]);

        User::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "password"=> Hash::make($request->password),
        ]);

        return redirect()->route('auth.login');
    }


    public function login(Request $request)
    {   

        $request->validate([
	        'name' => 'required',
	        'password' => 'required',
	    ]);
	

	    $credentials = $request->only('name', 'password');
	
        if(Auth::guard('admin')->attempt($credentials)){
            return redirect()->route('admin');
        }

        if(Auth::attempt($credentials)){
            return redirect()->intended('/logeado')
	            ->withSuccess('Logado Correctamente');
        }

	    return redirect("/login")->withSuccess('Los datos introducidos no son correctos');
    }

    public function logeado(){

        $user = Auth::user();
        $books = Book::all();
        $cartItems = Cart::count();

        return view('auth.logeado',[
            'username' => $user->name,
            'email' => $user->email,
            'books' => $books,
            'cartItems' => $cartItems
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
