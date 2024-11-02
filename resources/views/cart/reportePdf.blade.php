<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://images.vexels.com/content/229082/preview/book-circles-logo-82dff4.png"
        type="image/x-icon">
    <title>E-Libros</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            display: flex; 
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .receipt {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-left: 15%;
        }

        .receipt h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .receipt .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .receipt .header img {
            width: 50px;
            height: 50px;
        }

        .receipt .header div {
            text-align: right;
        }

        .receipt .details {
            margin-bottom: 20px;
        }

        .receipt .details p {
            margin: 5px 0;
        }

        .receipt .items {
            margin-bottom: 20px;
        }

        .receipt .items table {
            width: 100%;
            border-collapse: collapse;
        }

        .receipt .items table th,
        .receipt .items table td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        .receipt .total {
            text-align: right;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .receipt .footer {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: #007bff;
        }

    </style>
</head>

<body>
    <div class="receipt">
        <h1>Boleta de Compra</h1>
        <div class="header">
                <span style="margin-right: 120px;">Fecha: {{ date('Y-m-d') }}</span>
                <span>Boleta #: INV12345</span>
        </div>
        <div class="details">
            <p>Nombre: {{ ucwords($names) . ' ' . ucwords($surnames) }}</p>
            <p>Dirección: {{ $direccion }}</p>
            <p>Correo: {{ $email }}</p>
        </div>
        <div class="items">
            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carts as $cart)
                        <tr>
                            <td>{{ $cart->book->title }}</td>
                            <td>S/{{ $cart->book->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="total">
            Total: S/{{ $cartSubTotal }}
        </div>
        <div class="footer">
            ¡Gracias por su compra!
        </div>
    </div>
</body>

</html>
