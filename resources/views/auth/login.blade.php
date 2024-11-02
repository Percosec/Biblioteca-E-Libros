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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <a href="{{ route('home.index') }}" class=" absolute left-5 mt-5">
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-5 py-3 me-2  focus:outline-none">
            <i class="fa-solid fa-arrow-left"></i>
            <span class=" font-bold">Regresar</span>
        </button>
    </a>
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8 px-6">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-10 w-auto" src="https://www.svgrepo.com/show/301692/login.svg" alt="Workflow">
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Iniciar sesión
            </h2>
            <p class="mt-2 text-center text-sm leading-5 text-blue-500 max-w">
                O
                <a href="{{ route('auth.register') }}"
                    class="font-medium text-blue-500 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                    crea una nueva cuenta
                </a>
            </p>
        </div>


        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form action="{{ route('auth.logearse') }}" method="POST">
                    @csrf
                    <div>
                        @if (session('error'))
                            <strong class=" text-red-600">{{ session('error') }}</strong>
                        @endif
                        <label for="username" class="block text-sm font-medium leading-5  text-gray-700 mt-3">Usuario</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="username" name="username" placeholder="adrian01" type="text"
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                value="{{ old('username') }}">

                        </div>
                        {{-- @error('username')
                            <small class=" text-red-600">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror --}}
                    </div>

                    <div class="mt-6">
                        <label for="password"
                            class="block text-sm font-medium leading-5 text-gray-700">Contraseña</label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="password" name="password" type="password" placeholder="**********"
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                        {{-- @error('password')
                            <small class=" text-red-600">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror --}}
                    </div>
                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                iniciar sesión
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
