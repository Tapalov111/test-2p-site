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
<ul style="color:black">
	<!-- Authentication Links -->
	@guest
		<li>
			<a style="color:black" href="{{ route('login') }}">{{ __('Login') }}</a>
		</li>
		@if (Route::has('register'))
			<li class="nav-item">
				<a style="color:black" href="{{ route('register') }}">{{ __('Register') }}</a>
			</li>
		@endif
	@else
		<li class="nav-item dropdown">
			<a id="navbarDropdown" style="color:black" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
				{{ Auth::user()->name }} <span class="caret"></span>
			</a>

				<a style="color:black" href="{{ route('logout') }}"
					onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
		</li>
	@endguest
</ul>
	@yield('header')
	<div class="wrapper clearfix">
		@yield('sidebar')
		@yield('content')
	</div>
	<!--  -->
	@yield('footer')
</body>
</html>