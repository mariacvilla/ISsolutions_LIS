@extends('layouts.layout')

@section('css')
<link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css" rel='stylesheet'>
<style>
    #linea1,#linea2{
        display: inline-block;
    }
    .page-item.active .page-link {
    background: #0070C0 !important;
}
</style>
@endsection

@section('content')
<br>
<div class="container">
<div class="table-responsive">
<table class="table align-middle" id="patients">
  <thead>
      <tr>
          <th style="background:#0070C0;color:white" scope="col">Código</th>
          <th style="background:#0070C0;color:white" scope="col">Documento</th>
          <th style="background:#0070C0;color:white" scope="col">Nombres</th>
          <th style="background:#0070C0;color:white" scope="col">Apellidos</th>
          <th style="background:#0070C0;color:white" scope="col">Resultados</th>
          <th style="background:#0070C0;color:white" scope="col">Acción</th>
          
      </tr>
  </thead>
  <tbody>
      @foreach($patients as $patient)
      <tr>
          <th style="font-weight:normal">{{ $patient->id }}</th>
          <th style="font-weight:normal">{{ $patient->documento }}</th>
          <th style="font-weight:normal">{{ $patient->nombre }}</th>
          <th style="font-weight:normal">{{ $patient->apellido }}</th>
          <th>
            <form action="{{route('patients.show', $patient->id)}}" method="POST">
                @csrf
                @method('GET')
                <button type='' class="btn  text-white " style="background:#0070C0">Consultar</button>
            </form>
          </th>
          <th> 
          <form action="{{route('patients.destroy', $patient->id)}}" method="POST">
                <a href="/patients/{{$patient->id}}/edit" class="btn text-white " id="linea" style="background:#0070C0">Editar</a>
                  @csrf
                  @method('DELETE')
                  <button type='submit' class="btn  text-white"  id="linea2" style="background:#0070C0" >Borrar</button>
            </form>
            
        </th>
          
      </tr>
      @endforeach
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
            lengthMenu: "Mostrar _MENU_ pacientes",
            zeroRecords: "No se encontraron resultados",
            emptyTable: "Ningún dato disponible en esta tabla",
            infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 pacientes",
            infoFiltered: "(filtrado de un total de _MAX_ pacientes)",
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