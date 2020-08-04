@extends('layouts.app')
<!-- title -->
@section('title-block')Домашняя страница@endsection
<!-- header -->
@section('header')
	<header>
		<div class="logo">
			<div class="box_logo"><img src="{{ asset('icons/heart.png') }}" alt="tag"></div>
			<div class="box_logo"><h1>2polovinka</h1></div>
		</div> <!-- and logo -->
		<div class="right_menu">
			<div class="wp_menu">
				<div class="box"><img src="{{ asset('icons/flash.png') }}" alt="flash"></div>
				<div class="box">
					<div class="coins">
						<img src="{{ asset('icons/coin.png') }}" alt="coin">
						<span>550</span>
						<p>ед.сердечек</p>
					</div>
				</div>
				<div class="box_bell"><img src="{{ asset('icons/b1.png') }}" alt="b1"></div>
				<div class="user_ico">
					<!-- icon w40px h40px - you can use converter, if is big images -->
					<img src="{{ asset('icons/wave.png') }}" alt="wave">
				</div>
				<!-- here can by created popup menu -->
			</div> <!-- and wp_menu -->
		</div> <!-- and right_menu -->
	</header>
@endsection
<!-- sitebar -->
@section('sitebar')
	<div class="sitebar">
		<div class="wp_sitebar">

			<div class="my-acc">
				<div class="acc_ico">
					<img src="{{ asset('icons/wave.png') }}" alt="wave">
				</div>

				<div class="info">
					<p>МоеИмя</p>
					<br>
					<p>социотип тип:</p>
				</div>

				<div class="text_p">
					<p>премиум профиль не активен</p>
				</div>

				<div class="premium_button">
					<p><span></span>улучшить профиль</p>
				</div>
			</div> <!-- and my-acc -->

			<div class="box_find">
				<ul>
					<li><a href="">Поиск Знакомств</a></li>
					<li><a href="">Сообщения</a></li>
				</ul>
			</div>

			<div class="box_find">
				<ul>
					<li><a href="">Избранные</a></li>
					<li><a href="">Кому вы нравитесь</a></li>
					<li><a href="">Мои гости</a></li>
				</ul>
			</div>

			<div class="box_find">
				<ul>
					<li><a href="">Мой профиль</a></li>
					<li><a href="">Мой баланс</a></li>
					<li><a href="">О сайте</a></li>
				</ul>
			</div>
			<!-- and box_find boxes -->

			<div class="banner_x2">
				<p>google adwords</p>
			</div>
		</div>	<!-- and wp_sitebar -->
	</div>
@endsection
<!-- content -->
@section('content')
	<div class="content">

		<div class="banner">
			<h2>google adwords</h2>
		</div>
			<h2>пока что тут пусто</h2>
	</div>
@endsection
<!-- footer -->
@section('footer')
	<footer>
		<p>просто футер</p>
	</footer>
@endsection
