<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') - RAPIDE Internet</title>
        <link href="/css/app.css" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    </head>
    <body>
        <div id="app">
            @yield('content')

            @include('partials.footer.phone-card')

            @include('partials.footer.footer')
            
        </div>
        <script type="text/javascript" src="/js/app.js"></script>
    </body>
</html>
