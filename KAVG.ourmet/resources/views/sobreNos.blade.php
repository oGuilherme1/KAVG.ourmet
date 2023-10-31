<!DOCTYPE html> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <head> <meta charset="utf-8"> <meta
    name="viewport" content="width=device-width, initial-scale=1">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<title>Laravel</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> </head>

<body class="antialiased">
    <div x-data="{ cartOpen: false , isOpen: false }" class="bg-off_white">
        @include('header_carrinho')
        <div class="py-16 bg-white">
            <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
                <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12">
                    <div class="md:5/12 lg:w-5/12">
                        <img src="{{ asset('img/logoRosa.png') }}" alt="image" loading="lazy" width="" height="">
                    </div>
                    <div class="md:7/12 lg:w-6/12">
                        <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">Delicie-se com a doçura que vai
                            encantar seus sentidos!</h2>
                        <p class="mt-6 text-gray-600">Na nossa loja de doces, exploramos o mundo mágico dos sabores,
                            onde cada mordida é uma jornada de alegria. Oferecemos uma seleção de doces artesanais e
                            guloseimas irresistíveis que vão adoçar o seu dia. Dos clássicos aos mais inovadores, nossos
                            doces são preparados com amor e criatividade. Venha descobrir um paraíso de sabor que vai
                            fazer você sorrir a cada pedaço. Seja bem-vindo ao nosso mundo doce, onde a felicidade é o
                            ingrediente secreto de cada criação.</p>

                    </div>
                </div>
            </div>
        </div>

        @include('footer')
    </div>
</body>

</html>