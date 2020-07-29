@if( Auth::user() && Auth::user()->psychotype_id == 0 )
    {{ header('Location:/user/test') }}
@endif
<!DOCTYPE html>
<html>
<head>
    <title>Главная . 2Polovinka</title>
    <meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="title" content="Главная . 2Polovinka">
<meta name="description" content="Quickdate is the Finest Global Dating Website Around. Connect With Local Singles & Start Your Online Dating Adventure! Enjoy Worldwide Dating with Thrilling Online Chat & More.">
<meta name="keywords" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry.">
    <link rel="icon" href="http://axiomkz.me//themes/default/assets/img/icon.png" type="image/x-icon">
<link href="http://axiomkz.me//themes/default/assets/css/materialize.min.css" type="text/css" id="materialize" rel="stylesheet" media="screen,projection"/><link href="http://axiomkz.me//themes/default/assets/css/plugins.css" type="text/css" id="plugins" rel="stylesheet" media="screen,projection"/><link href="http://axiomkz.me//themes/default/assets/css/style.css" type="text/css" id="style" rel="stylesheet" media="screen,projection"/><link href="http://axiomkz.me//themes/default/assets/css/overrides.css" type="text/css" id="overrides" rel="stylesheet" media="screen,projection"/>
<link href="http://axiomkz.me//themes/default/assets/css/ie.css" type="text/css" id="ie" rel="stylesheet" media="screen,projection"/>

    <link href="http://axiomkz.me//themes/default/assets/css/night.css" type="text/css" id="night-mode-css" rel="stylesheet" media="screen,projection"/>

    <script>
        document_title = document.title;

        window.site_url =  "http://axiomkz.me/";
        window.ajax = "http://axiomkz.me//aj/";
        window.theme_url = "http://axiomkz.me//themes/default/";
        window.worker_updateDelay = '4000';
        window.email_notification = '1';
        window.media_path = "http://axiomkz.me//";
        window.current_route1 = "/";
        window.current_route2 = "/";
        window.current_route3 = "/";
        window.current_route4 = "/";
        window.current_page = "index";
        window.located = "7";
        window.ajaxsend = true;
        window.maintenance_mode = ""

        var imageAddr = "http://axiomkz.me//themes/default/assets/img/logo.png" + "?n=" + Math.random();
        var startTime, endTime;
        var downloadSize = 5616998;
        var download = new Image();
        download.onload = function () {
            endTime = (new Date()).getTime();
            var duration = (endTime - startTime) / 1000; //Math.round()
            var bitsLoaded = downloadSize * 8;
            var speedBps = (bitsLoaded / duration).toFixed(2);
            var speedKbps = (speedBps / 1024).toFixed(2);
            var speedMbps = (speedKbps / 1024).toFixed(2);

            window.internet_speed = speedMbps;
        }
        startTime = (new Date()).getTime();
        download.src = imageAddr;

    </script>
    <script src="http://axiomkz.me//themes/default/assets/js/jquery-2.1.1.min.js" type="text/javascript" id="jquery-2.1.1"></script>
    <script src="http://axiomkz.me//themes/default/assets/js/functions.js" type="text/javascript" id="functions"></script>

    <!-- onesignal -->
    <link rel="manifest" href="http://axiomkz.me//themes/default/assets/js/OneSignalSDKFiles/manifest.json">
    <script src="http://axiomkz.me//OneSignalSDKWorker.js" async='async'></script>
    <script>
        var push_user_id = '';
        var my_id = '';
        var OneSignal = window.OneSignal || [];
            OneSignal.push(["init", {
                appId: "f799dc13-ec22-4d1f-9306-b9fbde7d6106",
                allowLocalhostAsSecureOrigin: true,
                autoRegister: true, /* Set to true to automatically prompt visitors */
                notifyButton: {
                    enable: true /* Set to false to hide */
                },
                persistNotification: false,
            }]);
            OneSignal.push(function () {
                OneSignal.getUserId(function(userId) {
                    push_user_id = userId;
                    if (userId != my_id) {
                        $.get( window.ajax + 'onesignal/update_user_device_id', { id:push_user_id } );
                    }
                });
                OneSignal.on('subscriptionChange', function (isSubscribed) {
                    if (isSubscribed == false) {
                        $.get( window.ajax + 'onesignal/remove_user_device_id', {} );
                    } else {
                        $.get( window.ajax + 'onesignal/update_user_device_id', { id:push_user_id } );
                    }
                });

                OneSignal.on('notificationDisplay', function (event) {
                    console.warn('OneSignal notification displayed:', event);
                /*
                {
                    "id": "ce31de29-e1b0-4961-99ee-080644677cd7",
                    "heading": "OneSignal Test Message",
                    "content": "This is an example notification.",
                    "url": "https://onesignal.com?_osp=do_not_open",
                    "icon": "https://onesignal.com/images/notification_logo.png"
                }
                */
                });

                //
                // OneSignal.sendSelfNotification(
                //     /* Title (defaults if unset) */
                //     "OneSignal Web Push Notification",
                //     /* Message (defaults if unset) */
                //     "Action buttons increase the ways your users can interact with your notification.",
                //     /* URL (defaults if unset) */
                //     'https://example.com/?_osp=do_not_open',
                //     /* Icon */
                //     'https://onesignal.com/images/notification_logo.png',
                //     {
                //         /* Additional data hash */
                //         notificationType: 'news-feature'
                //     },
                //     [{ /* Buttons */
                //         /* Choose any unique identifier for your button. The ID of the clicked button is passed to you so you can identify which button is clicked */
                //         id: 'like-button',
                //         /* The text the button should display. Supports emojis. */
                //         text: 'Like',
                //         /* A valid publicly reachable URL to an icon. Keep this small because it's downloaded on each notification display. */
                //         icon: 'http://i.imgur.com/N8SN8ZS.png',
                //         /* The URL to open when this action button is clicked. See the sections below for special URLs that prevent opening any window. */
                //         url: 'https://example.com/?_osp=do_not_open'
                //     },
                //     {
                //         id: 'read-more-button',
                //         text: 'Read more',
                //         icon: 'http://i.imgur.com/MIxJp1L.png',
                //         url: 'https://example.com/?_osp=do_not_open'
                //     }]
                // );


            });




    </script>
    <script>
        function bindAjaxElement(item,e) {
            if ($(item).attr('id') !== 'notificationbtn'){
                $("#loader").css("display", "block");
            }
            var url ="";
            var data_ajax = $(item).attr('data-ajax');
            var data_ajax_post = $(item).attr('data-ajax-post');
            var data_ajax_callback = $(item).attr('data-ajax-callback');

            // var data_replace_text = $(item).attr('data-replace-text');
            // var data_replace_dom = $(item).attr('data-replace-dom');
            // if (typeof data_replace_text !== typeof undefined && data_replace_text !== false) {
            //     if (typeof data_replace_dom !== typeof undefined && data_replace_dom !== false) {
            //         $(data_replace_dom).html(data_replace_text);
            //     }
            // }

            window.itm = $(item).attr('id');

            if (typeof data_ajax !== typeof undefined && data_ajax !== false) {
                e.preventDefault();
                url = $(item).attr('data-ajax');
                window.current_page = url;
                $.ajax({
                    url: window.site_url + url + window.maintenance_mode,
                    data:'url='+url+'&ajax=true',
                    type: "POST",
                    timeout: 60000,
                    success: function(result) {
                        $('body').css({'overflow':'inherit'});
                        $("#loader").css("display","none");

                        var is_user_logged_in = $( result ).filter( '.is_user_logged_in' ).html();
                        if( typeof is_user_logged_in !== "undefined" ){
                            if( is_user_logged_in !== "1" ){
                                window.location.href = "/login";
                            }
                        }
                        var title = $( result ).filter( '.page_title' ).html();
                        var page_name = $( result ).filter( '.page_name' ).html();
                            window.current_page = page_name;

                        if(page_name !== 'profile' ){
                            $('meta[name=robots]').remove();
                            $('meta[name=googlebot]').remove();
                        }
                        $('#container').html(result);
                        window.history.pushState({state:'new'},'', window.site_url + url);


                        $("html, body").animate({ scrollTop: 0 }, 150);
                        custom_footer_js(page_name);

                        document.title = decodeHtml( title );
                        window.title = decodeHtml( title );
                        document.getElementsByTagName('title')[0].innerHTML = decodeHtml( title );
                        
                        M.updateTextFields();

                           window.onpopstate = function(event) {
                               $(window).unbind('popstate');
                               window.location.href = document.location;
                           };

                        event_runner(true);
                    },
                    error: function(result){
                        console.warn(result);
                    }
                });
            }

            if (typeof data_ajax_post !== typeof undefined && data_ajax_post !== false) {
                
                url = window.ajax + $(item).attr('data-ajax-post') + window.maintenance_mode;
                var params = $(item).attr('data-ajax-params');
                var callback = $(item).attr('data-ajax-callback');
                var formData = new FormData();
                var data_ajax_template = $(item).attr('data-ajax-template');

                if (params !== ''){
                    params.split("&").forEach(function(item) {
                        var s = item.split("="), k = s[0], v = s[1];
                        formData.append(k, decodeURIComponent(s[1]) );
                    });
                }

                if (typeof data_ajax_template !== typeof undefined) {
                    formData.append('data_ajax_template', data_ajax_template);
                }
                window.ajaxsend = false;
                $.ajax({
                    url: url,
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(result) {
                    //     window.ajaxsend = true;
                    //     console.log('fuck1')
                     }
                }).done(function (result) {
                    window.ajaxsend = true;
                    if (result.can_send == 1) {
                        SendMessages();
                    }
                    var fn = window[callback];
                    if (typeof fn === "function") fn( result );

                }).error(function (data) {
                    window.ajaxsend = true;
                    if( data.responseJSON.spam == true ) {
                        //$('.chat_foot').remove();

                        $('#chat_declined_modal').modal();
                        $('#chat_declined_modal #chat_declined_modal_container').html(data.responseJSON.message);
                        $('#chat_declined_modal').modal('open');
                    }
                });
            }

            
            if( typeof data_ajax_post === typeof undefined && typeof data_ajax === typeof undefined ){
                $("#loader").css("display","none");
            }

        }
        window.onload = function () {

            $("body").on("click", "a,button,span", function(e) {
                bindAjaxElement(this,e);
            });

            $(document).ajaxStart(function() {
            }).ajaxSuccess(function() {
                $("#loader").css("display","none");
            });

        };
    </script>
