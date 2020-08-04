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
		</div> <!-- and banner -->
		
		<div class="form_search">
			        <form action="http://test-2p-site/user/search" method="post">
            <input type="hidden" name="_token" value="icfV3XLOvwLxiTrPsWjw2TvcIcNskcM3owNVc2OZ">
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Искать</label>

                <div class="col-md-6">
                    <select class="form-control" name="search">
                        <option value="1">Все</option>
                        <option value="2">Совместимые</option>
                    </select>

                </div>
            </div>

            
            <div class="form-group row">
                <label for="city_id" class="col-md-4 col-form-label text-md-right">Пол</label>

                <div class="col-md-6">
                
                    <select class="form-control" name="gender">
                        <option value="1">Мужчина</option>
                        <option value="2">Женщина</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="city_id" class="col-md-4 col-form-label text-md-right">Город</label>

                <div class="col-md-6">
                
                    <select class="form-control" name="city_id">
                        <option value="0">Все</option>
                                                    <option value="1">Абай</option>
                                                    <option value="2">Акколь</option>
                                                    <option value="3">Аксай</option>
                                                    <option value="4">Аксу</option>
                                                    <option value="5">Актау</option>
                                                    <option value="6">Актобе</option>
                                                    <option value="7">Алга</option>
                                                    <option value="8">Алматы</option>
                                                    <option value="9">Арал</option>
                                                    <option value="10">Аркалык</option>
                                                    <option value="11">Арыс</option>
                                                    <option value="12">Нур-Султан/Астана</option>
                                                    <option value="13">Атбасар</option>
                                                    <option value="14">Атырау</option>
                                                    <option value="15">Аягоз</option>
                                                    <option value="16">Байконур</option>
                                                    <option value="17">Балхаш</option>
                                                    <option value="18">Булаево</option>
                                                    <option value="19">Державинск</option>
                                                    <option value="20">Ерейментау</option>
                                                    <option value="21">Есик</option>
                                                    <option value="22">Есиль</option>
                                                    <option value="23">Жанаозен</option>
                                                    <option value="24">Жанатас</option>
                                                    <option value="25">Жаркент</option>
                                                    <option value="26">Жезказган</option>
                                                    <option value="27">Жем</option>
                                                    <option value="28">Жетысай</option>
                                                    <option value="29">Житикара</option>
                                                    <option value="30">Зайсан</option>
                                                    <option value="31">Зыряновск</option>
                                                    <option value="32">Казалинск</option>
                                                    <option value="33">Кандыагаш</option>
                                                    <option value="34">Капшагай</option>
                                                    <option value="35">Караганды</option>
                                                    <option value="36">Каражал</option>
                                                    <option value="37">Каратау</option>
                                                    <option value="38">Каркаралинск</option>
                                                    <option value="39">Каскелен</option>
                                                    <option value="40">Кентау</option>
                                                    <option value="41">Кокшетау</option>
                                                    <option value="42">Костанай</option>
                                                    <option value="43">Кулсары</option>
                                                    <option value="44">Курчатов</option>
                                                    <option value="45">Кызылорда</option>
                                                    <option value="46">Ленгер</option>
                                                    <option value="47">Лисаковск</option>
                                                    <option value="48">Макинск</option>
                                                    <option value="49">Мамлютка</option>
                                                    <option value="50">Павлодар</option>
                                                    <option value="51">Петропавловск</option>
                                                    <option value="52">Приозёрск</option>
                                                    <option value="53">Риддер</option>
                                                    <option value="54">Рудный</option>
                                                    <option value="55">Сарань</option>
                                                    <option value="56">Сарканд</option>
                                                    <option value="57">Сарыагаш</option>
                                                    <option value="58">Сатпаев</option>
                                                    <option value="59">Семей</option>
                                                    <option value="60">Сергеевка</option>
                                                    <option value="61">Серебрянск</option>
                                                    <option value="62">Степногорск</option>
                                                    <option value="63">Степняк</option>
                                                    <option value="64">Тайынша</option>
                                                    <option value="65">Талгар</option>
                                                    <option value="66">Талдыкорган</option>
                                                    <option value="67">Тараз</option>
                                                    <option value="68">Текели</option>
                                                    <option value="69">Темир</option>
                                                    <option value="70">Темиртау</option>
                                                    <option value="71">Туркестан</option>
                                                    <option value="72">Уральск</option>
                                                    <option value="73">Усть-Каменогорск</option>
                                                    <option value="74">Учарал</option>
                                                    <option value="75">Уштобе</option>
                                                    <option value="76">Форт-Шевченко</option>
                                                    <option value="77">Хромтау</option>
                                                    <option value="78">Шалкар</option>
                                                    <option value="79">Шар</option>
                                                    <option value="80">Шардара</option>
                                                    <option value="81">Шахтинск</option>
                                                    <option value="82">Шемонаиха</option>
                                                    <option value="83">Шу</option>
                                                    <option value="84">Шымкент</option>
                                                    <option value="85">Щучинск</option>
                                                    <option value="86">Экибастуз</option>
                                                    <option value="87">Эмба</option>
                                            </select>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="city_id" class="col-md-4 col-form-label text-md-right">Возраст</label>

                <div class="col-md-6">
                
                    <select class="form-control" name="birthday">
                        <option value="0">Все</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>
                                                    <option value="60">60</option>
                                                    <option value="61">61</option>
                                                    <option value="62">62</option>
                                                    <option value="63">63</option>
                                                    <option value="64">64</option>
                                                    <option value="65">65</option>
                                                    <option value="66">66</option>
                                                    <option value="67">67</option>
                                                    <option value="68">68</option>
                                                    <option value="69">69</option>
                                                    <option value="70">70</option>
                                                    <option value="71">71</option>
                                                    <option value="72">72</option>
                                                    <option value="73">73</option>
                                                    <option value="74">74</option>
                                                    <option value="75">75</option>
                                                    <option value="76">76</option>
                                                    <option value="77">77</option>
                                                    <option value="78">78</option>
                                                    <option value="79">79</option>
                                            </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4"></div>
                <div class="col-md-6">
                    <button class=" form-control btn-primary" type="submit">Искать </button>
                </div>
            </div>
        </form>
		</div> <!-- and form_search -->

	</div>
@endsection
<!-- footer -->
@section('footer')
	<footer>
		<p>просто футер</p>
	</footer>
@endsection