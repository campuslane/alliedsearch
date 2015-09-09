@extends('layouts.new')

@section('title', 'Allied Search')

{{-- page header section --}}
@section('header')
	<div class="page-header-container">
		<div class="container">
			<div class="standard-page-header">
				Contact Us
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

				
				<form action="/form/contact" method="POST">

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
						<textarea name="content"  cols="30" rows="10" class="form-control"></textarea>
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

			<div class="col-lg-6 col-md-6 col-sm-6" >
				<strong>Allied Search</strong> <br>
				2030 Union Street, Suite 206<br>
				San Francisco, CA 94123 <hr>
				<i class="fa fa-phone"></i>  &nbsp;  Phone: (415) 921-1971<br>
				<i class="fa fa-fax"></i> &nbsp; Fax: (415) 921-5309  <br>
				<i class="fa fa-envelope"></i> &nbsp; Email: <a href="mailto:hrvp@alliedsearchco.com">hrvp@alliedsearchco.com</a>

				<hr>
				<div id="map-container" style="height:300px"></div>
				
			</div>
		</div>

	
		<br>
		<br>
		<br>
 

@endsection	

@section('scripts')
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script>
	$(function(){


		function init_map() {
			var var_location = new google.maps.LatLng(37.797577,-122.432707);
	 
	        var var_mapoptions = {
	          center: var_location,
	          zoom: 12, 
	          
	        };
	 
			var var_marker = new google.maps.Marker({
				position: var_location,
				map: var_map,
				title:"Venice"});
	 
	        var var_map = new google.maps.Map(document.getElementById("map-container"),
	            var_mapoptions);
	 
			var_marker.setMap(var_map);	
 
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);

	});

	</script>
@endsection