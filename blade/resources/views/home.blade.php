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
                    <b>Уни&shy;каль&shy;ность тех&shy;нологи&shy;чес&shy;кого реше&shy;ния</b>
                </div>
                <div class="block-benefit__text-hidden">
                    Первый портал для комп&shy;лексных логис&shy;тических решений в области сельского хозяйства.
                </div>
            </div>

            <div class="block-benefit">
                <div class="block-benefit__img" style="background-image: url(img/benefit-2.png)"></div>
                <div class="block-benefit__text">
                    <b>Защита от мошен&shy;нических дейст&shy;вий</b> 
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
                    <b>Оптими&shy;зация логис&shy;тичес&shy;ких затрат</b>
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
                <h2 class="page-block__head yellow-line">НОВОЕ НА ФОРУМАХ</h2>

                <div class="block-filter">
                    <i class="filter active">Профессиональная деятельность</i>
                    <i class="filter">Международные перевозки</i>
                    <i class="filter">Автосервис и ремонт</i>
                    <i class="filter max">Проблемные места загрузки и разгрузки</i>
                    <i class="filter">Юридические вопросы</i>
                    <i class="filter">Продажа, аренда и обмен техники</i>
                </div>              
    
                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/nophoto.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Название темы на форуме</h4>
                        <p class="rubrik">Рубрика: Название рубрики</p>
                        <p class="block-count">
                            <span class="block-count__last-date">Последнее сообщение: 01.01.2017</span> 
                            <span class="block-count__sum-message">Ответов и сообщений: 1 218 </span>
                            <span class="block-count__topic-date">Дата создания темы: 01.01.2016</span>
                        </p>
                    </div>
                    
                </div>

                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/nophoto.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Название темы на форуме темы на форуме темы на форуме темы на форуме</h4>
                        <p class="rubrik">Рубрика: Название рубрики</p>
                        <p class="block-count">
                            <span class="block-count__last-date">Последнее сообщение: 01.01.2017</span> 
                            <span class="block-count__sum-message">Ответов и сообщений: 1 218 </span>
                            <span class="block-count__topic-date">Дата создания темы: 01.01.2016</span>
                        </p>
                    </div>
                    
                </div>
    
                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/nophoto.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Название темы на форуме</h4>
                        <p class="rubrik">Рубрика: Название рубрики</p>
                        <p class="block-count">
                            <span class="block-count__last-date">Последнее сообщение: 01.01.2017</span> 
                            <span class="block-count__sum-message">Ответов и сообщений: 1 218 </span>
                            <span class="block-count__topic-date">Дата создания темы: 01.01.2016</span>
                        </p>
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
