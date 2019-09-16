<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased bg-primary-500">
    <div id="app" class="flex">
        <div class="flex w-screen fixed bottom-0 bg-secondary-500 text-white border-orange-500 border-t-8 p-4">
            <div class="w-3/4">
                <h1 class="text-orange-500 font-bold text-3xl"><a href="/">Ben Cleverly</a></h1>
                <h2 class="text-green-500 text-lg font-mono"><a href="/">Senior Web Developer</a></h2>
            </div>
            <nav class="flex w-1/4 justify-around">
                <a href="#" class="text-orange-500 text-center flex align-center flex-col py-2 px-2 hover:text-green-500">
                    <i class="fad fa-book text-2xl mb-3"></i>
                    <span class="block">Work</span>
                </a>
                <a href="#" class="text-orange-500 text-center flex align-center flex-col py-2 px-2 hover:text-green-500">
                    <i class="fad fa-code-branch text-2xl mb-3"></i>
                    Posts
                </a>
            </nav>
        </div>
        <div>
            @yield('content')
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
