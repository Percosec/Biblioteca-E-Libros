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

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            "username" => "required|string|min:5|max:20|regex:/^[a-zA-Z0-9]+$/|not_regex:/^\d/|unique:users,username",
            "names" => "required|string|min:2|max:50|regex:/^[a-zA-ZáéíóúÁÉÍÓÚÑñ ]+$/u",
            "surnames" => "required|string|min:2|max:50|regex:/^[a-zA-ZáéíóúÁÉÍÓÚÑñ ]+$/u",
            "phone" => "required|integer|regex:/^(?!1)(\+\d{1,3}[- ]?)?\d{7,14}$/|unique:users,phone|not_in:111111111,222222222,333333333,444444444,555555555,666666666,777777777,888888888,999999999,000000000",
            "email" => "required|email|unique:users,email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",
            "password" => "required|min:4|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^\w]).*$/",
            "password_confirmation" => "required|same:password",
        ], [
            "username.required" => "El usuario es requerido.",
            "username.min" => "El nombre de usuario debe tener al menos 3 caracteres.",
            "username.max" => "El nombre de usuario no puede exceder los 20 caracteres.",
            "username.regex" => "El nombre de usuario solo puede contener letras, números",
            "username.not_regex" => "El nombre de usuario no puede comenzar con un número.",
            "username.unique" => "El nombre de usuario ya está en uso.",
            "names.required" => "El nombre es requerido.",
            "names.min" => "El nombre debe tener al menos 2 caracteres.",
            "names.max" => "El nombre no puede exceder los 50 caracteres.",
            "names.regex" => "El nombre solo puede contener letras",
            "surnames.required" => "El apellido es requerido.",
            "surnames.min" => "El apellido debe tener al menos 2 caracteres.",
            "surnames.max" => "El apellido no puede exceder los 50 caracteres.",
            "surnames.regex" => "El apellido solo puede contener letras",
            "phone.required" => "El teléfono es requerido.",
            "phone.unique" => "El teléfono solo puede ser unico para cada usuario",
            "phone.regex" => "El formato del número de teléfono no es válido.",
            'phone.not_in' => 'El número de teléfono no puede ser repetitivo.',
            "email.required" => "El email es requerido.",
            "email.email" => "El formato del correo electrónico no es válido.",
            "email.unique" => "El correo electrónico ya está en uso.",
            "password.required" => "La contraseña es requerida.",
            "password.regex" => "La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.",
            "password_confirmation.required" => "La confirmación de contraseña es requerida.",
            "password_confirmation.same" => "La confirmación de contraseña no coincide con la contraseña ingresada.",
        ]);

        User::create([
            "username" => $request->username,
            "names" => $request->names,
            "surnames" => $request->surnames,
            "phone" => $request->phone,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);

        return redirect()->route('auth.login');
    }


    public function login(Request $request)
    {

        // $request->validate([
        //     'username' => 'required|string|min:5|max:20|not_regex:/^\d/|regex:/^[a-zA-Z0-9]+$/',
        //     'password' => 'required|min:4',
        // ], [
        //     'username.required' => 'El usuario es requerido.',
        //     "username.min" => "El nombre de usuario debe tener al menos 3 caracteres.",
        //     "username.max" => "El nombre de usuario no puede exceder los 20 caracteres.",
        //     'username.not_regex' => 'El nombre de usuario no puede comenzar con un número.',
        //     "username.unique" => "El nombre de usuario ya está en uso.",
        //     'password.required' => 'La contraseña es requerida.',
        // ]);


        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin');
        }

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/logeado')
                ->withSuccess('Logeado Correctamente');
        }

        return redirect("/login")->with('error','Las credenciales proporcionadas son incorrectas');
    }

    public function logeado()
    {

        $user = Auth::user();
        $books = Book::where('id','<=',8)->get();
        $cartItems = Cart::count();

        return view('auth.logeado', [
            'username' => $user->username,
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
