<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apuntes UTN - Ingeniería en Sistemas</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="flex flex-col min-h-screen font-sans" id="app">
        <div class="mb-auto">
            @yield('content')
        </div>
        <footer class="bg-gray-700 text-white text-center p-2">
            Made by Lucas Bravi
        </footer>
    </div>
    <script src="https://kit.fontawesome.com/6957f9fdd4.js" crossorigin="anonymous"></script>
    <script src="/js/app.js"></script>
</body>
</html>
