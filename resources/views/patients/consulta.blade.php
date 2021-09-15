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
<div class="table-responsive">
<table class="table align-middle table-hover table-bordered border-primary" id="patients">
  <thead>
      @foreach($patient as $patient)
      <tr>
          <th scope="col">Resultado perfíl lipídico</th>
          <th scope="col">Código paciente</th>
          <th scope="col">{{$patient->id}}</th>
          <th scope="col"></th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <th>Nombre</th>
          <th>{{ $patient->nombre }} {{ $patient->apellido }}</th>
          <th>Documento</th>
          <th>{{ $patient->documento }}</th>
      </tr>
      <tr>
        <th>Teléfono</th>
        <th>{{ $patient->telefono }}</th>
        <th>EPS</th>
        <th>{{ $patient->eps }}</th>
      </tr>
      <tr>
        <th>Correo electrónico</th>
        <th>{{ $patient->correo }}</th>
        <th>RH</th>
        <th>{{ $patient->rh }}</th>
      </tr>
  </tbody>
</table>
</div>
</div>

<div class="container">
<div class="table-responsive">
<table class="table align-middle table-hover table-bordered border-primary" id="results">
  <thead>
      <tr>
          <th scope="col">Tipo de estudio</th>
          <th scope="col">Rango peligroso</th>
          <th scope="col">Rango deseado</th>
          <th scope="col">Resultado del estudio</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <th>Colesterol total</th>
          <th>menor a 125 o mayor a 200 mg/dl</th>
          <th>entre 125-200 mg/dl</th>
          <th>{{ $patient->col }}</th>
      </tr>
      <tr>
        <th>HDL</th>
        <th>menor a 50 mg/dl </th>
        <th>mayor a 60 mg/dl</th>
        <th>{{ $patient->hdl }}</th>
      </tr>
      <tr>
        <th>LDL</th>
        <th>mayor a 100 mg/dl</th>
        <th>menor a 100 mg/dl</th>
        <th>{{ $patient->ldl }}</th>
      </tr>
      <tr>
        <th>Triglicéridos</th>
        <th>mayor a 200 mg/dl</th>
        <th>menor a 200 mg/dl</th>
        <th>{{ $patient->trigliceridos }}</th>
      </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>

<a href="/patients" class="btn btn-link">Volver>
</body>
</html>