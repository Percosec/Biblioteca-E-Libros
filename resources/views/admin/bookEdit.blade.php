<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <a href="{{route('admin.books')}}">
        <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline ml-4 mt-5">
            <i class="fa-solid fa-arrow-left"></i>
            Regresar
        </button>
    </a>
    <form action="{{route('books.update',$book->id)}}" method="POST" class="max-w-md mx-auto mt-9 p-6 bg-white border rounded-lg shadow-lg">
        @csrf
        @method('PUT')
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white ">Editar Libro</h2>
        <hr>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2 mt-3" for="title">
                Titulo
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="title" type="text" placeholder="Titulo del Libro" required value="{{ $book->title }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="author">
                Autor
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="author" type="text" placeholder="Autor del Libro" required value="{{ $book->author }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="image">
                Imagen
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="image" type="text" placeholder="Pega el link de la imagen" required
                value="{{ $book->image }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="price">
                Precio
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="price" type="number" placeholder="S/100.00" required value="{{ $book->price }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="description">
                Descripción
            </label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="description" rows="5" placeholder="Escribe la descripcion del libro aqui" required>{{ $book->description }}</textarea>
        </div>
        <button
            class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline"
            type="submit">
            <i class="fa-solid fa-rotate-right mr-2"></i>
            Actualizar Libro
        </button>
    </form>
</body>

</html>
