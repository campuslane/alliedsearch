<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="/css/theme.css">
	@yield('styles')

	<style>
		.site-footer h4 {
			margin-top:18px;
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
		{{-- navbar --}}
		@include('partials.navbar')

		{{-- page header --}}
		@yield('header')

		{{-- page content --}}
		<div class="container">
			@yield('content')
		</div>
		
		{{-- footer --}}
		@include('partials.footer')

	<script src="/js/app.js"></script>
	@yield('scripts')
</body>
</html>