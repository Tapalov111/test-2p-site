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