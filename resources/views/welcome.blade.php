<!DOCTYPE html>
<html>
<head>
<title>Главная . 2Polovinka</title>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="title" content="Главная . 2Polovinka">
<meta name="description" content="Quickdate is the Finest Global Dating Website Around. Connect With Local Singles & Start Your Online Dating Adventure! Enjoy Worldwide Dating with Thrilling Online Chat & More.">
<meta name="keywords" content="Lorem Ipsum is simply dummy text of the printing and typesetting industry.">
<link rel="icon" href="http://mysite.net//themes/default/assets/img/icon.png" type="image/x-icon">
<link href="http://mysite.net//themes/default/assets/css/materialize.min.css" type="text/css" id="materialize" rel="stylesheet" media="screen,projection"/>
<link href="http://mysite.net//themes/default/assets/css/plugins.css" type="text/css" id="plugins" rel="stylesheet" media="screen,projection"/>
<link href="http://mysite.net//themes/default/assets/css/style.css" type="text/css" id="style" rel="stylesheet" media="screen,projection"/>
<link href="http://mysite.net//themes/default/assets/css/overrides.css" type="text/css" id="overrides" rel="stylesheet" media="screen,projection"/>
<link href="http://mysite.net//themes/default/assets/css/ie.css" type="text/css" id="ie" rel="stylesheet" media="screen,projection"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
<link href="http://mysite.net//themes/default/assets/css/night.css" type="text/css" id="night-mode-css" rel="stylesheet" media="screen,projection"/>

<script>
    document_title = document.title;
        window.site_url =  "http://mysite.net/";
        window.ajax = "http://mysite.net//aj/";
        window.theme_url = "http://mysite.net//themes/default/";
        window.worker_updateDelay = '4000';
        window.email_notification = '1';
        window.media_path = "http://mysite.net//";
        window.current_route1 = "/login";
        window.current_route2 = "/";
        window.current_route3 = "/";
        window.current_route4 = "/";
        window.current_page = "login";
        window.located = "7";
        window.ajaxsend = true;
        window.maintenance_mode = ""
        var imageAddr = "http://mysite.net//themes/default/assets/img/logof.png" + "?n=" + Math.random();
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
          <script src="https://quickdatescript.com/themes/default/assets/js/jquery-3.5.1.min.js" type="text/javascript" id="jquery-2.1.1"></script>
          <script src="https://quickdatescript.com/themes/default/assets/js/functions.js" type="text/javascript" id="functions"></script>

    <!-- onesignal -->
    <link rel="manifest" href="http://mysite.net//themes/default/assets/js/OneSignalSDKFiles/manifest.json">
    <script src="https://quickdatescript.com/OneSignalSDKWorker.js" async='async'></script>
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
                            window.location.href = "http://axiomkz.me//login";
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
    <nav role="navigation" id="nav-not-logged-in" style="height: 80px;">
        <div class="nav-wrapper container">
            <div class="left header_logo">
                <a  href="http://mysite.net//" class="brand-logo"> <img style="height: 46px;width: 198px;margin-top: 13px;" src="http://mysite.net//themes/default/assets/img/logof.png" /></a>
            </div>
            <ul class="right" style="padding-top: 15px;">
                <li class="hide_mobi_login"><a href="http://mysite.net//login" data-ajax="/login" class="btn-flat waves-effect text-main qdt_hdr_auth_btns" >Вход</a></li>
                <li class="hide_mobi_login"><a href="http://mysite.net//register" data-ajax="/register" class="btn-flat btn btn_primary waves-effect waves-light white-text qdt_hdr_auth_btns">Регистрация</a></li>
                <div class="show_mobi_login">
                    <a class="dropdown-trigger" href="#" data-target="log_in_dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#222" d="M12,16A2,2 0 0,1 14,18A2,2 0 0,1 12,20A2,2 0 0,1 10,18A2,2 0 0,1 12,16M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10M12,4A2,2 0 0,1 14,6A2,2 0 0,1 12,8A2,2 0 0,1 10,6A2,2 0 0,1 12,4Z" /></svg></a>
                    <ul id="log_in_dropdown" class="dropdown-content">
                        <li><a href="http://mysite.net//login" data-ajax="/login">Вход</a></li>
                        <li><a href="http://mysite.net//register" data-ajax="/register">Регистрация</a></li>
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
                    <h1 class="header center">Поиск знакомств по совместимости.</h1>
                    <div class="row center">
                        <h5 class="header col s12 light">Добавляйтесь, и знакомтесь с людьми подходящих вам по психотипу, точнейшие подборы основанные на тестах, теперь доступно всем желающим!</h5>
                    </div>
                    <div class="row center">
                        <a href="http://mysite.net//register" class="btn-large waves-effect waves-light btn_primary lighten-1 bold btn_round">Присоединиться</a>&nbsp;&nbsp;&nbsp;
                        
                    </div>
                </div>
            </div>
            <!--<div class="parallax"><img src="http://mysite.net//themes/default/assets/img/dating.jpg" alt="2Polovinka"></div>  -->
        </div>
        <!-- End Top Hero  -->

        <!-- Filters  -->
        <div class="container">
            <div class="section dt_filters bg_gradient">
                <div class="row" style="text-align: center;margin-bottom: 10px;">
                    <div class="input-field col s2">
                        <img src="http://mysite.net//themes/default/assets/img/login.png" style="width: 80px;height: 80px;" alt="">
                        <h6>Зарегистрируйтесь</h6> 
                    </div>
                    <div class="input-field col s2">
                        <img src="http://mysite.net//themes/default/assets/img/personality.png" style="width: 80px;height: 80px;" alt="">
                       <h6>Узнайте о своем характере</h6> 
                    </div>
                    <div class="input-field col s2">
                        <img src="http://mysite.net//themes/default/assets/img/distance.png" style="width: 80px;height: 80px;" alt="">
                       <h6>Ищите совместимых людей</h6> 
                    </div>
                    <div class="input-field col s2">
                        <img src="http://mysite.net//themes/default/assets/img/phone.png" style="width: 80px;height: 80px;" alt="" alt="">
                       <h6>Знакомьтесь</h6> 
                    </div>
                    <div class="col" style="margin-top: 35px; ">
                        <a href="http://mysite.net//login" class="waves-effect waves-light btn-flat btn-large bold btn_glossy">Давай начнем</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Filters  -->
                <div class="header__arrows" style="text-align: center;margin-top:-30px;margin-bottom: 35px;">
                      <a href="#" class="animated fadeInDown infinite slow">
                         <img src="http://mysite.net//themes/default/assets/img/arrows-down.svg" alt="">
                      </a>
                </div>
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
                            <h2 class="valign-wrapper"><img src="http://mysite.net//themes/default/assets/img/how/create.svg" alt="Создать учетную запись"></h2>
                            <h5 class="bold">Создать учетную запись<div class="bg_number">1</div></h5>
                            <p>Зарегистрируйтесь и узнайте какой у вас психотип по тесту.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block center">
                            <h2 class="valign-wrapper"><img src="http://mysite.net//themes/default/assets/img/how/match.svg" alt="Найти совпадения"></h2>
                            <h5 class="bold">Поиск совместимости<div class="bg_number">2</div></h5>
                            <p>Знакомтесь с человеком идеально совместимым с вашим психотипом.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block center">
                            <h2 class="valign-wrapper"><img src="http://mysite.net//themes/default/assets/img/how/dating.svg" alt="Начать знакомства"></h2>
                            <h5 class="bold">Начните знакомство<div class="bg_number">3</div></h5>
                            <p>Обменяйтесь сообщениями и знакомтесь.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End How it Works  -->

                <!-- Get Started  -->
        <div class="container-fluid bg_gradient">
            <div class="container">
                <div class="section">
                    <div class="row">
                        <div class="col s12 center-align dt_get_start">
                            <h4 class="white-text light">Находите совместимых с вами людей здесь на 2polovinka.</h4>
                            <a href="http://axiomkz.me//register" class="waves-effect waves-light btn-flat btn-large bold btn_glossy">Начать</a>
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
                    <li><a href="http://mysite.net//blog" data-ajax="/mysite.net">Блог</a></li>
                    &nbsp;-&nbsp;<li><a href="http://mysite.net//stories" data-ajax="/stories">Истории успеха</a></li>
                    &nbsp;-&nbsp;<li><a href="http://mysite.net//about" data-ajax="/about">Насчет нас</a></li>
                    &nbsp;-&nbsp;<li><a href="http://mysite.net//terms" data-ajax="/terms">термины</a></li>
                    &nbsp;-&nbsp;<li><a href="http://mysite.net//privacy" data-ajax="/privacy">политика конфиденциальности</a></li>
                    &nbsp;-&nbsp;<li><a href="http://mysite.net//contact" data-ajax="/contact">контакт</a></li>
                </ul>
                <!-- Dropdown language -->
