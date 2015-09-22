@extends('layouts.admin')
	@section('content')
	@include('alerts.request')
		{!!Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT'])!!}
			@include('usuario.forms.usr')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=>['usuario.destroy', $user], 'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection