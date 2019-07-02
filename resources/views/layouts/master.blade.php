<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials._head')
    </head>

    <body>

        <div id='app'>

            {{-- Main page content will be yielded here --}}
            @yield('content')

        </div>

        @include('partials._javascript')

        @yield('scripts')

    </body>
</html>
