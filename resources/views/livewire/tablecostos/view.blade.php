@section('title', __('TableCostos'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Tabla de costos </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar">
						</div>
						<!-- <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Añadir
						</div> -->
					</div>
				</div>
				
				<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-sm bg-light">
						<thead class="thead">
							<tr> 
								<th>gen_nombre</th> 
								<th>dir_nombre</th>
								<th>for_nombre</th>
								<th>pel_nombre</th>
								<th>pel_costo</th>
								<th>Fecha de estreno</th>
								<td>     </td>
							</tr>
						</thead>
						<tbody>
							@foreach($peliculas as $row)
							<tr>
								<td>{{ $row->gen_nombre }}</td>
								<td>{{ $row->dir_nombre }}</td>
								<td>{{ $row->for_nombre }}</td>
								<td>{{ $row->pel_nombre }}</td>
								<td>{{ $row->pel_costo }}</td>
								<td>{{ $row->pel_fecha_estreno }}</td>
							@endforeach
						</tbody>
					</table>						
					{{ $peliculas->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
