<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ $pageTitle ?? '' }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased bg-primary-500">
    <div id="app" class="flex flex-column">
        <div class="flex lg:flex-col lg:justify-between w-screen lg:h-screen lg:w-1/4 fixed bottom-0 lg:bottom-auto lg:left-0 bg-secondary-500 text-white border-orange-500 border-t-8 p-4 lg:border-t-0 lg:border-r-8">
            <div class="w-3/4 lg:w-full">
                <h1 class="text-orange-500 font-bold text-3xl"><a href="/">B<span class="hidden lg:inline">en </span>Cleverly</a></h1>
                <h2 class="text-green-500 text-lg font-mono"><a href="/">Senior Web Developer</a></h2>
                <div>
                    <a href="https://github.com/BCleverly" class="text-orange-500 hover:text-green-500"><i class="fab fa-github-alt"></i></a>
                </div>
            </div>
            <nav class="flex w-1/4 lg:w-full justify-around">
                <a href="{{ route('work.index') }}" class="text-orange-500 text-center flex align-center flex-col py-2 px-2 hover:text-green-500">
                    <i class="fad fa-book text-2xl mb-3"></i>
                    <span class="block">Work</span>
                </a>
                <a href="{{ route('post.index') }}" class="text-orange-500 text-center flex align-center flex-col py-2 px-2 hover:text-green-500">
                    <i class="fad fa-code-branch text-2xl mb-3"></i>
                    Posts
                </a>
            </nav>
        </div>
        <div class="w-full lg:w-3/4 lg:ml-auto text-grey-200 text-xl pb-32 lg:pb-5">
            @yield('content')
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
