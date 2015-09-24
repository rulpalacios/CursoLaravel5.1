@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($movie,['route'=> ['pelicula.update',$movie->id],'method'=>'PUT','files' => true])!!}
			@include('pelicula.forms.pelicula')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['pelicula.destroy',$movie->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection