<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://use.fontawesome.com/67342282c2.js"></script>
    <title>@yield('titulo')</title>
@livewireStyles
</head>
<body class="bg-black font-serif font-light">
    @livewire('menu.menu')
    <main>

            @yield('conteudo')

    </main>
@livewireScripts
</body>
</html>
