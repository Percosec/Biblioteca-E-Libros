<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class CartController extends Controller
{

    public function showCart()
    {
        $cartSubTotal = 0.0;
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->with('book')->get();
        $cartItems = Cart::count();
        session(['cartItems' => $cartItems]);

        foreach ($cart as $item) {
            $cartSubTotal += $item->book->price;
        }

        return view('cart.cartItems', ['carts' => $cart, 'username' => $user->username, 'email' => $user->email, 'cartItems' => $cartItems, "cartSubTotal" => $cartSubTotal]);
    }

    public function addCart(Request $request)
    {

        $user = Auth::user();
        $book = Book::find($request->id);

        if (Cart::where('book_id', $book->id)->exists()) {
            return redirect()->route('auth.logeado');
        }

        Cart::create([
            'user_id' => $user->id,
            'book_id' => $book->id,
        ]);



        return redirect()->route('showcart');
    }


    public function deleteBookCart($id)
    {

        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->route('showcart');
    }


    public function boleta()
    {

        $cartSubTotal = 0.0;
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->with('book')->get();
        $cartItems = Cart::count();
        session(['cartItems' => $cartItems]);

        foreach ($cart as $item) {
            $cartSubTotal += $item->book->price;
        }

        return view('cart.boleta', ['carts' => $cart, 'username' => $user->username, 'email' => $user->email, 'cartItems' => $cartItems, 'names' => $user->names, 'surnames' => $user->surnames, "cartSubTotal" => $cartSubTotal]);
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'direccion' => 'required|string|max:255|regex:/^[\p{L}\d\s\.]+$/u', // Dirección: obligatorio, texto, máximo 255 caracteres
            'ciudad' => 'required|string|max:100|regex:/^[\p{L}\d\s]+$/u', // Ciudad: obligatorio, texto, máximo 100 caracteres
            'distrito' => 'required|string|max:100|regex:/^[\p{L}\d\s]+$/u', // Distrito: obligatorio, texto, máximo 100 caracteres
            'postal' => 'required|regex:/^[0-9]+$/|max:20', // Código postal: obligatorio, solo dígitos, máximo 20 caracteres
        ], [
            'direccion.required' => 'obligatorio*',
            'ciudad.required' => 'obligatorio*',
            'distrito.required' => 'obligatorio*',
            'postal.required' => 'obligatorio*',
        ]);

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $products = $request->input('products'); // Asegúrate de que estás obteniendo los productos correctamente
        if (is_null($products)) {
            return redirect()->route('showcart')->with('error', 'No se han encontrado productos en el carrito.');
        }

        $lineItems = [];

        foreach ($products as $product) {
            $title = $product['title'];
            $unitPrice = $product['total']; // Precio unitario
            $quantity = $product['quantity'];
            $totalPriceInCents = intval($unitPrice * 100); // Precio total para la cantidad dada, en soles

            $lineItems[] = [
                'price_data' => [
                    'currency' => 'PEN', // PEN para soles
                    'product_data' => [
                        'name' => $title,
                    ],
                    'unit_amount' => intval($unitPrice * 100), // Precio unitario en soles
                ],
                'quantity' => $quantity,
            ];
        }

        $session = \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('success', [$request->direccion, $request->ciudad, $request->distrito, $request->postal]),
            'cancel_url' => route('showcart'),
        ]);

        return redirect()->away($session->url);
    }


    public function success($direccion, $ciudad, $distrito, $postal)
    {
        $cartSubTotal = 0.0;
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->with('book')->get();

        foreach ($cart as $item) {
            $cartSubTotal += $item->book->price;
        }

        return view('cart.pdf', ['names' => $user->names, 
        'surnames' => $user->surnames, 
        'email' => $user->email, 
        'carts' => $cart, 
        'cartSubTotal' => $cartSubTotal, 
        'carts' => $cart, 'direccion' => $direccion, 'ciudad' => $ciudad,'distrito'=>$distrito,'postal'=>$postal]);
    }


    public function pdf($direccion, $ciudad, $distrito, $postal){
        $cartSubTotal = 0.0;
        $user = Auth::user();
        $cart = Cart::where('user_id', $user->id)->with('book')->get();

        foreach ($cart as $item) {
            $cartSubTotal += $item->book->price;
        }


        $pdf = Pdf::loadView('cart.reportePdf',['names' => $user->names, 
        'surnames' => $user->surnames, 
        'email' => $user->email, 
        'carts' => $cart, 
        'cartSubTotal' => $cartSubTotal, 
        'carts' => $cart, 'direccion' => $direccion, 'ciudad' => $ciudad,'distrito'=>$distrito,'postal'=>$postal]);

        return $pdf->stream('reporte_libros.pdf');
    }
}
