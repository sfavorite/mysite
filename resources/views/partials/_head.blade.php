<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Favorite</title>


<!-- Styles -->
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

<!-- Scripts -->
<script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
</script>

@yield('stylesheets')
