<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title or "Fitnessss" }}</title>
        <!-- <link rel="stylesheet" href="/css/app.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <!-- Bootstrap core CSS -->
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

        <!-- Custom styles for this template -->
        <!-- <link href="jumbotron.css" rel="stylesheet"> -->
        <style>
        body {
          padding-top: 100px;
        }

        hr {
          margin-top: 100px;
        }

        h1 {
          padding-bottom: 40px;
        }

        </style>
    </head>
    <body>
        @include('layouts._navbar')
        <div class="container">
            @yield('content')

        </div>

        <hr>
        @include('layouts._footer')

        <script src="/js/app.js" charset="utf-8"></script>
        <script src="/js/vue.js"></script>

        @yield('script')

        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <!-- <script src="js/bootstrap.min.js"></script> -->
    </body>
</html>
