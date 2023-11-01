<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <div x-data="{ cartOpen: false , isOpen: false }" class="bg-off_white">
        @include('header_carrinho')
        <main class="my-8">
            <section class="text-gray-700 body-font overflow-hidden bg-white">
                <div class="container px-5 py-24 mx-auto">
                    <div class="lg:w-4/5 mx-auto flex flex-wrap">
                        <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="{{ $products->imagem }}">
                        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                            <h2 class="text-sm title-font text-gray-500 tracking-widest"></h2>
                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-8">{{ $products->name }}</h1>
                            <p class="leading-relaxed">{{ $products->descricao }}</p>
                            <div class="flex mt-10">
                                <span class="title-font font-medium text-2xl text-gray-900">${{ $products->valor }}</span>
                                    <form class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded" action="{{ route('cart.add', $products->id) }}" method="POST">
                                        @csrf
                                        <button type="submit">Adicionar ao Carrinho</button>
                                    </form>
                                    <a href="{{ route('cart.verSessao') }}">
                                        <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                                            </svg>
                                        </button>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        @include('footer')

        
    </div>


</body>



</html>