<span class="dt_foot_langs">
    <a class="dropdown-trigger" href="#" data-target="pages_dropdown">Больше <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M7,15L12,10L17,15H7Z" /></svg></a>
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
</span>             </span>
            </div>
        </div>
    </footer>
<!-- End Footer  -->
    <!-- Scroll to top  -->
    <a href="javascript:void(0);" class="btn-floating btn-large waves-effect waves-light dt_to_top bg_gradient"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z"></path></svg></a>
    <!-- End Scroll to top  -->
    <script src="https://quickdatescript.com/themes/default/assets/js/materialize.min.js" type="text/javascript" id="materialize"/></script><script src="https://quickdatescript.com/themes/default/assets/js/script.js" type="text/javascript" id="script"/></script><script src="https://quickdatescript.com/themes/default/assets/js/plugins.js" type="text/javascript" id="plugins"/></script>      <div id="max_swap_modal" class="modal dt_swipe_modal_max">
    <div class="modal-content">
        <img src="http://mysite.net/themes/default/assets/img/max-swipe-alert.svg" alt="близко">
        <div id="max_swap_modal_container"></div>
    </div>
    <div class="modal-footer">
        <a href="http://axiomkz.me//pro" data-ajax="/pro" class="prema"><span style="margin-left: 9px;">премия</span></a>
        <a href="javascript:void(0);" class="modal-close waves-effect btn-flat">близко</a>
    </div>
</div>

<div id="chat_declined_modal" class="modal">
    <div class="modal-content">
        <div id="chat_declined_modal_container"></div>
    </div>
    <div class="modal-footer">
        <a href="javascript:void(0);" class="modal-close waves-effect btn-flat">близко</a>
    </div>
</div>

