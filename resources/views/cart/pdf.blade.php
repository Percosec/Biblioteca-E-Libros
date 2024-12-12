<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://images.vexels.com/content/229082/preview/book-circles-logo-82dff4.png"
        type="image/x-icon">
    <title>E-Libros</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])  
    
</head>

<body>

    <a href="{{route('deleteCart')}}">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Regresar</button>
    </a>
    <div class="bg-white border rounded-lg shadow-lg px-6 py-8 max-w-md mx-auto mt-8">

        <span class="flex items-center space-x-3 rtl:space-x-reverse justify-center my-4">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class=" w-10 h-10 object-cover">
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-red">E-Libros</span>
        </span>
        <hr class="mb-2">
        <div class="flex justify-between mb-6">
            <h1 class="text-lg font-bold">Boleta</h1>
            <div class="text-gray-700">
                <div>Dia: {{ date('Y-m-d') }}</div>
                <div>Boleta #: INV12345</div>
            </div>
        </div>
        <div class="mb-8">
            <h2 class="text-lg font-bold mb-4">Cobrar a:</h2>
            <div class="text-gray-700 mb-2">{{ ucwords($names) . ' ' . ucwords($surnames) }}</div>
            <div class="text-gray-700 mb-2">{{ $direccion }}</div>
            <div class="text-gray-700 mb-2">{{ $ciudad }}, {{ $distrito }} {{ $postal }}</div>
            <div class="text-gray-700 mb-4">{{ $email }}</div>
        </div>
        <table class="w-full mb-8">
            <thead>
                <tr>
                    <th class="text-left font-bold text-gray-700">Libros</th>
                    <th class="text-right font-bold text-gray-700">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carts as $cart)
                    <tr>
                        <td class="text-left text-gray-700">{{ $cart->book->title }}</td>
                        <td class=" text-center text-gray-700">S/{{ $cart->book->price }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td class="text-left font-bold text-gray-700">Total</td>
                    <td class="text-center font-bold text-gray-700">S/{{ $cartSubTotal }}</td>
                </tr>
            </tfoot>
        </table>
        <div class="font-bold text-2xl mt-10 text-center text-blue-600">
            ¡Gracias por su compra!</div>
    </div>
    <div class="max-w-md mx-auto mt-8 flex justify-center">
        <a href="{{route('pdf',[$direccion,$ciudad,$distrito,$postal])}}" target="_blank">
            <button type="button"
                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Descargar comprobante</button>
        </a>
    </div>


    {{-- max-w-lg mx-auto mt-5 flex justify-center --}}
</body>

</html>
