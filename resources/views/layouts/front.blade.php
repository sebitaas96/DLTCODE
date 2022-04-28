<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}{{ isset($title) ? " - $title" : ''}}</title>
    <link rel="stylesheet" href="{{ asset('css/front.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('img/logo/dltcode-ico.webp') }}" sizes="64x64">

    {!! $socialHeader ?? '' !!}
</head>
<body>
    @include('components.front.menu')

    <div id="content">
        @yield('content')
    </div>

    @env('local')
        <script id="__bs_script__">//<![CDATA[
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.14'><\/script>".
            replace("HOST", location.hostname));
            //]]></script>
    @endenv

    @include('components.front.footer')


    {{-- COOKIES --}}
    <div id="cookies-eu-banner" style="display: none;" class="shadow-lg">
        <p class="mt-2 mb-0 d-inline-flex align-self-center">
            Al continuar su visita a este sitio, acepta nuestra política de cookies.
            <a href="{{ route('policy.cookies') }}" target="_blank" class="mx-1" id="cookies-eu-more">Ver política</a>
        </p>
        <span class="float-right">
            {{--<button id="cookies-eu-reject" class="btn btn-outline-muted">cancelar</button>--}}
            <button id="cookies-eu-accept" class="btn btn-outline-primary">aceptar</button>
        </span>
    </div>
    <script src="{{ asset('js/front.js') }}"></script>
    <script>
        var scroll = new SmoothControll('a[href*="#"]');
        new CookiesEuBanner(function() {

        }, true);
    </script>
</body>
</html>
