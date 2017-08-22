@extends('layouts.app')

@section('title', 'Личный кабинет заказчика')
  
@section('content')

@include('modal.infoOrderModalBox')
@include('modal.infoCarModalBox')

    <!-- *************************** ПЕРВЫЙ ЭКРАН ***************************************- -->
        <div class="first-screen-page-bg bg-page-small private-office-client-bg">
            <div class="first-screen-page">
                <div class="first-screen-page__title title-left">
                    <h1>Личный кабинет заказчика</h1>
                </div>              
            </div>      
        </div>

    <!-- *************************** БЛОК  ***************************************- -->

        <div class="page-block-bg">

            <div class="breadcrumbs">
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li class="active"><a >Грузовладелец {{ Auth::user()->name }}</a></li>
                </ul>
                
            </div>

            <div class="page-block private-office">
                <div style="position: relative; z-index: 100;">                 
                    <div class="fixed-article__bg bg-private-office-bottom"></div>

                    <div class="page-block__wr-border-gray ">
                        <h4>Контактная информация</h4>
                        <div class="row-col">
                            <div class="col-2-3 col-private-office office">
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
                                <a href="{{ route('editcustomer', $user->id ) }}" class="bbtn bbtn--yellow bbtn--small private-office__btn">Редактировать данные</a>
                                                                
                            </div>

                            <div class="col-1-3 col-private-office">
                                <!-- show avatar -->
                                <!--
                                <div class="private-office__avatar" style="background-image: url(img/nophoto.png);"></div>
                                
                                <div class="private-office__req">Р РµРєРІРёР·РёС‚С‹ <a href="#" class="link">(скачать <span class="glyphicon glyphicon-save"></span>)</a></div>
                                -->
                            

                                <!-- markup -->
                                <!-- note: your server code `avatar_upload.php` will receive `$_FILES['avatar']` on form submission -->
                                <!-- load avatar -->
                                <div id="kv-avatar-errors-2" class="center-block" style="width:300px;display:none"></div>
                                <form class="form form-vertical" action="{{ route('adduserimage') }}" method="post" enctype="multipart/form-data" novalidate>
                                    <div class="kv-avatar center-block text-center" style="width:200px">
                                        <input id="avatar-2" name="avatar-2" type="file" class="file-loading" required>
										{{ csrf_field() }}
                                    <button type="submit" class="private-office__load">Загрузить</button>
                                    </div>                          
                                </form>

                                <!-- the fileinput plugin initialization -->
                                <script>
                                
                                $("#avatar-2").fileinput({
                                    overwriteInitial: true,
                                    maxFileSize: 1500,
                                    showClose: false,
                                    showCaption: false,
                                    showBrowse: false,
                                    browseOnZoneClick: true,
                                    removeLabel: '',
                                    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
                                    removeTitle: 'Удалить аватар',
                                    elErrorContainer: '#kv-avatar-errors-2',
                                    msgErrorClass: 'alert alert-block alert-danger',
                                    defaultPreviewContent: 
									@if ($user->image == null)
										'<img src="img/nophoto.png" alt="Ваш аватар" style="width:200px"><h6 class="text-muted">Выбрать</h6>',
									@else
										'<img src="{{ $img }}" alt="Ваш аватар" style="width:200px">',
									@endif
                                    
                                    allowedFileExtensions: ["jpg", "png", "gif"]
                                });
                                </script>
								<script>
									$(".glyphicon-remove").click(function() {
										$.ajax({
											url: '{{ route("deleteuserimage") }}',
											success: function(data){									
												$(".file-default-preview").html('<img src="img/nophoto.png" alt="Ваш аватар" style="width:200px"><h6 class="text-muted">Выбрать</h6>');
												//alert(data);
											}
										});
									});
								</script>
                                <!-- end load avatar -->
                                
                                <!--
                                <a href="#" class="private-office__out">Выйти</a>
                                <div class="private-office__req">Реквизиты <a href="#" class="link">(скачать <span class="glyphicon glyphicon-save"></span>)</a></div>
                                -->

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
								<i class="help">?</i></div>

                            </div>
                            
                        </div>
                    </div>

                </div>




            </div>

<!-- *************************** БЛОК Ответы на заказы ***************************************- -->			
			<div class="page-block">
                <h2 class="page-block__head yellow-line">Ответы на заказы</h2>
				{!! $answersTable !!}
				
			</div>

<!-- *************************** БЛОК Мои Заказы в таблицу ***************************************- -->
            <div class="page-block">
                <h2 class="page-block__head yellow-line">Мои Заказы</h2>
					
						<!--{!! $filter !!}-->
					
					{!! $offersTable !!}
					<script>
						
						$(".openoffer").click( function(event){
							 var target = event.target; // где был клик?
                                                        
                            if (target.tagName != this && target.tagName != 'TD') {
                                return;
                            }                 


							//alert($(this).attr('data-id'));
							tmp = 'id=' + $(this).attr('data-id');
							$.ajax({
									url: '{{route('showoffer')}}',
									data: tmp,
									success: function(data){
										// alert(data);
										$('#infoOrderModalBox').find(".modal-dialog").html(data);
									}
							});
							$('#infoOrderModalBox').modal('show');
						});
					</script>
					<script>
						
						$(".opencar").click( function(event){
							event.preventDefault();
                            var target = event.target; // где был клик?
							// alert($(this).text());
							/*
                            if (target.tagName === 'SPAN' && target.parentNode.tagName === 'A') {                      
                                location.href = target.parentNode.href;
                                return;
                            }
							*/
                            //if (target.tagName != this) {  return;}
                            
							tmp = 'id=' + $(this).attr('data-id');
							$.ajax({
									url: '{{route('showcar')}}',
									data: tmp,
									success: function(data){
										// alert(data);
										$('#infoCarModalBox').find(".modal-dialog").html(data);
									}
							});
							$('#infoCarModalBox').modal('show');
						});
					</script>

            </div>
                    
        </div>
		

    

        <div class="page-block-bg page-block-bg--article">  
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
        </div>
    
    </div>

                    
               
@endsection
