@extends('layouts.app')
<!-- title -->
@section('title-block')Домашняя страница@endsection
<!-- header -->
@section('header')
	<header>
		<div class="logo">
			<div class="box_logo"><h1>2polovinka</h1></div>
		</div> <!-- and logo -->
		<div class="right_menu">
			<div class="wp_menu">
				<div class="box">
					<div class="coins">
						<p>единиц: 
							(<span>200</span>
							<span class="ht">
								<img src="{{ asset('icons/ht.png') }}" alt="ht">
							</span>)
						</p>
					</div>
				</div>
				<div class="box_bell"><img src="{{ asset('icons/b1.png') }}" alt="b1"></div>
				<div class="user_ico">
					<!-- icon w50px h50px - you can use converter, if is big images -->
					<img src="{{ asset('icons/userC.png') }}" alt="wave">
				</div>
			</div> <!-- and wp_menu -->
		</div> <!-- and right_menu -->

	</header>
@endsection
<!-- sidebar -->
@section('sidebar')
	<div class="sidebar">
		<div class="wp_sidebar">

			<div class="my-acc">
				<div class="acc_ico">
					<img src="{{ asset('icons/wave.png') }}" alt="wave">
				</div>

				<div class="info">
					<p>Имя Человека</p>
					<br>
					<p>социотип: Робиспиер</p>
				</div>

				<div class="text_p">
					<p>премиум профиль не активен</p>
				</div>

				<div class="premium_button">
					<p><span></span>улучшить профиль</p>
				</div>
			</div> <!-- and my-acc -->

			<div class="boxes">

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

			</div> <!-- and boxes -->
			

		</div>	<!-- and wp_sidebar -->
	</div>
@endsection
<!-- content -->
@section('content')
	<div class="content">

		<div class="cnf_people">
			<div class="name_x">
				<p>Изменить:</p>
				<div class="wp_name_x">
					<p>Страна</p>
					<p>Город</p>
					<p>Пол</p>
					<p>Возраст</p>
					<p>Искать</p>
				</div>
			</div> <!-- and name_x -->

			<div class="set_name">
				<p>Поиск:</p>
				<div class="wp_name_x">
					<select name="" id="">
						<option value=""><p>Казахстан</p></option>
					</select>
					<select name="" id="">
						<option value=""><p>Алматы</p></option>
					</select>
					<select name="" id="">
						<option value=""><p>Женщина</p></option>
					</select>
					<select name="" id="">
						<option value=""><p>от 20-30</p></option>
					</select>
					<select name="" id="">
						<option value=""><p>Совместимость</p></option>
					</select>
				</div>  <!-- and wp_name_x -->
			</div>	<!-- and set_name -->	

		</div> <!-- and cnf_people -->

		<div class="slider">
			<!-- here will be slider -->
		</div> <!-- and slider -->

		<div class="box_user">
			<div class="user_name"><p>Имя Человека 32</p></div>
			<div class="soc_type"><p>Социотип: гюто(совместим)</p></div>
			<div class="wp_text">
				<p>Коротко о себе - о своих увлечениях об интересах.
				О богатом внутренем мире, и так далее и так делаее.
				</p>
			</div>
		</div> <!-- and box_user -->

		<div class="message">
			<!-- this is icons -->
		</div>
	</div> <!-- and content -->
@endsection
<!-- footer -->
@section('footer')
	<footer>
		<p>просто футер</p>
		<p>лицензия</p>
		<p>Все права защищены</p>
		<p>2020</p>
	</footer>
@endsection
