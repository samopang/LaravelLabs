<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TaskList</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS And JavaScript -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
      <header>
        @include('inc.navbar')
      </header>
      <div class="container">
        @yield('content')
      </div>
      <footer>
        @include('inc.media')
        <div class="copyright">&copy; Pamela {{ Date('Y') }}</div>
      </footer>
    </body>
</html>