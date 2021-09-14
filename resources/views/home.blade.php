<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('css')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>LIS</title>
  </head>
  
  <body>
    <div class="container">
    <form method="POST" action="">
    @csrf
    <input name="documento" placeholder="documento">
    <button type="submit" class="btn btn-primary">Enviar</button></form>
    </div>
    <br>
    <a href="/patients" class="btn btn-link">Ingreso como bacteriólogo>
  </body>
</html>

