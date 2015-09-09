@extends('layouts.new')

@section('title', 'Allied Search')

{{-- page header section --}}
@section('header')
	<div class="page-header-container">
		<div class="container">
			<div class="standard-page-header">
				Submit your Resume
			</div>
		</div>
	</div>
@endsection


{{-- page content section --}}
@section('content')

		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">

				@if(Session::has('message'))
					<div class="alert alert-success">{{Session::get('message')}}</div>
				@endif

				
				<form action="/form/resume" method="POST" enctype="multipart/form-data">

					{!! csrf_field() !!}
				
					<div class="form-group">
						<label for="name">Your Name</label>
						{!! $errors->first('name', '<div class="alert alert-danger">:message</div>') !!}
						<input type="text" name="name" class="form-control">
					</div>

					<div class="form-group">
						<label for="email">Email Address</label>
						{!! $errors->first('email', '<div class="alert alert-danger">:message</div>') !!}
						<input type="email" name="email" class="form-control">
					</div>

					<div class="form-group">
						<label for="message">Message</label>
						{!! $errors->first('content', '<div class="alert alert-danger">:message</div>') !!}
						<textarea name="content"  cols="30" rows="4" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label for="message">Attach Resume</label>
						{!! $errors->first('resume', '<div class="alert alert-danger">:message</div>') !!}
						<input type="file" name="resume" id="resume">
					</div>

					<div class="form-group">
						<label for="">Check the Box</label>
						{!! $errors->first('g-recaptcha-response', '<div class="alert alert-danger">:message</div>') !!}
						{!! Recaptcha::render() !!} 
					</div>

					<div class="form-group">
						<button class="btn btn-primary">Contact</button>
					</div>

				</form>
				
			</div>

			
		</div>

	
		<br>
		<br>
		<br>
 

@endsection	