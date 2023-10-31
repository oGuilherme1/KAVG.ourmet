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
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Catalogo</h2>
                            <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                            <button class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
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
                    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://img.freepik.com/fotos-gratis/chantilly-e-chocolate-em-madeira-rustica-gerado-por-ia_188544-22757.jpg?w=1380&t=st=1698597874~exp=1698598474~hmac=1c2ea22561ade2698b7d11f87baec2ffa9056fd5b5981fba7a3db6817dc4b933')">
                                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">Milk Shake Cristalizado</h3>
                                <span class="text-gray-500 mt-2">$25</span>
                            </div>
                        </div>
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://img.freepik.com/fotos-gratis/bolo-de-queijo-amarelo-recem-assado-na-mesa-de-madeira-rustica-gerada-por-ia_188544-18095.jpg?w=1380&t=st=1698598025~exp=1698598625~hmac=b3614142a70c64d74d92be048591d940b895dfcf9ff16467e4f11ca6a1d5dbdc')">
                                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">Torta de limao</h3>
                                <span class="text-gray-500 mt-2">$10</span>
                            </div>
                        </div>
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://img.freepik.com/fotos-gratis/delicioso-cupcake-com-granulado-flutuando-no-ar_23-2150679476.jpg?w=1380&t=st=1698598191~exp=1698598791~hmac=59377e652e096b67d8c39773ebf15b43c901fb60df4d7a56e15caf96c49df7ae')">
                                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">CupCake</h3>
                                <span class="text-gray-500 mt-2">$8</span>
                            </div>
                        </div>
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://img.freepik.com/fotos-gratis/deliciosos-bolos-decorados-com-laranja-e-chocolate-em-uma-tabua-de-madeira-na-mesa-preta_140725-86318.jpg?w=1380&t=st=1698598276~exp=1698598876~hmac=c6b3da265aef3eac89d269e8ccc6a4413e9c0c7320349c324ac705d87f41a123')">
                                <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">Bolo de cenoura</h3>
                                <span class="text-gray-500 mt-2">$12</span>
                            </div>
                        </div>
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
            console.log(product);
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

renderProducts();

</script>