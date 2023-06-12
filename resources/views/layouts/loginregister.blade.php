<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('titulo')</title>
    <style>
        .bg-login-image {
            background-image: url('{{ asset('images/statue-of-liberty-2501264_1280.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .bg-registry-image {
            background-image: url('{{ asset('images/architecture-1868265_1280.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
    </style>

@livewireStyles
</head>
<body >

    @yield('conteudo')

@livewireScripts
</body>
</html>
