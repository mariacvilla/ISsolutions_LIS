@extends('layouts.layout')

@section('css')
<link href="https://cdn.datatables.net/1.11.1/css/dataTables.bootstrap5.min.css" rel='stylesheet'>
@endsection

@section('content')
<br>
<div class="container">
<div class="table-responsive">
<table class="table align-middle table-hover table-bordered border-primary" id="patients">
  <thead>
      <tr>
          <th scope="col">Código</th>
          <th scope="col">Documento</th>
          <th scope="col">Nombres</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Resultados</th>
          <th scope="col"></th>
          <th scope="col"></th>
      </tr>
  </thead>
  <tbody>
      @foreach($patients as $patient)
      <tr>
          <th>{{ $patient->id }}</th>
          <th>{{ $patient->documento }}</th>
          <th>{{ $patient->nombre }}</th>
          <th>{{ $patient->apellido }}</th>
          <th>
            <form action="{{route('patients.show', $patient->id)}}" method="POST">
                @csrf
                @method('GET')
                <button type='' class="btn btn-link">Consultar</button>
            </form>
          </th>
          <th><a href="/patients/{{$patient->id}}/edit" class="btn btn-link">editar></th></th>
          <th>
              <form action="{{route('patients.destroy', $patient->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type='submit' class="btn btn-link">Borrar</button>
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