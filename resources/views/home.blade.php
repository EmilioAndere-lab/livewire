<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @livewireStyles
    </head>
    <body class="antialiased">
        <div class="bg-blue-200 w-60 h-screen">
            <div class="flex">
                <img src="/img/logo.png" alt="err_logo" class="w-20">
                <p class="font-bold mt-3 text-2xl">SoftPort</p>
            </div>
            <div class="flex mx-3 py-3 border-t-2 border-b-2 border-white">
                <img src="https://randomuser.me/api/portraits/men/35.jpg" alt="face" class="rounded-full w-14 h-14">
                <div class="ml-3 py-2">
                    <h1 class="font-bold uppercase">{{ $name }}</h1>
                    <p class="font-thin">Administrador</p>
                </div>
            </div>
            <ul class="ml-5 mr-2 py-3">
                <li class="p-3 rounded-md hover:bg-blue-300 border-r-8 border-transparent hover:border-blue-700"><i class="fas fa-columns"></i> Dashboard</span></li>
                <li class="p-3 rounded-md hover:bg-blue-300 border-r-8 border-transparent hover:border-blue-700"><i class="fas fa-tablet-alt"></i> Dispositivos</li>
            </ul>
        </div>
        @livewireScripts
    </body>
</html>
