<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title or "Fitnessss" }}</title>
        <!-- <link rel="stylesheet" href="/css/app.css"> -->
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="jumbotron.css" rel="stylesheet">
    </head>
    <body>
        @include('layouts._navbar')
        <div class="container">
            @yield('content')

        </div>

        <hr>
        @include('layouts._footer')

        <script src="/js/app.js" charset="utf-8"></script>
        @yield('script')

        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
