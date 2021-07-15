<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ZwerkbalPlanner</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Metamorphous&family=Monoton&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <header>
            <span class="title">Zwerkbal</span>
            @yield('nav')
            <div class="company">een product van <img src="/img/4S-Logo-Transparent.png" alt="Logo 4S" class="logo"></div>
        </header>
        <main>
            <div class="wrapper">
                @yield('content')
            </div>
        </main>
    </body>
</html>
