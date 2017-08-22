@extends('layouts.app')

@section('title', 'Личный кабинет модератора')
  
@section('content')

@include('modal.infoOrderModalBox')

@include('modal.infoCarModalBox')
<!-- *************************** ПЕРВЫЙ ЭКРАН ***************************************- -->
        <div class="first-screen-page-bg bg-page-small private-office-carrier-bg">
            <div class="first-screen-page">
                <div class="first-screen-page__title title-left">
                    <h1>Личный кабинет модератора</h1>
                </div>              
            </div>      
        </div>

    <!-- *************************** БЛОК  ***************************************- -->

        <div class="page-block-bg">

            <div class="breadcrumbs">
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li class="active"><a>Модератор (работа с заявками)</a></li>
                </ul>
                
            </div>



<!-- *************************** БЛОК Доступные Заказы в таблицу ***************************************- -->
            <div class="page-block">
                <h2 class="page-block__head yellow-line">Таблица заказов</h2>
                <div class="page-block__wr-border-gray private-office__table-wr">

					{!! $offersTable !!}
					
                </div>
            </div>
			
			
			
			<div class="page-block">
                <h2 class="page-block__head yellow-line">Таблица активности грузо&shy;владель&shy;цев</h2>
                <p class="page-block__subtitle">Заказчики, которые не размещали заказ на перевозку груза более 14 дней</p>
                <div class="page-block__wr-border-gray private-office__table-wr">

					{!! $oldTable !!}
					
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
                </div>
            </div>
			
			
                    
        </div>
    

        <div class="page-block-bg page-block-bg--article">  
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
        </div>
    
    </div>

               
@endsection
