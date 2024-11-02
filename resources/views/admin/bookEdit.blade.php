<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://images.vexels.com/content/229082/preview/book-circles-logo-82dff4.png"
        type="image/x-icon">
    <title>E-Libros</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <a href="{{ route('admin.books') }}">
        <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline ml-4 mt-5">
            <i class="fa-solid fa-arrow-left"></i>
            Regresar
        </button>
    </a>
    <form action="{{ route('books.update', $book->id) }}" method="POST"
        class="max-w-md mx-auto mt-9 p-6 bg-white border rounded-lg shadow-lg" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h2 class="text-lg font-semibold text-gray-900 dark:text-white ">Editar Libro</h2>
        <hr>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2 mt-3" for="title">
                Titulo
            </label>
            <input name="title"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="title" type="text" placeholder="Titulo del Libro" required value="{{ $book->title }}">

            @error('title')
                <small class=" text-red-600">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="author">
                Autor
            </label>
            <input name="author"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="author" type="text" placeholder="Autor del Libro" required value="{{ $book->author }}">

            @error('author')
                <small class=" text-red-600">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block mb-3 font-bold text-gray-700">Imagen</label>
            @if ($book->image == null)
                <img src="{{ asset('images/no-image.jpg') }}" alt="imagen" id="imgPreview" class="mb-5">
            @else
                <img src="{{ asset('storage/' . $book->image) }}" alt="imagen" id="imgPreview" class="mb-5">
            @endif
            <label for="image" class=" bg-slate-200 px-4 py-2 rounded-lg cursor-pointer">
                <i class="fa-solid fa-camera mr-2"></i>
                Actualizar imagen
                <input type="file" name="image" id="image" class="hidden" accept="image/*"
                    onchange="previewImage(event,'#imgPreview')">
            </label>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="price">
                Precio
            </label>
            <input name="price"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="price" type="number" placeholder="S/100.00" required value="{{ $book->price }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="description">
                Descripción
            </label>
            <textarea name="description"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="description" rows="5" placeholder="Escribe la descripcion del libro aqui" required>{{ $book->description }}</textarea>

            @error('description')
                <small class=" text-red-600">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
        </div>
        <button
            class="bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline"
            type="submit">
            <i class="fa-solid fa-rotate-right mr-2"></i>
            Actualizar Libro
        </button>
    </form>
    
    <script>
        function previewImage(event, querySelector) {

            //Recuperamos el input que desencadeno la acción
            const input = event.target;

            //Recuperamos la etiqueta img donde cargaremos la imagen
            $imgPreview = document.querySelector(querySelector);

            // Verificamos si existe una imagen seleccionada
            if (!input.files.length) return

            //Recuperamos el archivo subido
            file = input.files[0];

            //Creamos la url
            objectURL = URL.createObjectURL(file);

            //Modificamos el atributo src de la etiqueta img
            $imgPreview.src = objectURL;

        }
    </script>
</body>

</html>
