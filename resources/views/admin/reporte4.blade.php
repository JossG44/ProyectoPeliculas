@extends('adminlte::page')


@section('content_header')
<div class="titulo text-center">
  <h5>Peliculas</h5>
</div>

@stop
@section('content')

<div id="contenedor" class="shadow-lg p-3 mb-5 bg-white"></div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Género</th>
            <th>Director</th>
            <th>Formato</th>
            <th>Costo</th>
            <th>Fecha de estreno</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($peliculas as $pelicula)
        <tr>
            <td>{{$pelicula->id}}</td>
            <td>{{$pelicula->pel_nombre}}</td>
            <td>{{$pelicula->gen_id}}</td>
            <td>{{$pelicula->dir_id}}</td>
            <td>{{$pelicula->for_id}}</td>
            <td>{{$pelicula->pel_costo}}</td>
            <td>{{$pelicula->pel_fecha_estreno}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.2.0/css/searchPanes.dataTables.min.css">


@stop


@section('js')

<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/searchpanes/1.2.0/js/dataTables.searchPanes.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js" type="text/javascript"></script>
<script src="https://code.highcharts.com/highcharts.js" type="text/javascript"></script>



<script>
    $(document).ready(function() {
        //Crear Datatable
        var table = $('#example').DataTable({
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

            "dom": "Blfrtip",
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
                }],
                "dom": "Pfrtip",
        });

        var container = $('#contenedor');
        var chart = Highcharts.chart(container[0], {
            chart:{
                type:'pie'
            },
            title:{
                text:'Gráfica'
            },
            series:[
                {
                    data: chartData(table)
                }
            ]
        });

        table.on('draw', function(){
            chart.series[0].setData(chartData(table));
        });

        function chartData(table){
            var filasAfectadas = {};
            table.column(2, { search: 'applied' }).data().each(function (val){
                if (filasAfectadas[val]){
                    filasAfectadas[val]+= 1;
                }else {
                    filasAfectadas[val] = 1;
                }
            });

            return
            $.map(filasAfectadas, function(cantidad, clave){
                return{
                    name: clave,
                    y: cantidad
                }
            });
        }
    });
</script>
@stop