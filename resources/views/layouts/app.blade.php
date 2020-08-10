<?php

	if(\Auth::user() && \Auth::user()->psychotype_id == 0)
	{
		return redirect()->route('user_test');
	}
?>
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
	@include('inc.logout')

	@include('inc.header')

				 @include('inc.sidebar')
				@yield('content')				 

	@include('inc.footer')
</body>
</html>