<script>
    var Wo_Delay = (function(){
    var timer = 0;
    return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
    };
})();

    function Wo_ChatSticker(self){
        if (!self) {
            return false;
        }

        $( '#gify_box' ).modal("close");
        $('.lds-facebook').removeClass('hide');
        $('#btn_chat_f_send').addClass('hide');


        let id = $( this ).attr( 'data-id' );
        let form = $("#chat_message_form");
        let url = window.ajax + form.attr('action');
        $.ajax({
            type: 'POST',
            url: url,
            data: form.serialize() + '&gifurl=' + $(self).attr('data-gif'),
            success: function (data) {

            if (window._get_chatConversationsInterval) {
                window._get_chatConversationsInterval.start();
            }
            let el = $( '#dt_emoji' ).emojioneArea();
                el.data( 'emojioneArea' ).setText('');
                if( typeof el.data( 'emojioneArea' ).editor !== "undefined" ){
                el.data( 'emojioneArea' ).editor.focus();
            }

                _get_chat_conversation(data.to);
                $('#btn_chat_f_send').removeClass('hide');
                $('.lds-facebook').addClass('hide');
            }
        });

    }

    function GetGifyChat(keyword){
        Wo_Delay(function(){
            let offset = Math.floor(Math.random() * 100) + 1;
            $.ajax({
                url: 'https://api.giphy.com/v1/gifs/search?',
                type: 'GET',
                dataType: 'json',
                data: {q:keyword,api_key:'GIjbMwjlfGcmNEgB0eqphgRgwNCYN8gh',limit:24,offset: offset},
            })
            .done(function(data) {
                if (data.meta.status == 200 && data.data.length > 0) {
                    $('#gifylist').empty();
                    for (var i = 0; i < data.data.length; i++) {
                        appended = true;
                        if (appended == true) {
                            appended = false;
                            $('#gifylist').append($('<img alt="gif" src="'+data.data[i].images.fixed_height_small.url+'" data-gif="' + data.data[i].images.fixed_height.url + '" onclick="Wo_ChatSticker(this)" autoplay loop>'));
                            appended = true;
                        }
                    }
                }
                else{
                    $('#gifylist').html('<p class="no_chat_gifs_found"><i class="fa fa-frown-o"></i> Результатов не найдено</p>');
                }
            })
            .fail(function() {
                console.log("error");
            })
        },1000);
    }

    function Wo_GetChatStickers(keyword){
        if (!keyword) {
            return false;
        }
        var chat_gif_loading =  '\
  <div class="sk-circle">\
    <div class="sk-circle1 sk-child"></div>\
    <div class="sk-circle2 sk-child"></div>\
    <div class="sk-circle3 sk-child"></div>\
    <div class="sk-circle4 sk-child"></div>\
    <div class="sk-circle5 sk-child"></div>\
    <div class="sk-circle6 sk-child"></div>\
    <div class="sk-circle7 sk-child"></div>\
    <div class="sk-circle8 sk-child"></div>\
    <div class="sk-circle9 sk-child"></div>\
    <div class="sk-circle10 sk-child"></div>\
    <div class="sk-circle11 sk-child"></div>\
    <div class="sk-circle12 sk-child"></div>\
  </div>';
        $('#chat-box-stickers-cont').html(chat_gif_loading);
        Wo_Delay(function(){
            $.ajax({
                url: 'https://api.giphy.com/v1/gifs/search?',
                type: 'GET',
                dataType: 'json',
                data: {q:keyword,api_key:'GIjbMwjlfGcmNEgB0eqphgRgwNCYN8gh',limit:15},
            })
                .done(function(data) {
                if (data.meta.status == 200 && data.data.length > 0) {
                    $('#chat-box-stickers-cont').empty();
                    for (var i = 0; i < data.data.length; i++) {
                        appended = true;
                        if (appended == true) {
                            appended = false;
                            $('#chat-box-stickers-cont').append($('<img alt="gif" src="'+data.data[i].images.fixed_height_small.url+'" data-gif="' + data.data[i].images.fixed_height.url + '" onclick="Wo_ChatSticker(this)" autoplay loop>'));
                            appended = true;
                        }
                    }
                    }
                else{
                    $('#chat-box-stickers-cont').html('<p class="no_chat_gifs_found"><i class="fa fa-frown-o"></i> Результатов не найдено</p>');
                }
            })
            .fail(function() {
                console.log("error");
            })
        },1000);
    }

    function interest_chipsUpdate(e, data) {
        var chipsData = M.Chips.getInstance($('.interest_chips')).chipsData;
        var len = chipsData.length;
        var chipsValue = "";
        var i;
        for (i = 0; i < len; i++) {
            chipsValue += chipsData[i].tag + ",";
        }

        document.getElementsByName("interest")[0].value = chipsValue;
    }
    function deleteimage(img){
        var src = $(img).parent().parent().find('.fancybox-image').attr('src'); // Looks for the *fancyboxed* image
        var url = window.ajax + '/profile/delete_avater';
        var formData = new FormData();
        formData.append("id", $(img).attr('data-id') );
        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            contentType:false,
            cache: false,
            processData:false,
            success: function(data){
            if(data.status == 200) {
                parent.$.fancybox.close();
                $("#ajaxRedirect").attr("data-ajax",'/' + window.loggedin_user);
                $("#ajaxRedirect").click();
            }
        },
            error: function (data) {
            M.toast({html: data.responseJSON.message});
            },
        });
    }
    function deleteimageadmin(img,user){
        var src = $(img).parent().parent().find('.fancybox-image').attr('src'); // Looks for the *fancyboxed* image
        var url = window.ajax + '/profile/delete_avater_admin';
        var formData = new FormData();
        formData.append("id", $(img).attr('data-id') );
        formData.append("uid", user );
        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            contentType:false,
            cache: false,
            processData:false,
            success: function(data){
            if(data.status == 200) {
                parent.$.fancybox.close();
                $("#ajaxRedirect").attr("data-ajax",'/@' + data.userData.username);
                $("#ajaxRedirect").click();
            }
        },
            error: function (data) {
            M.toast({html: data.responseJSON.message});
            },
        });
    }

    function privateimage(img){
        var src = $(img).parent().parent().find('.fancybox-image').attr('src'); // Looks for the *fancyboxed* image
        var url = window.ajax + '/profile/private_avater';
        var formData = new FormData();
        formData.append("id", $(img).attr('data-id') );

        var chat_gif_loading =  '<div class="qdt_lbox_prvtLoader"><svg width="120" height="30" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg"><circle cx="15" cy="15" r="15"> <animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite" /> <animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite" /> </circle> <circle cx="60" cy="15" r="9" fill-opacity="0.3"> <animate attributeName="r" from="9" to="9" begin="0s" dur="0.8s" values="9;15;9" calcMode="linear" repeatCount="indefinite" /> <animate attributeName="fill-opacity" from="0.5" to="0.5" begin="0s" dur="0.8s" values=".5;1;.5" calcMode="linear" repeatCount="indefinite" /> </circle> <circle cx="105" cy="15" r="15"> <animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite" /> <animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite" /></circle></svg></div>';
        $('.fancybox-content img.fancybox-image').after(chat_gif_loading);

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            contentType:false,
            cache: false,
            processData:false,
            success: function(data){
            if(data.status == 200) {
                $('.sk-circle').remove();
                parent.$.fancybox.close();
                $("#ajaxRedirect").attr("data-ajax",'/' + window.loggedin_user);
                $("#ajaxRedirect").click();
            }
        },
            error: function (data) {
            M.toast({html: data.responseJSON.message});
            },
        });
    }
    function unprivateimage(img){
        var src = $(img).parent().parent().find('.fancybox-image').attr('src'); // Looks for the *fancyboxed* image
        var url = window.ajax + '/profile/unprivate_avater';
        var formData = new FormData();
        formData.append("id", $(img).attr('data-id') );

        var chat_gif_loading =  '<div class="qdt_lbox_prvtLoader"><svg width="120" height="30" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg"><circle cx="15" cy="15" r="15"> <animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite" /> <animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite" /> </circle> <circle cx="60" cy="15" r="9" fill-opacity="0.3"> <animate attributeName="r" from="9" to="9" begin="0s" dur="0.8s" values="9;15;9" calcMode="linear" repeatCount="indefinite" /> <animate attributeName="fill-opacity" from="0.5" to="0.5" begin="0s" dur="0.8s" values=".5;1;.5" calcMode="linear" repeatCount="indefinite" /> </circle> <circle cx="105" cy="15" r="15"> <animate attributeName="r" from="15" to="15" begin="0s" dur="0.8s" values="15;9;15" calcMode="linear" repeatCount="indefinite" /> <animate attributeName="fill-opacity" from="1" to="1" begin="0s" dur="0.8s" values="1;.5;1" calcMode="linear" repeatCount="indefinite" /></circle></svg></div>';
        $('.fancybox-content img.fancybox-image').after(chat_gif_loading);

        $.ajax({
            type: 'POST',
            url: url,
            data: formData,
            contentType:false,
            cache: false,
            processData:false,
            success: function(data){
            if(data.status == 200) {
                $('.sk-circle').remove();
                parent.$.fancybox.close();
                $("#ajaxRedirect").attr("data-ajax",'/' + window.loggedin_user);
                $("#ajaxRedirect").click();
            }
        },
            error: function (data) {
            M.toast({html: data.responseJSON.message});
            },
        });
    }

    var stripe_array = [];
    function SH_StripeRequest(argument) {
        if ($("#stripe_name").val() != '' && $("#stripe_email").val() != '' && $("#stripe_number").val() != '' && $("#stripe_month").val() != '' && $("#stripe_year").val() != '' && $("#stripe_cvc").val() != '' && $("#wallet_amount").val() != '') {
            var script = document.createElement('script');
            script.src = 'https://js.stripe.com/v2/';
            script.type = 'text/javascript';
            script.onload = script.onreadystatechange = function() {
                Stripe.setPublishableKey('');

                $('#stripe_button').attr('disabled', 'true');
                $('#stripe_button').text("Пожалуйста, подождите..");
                stripe_array['stripe_name'] = $('#stripe_name').val();
                stripe_array['stripe_email'] = $('#stripe_email').val();
                stripe_array['stripe_number'] = $('#stripe_number').val();
                stripe_array['stripe_month'] = $('#stripe_month').val();
                stripe_array['stripe_year'] = $('#stripe_year').val();
                stripe_array['stripe_cvc'] = $('#stripe_cvc').val();
                stripe_array['amount'] = getPrice();
                Stripe.createToken({
                    number: $('#stripe_number').val(),
                    exp_month: $('#stripe_month').val(),
                    exp_year: $('#stripe_year').val(),
                    cvc: $('#stripe_cvc').val()
                }, SH_StripeResponseHandler);
            };
            let head  = document.getElementsByTagName('head')[0];
            head.appendChild(script);

        }
        else{
            $('#stripe_alert').html("Пожалуйста, проверьте свои данные");
        }
    }
    function SH_StripeResponseHandler(status, response) {
        if (response.error) {
            $('#stripe_alert').html(response.error.message);
            $('#stripe_button').removeAttr('disabled');
            $('#stripe_button').text("платить");
        } else {
            stripe_array['token'] = response.id;

            $.post(window.ajax + 'stripe/handle', {
                stripeToken: stripe_array['token'],
                stripe_name: stripe_array['stripe_name'],
                stripe_email: stripe_array['stripe_email'],
                stripe_number: stripe_array['stripe_number'],
                stripe_month: stripe_array['stripe_month'],
                stripe_year: stripe_array['stripe_year'],
                stripe_cvc: stripe_array['stripe_cvc'],
                amount: stripe_array['amount'],
                description: getDescription(),
                price: stripe_array['amount'],
                payType: 'credits'
            }, function (data) {
                if (data.status == 200) {
                    $('#credit_amount').html(data.credit_amount);
                    //document.location = window.site_url + data.location;
                    $("#btnProSuccess").attr("data-ajax", data.location);
                    $("#btnProSuccess").click();
                } else {
                    $('.modal-body').html('<i class="fa fa-spin fa-spinner"></i> Платеж отклонен ');
                }
            });
        }
    }

    function SH_StripeRequestPro(argument) {
        if ($("#stripe_name").val() != '' && $("#stripe_email").val() != '' && $("#stripe_number").val() != '' && $("#stripe_month").val() != '' && $("#stripe_year").val() != '' && $("#stripe_cvc").val() != '' && $("#wallet_amount").val() != '') {
            var script = document.createElement('script');
            script.src = 'https://js.stripe.com/v2/';
            script.type = 'text/javascript';
            script.onload = script.onreadystatechange = function() {
                Stripe.setPublishableKey('');

                $('#stripe_button_pro').attr('disabled', 'true');
                $('#stripe_button_pro').text("Пожалуйста, подождите..");
                stripe_array['stripe_name'] = $('#stripe_name').val();
                stripe_array['stripe_email'] = $('#stripe_email').val();
                stripe_array['stripe_number'] = $('#stripe_number').val();
                stripe_array['stripe_month'] = $('#stripe_month').val();
                stripe_array['stripe_year'] = $('#stripe_year').val();
                stripe_array['stripe_cvc'] = $('#stripe_cvc').val();
                stripe_array['amount'] = getPrice();
                Stripe.createToken({
                    number: $('#stripe_number').val(),
                    exp_month: $('#stripe_month').val(),
                    exp_year: $('#stripe_year').val(),
                    cvc: $('#stripe_cvc').val()
                }, SH_StripeResponseHandlerPro);
            };
            let head  = document.getElementsByTagName('head')[0];
            head.appendChild(script);

        }
        else{
            $('#stripe_alert').html("Пожалуйста, проверьте свои данные");
        }
    }
    function SH_StripeResponseHandlerPro(status, response) {
        if (response.error) {
            $('#stripe_alert').html(response.error.message);
            $('#stripe_button_pro').removeAttr('disabled');
            $('#stripe_button_pro').text("платить");
        } else {
            stripe_array['token'] = response.id;

            $.post(window.ajax + 'stripe/handle', {
                stripeToken: stripe_array['token'],
                stripe_name: stripe_array['stripe_name'],
                stripe_email: stripe_array['stripe_email'],
                stripe_number: stripe_array['stripe_number'],
                stripe_month: stripe_array['stripe_month'],
                stripe_year: stripe_array['stripe_year'],
                stripe_cvc: stripe_array['stripe_cvc'],
                amount: stripe_array['amount'],
                description: getDescription(),
                price: stripe_array['amount'],
                payType: 'membership'
            }, function (data) {
                if (data.status == 200) {
                    $('.prem').hide();
                    $("#btnProSuccess").attr("data-ajax", data.location);
                    $("#btnProSuccess").click();
                } else {
                    $('.modal-body').html('<i class="fa fa-spin fa-spinner"></i> Платеж отклонен ');
                }
            });
        }
    }

    function custom_footer_js(page_name){



        $("#avater_profile_img2").fancybox();
        $("#avater_profile_img").fancybox();
        $.fancybox.defaults.hash = false;
        $('[data-fancybox="gallery"]').fancybox({
            beforeShow: function(){
            // fancybox is open, run myFunct()


            $('body').addClass('fancybox-show-toolbar');
            $('body').addClass('fancybox-show-infobar');
            $('body').addClass('fancybox-show-nav');

            $('.fancybox-button--del').attr('data-id', this.opts.id);

            if(typeof this.opts.private !== "undefined"){

                if( this.opts.private === true ){
                    $('.fancybox-button--remove-prvt').show();
                    $('.fancybox-button--prvt').hide();

                    $('.fancybox-button--remove-prvt').attr('data-id', this.opts.id);
                }else{
                    $('.fancybox-button--remove-prvt').hide();
                    $('.fancybox-button--prvt').show();

                    $('.fancybox-button--prvt').attr('data-id', this.opts.id);
                }

                    if( this.opts.avater === true ){
                        $('.fancybox-button--remove-prvt').hide();
                        $('.fancybox-button--prvt').hide();
                    }

                }
            },
            loop: true,
            video: {
            controls: 0
            },
            afterClose: function(){
            // fancybox is closed, run myOtherFunct()
        },
            closeExisting: false,
            buttons : [
            'prvt',
            'remove_prvt',
            'del',
            'zoom',
            'slideShow',
            'thumbs',
            'close'
        ]
        });


        $('.sidenav').sidenav();
        $('.parallax').parallax();

        $(document).ready(function(){
            $('.dt_tstm_usr .carousel.carousel-slider,.carousel.carousel-slider').carousel({fullWidth: true,indicators: true});
        });
        setInterval(function(){
            $('.dt_tstm_usr .carousel.carousel-slider').carousel('next');
        }, 7000);


        var dropdown_trigger = document.getElementsByClassName('dropdown-trigger');
        if (dropdown_trigger !== undefined) {
            try{
                $('.dropdown-trigger').dropdown();
            } catch(e) {}
        }

       //
        $('.modal').modal();
        $('select').formSelect();

        $("select").trigger('contentChanged');
        $('.tooltipped').tooltip();
        $('.collapsible').collapsible();

        var maxdate1 = new Date();
            maxdate1.setDate(maxdate1.getDate());

        $('#start_date').datepicker({
            container: 'body',
            format: 'yyyy-mm-dd',
            maxDate: maxdate1
        });

        var maxdate = new Date();
            maxdate.setDate(maxdate.getDate() - 6574);

        // Basic Info Step 2
        var dt = $('.user_bday').datepicker({
            yearRange: [1947, 2010],
            container: 'body',
            format: 'yyyy-mm-dd',
            maxDate: maxdate
        });
        if(typeof dt[0] !== "undefined") {
            if (dt[0].value !== '0000-00-00' || dt[0].value !== '') {
                $('.user_bday').datepicker('setDate', dt[0].value);
            } else {
                var d = new Date();
                d.setDate(d.getDate() - 6574);
                $('.user_bday').datepicker('setDate', d);
            }
        }
        if (typeof dt[0] !== "undefined" && dt[0].value == '') {
            var dat = new Date();
            dat.setDate(dat.getDate() - 6574);
            $('.datepicker').datepicker('setDate', dat);
        }
        // Settings
        $('.interest_chips').chips({
            placeholder: 'Введите тег, затем нажмите Enter',
            secondaryPlaceholder: '+ Tag, нажмите Enter, чтобы добавить больше',
            onChipDelete: function (e, data) { interest_chipsUpdate(e, data) },
            onChipAdd: function (e, data) { interest_chipsUpdate(e, data) }
        });
        if ( $('#interest_entry_profile').length ){
            var chips = $('#interest_entry_profile').val();
            var chips_array = chips.split(',');
            var i;
            for (i = 0; i < chips_array.length; i++) {
                $('.interest_chips').chips('addChip', {tag: chips_array[i]});
            }
        }
        jQuery(document).ready(function() {jQuery('.custom_fixed_element').theiaStickySidebar({additionalMarginTop: 10});});
        $("form").submit(function(e) {
            var form = $(this);
            var url = window.ajax + form.attr('action') + window.maintenance_mode;
            var button_text = form.find(':submit span').text();

            form.find(':submit').addClass( 'disabled' );
            form.find(':submit span').text( 'Загрузка ..' );

            $.ajax({
                type: 'POST',
                url: url,
                data: form.serialize(),
                success: function(data){
                form.find(':submit').removeClass( 'disabled' );
                form.find(':submit span').text( button_text );
                if( typeof data.message !== "undefined" ){
                    form.find( '.alert-danger' ).html( '' ).hide();
                    form.find( '.alert-success' ).html( data.message ).fadeIn( "fast" );
                    setTimeout(function() {
                        form.find( '.alert-success' ).fadeOut( "fast" );
                    }, 3000);
                }else{
                    if(form.attr('action') === '/Useractions/verifyphone'){
                        form.find('.alert-danger').html("Ошибка при отправке SMS, повторите попытку позже.").fadeIn("fast");
                    }else {
                        form.find('.alert-danger').html("Ошибка при отправке формы.").fadeIn("fast");
                    }
                    form.find( '.alert-success' ).html( '' ).hide();
                    setTimeout(function() {
                        form.find( '.alert-danger' ).fadeOut( "fast" );
                    }, 3000);
                }
                    if( typeof(data.updateDom) !== 'undefined' ){
                        if( typeof(data.updateDom.selector) !== 'undefined' && typeof(data.updateDom.attributes) !== 'undefined' ){
                            $.each(data.updateDom.attributes, function(index, value) {
                                //console.log(data.updateDom.selector,index,value);
                                $(data.updateDom.selector).attr(index,value);
                            });
                        }
                    }
                    if ( typeof(data.cookies) !== 'undefined' ){
                        var date = new Date();
                        date.setTime(date.getTime()+(10 * 365 * 24 * 60 * 60 * 1000 ) );
                        $.each(data.cookies, function(index, value) {
                            document.cookie = index + "=" + value + "; expires=" + date.toGMTString() + "; path=/";
                        });
                    }
                    if ( typeof(data.remove_cookies) !== 'undefined' ){
                        $.each(data.remove_cookies, function(index, value) {
                            document.cookie = index+"=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/";
                        });
                    }
                    if( typeof(data.url) !== 'undefined' ){
                        form.find(':submit').addClass( 'disabled' );
                        setTimeout(function() {
                            window.location = data.url;
                        }, 2000);
                    }
                    if( typeof(data.ajaxRedirect) !== 'undefined' ){
                        form.find(':submit').addClass( 'disabled' );
                        setTimeout(function() {
                            $("#ajaxRedirect").attr("data-ajax", data.ajaxRedirect);
                            $("#ajaxRedirect").click();
                        }, 1000);
                    }
                    M.updateTextFields();
                    $("html, body").animate({ scrollTop: 0 }, 150);
                },
                error: function (data) {
                if( data.responseJSON.status == 600 ){
                    window.location = data.responseJSON.url;
                }
                form.find( '.alert-success' ).html( '' ).hide();
                form.find( '.alert-danger' ).html( data.responseJSON.message ).fadeIn( "fast" );
                setTimeout(function() {
                    form.find( '.alert-danger' ).fadeOut( "fast" );
                }, 5000);

                form.find(':submit').removeClass( 'disabled' );
                form.find(':submit span').text( button_text );
            },
            });

            e.preventDefault();
        });

        // stripe
        (function($){
            $(function(){
                var handler = null;
                $( document ).on( 'click', '#stripe_credit_btn', function(e) {
                    if( handler !== null ) {
                        handler.open({
                            name: '2Polovinka',
                            description: getDescription(),
                            currency: 'RUB',
                            amount: getPrice() * 100,
                            opened: function () {
                            $('#stripe_credit').addClass('disabled');
                            $('#stripe_credit').attr('disabled', true);
                        },
                            closed: function () {
                            //document.location = window.site_url + '/credit';
                            $('#stripe_credit').removeClass('disabled');
                            $('#stripe_credit').attr('disabled', false);
                        }
                        });
                        e.preventDefault();
                    }
                });
                $( document ).on( 'click', '#stripe_creditc', function(e) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    if (typeof StripeCheckout == 'undefined'){
                        $('#stripe_credit').addClass('disabled');
                        $('#stripe_credit').attr('disabled', true);
                        var script = document.createElement('script');
                        script.src = 'https://checkout.stripe.com/checkout.js';
                        script.type = 'text/javascript';
                        script.onload = script.onreadystatechange = function() {
                            if ( !this.readyState || this.readyState == "loaded" || this.readyState == "complete" ) {
                                if (typeof StripeCheckout !== 'undefined'){
                                    handler = StripeCheckout.configure({
                                            key: '',
                                            image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
                                            locale: 'english',
                                            token: function (token) {
                                        $.post(window.ajax + 'stripe/handle', {
                                                    stripeToken: token.id,
                                                    description: getDescription(),
                                                    price: getPrice(),
                                                    payType: 'credits'
                                                }, function (data) {
                                            if (data.status == 200) {
                                                $('#credit_amount').html(data.credit_amount);
                                                //document.location = window.site_url + data.location;
                                                $("#btnProSuccess").attr("data-ajax", data.location);
                                                $("#btnProSuccess").click();
                                            } else {
                                                $('.modal-body').html('<i class="fa fa-spin fa-spinner"></i> Платеж отклонен ');
                                            }
                                        });
                                            }
                                        });
                                        $('#stripe_credit_btn').trigger('click');
                                    }
                                }
                        }
                            let head  = document.getElementsByTagName('head')[0];
                                head.appendChild(script);
                    }else{
                        $('#stripe_credit_btn').trigger('click');
                    }
                });
                $( document ).on( 'click', '#stripe_pro_btn', function(e) {
                    if( handler !== null ) {
                        handler.open({
                            name: '2Polovinka',
                            description: getDescription(),
                            currency: 'RUB',
                            amount: getPrice() * 100,
                            opened: function () {
                            $('#stripe_pro').addClass('disabled');
                            $('#stripe_pro').attr('disabled', true);
                        },
                            closed: function () {
                            $('#stripe_pro').removeClass('disabled');
                            $('#stripe_pro').attr('disabled', false);
                        }
                        });
                        e.preventDefault();
                    }
                });
                $( document ).on( 'click', '#stripe_pro', function(e) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    if (typeof StripeCheckout == 'undefined'){
                        $('#stripe_pro').addClass('disabled');
                        $('#stripe_pro').attr('disabled', true);
                        var script = document.createElement('script');
                        script.src = 'https://checkout.stripe.com/checkout.js';
                        script.type = 'text/javascript';
                        script.onload = script.onreadystatechange = function() {
                            if ( !this.readyState || this.readyState == "loaded" || this.readyState == "complete" ) {
                                if (typeof StripeCheckout !== 'undefined'){
                                    handler = StripeCheckout.configure({
                                        key: '',
                                        image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
                                        locale: 'english',
                                        token: function (token) {
                                        $.post(window.ajax + 'stripe/handle', {
                                                stripeToken: token.id,
                                                description: getDescription(),
                                                price: getPrice(),
                                                payType: 'membership'
                                            }, function (data) {
                                            if (data.status == 200) {
                                                $("#btnProSuccess").attr("data-ajax", data.location);
                                                $("#btnProSuccess").click();

                                            } else {
                                                $('.modal-body').html('<i class="fa fa-spin fa-spinner"></i> Платеж отклонен ');
                                            }
                                        });
                                        }
                                    });
                                    $('#stripe_pro_btn').trigger('click');
                                }
                            }
                        }
                        let head  = document.getElementsByTagName('head')[0];
                        head.appendChild(script);
                    }else{
                        $('#stripe_pro_btn').trigger('click');
                    }
                });

            });
        })(jQuery);
    }
    custom_footer_js();
    $(window).on("popstate", function (event) {
        $(window).unbind('popstate');
        location.reload();
    });

    //$(window).on("load",function(){
        var doc = document.documentElement;
        doc.setAttribute('data-useragent', navigator.userAgent);
    //});

    $(document).on('click', '#night_mode_toggle', function(event) {
        mode = $(this).attr('data-mode');
        if (mode == 'night') {
            $('head').append('<link rel="stylesheet" href="http://mysite.net//themes/default/assets/css/night.css?2972" id="night-mode-css">');
            $('#night_mode_toggle').attr('data-mode', 'day');
            $('#night_mode_toggle span').html($('#night_mode_toggle').attr('data-light-text'));
            $('#night_mode_toggle svg').html('<path fill="currentColor" d="M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,2L14.39,5.42C13.65,5.15 12.84,5 12,5C11.16,5 10.35,5.15 9.61,5.42L12,2M3.34,7L7.5,6.65C6.9,7.16 6.36,7.78 5.94,8.5C5.5,9.24 5.25,10 5.11,10.79L3.34,7M3.36,17L5.12,13.23C5.26,14 5.53,14.78 5.95,15.5C6.37,16.24 6.91,16.86 7.5,17.37L3.36,17M20.65,7L18.88,10.79C18.74,10 18.47,9.23 18.05,8.5C17.63,7.78 17.1,7.15 16.5,6.64L20.65,7M20.64,17L16.5,17.36C17.09,16.85 17.62,16.22 18.04,15.5C18.46,14.77 18.73,14 18.87,13.21L20.64,17M12,22L9.59,18.56C10.33,18.83 11.14,19 12,19C12.82,19 13.63,18.83 14.37,18.56L12,22Z" />');

        } else {
            $('#night-mode-css').remove();
            $('#night_mode_toggle').attr('data-mode', 'night');
            $('#night_mode_toggle span').html($('#night_mode_toggle').attr('data-night-text'));
            $('#night_mode_toggle svg').html('<path fill="currentColor" d="M17.75,4.09L15.22,6.03L16.13,9.09L13.5,7.28L10.87,9.09L11.78,6.03L9.25,4.09L12.44,4L13.5,1L14.56,4L17.75,4.09M21.25,11L19.61,12.25L20.2,14.23L18.5,13.06L16.8,14.23L17.39,12.25L15.75,11L17.81,10.95L18.5,9L19.19,10.95L21.25,11M18.97,15.95C19.8,15.87 20.69,17.05 20.16,17.8C19.84,18.25 19.5,18.67 19.08,19.07C15.17,23 8.84,23 4.94,19.07C1.03,15.17 1.03,8.83 4.94,4.93C5.34,4.53 5.76,4.17 6.21,3.85C6.96,3.32 8.14,4.21 8.06,5.04C7.79,7.9 8.75,10.87 10.95,13.06C13.14,15.26 16.1,16.22 18.97,15.95M17.33,17.97C14.5,17.81 11.7,16.64 9.53,14.5C7.36,12.31 6.2,9.5 6.04,6.68C3.23,9.82 3.34,14.64 6.35,17.66C9.37,20.67 14.19,20.78 17.33,17.97Z" />');
        }
        $.post(window.site_url + '?mode=' + mode);
    });

    $(document).on('click', '#night_mode_toggle_sidebar', function(event) {
        mode = $(this).attr('data-mode');
        if (mode == 'night') {
            $('head').append('<link rel="stylesheet" href="http://mysite.net//themes/default/assets/css/night.css?2499" id="night-mode-css">');
            $('#night_mode_toggle_sidebar').attr('data-mode', 'day');
            $('#night_mode_toggle_sidebar span').html($('#night_mode_toggle_sidebar').attr('data-light-text'));
            $('#night_mode_toggle_sidebar svg').html('<path fill="currentColor" d="M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,2L14.39,5.42C13.65,5.15 12.84,5 12,5C11.16,5 10.35,5.15 9.61,5.42L12,2M3.34,7L7.5,6.65C6.9,7.16 6.36,7.78 5.94,8.5C5.5,9.24 5.25,10 5.11,10.79L3.34,7M3.36,17L5.12,13.23C5.26,14 5.53,14.78 5.95,15.5C6.37,16.24 6.91,16.86 7.5,17.37L3.36,17M20.65,7L18.88,10.79C18.74,10 18.47,9.23 18.05,8.5C17.63,7.78 17.1,7.15 16.5,6.64L20.65,7M20.64,17L16.5,17.36C17.09,16.85 17.62,16.22 18.04,15.5C18.46,14.77 18.73,14 18.87,13.21L20.64,17M12,22L9.59,18.56C10.33,18.83 11.14,19 12,19C12.82,19 13.63,18.83 14.37,18.56L12,22Z" />');

        } else {
            $('#night-mode-css').remove();
            $('#night_mode_toggle_sidebar').attr('data-mode', 'night');
            $('#night_mode_toggle_sidebar span').html($('#night_mode_toggle_sidebar').attr('data-night-text'));
            $('#night_mode_toggle_sidebar svg').html('<path fill="currentColor" d="M17.75,4.09L15.22,6.03L16.13,9.09L13.5,7.28L10.87,9.09L11.78,6.03L9.25,4.09L12.44,4L13.5,1L14.56,4L17.75,4.09M21.25,11L19.61,12.25L20.2,14.23L18.5,13.06L16.8,14.23L17.39,12.25L15.75,11L17.81,10.95L18.5,9L19.19,10.95L21.25,11M18.97,15.95C19.8,15.87 20.69,17.05 20.16,17.8C19.84,18.25 19.5,18.67 19.08,19.07C15.17,23 8.84,23 4.94,19.07C1.03,15.17 1.03,8.83 4.94,4.93C5.34,4.53 5.76,4.17 6.21,3.85C6.96,3.32 8.14,4.21 8.06,5.04C7.79,7.9 8.75,10.87 10.95,13.06C13.14,15.26 16.1,16.22 18.97,15.95M17.33,17.97C14.5,17.81 11.7,16.64 9.53,14.5C7.36,12.31 6.2,9.5 6.04,6.68C3.23,9.82 3.34,14.64 6.35,17.66C9.37,20.67 14.19,20.78 17.33,17.97Z" />');
        }
        $.post(window.site_url + '?mode=' + mode);
    });
    </script>
    <script type="text/javascript">
    $(document).on('click', '.find_matches_cont > .row > .col.l3 .dt_sections [data-ajax]', function() {
        $('body').removeClass('side_open');
    });
        </script>


        <script>
window.addEventListener("load", function(){
    window.cookieconsent.initialise({
                "palette": {
        "popup": {
            "background": "#ffffff",
                        "text": "#afafaf"
                    },
                    "button": {
            "background": "#c649b8"
                    }
                },
                "theme": "edgeless",
                "position": "bottom-left",
                "content": {
        "message": "Этот веб-сайт использует куки-файлы, чтобы обеспечить вам максимальную отдачу от нашего веб-сайта.",
                    "dismiss": "Понял!",
                    "link": "Учить больше",
                    "href": "http://axiomkz.me//privacy"
                }
            });
        });
    </script>


</body>
</html>