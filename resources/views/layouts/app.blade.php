<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Basic Website</title>
        <link rel="stylesheet" href="/css/app.css" >
    </head>
    <body>
      @include('inc.navbar')

    <div class="container">
      @if(Request::is('/'))
        @include('inc.showcase')
      @endif
      <div class="row">
        <div class="col-md-8 col-lg-8">
            @yield('content')
        </div>

        <div class="col-md-4 col-md-4">
            @include('inc.sidebar')
        </div>
      </div>
    </div>

    <footer id="footer" class="text-center">
      <p>Copyright 2019 &copy; Patrick Callahan</p>

    </footer>
    </body>
</html>
