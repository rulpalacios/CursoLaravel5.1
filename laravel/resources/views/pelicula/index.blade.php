@extends('layouts.admin')
	@include('alerts.success')
	@section('content')
		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Genero</th>
				<th>Direccion</th>
				<th>Caratula</th>
				<th>Operaciones</th>
			</thead>
			@foreach($movies as $movie)
				<tbody>
					<td>{{$movie->name}}</td>
					<td>{{$movie->genre}}</td>
					<td>{{$movie->direction}}</td>
					<td>
						<img src="movies/{{$movie->path}}" alt="" style="width:100px;"/>
					</td>
					<td>
						{!!link_to_route('pelicula.edit', $title = 'Editar', $parameters = $movie->id, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
				</tbody>
			@endforeach
		</table>
	@endsection
