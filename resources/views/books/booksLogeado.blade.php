<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="https://images.vexels.com/content/229082/preview/book-circles-logo-82dff4.png"
        type="image/x-icon">
    <title>E-Libros</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <nav class=" border-gray-200 bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="{{ route('auth.logeado') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="https://images.vexels.com/content/229082/preview/book-circles-logo-82dff4.png"
                        class="h-8" alt="logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">E-Libros</span>
                </a>
                <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <div class="relative hidden md:block">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search icon</span>
                        </div>
                        <form action="{{ route('buscador.logeadoBuscar') }}" method="POST" class="mr-5">
                            <input type="text" id="buscar" name="texto"
                                class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Buscar...">
                        </form>
                        <div id="resultado"
                            class="absolute top-full left-0 w-full  text-sm text-gray-900  border-gray-300 rounded bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 z-50 ">
                        </div>
                    </div>
                    <button type="button"
                        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Abrir menu de usuario</span>
                        <img class="w-8 h-8 rounded-full" src="https://cdn-icons-png.flaticon.com/512/3237/3237472.png"
                            alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm dark:text-white">{{ $username }}</span>
                            <span
                                class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ $email }}</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="{{ route('showcart') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Carrito
                                    @if ($cartItems < 1)
                                        <span
                                            class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs p-3 font-semibold text-white bg-red-600  rounded-md">
                                            {{ $cartItems }}
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs p-3 font-semibold text-white bg-red-600  rounded-md">

                                            {{ $cartItems }}
                                        </span>
                                    @endif
                                </a>
                            </li>
                            <li>
                                <form action="{{ route('auth.logout') }}" method="POST">
                                    @csrf
                                    <a
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        <button type="submit">
                                            Cerrar Sesion
                                        </button>
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-user" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Abrir menú principal</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0    bg-gray-900 border-gray-700 ">
                        <div class="relative mt-3 md:hidden">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="mysearch"
                                class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Buscar...">
                            <ul id="showlist"></ul>
                        </div>
                        <li>
                            <a href="{{ route('auth.logeado') }}"
                                class="block py-2 px-3 md:p-0  rounded hover:bg-gray-400 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                aria-current="page">Inicio</a>
                        </li>
                        <li>
                            <a href="{{ route('booksLogeado') }}"
                                class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 ">Libros</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 md:p-0  rounded hover:bg-gray-400 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contactanos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="Projects"
            class="max-w-screen-xl w-fit mx-auto grid grid-cols-1 breakpoint:grid-cols-4 breakpoint2:grid-cols-3 breakpoint3:grid-cols-2 breakpoint3:gap-x-16 justify-items-center justify-center gap-y-20  breakpoint:gap-x-1 mt-10 mb-5">
            @foreach ($books as $book)
                <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                    @if ($book->image == null)
                        <img src="{{ asset('/images/no-image.jpg') }}" alt="Libro"
                            class="h-80 w-72  object-contain rounded-t-xl" />
                    @else
                        <img src="{{ asset('storage/' . $book->image) }}" alt="Libro"
                            class="h-80 w-72  object-contain rounded-t-xl" />
                    @endif
                    <div class="px-4 py-3 w-72">
                        <p class="text-lg  text-gray-400 truncate block capitalize">{{ $book->author }}</p>
                        <h1 class="text-lg font-bold text-black truncate block capitalize">{{ $book->title }}</h1>
                        <p class="text-lg font-semibold text-black cursor-auto my-3">S/{{ $book->price }}</p>
                        <div class="flex items-center">
                            <a href="{{ route('showBooks', $book->id) }}">
                                <button
                                    class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-yellow-300 dark:hover:bg-yellow-400 dark:focus:ring-yellow-800">Ver
                                    detalle</button>
                            </a>
                            <div class="ml-auto">
                                <form action="{{ route('addcart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $book->id }}">
                                    <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agregar
                                        al Carro</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="flex justify-between items-center mt-4">
                {{-- Botón anterior --}}
                @if ($books->onFirstPage())
                    <span class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Anterior</span>
                @else
                    <a href="{{ $books->previousPageUrl() }}" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Anterior</a>
                @endif

                {{-- Números de página --}}
                <div class="flex space-x-2">
                    @for ($i = 1; $i <= $books->lastPage(); $i++)
                        @if ($i == $books->currentPage())
                            <span class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $i }}</span>
                        @else
                            <a href="{{ $books->url($i) }}"
                                class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $i }}</a>
                        @endif
                    @endfor
                </div>

                {{-- Botón siguiente --}}
                @if ($books->hasMorePages())
                    <a href="{{ $books->nextPageUrl() }}" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Siguiente</a>
                @else
                    <span class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Siguiente</span>
                @endif
            </div>
        </section>
    </main>

    <div class="bg-gray-900">
        <footer>
            <div
                class="bg-gray-900 py-4 text-gray-400  max-w-screen-xl mx-auto flex flex-wrap items-center justify-between">
                <div class="container px-4 mx-auto">
                    <div class="-mx-4 flex flex-wrap justify-between">
                        <div class="px-4 my-4 w-full xl:w-1/5">
                            <a href="{{ route('home.index') }}" class="block w-56 mb-10">
                                <svg version="1.1" viewBox="0 0 3368 512" xmlns="http://www.w3.org/2000/svg">
                                    <g fill="none" fill-rule="evenodd">
                                        <g transform="translate(0 -75)">
                                            <g transform="translate(0 75)">
                                                <rect width="512" height="512" rx="128" fill="#3D5AFE">
                                                </rect>
                                                <rect x="149" y="176" width="220" height="220" fill="#fff">
                                                </rect>
                                                <circle cx="259" cy="156" r="40" fill="#fff"></circle>
                                                <circle cx="369" cy="286" r="40" fill="#2962FF"></circle>
                                            </g>
                                            <text fill="white" font-family="Nunito-Bold, Nunito" font-size="512"
                                                font-weight="bold">
                                                <tspan x="654" y="518">E-Libros</tspan>
                                            </text>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <p class="text-justify">
                                La cadena de librerías con la oferta más amplia y variada de productos de
                                entretenimiento cultural, brindando el mejor nivel de servicio en el mercado peruano.
                                Nos caracterizamos por los altos estándares de respeto, calidez y amabilidad de nuestros
                                colaboradores.
                            </p>
                        </div>

                        <div class="px-4 my-4 w-full sm:w-auto">
                            <div>
                                <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Politica</h2>
                            </div>
                            <ul class="leading-8">
                                <li><a href="#" class="hover:text-blue-400">Sobre nosotros</a></li>
                                <li><a href="#" class="hover:text-blue-400">Terminos y condiciones</a></li>
                                <li><a href="#" class="hover:text-blue-400">Politica de privacidad</a></li>
                                <li><a href="#" class="hover:text-blue-400">Politica de Cookies</a></li>
                            </ul>
                        </div>
                        <div class="px-4 my-4 w-full sm:w-auto">
                            <div>
                                <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Contactanos</h2>
                            </div>
                            <ul class="leading-8">
                                <li><a href="#" class="hover:text-blue-400">912589126</a></li>
                                <li><a href="#" class="hover:text-blue-400">Whatsapp</a>
                                </li>
                                <li><a href="#" class="hover:text-blue-400">Lun a Sáb de 8am a 8pm</a></li>
                                <li><a href="#" class="hover:text-blue-400">atencion@elibros.com.pe</a></li>
                            </ul>
                        </div>
                        <div class="px-4 my-4 w-full sm:w-auto xl:w-1/5">
                            <div>
                                <h2 class="inline-block text-2xl pb-4 mb-4 border-b-4 border-blue-600">Siguenos en
                                    redes
                                </h2>
                            </div>
                            <a href="#"
                                class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 320 512">
                                    <path
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://github.com/Percosec" target="https://github.com/Percosec"
                                class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 496 512">
                                    <path
                                        d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#"
                                class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full hover:text-blue-400 hover:border-blue-400">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                    </path>
                                </svg>
                            </a>
                            <div>
                                <h2 class="inline-block text-2xl pb-4 mt-8 border-b-4 border-blue-600">Libro de
                                    reclamaciones
                                </h2>
                                <a href="#">
                                    <img src="https://www.crisol.com.pe/media/tem-banners/Item_libro_de_reclamaciones_128x80.png"
                                        alt="libro de reclamaciones" class="mt-3">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-indigo-700">
                <div class="bg-indigo-700 py-4 text-gray-100 max-w-screen-xl mx-auto">
                    <div class="container mx-auto px-4">
                        <div class="-mx-4 flex flex-wrap justify-between">
                            <div class="px-4 w-full text-center sm:w-auto sm:text-left">
                                Copyright © 2024
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        window.addEventListener("load", function() {
            const urlMap = {
                "el señor de los anillos": "http://127.0.0.1:8000/logeado/book/1",
                "la metamorfosis": "http://127.0.0.1:8000/logeado/book/2",
                "invitacion al viaje y otros cuentos ineditos": "http://127.0.0.1:8000/logeado/book/3",
                "en agosto nos vemos": "http://127.0.0.1:8000/logeado/book/4",
                "shogun": "http://127.0.0.1:8000/logeado/book/5",
                "100 grandes triunfos. épicos partidos en cien años de garra": "http://127.0.0.1:8000/logeado/book/6",
                "el libro de bill": "http://127.0.0.1:8000/logeado/book/7",
                "el perfil del lagarto": "http://127.0.0.1:800/logeado/book/8",
                "el sistema financiero en el perú, historia y numismática": "http://127.0.0.1:8000/logeado/book/9",
                "el último dictador": "http://127.0.0.1:8000/logeado/book/10",
                "el cuervo": "http://127.0.0.1:8000/logeado/book/11",
                "la guerra de los mundos": "http://127.0.0.1:8000/logeado/book/12",
                "etereo": "http://127.0.0.1:8000/logeado/book/13",
                "uzumaki": "http://127.0.0.1:8000/logeado/book/14",
                "padre rico, padre pobre": "http://127.0.0.1:8000/logeado/book/15",
                "cronica de una muerte anunciada": "http://127.0.0.1:8000/logeado/book/16",
                "don quijote de la mancha": "http://127.0.0.1:8000/logeado/book/17",
                "el regreso del huáscar": "http://127.0.0.1:8000/logeado/book/18",
                "el padrino": "http://127.0.0.1:8000/logeado/book/19",
                "la divina comedia": "http://127.0.0.1:8000/logeado/book/20",
                "la ciudad y los perros": "http://127.0.0.1:8000/logeado/book/21",
                "plata como cancha": "http://127.0.0.1:8000/logeado/book/22",
                "historia de la corrupción en el perú": "http://127.0.0.1:8000/logeado/book/23",
                "las aventuras de robin hood": "http://127.0.0.1:8000/logeado/book/24",
                "el principito": "http://127.0.0.1:8000/logeado/book/25"
                // Añade aquí tantos títulos y URLs como necesites
            };

            const buscar = document.getElementById('buscar');
            const resultado = document.getElementById('resultado');

            function normalizeTitle(title) {
                return title.trim().toLowerCase();
            }

            function contieneCaracteresEspeciales(str) {
                const regex = /[^a-zA-Z0-9\s]/;
                return regex.test(str);
            }

            buscar.addEventListener("keyup", (e) => {
                if (buscar.value.trim() === "") {
                    resultado.innerHTML = "";
                    return;
                }

                // Prevenir acción por defecto al presionar Enter si las condiciones no se cumplen
                if (e.key === 'Enter' && (contieneCaracteresEspeciales(buscar.value) || buscar.value
                        .trim() === "" || !(normalizeTitle(buscar.value) in urlMap))) {
                    e.preventDefault();
                    return;
                }

                fetch(`/logeado/buscador`, {
                        method: 'POST',
                        body: JSON.stringify({
                            texto: buscar.value
                        }),
                        headers: {
                            "Content-Type": "application/json",
                            "X-Requested-With": "XMLHttpRequest",
                            "X-CSRF-Token": document.head.querySelector("[name~=csrf-token][content]")
                                .content
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        var html = "";
                        if (data.success) {
                            html += "<ul>";
                            let noResult = true;
                            for (var i in data.data) {
                                const normalizedTitle = normalizeTitle(data.data[i].title);
                                let url = urlMap[normalizedTitle] || "";
                                if (url) {
                                    noResult = false;
                                    html += "<li><a href='" + url + "'>" + data.data[i].title +
                                        "</a></li>";
                                }
                            }
                            html += "</ul>";
                            resultado.innerHTML = html;

                            // Prevenir acción por defecto si no hay resultados válidos al presionar Enter
                            if (e.key === 'Enter' && noResult) {
                                e.preventDefault();
                            }
                        } else {
                            html += "No existen resultados";
                            resultado.innerHTML = html;

                            // Prevenir acción por defecto si no hay resultados al presionar Enter
                            if (e.key === 'Enter') {
                                e.preventDefault();
                            }
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    </script>
</body>

</html>
