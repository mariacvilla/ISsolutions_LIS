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
<div class="container align-middle">
  <div class="row" style="background: -webkit-linear-gradient(left, rgb(0, 112,192) 30%, rgb(0,176,80) 80%) ;text-align: center; color:white;height:65px; font-size: 20px">
    <div class="col-12">
      <h4 style="margin-top: 14px" >Resultado perfil lipídico</h4>
    </div>
  </div>
  <br>
  <br>
  <div class="row">
  <div class="container">
<div class="table-responsive">
<table class="table align-middle table-borderless" id="patients">
  <thead>
      @foreach($patient as $patient)
      <tr>
          <th style="background:#0070C0;color:white;text-align: center" scope="col">Código paciente</th>
          <th style="font-weight:normal;text-align: center" scope="col">{{$patient->id}}</th>
          <th  scope="col"></th>
      </tr>
  </thead>
  <tbody>
      <tr>
      <th  scope="col"></th>
      <th  scope="col"></th>
      </tr>
      <tr>
          <th style="background:#0070C0;color:white;text-align: center">Nombre</th>
          <th style="font-weight:normal;text-align: center">{{ $patient->nombre }} {{ $patient->apellido }}</th>
          <th style="background:#0070C0;color:white;text-align: center">Documento</th>
          <th style="font-weight:normal;text-align: center">{{ $patient->documento }}</th>
      </tr>
      <tr>
      <th  scope="col"></th>
      <th  scope="col"></th>
      </tr>
      <tr>
        <th style="background:#0070C0;color:white;text-align: center">Teléfono</th>
        <th style="font-weight:normal;text-align: center">{{ $patient->telefono }}</th>
        <th style="background:#0070C0;color:white;text-align: center">EPS</th>
        <th style="font-weight:normal;text-align: center">{{ $patient->eps }}</th>
      </tr>
      <tr>
      <th  scope="col"></th>
      <th  scope="col"></th>
      </tr>
      <tr>
        <th style="background:#0070C0;color:white;text-align: center">Correo electrónico</th>
        <th style="font-weight:normal;text-align: center">{{ $patient->correo }}</th>
        <th style="background:#0070C0;color:white;text-align: center" >RH</th>
        <th style="font-weight:normal;text-align: center">{{ $patient->rh }}</th>
      </tr>
  </tbody>
</table>
</div>
</div>


<div class="container">
<br>
<div class="table-responsive">
<table class="table align-middle" id="results">
  <thead>
      <tr>
          <th style="background:#0070C0;color:white;text-align: center" scope="col">Tipo de estudio</th>
          <th style="background:#0070C0;color:white;text-align: center" scope="col">Rango peligroso</th>
          <th style="background:#0070C0;color:white;text-align: center" scope="col">Rango deseado</th>
          <th style="background:#0070C0;color:white;text-align: center" scope="col">Resultado del estudio</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <th style="background:#0070C0;color:white;text-align: center">Colesterol total</th>
          <th style="font-weight:normal;text-align: center">menor a 125 o mayor a 200 mg/dl</th>
          <th style="font-weight:normal;text-align: center">entre 125-200 mg/dl</th>
          <th style="font-weight:normal;text-align: center">{{ $patient->col }} mg/dl</th>
      </tr>
      <tr>
        <th style="background:#0070C0;color:white;text-align: center">HDL</th>
        <th style="font-weight:normal;text-align: center">menor a 50 mg/dl </th>
        <th style="font-weight:normal;text-align: center">mayor a 60 mg/dl</th>
        <th style="font-weight:normal;text-align: center">{{ $patient->hdl }} mg/dl</th>
      </tr>
      <tr>
        <th style="background:#0070C0;color:white;text-align: center">LDL</th>
        <th style="font-weight:normal;text-align: center">mayor a 100 mg/dl</th>
        <th style="font-weight:normal;text-align: center">menor a 100 mg/dl</th>
        <th style="font-weight:normal;text-align: center">{{ $patient->ldl }} mg/dl</th>
      </tr>
      <tr>
        <th style="background:#0070C0;color:white;text-align: center">Triglicéridos</th>
        <th style="font-weight:normal;text-align: center">mayor a 200 mg/dl</th>
        <th style="font-weight:normal;text-align: center">menor a 200 mg/dl</th>
        <th style="font-weight:normal;text-align: center">{{ $patient->trigliceridos }} mg/dl</th>
      </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>
   
  </div>
  <div class="row ">
    <div class="col-5">
    </div>
    <div class="col-5">
      <div class="container align-middle">
      <a href="/" class="btn btn-lg text-white" style="background:#0070C0">Volver<a>
    </div>
    <div class="col-5">
    </div>

    </div>
  </div>
</div>


</body>
</html>