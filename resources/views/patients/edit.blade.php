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
<br>
<div class="container" style="border:1px solid rgb(201, 200, 200);">
    <div style="background: -webkit-linear-gradient(left, rgb(0, 112,192) 30%, rgb(0,176,80) 70%);margin-left:0px;text-align:center;color:white;height:40px">
        <h4>Registro del paciente</h4>
    </div>
    <form action="/patients/{{$patient->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-2">
        <label for="" class="form-label" style="margin-bottom:0px">Documento</label>
        <input type="text" class="form-control" id="documento" name="documento" value="{{$patient->documento}}" style="height:25px">
    </div>
    <div class="mb-2">
        <label for="" class="form-label" style="margin-bottom:0px">Nombres</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$patient->nombre}}" style="height:25px">
    </div>
    <div class="mb-2">
        <label for="" class="form-label" style="margin-bottom:0px">Apellidos</label>
        <input type="text" class="form-control" id="apellido" name="apellido" value="{{$patient->apellido}}" style="height:25px">
    </div>
    <div class="mb-2">
        <label for="" class="form-label" style="margin-bottom:0px">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" value="{{$patient->telefono}}" style="height:25px">
    </div>
    <div class="mb-2">
        <label for="" class="form-label" style="margin-bottom:0px">Correo</label>
        <input type="email" class="form-control" id="correo" name="correo" value="{{$patient->correo}}" style="height:25px">
    </div>
    <div class="mb-2">
        <label for="" class="form-label" style="margin-bottom:0px">Edad</label>
        <input type="text" class="form-control" id="edad" name="edad" value="{{$patient->edad}}" style="height:25px">
    </div>
    <div class="mb-2">
        <label for="" class="form-label" style="margin-bottom:0px">EPS</label>
        <input type="text" class="form-control" id="eps" name="eps" value="{{$patient->eps}}" style="height:25px">
    </div>
    <div class="mb-2">
        <label for="" class="form-label" style="margin-bottom:0px">RH</label>
        <input type="text" class="form-control" id="rh" name="rh" value="{{$patient->rh}}" style="height:25px">
    </div>
    <div class="mb-2">
        <label for="" class="form-label" style="margin-bottom:0px">Col Total</label>
        <input type="float" class="form-control" id="col" name="col" value="{{$patient->col}}" style="height:25px">
    </div>
    <div class="mb-2">
        <label for="" class="form-label" style="margin-bottom:0px">HDL</label>
        <input type="float" class="form-control" id="hdl" name="hdl" value="{{$patient->hdl}}" style="height:25px">
    </div>
    <div class="mb-2">
        <label for="" class="form-label" style="margin-bottom:0px">LDL</label>
        <input type="float" class="form-control" id="ldl" name="ldl" value="{{$patient->ldl}}" style="height:25px">
    </div>
    <div class="mb-2">
        <label for="" class="form-label" style="margin-bottom:0px">Triglicéridos</label>
        <input type="float" class="form-control" id="trigliceridos" name="trigliceridos" value="{{$patient->trigliceridos}}">
    </div>
    <div style="text-align:center">
    <a href="/patients" class="btn btn-primary" style="background: #0070C0;border: 1px solid #008073" >Cancelar</a>
    <button type="submit" class="btn btn-primary" style="background: #0070C0;border: 1px solid #008073" >Editar paciente</button>
    </div>
</form>
</div>
</body>
</html>
