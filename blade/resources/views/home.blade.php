@extends('layouts.app')

@section('title', 'AGRO CARGO - БЕЗОПАСНЫЙ ПОИСК ГРУЗОВ  И ПЕРЕВОЗЧИКОВ ДЛЯ АГРОСЕКТОРА')

@section('content')
    <!-- *************************** ПЕРВЫЙ ЭКРАН ***************************************- -->
        <div class="first-screen-bg">
            <div class="first-screen">
                <h1>БЕЗОПАСНЫЙ ПОИСК&nbsp;ГРУЗОВ <br>И ПЕРЕВОЗЧИКОВ ДЛЯ&nbsp;АГРОСЕКТОРА</h1>
                @if (Auth::guest())
                    <a href="{{ route('login') }}" class="first-screen__bbtn bbtn bbtn--yellow bbtn--big bbtn--shadow">
                        <span>Регистрация и вход</span>
                    </a>
                @else
                        
                @endif    
            </div>      
        </div>

    <!-- *************************** БЛОК ПРЕИМУЩЕСТВ ***************************************- -->

        <div class="page-block">
            <h2 class="page-block__head yellow-line">Система AgroCargo - это: </h2>         
        </div>

        <div class="main-benefit">
            <div class="block-benefit">
                <div class="block-benefit__img" style="background-image: url(img/benefit-1.png)"></div>
                <div class="block-benefit__text">
                    <b>Уникальность технологического решения</b>
                </div>
                <div class="block-benefit__text-hidden">
                    Первый портал для комп&shy;лексных логис&shy;тических решений в области сельского хозяйства.
                </div>
            </div>

            <div class="block-benefit">
                <div class="block-benefit__img" style="background-image: url(img/benefit-2.png)"></div>
                <div class="block-benefit__text">
                    <b>Защита от мошеннических действий</b> 
                </div>
                <div class="block-benefit__text-hidden">
                   Система репутаций и мони&shy;торинг дея&shy;тель&shy;ности контр&shy;агентов.
                </div>
            </div>

            <div class="block-benefit">
                <div class="block-benefit__img" style="background-image: url(img/benefit-3.png)"></div>
                <div class="block-benefit__text">
                    <b>Налоговая чистота сделок</b> 
                </div>
                <div class="block-benefit__text-hidden">
                   Мы берем на себя проверку контр&shy;агентов. Предос&shy;тавляем доку&shy;менты при про&shy;ведении каме&shy;ральных прове&shy;рок нало&shy;говыми орга&shy;нами.
                </div>
            </div>

            <div class="block-benefit">
                <div class="block-benefit__img" style="background-image: url(img/benefit-4.png)"></div>
                <div class="block-benefit__text">
                    <b>Оптимизация логитических затрат</b>
                </div>
                <div class="block-benefit__text-hidden">
                    Благодаря наиболее полной базе рос&shy;сийских пере&shy;возчи&shy;ков и новей&shy;шим алго&shy;ритмам опти&shy;миза&shy;ции мы представим наиболее выгод&shy;ное реше&shy;ние как по вре&shy;мени, так по стоимости и ка&shy;честву логис&shy;тических услуг.
                </div>
            </div>
        </div>

         @if (Auth::guest())
            <div class="page-block">
                <button type="button" class="page-block__bbtn bbtn bbtn--yellow bbtn--big">
                        <span>Зарегистрироваться и получить доступ</span>
                </button>           
            </div>
        @else
                        
        @endif 



        <div class="separator"></div>
    <!-- *************************** БЛОКИ ПОИСКА ***************************************- -->
        <div class="main-call-form">
            <div class="block-call-form yellow">
                <a href="">
                <p class="block-call-form__title">ПОИСК ГРУЗОВ</p>
                <p class="block-call-form__subtitle">Посмотрите все открытые заявки на перевозку грузов</p>
                @if (Auth::guest()) 
                        <a href="#" data-toggle="modal" class="js-main-btn-add add-offer block-call-form__bbtn bbtn bbtn--gray">
                    @else
                        @if (Auth::user()->role_id == 3)
                            <a href="{{ route('addcar', Auth::user()->id)}}" data-toggle="modal" class="block-call-form__bbtn bbtn bbtn--gray">
                        @else
                            @if (Auth::user()->role_id == 2)
                                <a href="#" data-toggle="modal" class="js-main-btn-add add-offer block-call-form__bbtn bbtn bbtn--gray">
                            @endif
                        @endif
                    @endif

                    Добавить транспорт (бесплатно) </a>               
                <div class="block-call-form__img" style="background-image: url(img/pic-1.png)"></div>
                </a>
            </div>

            <div class="block-call-form blue">
                <a href=" {{ route('control') }} ">
                <p class="block-call-form__title">ПРОВЕРКА ПАРТНЕРА</p>
                <p class="block-call-form__subtitle">Проверяйте порядочность перевозчиков или заказчиков</p>
                <button class="block-call-form__bbtn bbtn bbtn--gray">
                    Проверить перевозчика или заказчика 
                </button>
                <div class="block-call-form__img" style="background-image: url(img/pic-2.png)"></div>
                </a>
            </div>

            <div class="block-call-form gray">
                <a href="">
                <p class="block-call-form__title">ПОИСК ТРАНСПОРТА</p>
                <p class="block-call-form__subtitle">Оставляйте заявку на перевозку&nbsp;груза </p>
                 @if (Auth::guest()) 
                        <a href="#" data-toggle="modal" class="js-main-btn-add add-car block-call-form__bbtn bbtn bbtn--gray">
                    @else
                        @if (Auth::user()->role_id == 3)
                             <a href="#" data-toggle="modal" class="js-main-btn-add add-car block-call-form__bbtn bbtn bbtn--gray">
                           
                        @else
                            @if (Auth::user()->role_id == 2)
                                 <a href="{{ route('addcar', Auth::user()->id)}}" data-toggle="modal" class="block-call-form__bbtn bbtn bbtn--gray">
                            @endif
                        @endif
                    @endif
                
                    Добавить груз (бесплатно)</a>
                <div class="block-call-form__img" style="background-image: url(img/pic-3.png)"></div>
                </a>
            </div>
            
        </div>

        <!-- *************************** БЛОК НОВОЕ НА ФОРУМАХ ***************************************- -->
        <div class="page-block-bg page-block-bg--forum top-shadow">
            <div class="page-block">
                <h2 class="page-block__head yellow-line">Обсуждение НА ФОРУМАХ</h2>
                              
    
                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/01.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Профессиональная деятельность</h4>
                        <p class="rubrik">Обмен опытом.</p>                        
                    </div>
                    <div class="block-filter block-main-forum__btn">
                        <a href="{{ route('forum') }}?id=3" class="filter">Перейти к форуму</a>
                    </div>
                    
                </div>

                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/02.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Проблемные места загрузки или разгрузки</h4>
                        <p class="rubrik">Информация о сложных и труднодоступных для перевозчиков местах, где приходится загружаться и разгружаться.</p>                        
                    </div>
                    <div class="block-filter block-main-forum__btn">
                        <a href="{{ route('forum') }}?id=4" class="filter">Перейти к форуму</a>
                    </div>
                </div>
    
                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/03.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Юридические вопросы</h4>
                        <p class="rubrik"></p>                        
                    </div>
                    <div class="block-filter block-main-forum__btn">
                        <a href="{{ route('forum') }}?id=5" class="filter">Перейти к форуму</a>
                    </div>
                </div>

                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/04.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Бухгалтерские вопросы</h4>
                        <p class="rubrik"></p>                        
                    </div>
                    <div class="block-filter block-main-forum__btn">
                        <a href="{{ route('forum') }}?id=6" class="filter">Перейти к форуму</a>
                    </div>
                </div>

                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/05.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Автосервис и ремонт</h4>
                        <p class="rubrik">Обслуживание и ремонт грузовой техники.</p>                        
                    </div>
                    <div class="block-filter block-main-forum__btn">
                        <a href="{{ route('forum') }}?id=7" class="filter">Перейти к форуму</a>
                    </div>
                </div>

                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/06.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Дороги</h4>
                        <p class="rubrik">Обсуждение маршрутов, состояние дорог, криминал, ГАИ и т.д.</p>                        
                    </div>
                    <div class="block-filter block-main-forum__btn">
                        <a href="{{ route('forum') }}?id=8" class="filter">Перейти к форуму</a>
                    </div>
                </div>

                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/07.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Железнодорожные перевозки</h4>
                        <p class="rubrik"></p>                        
                    </div>
                    <div class="block-filter block-main-forum__btn">
                        <a href="{{ route('forum') }}?id=9" class="filter">Перейти к форуму</a>
                    </div>
                </div>

                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/08.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Складские услуги</h4>
                        <p class="rubrik"></p>                        
                    </div>
                    <div class="block-filter block-main-forum__btn">
                        <a href="{{ route('forum') }}?id=10" class="filter">Перейти к форуму</a>
                    </div>
                </div>

                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/09.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Техническая поддержка</h4>
                        <p class="rubrik"></p>                        
                    </div>
                    <div class="block-filter block-main-forum__btn">
                        <a href="{{ route('forum') }}?id=11" class="filter">Перейти к форуму</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- *************************** БЛОК СТАТЬИ И НОВОСТИ ***************************************- -->
        
        <div class="page-block-bg page-block-bg--article">          
        
            <div class="page-block main-article">
                <h2 class="page-block__head yellow-line">СТАТЬИ И НОВОСТИ</h2>

                <div class="page-block__wrapper">
                    <div class="fixed-article__bg"></div>
                    @foreach ($news as $article)
						@if ($loop->iteration == 1)
							@include ('news.list.fixeditem', $article)
						@else
							@break
						@endif
					@endforeach
                </div>

                <div class="page-block__wrapper slider_article">
                    <div class="center">
                            @foreach ($news as $article)
								@if ($loop->iteration == 1)
									@continue
								@elseif ($loop->iteration > 4)
									@break
								@else
									@include('news.list.item', $article)
								@endif							
							@endforeach
                    </div>
                </div>
            </div>

            <div class="separator"></div>

        </div>
@endsection
