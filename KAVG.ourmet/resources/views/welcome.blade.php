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
            <div class="container mx-auto px-6">
                <div class="h-64 rounded-md overflow-hidden bg-cover bg-center" style="background-image: url('https://img.freepik.com/fotos-gratis/variedade-indulgente-de-colecao-de-sobremesas-de-doces-frescos-gerados-por-ia_188544-36214.jpg?w=1380&t=st=1698596127~exp=1698596727~hmac=7ede163645c4dfa19d996da4cf4623779fa6b239146bca4b5bfd0bc2542c78ba')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full  ">
                        <div class="px-10 max-w-xl">
                            <h1 class="text-2xl text-white font-semibold">Catalogo</h1>
                            <p class="mt-2 text-white">Em nosso catálogo, você encontrará uma variedade de deliciosas guloseimas, incluindo chocolates, bolos, gomas, caramelos e muito mais para satisfazer sua vontade de doces.</p>
                            <button class="flex items-center mt-4 px-3 py-2 bg-marrom text-white text-sm uppercase font-medium rounded hover:bg-marrom-claro focus:outline-none focus:bg-marrom">
                                <a href="{{ route('catalogo') }}">Visualizar</a>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="md:flex mt-8 md:-mx-4 shop_now">
                </div>
                <div class="mt-16">
                    <h3 class="text-gray-600 text-2xl font-medium">Novidades</h3>
                    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6 novidade-container">

                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-gray-200">
            <div class="container mx-auto px-6 py-3 flex justify-between items-center">
                <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">Brand</a>
                <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
            </div>
        </footer>
    </div>
</body>

</html>

<script>
    async function getProducts() {
        try {
            const response = await fetch('/products');
            const data = await response.json();
            return data.data;
        } catch (error) {
            console.error('Erro ao obter produtos:', error);
            return [];
        }
    }

    async function renderProducts() {
        try {
            const products = await getProducts();
            const container = document.querySelector('.shop_now');

            products.slice(0, 2).forEach(product => {
                const productCard = `
                <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2" style="background-image: url('${product.imagem}')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">${product.name}</h2>
                            <p class="mt-2 text-gray-400">${product.descricao}</p>
                            <button class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                <a href="/products/${product.id}">Shop Now</a>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            `;

                container.innerHTML += productCard;
            });

        } catch (error) {
            console.error('Erro ao renderizar produtos:', error);
        }
    }

    async function renderNovidadeProdutos() {
        try {
            const products = await getProducts();
            const container = document.querySelector('.novidade-container');

            products.slice(0, 4).forEach(product => {
                const productCard = `
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('${product.imagem}')">
                            <a class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500" href="/products/${product.id}" }}" >
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                /svg>
                                </a>
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase"> <a href="/products/${product.id}" }}"> ${product.name} </a> </h3>
                                <span class="text-gray-500 mt-2"> <a href="/products/${product.id}" }}"> R$${product.valor} </a> </span>
                            </div>
                        </div>
            `;

                container.innerHTML += productCard;
            });

        } catch (error) {
            console.error('Erro ao renderizar produtos:', error);
        }
    }

    renderProducts();
    renderNovidadeProdutos();
</script>