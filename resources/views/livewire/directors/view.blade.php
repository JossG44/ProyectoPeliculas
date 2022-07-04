@section('title', __('Directors'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Director </h4>
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
						@include('livewire.directors.create')
						@include('livewire.directors.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm bg-light">
						<thead class="thead">
							<tr> 
								<th>ID</th> 
								<th>Nombre</th>
								<td>     </td>
							</tr>
						</thead>
						<tbody>
							@foreach($directors as $row)
							<tr>
								<td>{{ $row->id }}</td> 
								<td>{{ $row->dir_nombre }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actualizar
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Director id {{$row->id}}? \nDeleted Directors cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $directors->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
