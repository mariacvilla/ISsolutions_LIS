<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>LIS</title>
  </head>

  <body>
    <div class="container">
        <div>Registro paciente</div>
        <form action="/patients" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Documento</label>
            <input type="text" class="form-control" id="documento" name="documento">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Edad</label>
            <input type="text" class="form-control" id="edad" name="edad">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">EPS</label>
            <input type="text" class="form-control" id="eps" name="eps">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">RH</label>
            <input type="text" class="form-control" id="rh" name="rh">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Col Total</label>
            <input type="float" class="form-control" id="col" name="col">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">HDL</label>
            <input type="float" class="form-control" id="hdl" name="hdl">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">LDL</label>
            <input type="float" class="form-control" id="ldl" name="ldl">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Triglicéridos</label>
            <input type="float" class="form-control" id="trigliceridos" name="trigliceridos">
        </div>
        <a href="/patients" class="btn btn-primary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar paciente</button>
    </form>
    </div>
</body>
</html>

    