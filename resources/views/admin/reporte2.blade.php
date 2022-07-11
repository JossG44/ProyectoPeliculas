@extends('adminlte::page')


@section('content_header')
<div class="titulo text-center">
  <h5>Socios - Ciudad</h5>
</div>

@stop
@section('content')

<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($socios as $socio)
        <tr>
            <td>{{$socio->id}}</td>
            <td>{{$socio->soc_cedula}}</td>
            <td>{{$socio->soc_nombre}}</td>
            <td>{{$socio->soc_direccion}}</td>
            <td>{{$socio->soc_telefono}}</td>
            <td>{{$socio->soc_correo}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@stop


@section('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            //para cambiar el lenguaje a Spanish
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron registros coincidentes",
                "info": "Mostrando pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtrada de _MAX_ registros)",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior"
                },

            }
        });
    });
</script>
@stop