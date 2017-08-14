@extends('layouts.app')
  
@section('content')

    <!-- *************************** ПЕРВЫЙ ЭКРАН ***************************************- -->
        <div class="first-screen-page-bg bg-page-small private-office-client-bg">
            <div class="first-screen-page">
                <div class="first-screen-page__title title-left">
                    <h1>Профиль заказчика</h1>
                </div>              
            </div>      
        </div>

    <!-- *************************** БЛОК  ***************************************- -->

        <div class="page-block-bg">

            <div class="breadcrumbs">
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li class="active"><a >Профиль заказчика</a></li>
                </ul>
                
            </div>

            <div class="page-block private-office">
                <div style="position: relative; z-index: 100;">                 
                    <div class="fixed-article__bg bg-private-office-bottom"></div>

                    <div class="page-block__wr-border-gray ">
                        <h4>Контактная информация</h4>
                        <div class="row-col">
                            <div class="col-2-3 col-private-office">
                                <div class="in-block">
                                    <p class="wrapper">
                                        <span class="span-private-office">Имя: </span>
                                        <span class="span-private-office blue">Название Название Название</span>
                                    </p>

                                    <p class="wrapper">
                                        <span class="span-private-office">Фамилия: </span>
                                        <span class="span-private-office blue">Название</span>
                                    </p>
                                
                                    <p class="wrapper">
                                        <span class="span-private-office">Компания: </span>
                                        <span class="span-private-office blue">Название компании</span>
                                    </p>

                                    <p class="wrapper">
                                        <span class="span-private-office">E-mail: </span>
                                        <span class="span-private-office blue">mail@mail.com</span>
                                    </p>

                                    <p class="wrapper">
                                        <span class="span-private-office">Телефон: </span>
                                        <span class="span-private-office blue">+ 7 000 000 0000</span>
                                    </p>
                                </div>
                                <a href="#" class="bbtn bbtn--yellow bbtn--small private-office__btn">Редактировать данные</a>
                                                                
                            </div>

                            <div class="col-1-3 col-private-office">
                                <div class="private-office__avatar" style="background-image: url(img/nophoto.png);"></div>
                                
                                <div class="private-office__req">Реквизиты <a href="#" class="link">(скачать <span class="glyphicon glyphicon-save"></span>)</a></div>
                                <div class="private-office__status st-agent">Аккредитован <i class="help">?</i></div>
                            </div>
                            
                        </div>
                    </div>

                </div>




            </div>
        </div>



                    
               
@endsection
