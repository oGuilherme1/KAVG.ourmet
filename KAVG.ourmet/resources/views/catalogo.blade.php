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
                <div class="mt-16">
                    <h3 class="text-black text-2xl font-medium text-center ">Produtos</h3>
                    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6 produtos" >
                    </div>
                </div>

            </div>
        </main>

        @include('footer')
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


        const container = document.querySelector('.produtos');

        products.forEach(product => {
            const productCard = document.createElement('div');
            productCard.classList.add('w-full', 'max-w-sm', 'mx-auto', 'rounded-md', 'shadow-md', 'overflow-hidden');

            productCard.innerHTML = `

            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('${product.imagem}')">
            
                <a class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500" href="/products/${product.id}/car" }}" >
                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </a>
            </div>
            <div class="px-5 py-3">
            
                <h3 class="text-gray-700 uppercase"> <a href="/products/${product.id}" }}"> ${product.name} </a> </h3>
                <span class="text-gray-500 mt-2"> <a href="/products/${product.id}" }}"> R$${product.valor} </a> </span>
            </div>
        `;

            container.appendChild(productCard);
        });

    } catch (error) {
        console.error('Erro ao renderizar produtos:', error);
    }
}

renderProducts();

</script>