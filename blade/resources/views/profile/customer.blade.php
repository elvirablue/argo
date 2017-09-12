@extends('layouts.app')

@section('title', 'Профиль заказчика')
  
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
                    <li><a href="{{ route('home') }}">Главная</a></li>
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
                                
                                <div class="private-office__req"><a href="" class="link">Показать реквизиты</a></div>
								<script>
									$(".link").click(function (event) {
										event.preventDefault();
										$(".requisites").show();
									});
								</script>

                                <!-- class  st-tested - green border and text
                                            st-notested - blue
                                            st-agent - yellow
                                            st-new - red
                                -->
                                <div class="private-office__status @if ($user->accred == 1) st-tested @else st-new @endif">
									@if ($user->accred == 1)
										Аккредитован
									@else
										Не аккредитован
									@endif
								    <i id="p2" class="help" data-toggle="popover" data-original-title="Значение статуса"  
                                        @if ($user->accred == 1)
                                            data-content="- Проверены учредительные документы.<br>- Отсутствуют судебные решения.<br>- Подтверждена регистрация по электронной почте."
                                        @else
                                            data-content="- Заказчик зарегистрирован в системе.<br>- Подтверждены телефон и электронная почта."
                                        @endif 
                                    >?</i>
                                </div>
                                <script type="text/javascript">
                                        jQuery(function($){
                                            $('#p2').popover({
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

            <div class="page-block">

                <div class="requisites" style="display: none;">
                        @if ($user->entity)
                            @include('control.table', [ 'entity' => $user->entity ])
                        @else
                            <p class="page-block__subtitle center">Пользователь не заполнил данные об организации</p>
                        @endif
                </div>
            </div>


            
            <div class="separator"></div>
            <div class="separator"></div>
			
        </div>

	    


                    
               
@endsection
