<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
	<meta charset="UTF-8">
	<title>@yield('title-block')</title>
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
	<script src="{{ asset('js/temp.js') }}"></script>
</head>
<body>
	@yield('header')
	<div class="wrapper clearfix">
		@yield('sidebar')
		@yield('content')
	</div>
	<!--  -->
	@yield('footer')
</body>
</html>