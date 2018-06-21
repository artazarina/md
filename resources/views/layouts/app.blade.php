<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="{{asset('css/app.css')}}">-->
      <!--Bootstrap link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <title>{{config('app.name', 'MD')}}</title>
  </head>

  <body>
    @include('inc.navbar')
    <div class="container">
      <ul class="navigation">
        <li><a href="/news">News</a></li>
        <li><a href="/merch">Merch</a></li>
        <li><a href="/register">Register</a></li>
        <li><a href="/login">Log in</a></li>
      </ul>
      @yield('content')
    </div>
  </body>
</html>
