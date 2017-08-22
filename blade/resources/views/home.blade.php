@extends('layouts.app')

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
                    <b>Гарантия фактичес&shy;кого на&shy;ли&shy;чия груза</b> и платеже&shy;способ&shy;ности аккре&shy;дито&shy;ван&shy;ных грузо&shy;владель&shy;цев
                </div>
            </div>

            <div class="block-benefit">
                <div class="block-benefit__img" style="background-image: url(img/benefit-2.png)"></div>
                <div class="block-benefit__text">
                    <b>Гарантия фактичес&shy;кого нали&shy;чия груза</b> и платеже&shy;способ&shy;ности аккре&shy;дито&shy;ван&shy;ных грузо&shy;владель&shy;цев
                </div>
            </div>

            <div class="block-benefit">
                <div class="block-benefit__img" style="background-image: url(img/benefit-3.png)"></div>
                <div class="block-benefit__text">
                    <b>Гарантия фактичес&shy;кого нали&shy;чия груза</b> и платеже&shy;способ&shy;ности аккре&shy;дито&shy;ван&shy;ных грузо&shy;владель&shy;цев
                </div>
            </div>

            <div class="block-benefit">
                <div class="block-benefit__img" style="background-image: url(img/benefit-4.png)"></div>
                <div class="block-benefit__text">
                    <b>Гарантия фактичес&shy;кого нали&shy;чия груза</b> и платеже&shy;способ&shy;ности аккре&shy;дито&shy;ван&shy;ных грузо&shy;владель&shy;цев
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
                <a href="">
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
                    <div class="fixed-article">
                        <div class="fixed-article__img" style="background-image: url(img/nophoto.png)"></div>
                        <div class="fixed-article__content">
                            <h5>Длинный заголовок статьи заголовок статьи заголовок статьи заголовок статьи</h5>
                            <div class="fixed-article__text">
                                <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                <p>Duis vulputate Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                            </div>
                            <a href="new-item.html" class="fixed-article__link link">Читать подробнее...</a>
                        </div>
                    </div>
                    
                </div>

                <div class="page-block__wrapper slider slider_article js_slider simple js_ease">
                    <div class="frame js_frame">
                        <ul class="slides js_slides">
                            <li class="js_slide">
                                <div class="block-main-article main-article__item">
                                    <a href="new-item.html">
                                    <div class="block-main-article__img" style="background-image: url(img/nophoto.png)"></div>
                                    <div class="block-main-article__content">
                                        <h5>Длинный заголовок статьи заголовок статьи заголовок статьи заголовок статьи</h5>
                                        <div class="block-main-article__text">
                                            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                            <p>Duis vulputate Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                        </div>
                                        <a href="new-item.html" class="block-main-article__link link">Читать подробнее...</a>
                                    </div>
                                    </a>
                                </div>
                            </li>

                            <li class="js_slide">
                                <div class="block-main-article main-article__item">
                                    <a href="new-item.html">
                                    <div class="block-main-article__img" style="background-image: url(img/nophoto.png)"></div>
                                    <div class="block-main-article__content">
                                        <h5>Длинный заголовок статьи заголовок статьи заголовок статьи заголовок статьи</h5>
                                        <div class="block-main-article__text">
                                            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                            <p>Duis vulputate Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                        </div>
                                        <a href="new-item.html" class="block-main-article__link link">Читать подробнее...</a>
                                    </div>
                                    </a>
                                </div>
                            </li>

                            <li class="js_slide">
                                <div class="block-main-article main-article__item">
                                    <a href="new-item.html">
                                    <div class="block-main-article__img" style="background-image: url(img/nophoto.png)"></div>
                                    <div class="block-main-article__content">
                                        <h5>Длинный заголовок статьи заголовок статьи заголовок статьи заголовок статьи</h5>
                                        <div class="block-main-article__text">
                                            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                            <p>Duis vulputate Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                        </div>
                                        <a href="new-item.html" class="block-main-article__link link">Читать подробнее...</a>
                                    </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <span class="js_prev prev">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 451.847 451.847" style="enable-background:new 0 0 451.847 451.847;" xml:space="preserve"> 
                        <g><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0   c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744   c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z" fill="#ffde00"/> </g>
                    </svg>
                    </span>
                    <span class="js_next next">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 451.847 451.847" style="enable-background:new 0 0 451.847 451.847;" xml:space="preserve">
                        <g><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744   L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284   c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z" fill="#ffde00"/></g>
                    </svg>
                    </span>             
                    
                </div>
            </div>
            

            <div class="page-block">
                <a href="news.html" class="page-block__bbtn bbtn bbtn--yellow bbtn--big">
                    <span>Показать все статьи</span>
                </a>            
            </div>



            <div class="separator"></div>

        </div>
@endsection
