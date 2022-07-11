@extends('adminlte::page')


@section('content_header')
<div class="titulo text-center">
  <h5>Alquilers - Valor</h5>
</div>

@stop
@section('content')

<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>ID Socio</th>
            <th>ID Pelicula</th>
            <th>Desde</th>
            <th>Hasta</th>
            <th>Valor</th>
            <th>Entrega</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alquilers as $alquiler)
        <tr>
            <td>{{$alquiler->id}}</td>
            <td>{{$alquiler->soc_id}}</td>
            <td>{{$alquiler->pel_id}}</td>
            <td>{{$alquiler->alq_fecha_desde}}</td>
            <td>{{$alquiler->alq_fecha_hasta}}</td>
            <td>{{$alquiler->alq_valor}}</td>
            <td>{{$alquiler->alq_fecha_entrega}}</td>
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

<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>

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

            },
            dom: "Blfrtip",
                buttons: [
                    {
                        text: 'csv',
                        extend: 'csvHtml5',
                    },
                    {
                        text: 'excel',
                        extend: 'excelHtml5',
                    },
                    {
                        text: 'pdf',
                        extend: 'pdfHtml5',
                    },
                    {
                        text: 'print',
                        extend: 'print',
                    },  
                ],
                columnDefs: [{
                    orderable: false,
                    targets: -1
                }] 
        });
    });
</script>
@stop