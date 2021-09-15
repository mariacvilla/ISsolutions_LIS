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
    <div class="container" style="border:1px solid rgb(201, 200, 200);">
        <div style="background:#008073;margin-left:0px;text-align:center;color:white;height:40px">
            <h4>Registro suero control</h4>
        </div>
        <form action="/calidad" method="POST">
        @csrf
        <div class="mb-2">
            <label for="" class="form-label" style="margin-bottom:0px">Col Total Nivel I</label>
            <input type="float" class="form-control" id="ColTotal1" name="ColTotal1" style="height:25px">
        </div>
        <div class="mb-2">
            <label for="" class="form-label" style="margin-bottom:0px"> Col Total Nivel II</label>
            <input type="float" class="form-control" id="ColTotal2" name="ColTotal2" style="height:25px">
        </div>
        <div class="mb-2">
            <label for="" class="form-label" style="margin-bottom:0px"> HDL Nivel I</label>
            <input type="float" class="form-control" id="HDL1" name="HDL1" style="height:25px">
        </div>
        <div class="mb-2">
            <label for="" class="form-label" style="margin-bottom:0px"> HDL Nivel II</label>
            <input type="float" class="form-control" id="HDL2" name="HDL2" style="height:25px">
        </div>
        <div class="mb-2">
            <label for="" class="form-label" style="margin-bottom:0px"> LDL Nivel I</label>
            <input type="float" class="form-control" id="LDL1" name="LDL1" style="height:25px">
        </div>
        <div class="mb-2">
            <label for="" class="form-label" style="margin-bottom:0px"> LDL Nivel II</label>
            <input type="float" class="form-control" id="LDL2" name="LDL2" style="height:25px">
        </div>
        <div class="mb-2">
            <label for="" class="form-label" style="margin-bottom:0px"> Triglicéridos Nivel I</label>
            <input type="float" class="form-control" id="Trigliceridos1" name="Trigliceridos1" style="height:25px">
        </div>
        <div class="mb-2">
            <label for="" class="form-label" style="margin-bottom:0px"> Triglicéridos Nivel II</label>
            <input type="float" class="form-control" id="Trigliceridos2" name="Trigliceridos2" style="height:25px">
        </div>
        <div class="mb-2">
            <label for="" class="form-label" style="margin-bottom:0px"> Fecha</label>
            <input type="text" class="form-control" id="fecha" name="fecha" style="height:25px">
        </div>
        <div class="mb-2">
            <label for="" class="form-label" style="margin-bottom:0px"> Hora</label>
            <input type="text" class="form-control" id="hora" name="hora" style="height:25px">
        </div>
        <a href="/calidad" class="btn btn-primary" style="background: #008073;border: 1px solid #008073;">Cancelar</a>
        <button type="submit" class="btn btn-primary" style="background: #008073;border: 1px solid #008073;">Registrar</button>
    </form>
    </div>
</body>
</html>

    