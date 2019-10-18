<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ $pageTitle ?? '' }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('stylesheets')

</head>
<body class="antialiased bg-primary-500">
<div id="app" class="flex flex-column">
    <div
        class="flex lg:flex-col lg:justify-between w-screen lg:h-screen lg:w-2/12 fixed bottom-0 lg:bottom-auto lg:left-0 bg-secondary-500 text-white border-orange-500 border-t-8 p-4 lg:border-t-0 lg:border-r-8">
        <div class="w-3/4 lg:w-full">
            <h2 class="text-orange-500 font-bold text-3xl"><a href="/">B<span class="hidden lg:inline">en </span>Cleverly</a>
            </h2>
            <h3 class="text-green-500 text-lg font-mono"><a href="/">Senior Web Developer</a></h3>
            <div>
                <a href="https://github.com/BCleverly" class="text-orange-500 hover:text-green-500"><i
                        class="fab fa-github-alt"></i></a>
                @if(auth()->check())
                    <a href="/logout" class="text-orange-500 hover:text-green-500"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a>
                    <form action="/logout" method="post" id="logout-form">@csrf</form>
                @endif
            </div>
        </div>
        <nav class="flex w-1/4 lg:w-full justify-around">
            <a href="{{ route('work.index') }}"
               class="text-orange-500 text-center flex align-center flex-col py-2 px-2 hover:text-green-500">
                <i class="fad fa-book text-2xl mb-3"></i>
                <span class="block">Work</span>
            </a>
            <a href="{{ route('post.index') }}"
               class="text-orange-500 text-center flex align-center flex-col py-2 px-2 hover:text-green-500">
                <i class="fad fa-code-branch text-2xl mb-3"></i>
                Posts
            </a>
        </nav>
    </div>
    <div class="w-full lg:w-10/12 lg:ml-auto text-grey-200 text-xl pb-32 lg:pb-5 min-h-screen">
        @if(flash()->message)
            <div class="absolute ml-4 mr-12 mt-2 p-4 rounded {{ flash()->class }}" id="flash-message">
                {{ flash()->message }}

                <button onclick="event.preventDefault(); document.getElementById('flash-message').remove();">&times;</button>
            </div>
        @endif
        @yield('content')
        <div class="container mx-auto text-sm mb-6 lg:mb-4">
            &copy; 2019 Ben Cleverly;
        </div>
    </div>

</div>

<!-- Scripts -->
<script src="{{ mix('js/manifest.js') }}" defer></script>
<script src="{{ mix('js/vendor.js') }}" defer></script>
<script src="{{ mix('js/app.js') }}" defer></script>
@yield('javascript')
<!-- Matomo -->
<script type="text/javascript">
    var _paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="//matomo.bencleverly.me/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</body>
</html>
