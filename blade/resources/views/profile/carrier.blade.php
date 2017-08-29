@extends('layouts.app')

@section('title', 'Профиль перевозчика')
  
@section('content')

<!-- *************************** ПЕРВЫЙ ЭКРАН ***************************************- -->
        <div class="first-screen-page-bg bg-page-small private-office-carrier-bg">
            <div class="first-screen-page">
                <div class="first-screen-page__title title-left">
                    <h1>Профиль перевозчика</h1>
                </div>              
            </div>      
        </div>

    <!-- *************************** БЛОК  ***************************************- -->

        <div class="page-block-bg">

            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('home') }}">Главная</a></li>
                    <li class="active"><a >Профиль перевозчика</a></li>
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
                                        <span class="span-private-office blue">{{ $user->name }}</span>
                                    </p>

                                    <p class="wrapper">
                                        <span class="span-private-office">Фамилия: </span>
                                        <span class="span-private-office blue">{{ $user->lastname }}</span>
                                    </p>
                                
                                    <p class="wrapper">
                                        <span class="span-private-office">Компания: </span>
                                        <span class="span-private-office blue">{{ $user->company }}</span>
                                    </p>

                                    <p class="wrapper">
                                        <span class="span-private-office">E-mail: </span>
                                        <span class="span-private-office blue">{{ $user->email }}</span>
                                    </p>

                                    <p class="wrapper">
                                        <span class="span-private-office">Телефон: </span>
                                        <span class="span-private-office blue">{{ $user->phone }}</span>
                                    </p>
                                </div>
                               
                                                                
                            </div>

                            <div class="col-1-3 col-private-office">
                                <div class="private-office__avatar" style="background-image: url({{ $img or 'img/nophoto.png' }});"></div>
                                
                                <div class="private-office__req">Реквизиты <a href="#" class="link">(скачать <span class="glyphicon glyphicon-save"></span>)</a></div>

                                <!-- class  st-tested - green border and text
                                            st-notested - blue
                                            st-agent - yellow
                                            st-new - red
                                -->
                                <div class="private-office__status @if ($user->accred == 3) st-agent @elseif ($user->accred == 2) st-tested @elseif ($user->accred == 1) st-notested @else st-new @endif">
									@if ($user->accred == 3)
										Агент AGRO
									@elseif ($user->accred == 2)
										Проверенный перевозчик
									@elseif ($user->accred == 1)
										Непроверенный перевозчик
									@else
										Новичок
									@endif
								    <i id="p1" class="help" data-toggle="popover" data-original-title="Значение статуса"  data-html="true" 
                                        @if ($user->accred == 3)
                                            data-content="- Проверены учредительные документы.<br>- Проверены бухгалтерские документы.<br>- Отсутствуют судебные решения по взысканиям<br>- Наличие ведения реальной хозяйственной деятельности.<br>- Подтверждено наличие техники и ее документальное сопровождение.<br>- Проверен выездной службой безопасности ресурса."
                                        @elseif ($user->accred == 2)
                                            data-content="- Проверены учредительные документы.<br>- Отсутствуют судебные решения по взысканиям.<br>- Проверено наличие автотранспорта в собственности<br>- Имеется заключение службы безопасности ресурса."
                                        @elseif ($user->accred == 1)
                                            data-content="- Перевозчик зарегистрирован в системе.<br>- Подтверждены телефон и электронная почта.<br>- Прошел проверку ФНС."
                                        @else
                                            data-content="- Перевозчик зарегистрирован в системе.<br>- Подтверждены телефон и электронная почта."
                                        @endif                                       
                                    >?</i>
                                </div>

                                <script type="text/javascript">
                                        jQuery(function($){
                                            $('#p1').popover({
                                            //Установление направления отображения popover
                                            placement : 'top'
                                            });
                                        });
                                </script>

                                
                            </div>
                            
                        </div>
                    </div>

                </div> 

            </div>

                <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
        </div>


                    
               
@endsection
