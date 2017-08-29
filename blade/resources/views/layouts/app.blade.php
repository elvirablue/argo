<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!--    <title>{{ config('app.name', 'AGRO CARGO - БЕЗОПАСНЫЙ ПОИСК ГРУЗОВ  И ПЕРЕВОЗЧИКОВ ДЛЯ АГРОСЕКТОРА') }}</title>	-->

	<title>@yield('title')</title>

    <!-- Styles -->
    
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">   
    
    
    <link rel="stylesheet" href="{{ asset('css/venders/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple.css') }}">

    <script src="{{ asset('js/venders/lory.min.js') }}"></script>
    <script src="{{ asset('js/sliders.js') }}"></script>

    <!-- jQuery -->
    <script src="{{ asset('js/venders/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('js/venders/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('js/venders/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/venders/fileinput.js') }}"></script>

 
    <!-- Include the plugin's CSS and JS: -->
    
    <script src="{{ asset('js/venders/moment-with-locales.min.js') }}"></script>
    <script src="{{ asset('js/venders/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('js/venders/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/venders/bootstrap-popover.js') }}"></script> 

     <script> 
    $(window).load(function(){ 
        $("#header-sticky-wrapper").sticky({ topSpacing: 0 }); 
        }); 
    </script>

    <script src="kladr/jquery.kladr.min.js" type="text/javascript"></script>
    <script src="kladr/js/form.js" type="text/javascript"></script>
	<script src="kladr/js/form1.js" type="text/javascript"></script>



    <link rel="stylesheet" href="{{ asset('css/venders/bootstrap-3.3.2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/venders/bootstrap-datetimepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/venders/bootstrap-datetimepicker-standalone.css') }}"/>
    <link rel="stylesheet" href="kladr/jquery.kladr.min.css" >
    
    <link rel="stylesheet" href="{{ asset('css/venders/jquery.arcticmodal-0.3.css') }}">   
    <script src="{{ asset('js/venders/jquery.arcticmodal-0.3.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/venders/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stylename.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--[if lte IE 9]>
        <script src="{{ asset('oldies/oldies.js') }}" charset="utf-8"></script>
        <style>
           .wrapper-x {display: none;}         
        </style>
     <![endif]-->



</head>
<body>

<!-- HTML-код модального окна для транспорта-->
    <div id="infoRegModalBox" class="modal fade">
      <div class="modal-dialog modal-min">
        <div class="modal-content">
          <!-- Заголовок модального окна -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Внимание! Данный функционал не доступен.</h4>
          </div>
          <!-- Основное содержимое модального окна -->          
          <div class="modal-body">
            <br><br>

            <p>Войдите в систему под логином <span id="log1">...</span> , если Вы зарегистрированы.</p>
            <br>
            <p>Или пройдите регистрацию <span id="log2">...</span></p>
            <a href="{{ route('register') }}" class="page-block__subtitle link center">Регистрация для новых пользователей</a>
           

           </div>
          <!-- Футер модального окна -->
          <div class="modal-footer">
            <button type="button" class="bbtn bbtn--yellow bbtn--small bbtn--modal" data-dismiss="modal">Закрыть</button>
            
          </div>
        </div>
      </div>
    </div>


