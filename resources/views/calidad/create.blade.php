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
        <div>Registro suero control</div>
        <form action="/calidad" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Col Total Nivel I</label>
            <input type="float" class="form-control" id="ColTotal1" name="ColTotal1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Col Total Nivel II</label>
            <input type="float" class="form-control" id="ColTotal2" name="ColTotal2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> HDL Nivel I</label>
            <input type="float" class="form-control" id="HDL1" name="HDL1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> HDL Nivel II</label>
            <input type="float" class="form-control" id="HDL2" name="HDL2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> LDL Nivel I</label>
            <input type="float" class="form-control" id="LDL1" name="LDL1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> LDL Nivel II</label>
            <input type="float" class="form-control" id="LDL2" name="LDL2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Triglicéridos Nivel I</label>
            <input type="float" class="form-control" id="Trigliceridos1" name="Trigliceridos1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Triglicéridos Nivel II</label>
            <input type="float" class="form-control" id="Trigliceridos2" name="Trigliceridos2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Fecha</label>
            <input type="text" class="form-control" id="fecha" name="fecha">
        </div>
        <div class="mb-3">
            <label for="" class="form-label"> Hora</label>
            <input type="text" class="form-control" id="hora" name="hora">
        </div>
        <a href="/calidad" class="btn btn-primary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    </div>
</body>
</html>

    