<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
	<meta charset="UTF-8">
	<title>@yield('title-block')</title>
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
<br><br>
<ul>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
	</li>
	@if (Route::has('register'))
		<li class="nav-item">
			<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
		</li>
	@endif
</ul>


<div>
	<a class="dropdown-item" href="{{ route('logout') }}"
		onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
		Выйти
	</a>

	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
	</form>
</div>

	@yield('header')

	<div class="wrapper clearfix">
		@yield('sitebar')
		@yield('content')
	</div>

	@yield('footer')
</body>
</html>