@extends('adminlte::page')
<!-- @section('plugins.Sweetalert2', false) -->
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('generos')
        </div>     
    </div>   
</div>
@endsection

<!-- @section('js')
    <script>
        Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
        )
    </script>
@stop -->