@section('title', __('Alquilers'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Alquiler  </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Añadir
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.alquilers.create')
						@include('livewire.alquilers.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm bg-light">
						<thead class="thead">
							<tr> 
								<th>ID</th> 
								<th>ID Socio</th>
								<th>ID Pelicula</th>
								<th>Fecha Desde</th>
								<th>Fecha Hasta</th>
								<th>Valor</th>
								<th>Fecha Entrega</th>
								<td>     </td>
							</tr>
						</thead>
						<tbody>
							@foreach($alquilers as $row)
							<tr>
								<td>{{ $row->id }}</td> 
								<td>{{ $row->soc_id }}</td>
								<td>{{ $row->pel_id }}</td>
								<td>{{ $row->alq_fecha_desde }}</td>
								<td>{{ $row->alq_fecha_hasta }}</td>
								<td>{{ $row->alq_valor }}</td>
								<td>{{ $row->alq_fecha_entrega }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actualizar
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Alquiler id {{$row->id}}? \nDeleted Alquilers cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $alquilers->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
