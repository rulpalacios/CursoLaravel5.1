@extends('layouts.principal')
	@section('content')
	@include('alerts.success')
		<div class="contact-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
			<div class="clearfix"></div>
			</div>

			<div class="main-contact">
				 <h3 class="head">CONTACT</h3>
				 <p>WE'RE ALWAYS HERE TO HELP YOU</p>
				 <div class="contact-form">
					 {!!Form::open(['url' => '/password/email'])!!}
					 	<div class="col-md-6 contact-left">
					 		
					 		{!!Form::text('email')!!}
						</div>
						
						{!!Form::submit('Enviar link')!!}
					 {!!Form::close()!!}
				</div>
			</div>
		</div>
	@endsection