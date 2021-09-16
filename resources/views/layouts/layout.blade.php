<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('css')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
      .nav{
        display:flex;
        background: -webkit-linear-gradient(left, rgb(0, 112,192) 30%, rgb(0,176,80) 80%);
        height:65px;
      }
      .nav-item{
        font-size: 20px;
        margin-top: 6px;
      }
    </style>
    <title>LIS</title>
  </head>

  <body>
      <ul class="nav justify-content-center ">
          <li class="nav-item">
              <a class="nav-link text-white" aria-current="page" href="patients/create">Registro Paciente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/patients">Consulta Pacientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/calidad/create">Registro control de calidad</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/calidad">Consulta control de calidad</a>
            </li>
        </ul>

      @yield("content");

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      @yield('js')
    </body>
</html>