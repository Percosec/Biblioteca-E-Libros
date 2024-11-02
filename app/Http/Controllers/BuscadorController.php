<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BuscadorController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function buscar(Request $request)
    {

        $response = [
            "success" => false,
            "message" => "Hubo un error"
        ];

        if ($request->ajax()) {
            $data = Book::where("title", "like", $request->texto . "%")->take(5)->get();
            $response = [
                "success" => true,
                "message" => "Consulta correcta",
                "data" => $data
            ];
        }

        return response()->json($response);
    }

    public function indexBuscar()
    {
        return view('auth.logeado');
    }

    // public function logeadoBuscar(Request $request){
    //     $response = [
    //         "success" => false,
    //         "message" => "Hubo un error"
    //     ];

    //     if($request->ajax()){
    //         $data = Book::where("title","like",$request->texto."%")->take(5)->get();
    //         $response = [
    //             "success" => true,
    //             "message" => "Consulta correcta",
    //             "data" => $data
    //         ];
    //     }

    //     return response()->json($response);
    // }

    public function logeadoBuscar(Request $request)
    {
        $response = [
            "success" => false,
            "message" => "Hubo un error"
        ];
    
        if ($request->ajax()) {
            $data = Book::where("title", "like", $request->texto . "%")->take(5)->get();
            $response = [
                "success" => true,
                "message" => "Consulta correcta",
                "data" => $data
            ];
        }
        return response()->json($response);
    }
    
}