</head>
<body class="index-page">
        <div id="loader" class="dt_ajax_progress"></div>
        <!-- Header not-logged-in -->
    <nav role="navigation" id="nav-not-logged-in">
        <div class="nav-wrapper container">
            <div class="left header_logo">
                <a id="logo-container" href="http://axiomkz.me//" class="brand-logo"><img src="http://axiomkz.me//themes/default/assets/img/logo-light.png" /></a>
            </div>
            <ul class="right">
                <li class="hide_mobi_login"><a href="/login" data-ajax="/login" class="btn-flat waves-effect text-main qdt_hdr_auth_btns">Авторизоваться</a></li>
                <li class="hide_mobi_login"><a href="/register" data-ajax="/register" class="btn-flat btn btn_primary waves-effect waves-light white-text qdt_hdr_auth_btns">регистр</a></li>
                <div class="show_mobi_login">
                    <a class="dropdown-trigger" href="#" data-target="log_in_dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#222" d="M12,16A2,2 0 0,1 14,18A2,2 0 0,1 12,20A2,2 0 0,1 10,18A2,2 0 0,1 12,16M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10M12,4A2,2 0 0,1 14,6A2,2 0 0,1 12,8A2,2 0 0,1 10,6A2,2 0 0,1 12,4Z" /></svg></a>
                    <ul id="log_in_dropdown" class="dropdown-content">
                        <li><a href="/login" data-ajax="/login">Авторизоваться</a></li>
                        <li><a href="/register" data-ajax="/register">регистр</a></li>
                    </ul>
                </div>
            </ul>
        </div>
    </nav>
    <!-- End Header not-logged-in -->        <div id="container">
        
		<!-- Top Hero  -->
		<div class="parallax-container header_bg parallax_bg">
			<div class="section">
				<div class="container">
					<h1 class="header center">Встречайте новых и интересных людей.</h1>
					<div class="row center">
						<h5 class="header col s12 light">Присоединиться 2Polovinka, где вы могли встретить кого угодно, где угодно!</h5>
					</div>
					<div class="row center">
						<a href="/register" class="btn-large waves-effect waves-light btn_primary lighten-1 bold btn_round">Начать</a>&nbsp;&nbsp;&nbsp;
						<a href="#how_it_work" class="smooth btn-large btn-flat bold">Узнать больше</a>
					</div>
				</div>
			</div>
			<div class="parallax"><img src="http://axiomkz.me//themes/default/assets/img/dating.jpg" alt="2Polovinka"></div>
		</div>
		<!-- End Top Hero  -->

        <!-- Filters  -->
		<div class="container">
			<div class="section dt_filters bg_gradient">
				<div class="row">
					<div class="input-field col s2">
						<select>
							<option value="1" selected="selected">мужчина</option>
							<option value="2">женский</option>
						</select>
						<label class="bold">Я:</label>
					</div>
					<div class="input-field col s2">
						<select>
						<option value="1">мужчина</option>
							<option value="2" selected="selected">женский</option>
						</select>
						<label class="bold">Я ищу:</label>
					</div>
					<div class="input-field col s2">
						<select>
							<option value="18" label="18">18</option>
							<option value="19" label="19">19</option>
							<option value="20" label="20" selected="selected">20</option>
							<option value="21" label="21">21</option>
							<option value="22" label="22">22</option>
							<option value="23" label="23">23</option>
							<option value="24" label="24">24</option>
							<option value="37" label="37">37</option>
						</select>
						<label class="bold">Между возрастами</label>
					</div>
					<div class="input-field col s2">
						<select>
							<option value="28" label="28">28</option>
							<option value="29" label="29">29</option>
							<option value="30" label="30" selected="selected">30</option>
							<option value="31" label="31">31</option>
							<option value="32" label="32">32</option>
							<option value="33" label="33">33</option>
							<option value="37" label="37">37</option>
						</select>
						<label class="bold">а также</label>
					</div>
					<div class="col">
						<a href="/login" class="waves-effect waves-light btn-flat btn-large bold btn_glossy">Давай начнем</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Filters  -->

        <!-- How it Works  -->
		<div class="container">
			<div class="section dt_how_work" id="how_it_work">
				<div class="row">
					<div class="col s12">
						<div class="dt_heading_top_line"></div>
						<h3 class="center-align">Как 2Polovinka Работает </h3>
					</div>
					<div class="col s12 m4">
						<div class="icon-block center">
							<h2 class="valign-wrapper"><img src="http://axiomkz.me//themes/default/assets/img/how/create.svg" alt="Создать учетную запись"></h2>
							<h5 class="bold">Создать учетную запись<div class="bg_number">1</div></h5>
							<p>Зарегистрируйтесь бесплатно & amp; создать свой красивый профиль.</p>
						</div>
					</div>
					<div class="col s12 m4">
						<div class="icon-block center">
							<h2 class="valign-wrapper"><img src="http://axiomkz.me//themes/default/assets/img/how/match.svg" alt="Найти совпадения"></h2>
							<h5 class="bold">Найти совпадения<div class="bg_number">2</div></h5>
							<p>Поиск & amp; Связаться с матчами, которые идеально подходят для вас.</p>
						</div>
					</div>
					<div class="col s12 m4">
						<div class="icon-block center">
							<h2 class="valign-wrapper"><img src="http://axiomkz.me//themes/default/assets/img/how/dating.svg" alt="Начать знакомства"></h2>
							<h5 class="bold">Начать знакомства<div class="bg_number">3</div></h5>
							<p>Начни разговор и назначь свидание своему лучшему матчу.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End How it Works  -->

                    <!-- Latest users  -->
            <div class="container-fluid bg_gradient">
                <div class="container">
                    <div class="section">
                        <div class="row">
                            <div class="col s12 center-align dt_get_start">
                                <h4 class="white-text light">Последние 2Polovinka пользователей.</h4>
                                <div class="center">
                                                                            <a href="http://axiomkz.me//@predator" data-ajax="/@predator">
                                            <img src="http://axiomkz.me//upload/photos/d-avatar.jpg" alt="Predator" class="circle xuser">
                                        </a>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Latest users  -->
        

        
        <!-- Features  -->
		<div class="container">
			<div class="section dt_features">
				<div class="row">
					<div class="col s12">
						<div class="dt_heading_top_line"></div>
						<h3 class="center-align">Почему 2Polovinka лучше</h3>
					</div>
					<div class="col s12 m4 feature_block_first">
						<div class="icon-block center">
							<h2 class="valign-wrapper"><span class="icon_wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M12,10L8,4.4L9.6,2H14.4L16,4.4L12,10M15.5,6.8L14.3,8.5C16.5,9.4 18,11.5 18,14A6,6 0 0,1 12,20A6,6 0 0,1 6,14C6,11.5 7.5,9.4 9.7,8.5L8.5,6.8C5.8,8.1 4,10.8 4,14A8,8 0 0,0 12,22A8,8 0 0,0 20,14C20,10.8 18.2,8.1 15.5,6.8Z" /></svg></span></h2>
							<h5 class="bold">Лучший матч</h5>
							<p>Исходя из вашего местоположения, мы подберем для вас лучшие и подходящие варианты.</p>
						</div>
					</div>
					<div class="col s12 m4 feature_block_second">
						<div class="icon-block center">
							<h2 class="valign-wrapper"><span class="icon_wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M17.13,17C15.92,18.85 14.11,20.24 12,20.92C9.89,20.24 8.08,18.85 6.87,17C6.53,16.5 6.24,16 6,15.47C6,13.82 8.71,12.47 12,12.47C15.29,12.47 18,13.79 18,15.47C17.76,16 17.47,16.5 17.13,17Z" /></svg></span></h2>
							<h5 class="bold">Полностью Безопасный</h5>
							<p>Ваш аккаунт в безопасности 2Polovinka. Мы никогда не передаем ваши данные третьим лицам.</p>
						</div>
					</div>
					<div class="col s12 m4 feature_block_third">
						<div class="icon-block center">
							<h2 class="valign-wrapper"><span class="icon_wrapper"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M12,17A2,2 0 0,0 14,15C14,13.89 13.1,13 12,13A2,2 0 0,0 10,15A2,2 0 0,0 12,17M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10C4,8.89 4.9,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z" /></svg></span></h2>
							<h5 class="bold">100% конфиденциальность</h5>
							<p>Вы имеете полный контроль над своей личной информацией, которой вы делитесь.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Features  -->

        		<!-- Get Started  -->
		<div class="container-fluid bg_gradient">
			<div class="container">
				<div class="section">
					<div class="row">
						<div class="col s12 center-align dt_get_start">
							<h4 class="white-text light">Свяжись со своей идеальной родственной душой здесь, 2Polovinka.</h4>
							<a href="/register" class="waves-effect waves-light btn-flat btn-large bold btn_glossy">Начать</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Get Started  -->    </div>
    <a href="javascript:void(0);" id="ajaxRedirect" style="visibility: hidden;display: none;"></a>
    <!-- Footer  -->
        <div class="container " style="transform: none;"></div>
    <footer id="footer" class="page_footer">
        <div class="footer-copyright">
            <div class="container valign-wrapper">
                <span>авторское право © 2020 2Polovinka. Все права защищены.</span>
				<span class="dt_fotr_spn">
				<ul class="dt_footer_links">
                    <li><a href="http://axiomkz.me//blog" data-ajax="/blog">Блог</a></li>
                    &nbsp;-&nbsp;<li><a href="http://axiomkz.me//stories" data-ajax="/stories">Истории успеха</a></li>
					&nbsp;-&nbsp;<li><a href="http://axiomkz.me//about" data-ajax="/about">Насчет нас</a></li>
					&nbsp;-&nbsp;<li><a href="http://axiomkz.me//terms" data-ajax="/terms">термины</a></li>
                    &nbsp;-&nbsp;<li><a href="http://axiomkz.me//privacy" data-ajax="/privacy">политика конфиденциальности</a></li>
					&nbsp;-&nbsp;<li><a href="http://axiomkz.me//contact" data-ajax="/contact">контакт</a></li>
				</ul>
                <!-- Dropdown language -->
