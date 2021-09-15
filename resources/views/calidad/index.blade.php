@extends('layouts.layout')


@section('css')
<link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css" rel='stylesheet'>

<style>
        .table .sirve{
            color: black;
        }
        .table .nosirve{
            color: red;
        }
    </style>
@endsection

@section('content')
<br>
<div class="container">
<div class="table-responsive">
<table class="table align-middle table-hover table-bordered border-primary" id="patients">
  <thead>
      <tr>
          <th scope="col">Col Total Nivel I</th>
          <th scope="col">Col Total Nivel II</th>
          <th scope="col">HDL Nivel I</th>
          <th scope="col">HDL Nivel II</th>
          <th scope="col">LDL Nivel I</th>
          <th scope="col">LDL Nivel II</th>
          <th scope="col">Triglicéridos Nivel I</th>
          <th scope="col">Triglicéridos Nivel II</th>
          <th scope="col">Fecha</th>
          <th scope="col">Hora</th>
      </tr>
  </thead>
  <tbody>
      @foreach($calidad as $calidad)
      <tr>
          <th class="<?php echo ($calidad['ColTotal1']>=5.77) && ($calidad['ColTotal1']<=7.48)?'sirve':'nosirve';?>">{{ $calidad->ColTotal1 }}</th>
          <th class="<?php echo ($calidad['ColTotal2']>=2.15) && ($calidad['ColTotal2']<=3.07)?'sirve':'nosirve';?>">{{ $calidad->ColTotal2 }}</th>
          <th class="<?php echo ($calidad['HDL1']>=1.40) && ($calidad['HDL1']<=1.86)?'sirve':'nosirve';?>">{{ $calidad->HDL1 }}</th>
          <th class="<?php echo ($calidad['HDL2']>=0.544) && ($calidad['HDL2']<=0.904)?'sirve':'nosirve';?>">{{ $calidad->HDL2 }}</th>
          <th class="<?php echo ($calidad['LDL1']>=3.44) && ($calidad['LDL1']<=4.15)?'sirve':'nosirve';?>">{{ $calidad->LDL1 }}</th>
          <th class="<?php echo ($calidad['LDL2']>=1.32) && ($calidad['LDL2']<=2.02)?'sirve':'nosirve';?>">{{ $calidad->LDL2 }}</th>
          <th class="<?php echo ($calidad['Trigliceridos1']>=1.98) && ($calidad['Trigliceridos1']<=2.33)?'sirve':'nosirve';?>">{{ $calidad->Trigliceridos1 }}</th>
          <th class="<?php echo ($calidad['Trigliceridos2']>=0.815) && ($calidad['Trigliceridos2']<=1.04)?'sirve':'nosirve';?>">{{ $calidad->Trigliceridos2 }}</th>
          <th>{{ $calidad->fecha }}</th>
          <th>{{ $calidad->hora }}</th>
      </tr>
      @endforeach
  </tbody>
</table>
</div>
</div>

<br>
<div class="container">
<div class="table-responsive">
<table class="table align-middle table-hover table-bordered border-primary" id="estadisticas">
  <thead>
      <tr>
      <th scope="col">Estadísticos</th>
          <th scope="col">Col Total Nivel I</th>
          <th scope="col">Col Total Nivel II</th>
          <th scope="col">HDL Nivel I</th>
          <th scope="col">HDL Nivel II</th>
          <th scope="col">LDL Nivel I</th>
          <th scope="col">LDL Nivel II</th>
          <th scope="col">Triglicéridos Nivel I</th>
          <th scope="col">Triglicéridos Nivel II</th>
      </tr>
  </thead>
  <tbody>
      <tr>
        <th>Media</th>
          <th>{{ $col1[0] }}</th>
          <th>{{ $col2[0] }}</th>
          <th>{{ $hdl1[0] }}</th>
          <th>{{ $hdl2[0] }}</th>
          <th>{{ $ldl1[0] }}</th>
          <th>{{ $ldl2[0] }}</th>
          <th>{{ $trigliceridos1[0] }}</th>
          <th>{{ $trigliceridos2[0] }}</th>
      </tr>
      <tr>
      <th>Desviación</th>
      <th>{{ $col1[1] }}</th>
          <th>{{ $col2[1] }}</th>
          <th>{{ $hdl1[1] }}</th>
          <th>{{ $hdl2[1] }}</th>
          <th>{{ $ldl1[1] }}</th>
          <th>{{ $ldl2[1] }}</th>
          <th>{{ $trigliceridos1[1] }}</th>
          <th>{{ $trigliceridos2[1] }}</th>   
    </tr>
    <tr>
        <th>Coeficiente de variación (%)</th>
        <th>{{ $col1[2] }}</th>
          <th>{{ $col2[2] }}</th>
          <th>{{ $hdl1[2] }}</th>
          <th>{{ $hdl2[2] }}</th>
          <th>{{ $ldl1[2] }}</th>
          <th>{{ $ldl2[2] }}</th>
          <th>{{ $trigliceridos1[2] }}</th>
          <th>{{ $trigliceridos2[2] }}</th> 
    </tr>
  </tbody>
</table>
</div>
</div>
@endsection

@section('js')
<script src='https://code.jquery.com/jquery-3.5.1.js'></script>
<script src='https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js'></script>

<script>
$(document).ready(function() {
    $('#patients').DataTable({
        "lenghtMenu": [[5,10,50,-1], [5,10,50,'ALL']],
        "language":{
            processing: "Procesando...",
            lengthMenu: "Mostrar _MENU_ registros",
            zeroRecords: "No se encontraron resultados",
            emptyTable: "Ningún dato disponible en esta tabla",
            infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 pacientes",
            infoFiltered: "(filtrado de un total de _MAX_ registros)",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ pacientes",
            search: "Buscar:",
            infoThousands: ",",
            loadingRecords: "Cargando...",
            paginate: {
                first: "Primero",
                last: "Último",
                next: "Siguiente",
                previous: "Anterior"
                },
            aria: {
                sortAscending: ": Activar para ordenar la columna de manera ascendente",
                sortDescending: ": Activar para ordenar la columna de manera descendente"
                }
        }
    });
});
</script>
@endsection