<div class="wrapper-x">
    <div class="wrapper-y">
    <!-- *************************** ШАПКА ***************************************- -->
        <div id="header-sticky-wrapper" class="sticky-wrapper">
        <div class="page-header-wr">
        <header class="page-header">
            <div class="page-header__top">
            <!-- *************************** БЛОК МЕНЮ ***************************************- -->
                <div class="main-nav-block main-nav--closed">
                    <button class="main-nav__toggle" type="button">Mеню</button>                    
                    <nav class="main-nav">          
                        <div class="main-nav__wrapper">
                            <ul>
                                <li class="active"><a href="{{ route('home') }}">Главная</a></li>
                                <!--<li><a href="help.html">Помощь</a></li>-->
                                <!--<li><a href="service.html">О сервисе</a></li>-->
                                <li><a href="contacts.html">Контакты</a></li>           
                                <li><a href="{{ route('news') }}">Новости и статьи</a></li>
                                <!--<li><a href="docs.html">Образцы документов</a></li>-->
                                <li><a href="accreditation.html">Аккредитация</a></li>
                                <li><a href="forum.html">Форум</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <form class="city-select">
                    <label class="" for="city">Ваш регион: </label>
                    <div class="select-wr">
                        <select class="" id="city" name="city">
                            <option>Новосибирск</option>
                            <option>Санкт-Петербург</option>
                            <option>Москва</option>
                            <option>Ростов-на-Дону</option>
                        </select>
                    </div>
                    <p style="display: none;"><input type="submit" value="Отправить"></p>               
                </form>             

                <div class="block-login page-header__left">

                    <p class="block-login__head">
					
                        @if (Auth::guest())
                            <a class="ingress" href="{{ route('login') }}">Вход </a> / 
                            <a class="registry" href="{{ route('register') }}"> Регистрация</a>
                        @else
							@if (Auth::user()->role_id == 3)
								<a href="{{ route('carrieroffice', Auth::user()->id) }}" class="user-login" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</a>
							@elseif (Auth::user()->role_id == 2)
								<a href="{{ route('customeroffice', Auth::user()->id) }}" class="user-login" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</a>
							@elseif (Auth::user()->role_id == 4)
								<a href="{{ route('moderatoroffice') }}" class="user-login" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</a>
							@elseif (Auth::user()->role_id == 5)
								<a href="{{ route('securityoffice') }}" class="user-login" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</a>
							@elseif (Auth::user()->role_id == 1)
								<a href="" class="user-login" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</a>
							@endif
                        @endif
                       
                    </p>
                    <div class="block-login__bbtn">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            
                        @else
                            <a class="exit" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Выход</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                            </form>
                            
                        @endif
                    </div>                    
                </div>

                <form class="search-form" action="" method="get" id="search-block-form"> 
                    <input class="search" type="text" name="search" id="search" value="" size="15" maxlength="128" placeholder="Поиск по сайту">   
                    <input type="hidden" name="id" value="">
                    <input type="submit" class="submit-bbtn" id="edit-submit" value="Поиск"> 
                </form>

            </div>          
        </header>

        <header class="page-header">
            <div class="page-header__bottom">
                <a href="{{ route('home') }}" class="main-logo page-header__logo"></a>
                <div class="page-header__center">
				@if (Auth::guest())
                    <a href="{{ route('login') }}" id="add-car" class="bbtn bbtn--yellow bbtn--big"><span>Добавить транспорт</span></a>
                    <a href="{{ route('login') }}" id="bid" class="bbtn bbtn--yellow bbtn--big"><span>Оставить заявку на перевозку</span></a>
				@else
					@if (Auth::user()->role_id == 3)
						<a href="{{ route('addcar') }}" id="add-car" class="bbtn bbtn--yellow bbtn--big"><span>Добавить транспорт</span></a>
                        <a id="bid" class="bbtn bbtn--yellow bbtn--big disabled"><span>Оставить заявку на перевозку</span></a>
					@endif
                    @if (Auth::user()->role_id == 2)
                        <a id="add-car" class="bbtn bbtn--yellow bbtn--big disabled"><span>Добавить транспорт</span></a>
						<a href="{{ route('addoffer') }}" id="bid" class="bbtn bbtn--yellow bbtn--big"><span>Оставить заявку на перевозку</span></a>					    
                    @endif
                    @if (Auth::user()->role_id == 4)
                        <a id="add-car" class="bbtn bbtn--yellow bbtn--big disabled"><span>Добавить транспорт</span></a>
                        <a id="bid" class="bbtn bbtn--yellow bbtn--big disabled"><span>Оставить заявку на перевозку</span></a>                        
                    @endif
                     @if (Auth::user()->role_id == 5)
                        <a id="add-car" class="bbtn bbtn--yellow bbtn--big disabled"><span>Добавить транспорт</span></a>
                        <a id="bid" class="bbtn bbtn--yellow bbtn--big disabled"><span>Оставить заявку на перевозку</span></a>                        
                    @endif
				@endif
               
                </div>
                <div class="page-header__left">
                    <a href="#" class="page-header__link bbtn-distances">Расчет расстояний</a>
                    <a href="#" class="page-header__link bbtn-forum">Перейти на форум</a>
                </div>
            </div>
        </header>
        </div>
        </div>
        <!-- *************************** КОНЕЦ ШАПКИ ***************************************- -->
    

    <!-- Branding Image -->
    
                

        @yield('content')




        <!-- *************************** БЛОК ПОДВАЛ***************************************- -->    
    </div> <!-- end wrapper-y -->   

    <footer class="page-footer-bg">
        <div class="page-footer">
            <div class="page-footer__block-left">
                <div class="page-footer__nav">
                    <ul>
                        <li class="active"><a href="">Главная</a></li>
                        <li><a href="help.html">Помощь</a></li>
                        <li><a href="service.html">О сервисе</a></li>
                        <li><a href="contacts.html">Контакты</a></li>
                    </ul>
                    <ul>
                        <li><a href="{{ route('news') }}">Новости и статьи</a></li>
                        <li><a href="docs.html">Образцы документов</a></li>
                        <li><a href="accreditation.html">Аккредитация</a></li>
                        <li><a href="forum.html">Форум</a></li>
                    </ul>
                </div>
            </div>

            

            <div class="page-footer__block-center">
                <p class="page-footer__title">AGROCARGO В СОЦИАЛЬНЫХ СЕТЯХ:</p>
                <div class="block-social page-footer__social" >
                    <a href="https://vk.com/agrocargo" target="_blank" class="social social--vk">vk</a>
                    <a href="https://www.instagram.com/agrocargo.ru"  target="_blank" class="social social--instargam">instargam</a>
                    <a href="#" class="social social--ok">ok</a>
                    <a href="https://www.facebook.com/Agrocargo-1905749719686842/" target="_blank" class="social social--facebook">facebook</a>                
                </div>
            </div>

            <div class="page-footer__block-right">
                <p class="page-footer__title">СВЯЗАТЬСЯ С НАМИ</p>
                <form class="city-select page-footer__city-select">
                    <label class="" for="city">Ваш регион: </label>
                    <div class="select-wr">
                        <select class="" id="city" name="city">
                            <option>Новосибирск</option>
                            <option>Санкт-Петербург</option>
                            <option>Москва</option>
                            <option>Ростов-на-Дону</option>
                        </select>
                    </div>
                    <p style="display: none;"><input type="submit" value="Отправить"></p>               
                </form>
                <a href="tel:+79151253443" class="page-footer__phone">+7 (915) 125-34-43</a>                
            </div>

            <div class="page-footer__block-bottom">
                <div class="page-footer__block-bottom-item login">
                     @if (Auth::guest())
                            <a class="ingress" href="{{ route('login') }}">Вход / </a> 
                            <a class="registry" href="{{ route('register') }}"> Регистрация</a>
                        @else
                            @if (Auth::user()->role_id == 3)
                                <a href="{{ route('carrieroffice', Auth::user()->id) }}" class="user-login" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</a>
                            @endif
                            @if (Auth::user()->role_id == 2)
                                <a href="{{ route('customeroffice', Auth::user()->id) }}" class="user-login" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</a>
                            @endif

                             /  
                            <a class="exit" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Выход</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                            </form>
                        @endif
                </div>
                <p class="page-footer__block-bottom-item mail">
                    <a href="#">info@agrocargo.ru</a>
                </p>
                <p class="page-footer__block-bottom-item call-form">
                    <a href="#">Форма обратной связи</a>
                </p>
            </div>
            
        </div>

    </footer>

    <!-- ************** БЛОК ПРИЛИПАЮЩАЯ НАВИГАЦИЯ ПРИ СКРОЛЛЕ ******************- -->
    

<!-- ************** БЛОК МОДАЛЬНЫЕ ОКНА ******************- -->


<!-- ********************************- -->
</div> <!-- end wrapper-x -->
<!-- Scripts -->
<script src="{{ asset('js/venders/bootstrap-multiselect.js') }}"></script>
<script src="{{ asset('js/menu.js') }}"> </script>
<script src="{{ asset('js/script.js') }}"> </script>

    

</body>
</html>