<span class="dt_foot_langs">
	<a class="dropdown-trigger" href="#" data-target="pages_dropdown">Больше <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M7,15L12,10L17,15H7Z" /></svg></a>
	<ul id="pages_dropdown" class="dropdown-content" style="top: -90px!important;">
                    <li style="width: 100%;"><a href="http://axiomkz.me//page/Test">Psycho test</a></li>
        	</ul>
</span>
                <!-- Dropdown language -->
<span class="dt_foot_langs">
	<a class="dropdown-trigger" href="#" data-target="lang_dropdown">язык <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M7,15L12,10L17,15H7Z" /></svg></a>
	<ul id="lang_dropdown" class="dropdown-content">

        
            <li ><a href="?language=english">английский</a></li>

            
            <li ><a href="?language=arabic">арабский</a></li>

            
            <li ><a href="?language=dutch">Голландский</a></li>

            
            <li ><a href="?language=french">Французский</a></li>

            
            <li ><a href="?language=german">Немецкий</a></li>

            
            <li ><a href="?language=italian">итальянский</a></li>

            
            <li ><a href="?language=portuguese">португальский</a></li>

            
            <li style="background-color: #f1f2f3;"><a href="?language=russian">русский</a></li>

            
            <li ><a href="?language=spanish">испанский</a></li>

            
            <li ><a href="?language=turkish">турецкий</a></li>

            	</ul>
</span>				</span>
            </div>
        </div>
    </footer>