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
      @yield('content')

      @include('inc.sidebar')
    </body>
</html>
