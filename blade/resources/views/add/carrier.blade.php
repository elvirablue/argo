@extends('layouts.app')

@section('title', 'Добавление транспорта')

@section('content')

@include('modal.infoAddCarBox')
		<!-- *************************** ПЕРВЫЙ ЭКРАН ***************************************- -->
		<div class="first-screen-page-bg bg-page add-car-bg">
			<div class="first-screen-page">
				<div class="first-screen-page__title">
					<h1>ДОБАВЛЕНИЕ ТРАНСПОРТА</h1>
				</div>				
			</div>		
		</div>

	<!-- *************************** БЛОК ФОРМЫ ***************************************- -->

		<div class="page-block-bg top-shadow">

			<div class="breadcrumbs">
				<ul>
					<li><a href="{{ route('home') }}">Главная</a></li>
					<li class="active"><a >Добавление транспорта</a></li>
				</ul>				
			</div>

			<div class="page-block form-add-car-wrapper">
				<div class="scan__wrapper">
					<form action="{{ route('storecar') }}" method="POST"  enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<p class="scan__head">Заполните форму для добавления транспорта</p>

<!-- *************************** ШАГ 1 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 1</span> Кузов</p>
							<div class="row-col">
								<div class="scan__block-col col-1-2">
									<div class="wrapper m-bottom">
										<label class="lab-for-input param-reg https://lk.avantel.ru/docs" for="user-1-car">Тип кузова: </label>
										<div class="input input--small">
											<div class="user-input-bootstrap-wrapper">						
											<select class="user-input-bootstrap" id="user-1-car" name="user-1-car" required>
												@foreach ($bodyTypes as $key => $value) 
													<option>{{$value}}</option>
												@endforeach
											</select>
											</div>																
										</div>
									</div>
								</div>

								<div class="scan__block-col col-1-2">
									<div class="ch_wrapper in-block">
										<input id="user-2-1-car" type="radio" checked name="radio" value="Полуприцеп">
										<label for="user-2-1-car">Полуприцеп</label>
									</div>
									<div class="ch_wrapper in-block">
										<input id="user-2-2-car" type="radio" name="radio" value="Грузовик">
										<label for="user-2-2-car">Грузовик</label>
									</div>
									<div class="ch_wrapper in-block">
										<input id="user-2-3-car" type="radio" name="radio" value="Сцепка">
										<label for="user-2-3-car">Сцепка</label>
									</div>	
								</div>
							</div>

							<div class="row-col">
							<div class="scan__block-col col-1-2">
								<div class="wrapper m-bottom">
									<label class="lab-for-input" for="user-3-car">Тип загрузки: </label>
									<div class="input input--small">
										<div class="user-input-bootstrap-wrapper">						
										<select class="user-input-bootstrap" id="user-3-car" multiple="multiple" name="user-3-car[]">								
									  		@foreach ($loadTypes as $key => $value) 
												<option>{{$value}}</option>
											@endforeach				  		
										</select>
										</div>																
									</div>
								</div>								

								<div class="wrapper m-bottom">
									<label class="lab-for-input param-reg" for="user-4-car">Грузоподъемность, т: </label>
									<div class="input input--small input--short">
										<input type="text" class="user-input" id="user-4-car" name="user-4-car" required>			
									</div>
									<script type="text/javascript">
											jQuery(function($){
										  			$("#user-4-car").mask("?000000",{placeholder:""});
											});
									</script>
								</div>

								<div class="wrapper m-bottom">
									<label class="lab-for-input" for="user-5-car">Объем, м<sup>3</sup>: </label>
									<div class="input input--small input--short">
										<input type="text" class="user-input" id="user-5-car" name="user-5-car">			
									</div>
									<script type="text/javascript">
											jQuery(function($){
										  			$("#user-5-car").mask("?000000",{placeholder:""});
											});
									</script>
								</div>
							</div>							
							</div>

							<div class="row-col">
							<!--
								<div class="wrapper m-bottom">
									<label class="lab-for-input param-reg lab-large" for="user-6-1-car">Внутренние габариты кузова (Д/Ш/В), м : </label>
															
									<div class="input input--small input--short">
										<input type="text" class="user-input" id="user-6-1-car" name="user-6-1-car">			
									</div>
									<label>X &nbsp;&nbsp;</label>
									<div class="input input--small input--short">
										<input type="text" class="user-input" id="user-6-2-car" name="user-6-2-car">			
									</div>
									<label>X &nbsp;&nbsp;</label>
									<div class="input input--small input--short">
										<input type="text" class="user-input" id="user-6-3-car" name="user-6-3-car">			
									</div>
									<p class="scan__text">Введите длину, ширину и высоту внутреннего пространства кузова </p>
								</div>
							-->
							
							</div>
						</div>

<!-- *************************** ШАГ 2 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 2</span> Разрешения</p>
							<div class="row-col">
								<div class="scan__block-col col-1-2">
									<div class="ch_wrapper ">
										<input id="user-7-1-car" type="checkbox" name="check" value="user-7-1-car">
										<label for="user-7-1-car">Медицинская книжка</label>
									</div>
									<div class="ch_wrapper ">
										<input id="user-7-2-car" type="checkbox" name="check" value="user-7-2-car">
										<label for="user-7-2-car">Спецодежда для перевозки кормов и свиней </label>
									</div>
									<div class="ch_wrapper ">
										<input id="user-7-3-car" type="checkbox" name="check" value="user-7-3-car">
										<label for="user-7-3-car">Пропуск на МКАД</label>
									</div>
									<div class="ch_wrapper ">
										<input id="user-7-4-car" type="checkbox" name="check" value="user-7-4-car">
										<label for="user-7-4-car">Экспедирование</label>
									</div>
								</div>

							</div>
						</div>

<!-- *************************** ШАГ 3 ***************************************- -->
						
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 3</span> Оплата</p>
							<div class="row-col">
								<div class="wrapper m-bottom">
									<label class="lab-for-input" for="user-rate-car">Минимальная ставка: </label>
									<div class="input input--small  m-left m-bottom-mobil">
										<input type="text" class="user-input" id="user-rate-car" name="user-10-car">			
									</div>
									<script type="text/javascript">
											jQuery(function($){
										  			$("#user-rate-car").mask("?999999",{placeholder:""});
											});
									</script>
									<div class="input input--small m-left m-bottom-mobil" style="width: 150px;">
										<div class="user-input-bootstrap-wrapper">						
										<select class="user-input-bootstrap" id="user-10-1-car" name="user-10-1-car">								
									  		<option>руб./км</option>
									  		<option>Тариф в руб.</option>				  						  		
										</select>
										</div>																
									</div>
								</div>
							</div>

							<div class="row-col">
								<div class="wrapper m-bottom">									
									<div class="ch_wrapper in-block">
										<input id="user-11-1-car" type="checkbox" name="check" value="user-11-1-car" checked>
										<label for="user-11-1-car">Безналичный расчет</label>
									</div>
									<div class="ch_wrapper in-block">
										<input id="user-11-2-car" type="checkbox" name="check" value="user-11-2-car">
										<label for="user-11-2-car">Наличный расчет</label>
									</div>									
									<div class="ch_wrapper in-block">
										<input id="user-11-4-car" type="checkbox" name="check" value="user-11-4-car">
										<label for="user-11-4-car">Расчет по карте</label>
									</div>
								</div>
								<div class="ch_wrapper m-bottom in-block">
										<input id="user-11-3-car" type="checkbox" name="check" value="user-11-3-car">
										<label for="user-11-3-car"> с НДС</label>
								</div>
							</div>
						</div>

<!-- *************************** ШАГ 5 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 4</span> Примечание</p>
							<div class="row-col">
								<div class="input input-area">
									<textarea name="user-12-car" id="user-12-car" cols="7" rows="10" class="user-input area" maxlength="1500"></textarea>
									<i>Введите дополнительную информацию. Запрещается размещать контактную информацию (телефоны, #ICQ и т.д.)</i>
								</div>
							</div>
						</div>

<!-- *************************** ШАГ 6 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 5</span> ПТС</p>
							<div class="row-col">
								<label class="lab-for-input lab-max lab-title">Свидетельство о регистрации ТС:</label>
								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min param-reg" for="user-13-car">ТС: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-13-car" name="user-13-car" required>			
										</div>
										<script type="text/javascript">
											jQuery(function($){
										  			$("#user-13-car").mask("?#######################################",{placeholder:""});
											});
										</script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-14-car">Серия: </label>
										<div class="input input--small input--large">
											<input type="text" class="user-input" id="user-14-car" name="user-14-car">			
										</div>
										<script type="text/javascript">
											jQuery(function($){
										  			$("#user-14-car").mask("99ЯЯ",{placeholder:""});
											});
										</script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-15-car">Номер: </label>
										<div class="input input--small input--large">
											<input type="text" class="user-input" id="user-15-car" name="user-15-car">			
										</div>
										<script type="text/javascript">
											jQuery(function($){
										  			$("#user-15-car").mask("999999",{placeholder:""});
											});
										</script>
									</div>
								</div>								
							</div>

							<div class="row-col">
								<div class="wrapper m-bottom">
									<label class="lab-for-input lab-large param-reg" for="user-16-car">Гос. регистрационный знак:  </label>
									<div class="input input--small input--large">
										<input type="text" class="user-input" id="user-16-car" name="user-16-car" required="">			
									</div>
									<script type="text/javascript">
											jQuery(function($){
										  			$("#user-16-car").mask("?ЯЯЯЯЯЯЯЯЯ",{placeholder:""});
											});
									</script>
								</div>

								<div class="wrapper m-bottom">
									<label class="lab-for-input lab-large" for="user-17-car">Дата регистрации:  </label>
									<div class="input input--small input--date">
										<input type="text" class="datetimepicker6 user-input" id="user-17-car" name="user-17-car">							
									</div>
								</div>								

								<div class="wrapper m-bottom">
									<label class="lab-for-input lab-large" for="user-18-car">Выдано ГИБДД:  </label>
									<div class="input input--small input--max">
										<input type="text" class="user-input" id="user-18-car" name="user-18-car">			
									</div>
									<script type="text/javascript">
											jQuery(function($){
										  			$("#user-18-car").mask("?########################################################",{placeholder:""});
											});
									</script>
								</div>			

								
							</div>

							<div class="row-col">
								<div class="scan__block-col col-1-2">
									<div style="text-align: left;">
										<button type="submit" class="bbtn bbtn--yellow bbtn--small bbtn--file">Выберите файл
											<input id="photos" type="file" name="files[]"								
										   			onchange='$("#upload-file-info1").text("Файл " + $(this)[0].files[0].name);'>
										</button>
										<span id="upload-file-info1" class="scan__text"></span>
									</div>
	
									<div style="text-align: left;">	
										<button type="submit" class="bbtn bbtn--yellow bbtn--small bbtn--file">Выберите файл
											<input id="photos" type="file" name="files[]"								
										   			onchange='$("#upload-file-info2").text("Файл " + $(this)[0].files[0].name);'>
										</button>
										<span id="upload-file-info2" class="scan__text"></span>
									</div>
								</div>

								<div class="scan__block-col col-1-2">

									<div style="text-align: left;">
										<button type="submit" class="bbtn bbtn--yellow bbtn--small bbtn--file">Выберите файл
											<input id="photos" type="file" name="files[]"								
										   			onchange='$("#upload-file-info3").text("Файл " + $(this)[0].files[0].name);'>
										</button>
										<span id="upload-file-info3" class="scan__text"></span>
									</div>
	
									<div style="text-align: left;">
										<button type="submit" class="bbtn bbtn--yellow bbtn--small bbtn--file">Выберите файл
											<input id="photos" type="file" name="files[]"								
										   			onchange='$("#upload-file-info4").text("Файл " + $(this)[0].files[0].name);'>
										</button>
										<span id="upload-file-info4" class="scan__text"></span>
									</div>
								</div>
								
							</div>
						</div>

<!-- *************************** ШАГ 7 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 6</span> Контакты</p>
							<div class="row-col">
								<label class="lab-for-input lab-max lab-title">Собственник:</label>
								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-23-car">Фамилия: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-23-car" name="user-23-car">			
										</div>
										<script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-23-car").mask("?яяяяяяяяяяяяяяяяяяяяяяяяяяяяяя",{placeholder:""});
                                            });
                                        </script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min p-left" for="user-24-car">Имя: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-24-car" name="user-24-car">			
										</div>
										<script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-24-car").mask("?яяяяяяяяяяяяяяяяяяяяяяяяяяяяяя",{placeholder:""});
                                            });
                                        </script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-25-car">Отчество: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-25-car" name="user-25-car">			
										</div>
										<script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-25-car").mask("?яяяяяяяяяяяяяяяяяяяяяяяяяяяяяя",{placeholder:""});
                                            });
                                        </script>
									</div>
								</div>					
							</div>

							<div class="row-col">								
								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-26-car">ИНН: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-26-car" name="user-26-car">			
										</div>
										<script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-26-car").mask("9999999999?99",{placeholder:""});
                                                //Для организации (десятизначный цифровой код)
                                                //Для физического лица (двенадцатизначный цифровой код)
                                            });
                                        </script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min p-left" for="user-27-car">КПП: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-27-car" name="user-27-car">			
										</div>
										<script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-27-car").mask("999999999",{placeholder:""});
                                                //Структура КПП представляет собой девятизначный код: NNNNPPXXX
                                            });
                                        </script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min p-left" for="user-28-car">ОГРН: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-28-car" name="user-28-car">			
										</div>
										<script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-28-car").mask("9999999999999",{placeholder:""});
                                                //Структура ОГРН представляет собой 13-значный код: СГГККННХХХХХЧ
                                            });
                                        </script>
									</div>
								</div>					
							</div>

							<div class="row-col">								
								<div class="scan__block-col col-1-2">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-29-car">Расч/сч: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-29-car" name="user-29-car">			
										</div>
										<script type="text/javascript">
                                        jQuery(function($){
                                            $("#user-29-car").mask("99999999999999999999?99999999",{placeholder:" "});
                                            //20-значное число, имеющее следующую структуру: ААА.ББ.ВВВ.Г.ДДДД.ЕЕЕЕЕЕЕ:
                                        });
                                    </script>
									</div>
								</div>
							</div>
							<div class="row-col">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-large" for="user-30-car">Наименование банка: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-30-car" name="user-30-car">			
										</div>
										<script type="text/javascript">
                                        	jQuery(function($){
                                           	 	$("#user-30-car").mask("?############################################################",{placeholder:""});
                                        	});
                                    	</script>
									</div>
								
							</div>

							<div class="row-col">
								<div class="wrapper m-bottom">
									<label class="lab-for-input lab-large" for="user-31-car">Юридический адрес: </label>
									<div class="input input--small input--max">
										<input type="text" class="user-input" id="user-31-car" name="user-31-car">			
									</div>
									<script type="text/javascript">
                                        jQuery(function($){
                                            $("#user-31-car").mask("?####################################################################################################################################################################################",{placeholder:""});
                                        });
                                    </script>
								</div>

								<div class="wrapper m-bottom">
									<label class="lab-for-input lab-large" for="user-32-car">Фактический адрес:&nbsp;&nbsp; </label>
									<div class="input input--small input--max">
										<input type="text" class="user-input" id="user-32-car" name="user-32-car">			
									</div>
									<script type="text/javascript">
                                        jQuery(function($){
                                            $("#user-32-car").mask("?####################################################################################################################################################################################",{placeholder:""});
                                        });
                                    </script>
								</div>

							</div>

							<hr><br>

							<div class="row-col">
								<label class="lab-for-input lab-max lab-title">Водитель:</label>
								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-33-car">Фамилия: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-33-car" name="user-33-car">			
										</div>
										<script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-33-car").mask("?яяяяяяяяяяяяяяяяяяяяяяяяяяяяяя",{placeholder:""});
                                            });
                                        </script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min p-left" for="user-34-car">Имя: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-34-car" name="user-34-car">			
										</div>
										<script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-34-car").mask("?яяяяяяяяяяяяяяяяяяяяяяяяяяяяяя",{placeholder:""});
                                            });
                                        </script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-35-car">Отчество: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-35-car" name="user-35-car">			
										</div>
										<script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-35-car").mask("?яяяяяяяяяяяяяяяяяяяяяяяяяяяяяя",{placeholder:""});
                                            });
                                        </script>
									</div>
								</div>					
							</div>

							<div class="row-col">
								
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-large" for="user-36-car">Регистрационная карточка: </label>
										<div class="input input--small input--large">
											<input type="text" class="user-input" id="user-36-car" name="user-36-car">			
										</div>
										<script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-36-car").mask("?ЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯ",{placeholder:""});
                                            });
                                        </script>
									</div>
								
							</div>

							<div class="row-col">
								
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-large" for="user-37-car">Удостоверение №:</label>
										<div class="input input--small input--large">
											<input type="text" class="user-input" id="user-37-car" name="user-37-car">			
										</div>
										<script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-37-car").mask("?ЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯЯ",{placeholder:""});
                                            });
                                        </script>
									</div>
								
							</div>	
							
							<div class="row-col">								
								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label>Водительское удостоверение: </label>
										
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-39-car">Серия: </label>
										<div class="input input--small input--large">
											<input type="text" class="user-input" id="user-39-car" name="user-39-car">			
										</div>
										<script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-39-car").mask("99ЯЯ",{placeholder:""});
                                            });
                                        </script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-40-car">Номер:  </label>
										<div class="input input--small input--large">
											<input type="text" class="user-input" id="user-40-car" name="user-40-car">			
										</div>
										<script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-40-car").mask("999999",{placeholder:""});
                                            });
                                        </script>
									</div>
								</div>					
							</div>
						</div>

<!-- *************************** КНОПКИ ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__text param-reg" style="padding: 0; text-align: left;">Поля, обязательные для заполнения<br></p>
							<div class="scan__block-btn">
								<button type="submit" class="bbtn bbtn--yellow bbtn--big scan__btn-last-1-2">Добавить транспорт</button>
								<button type="button" class="bbtn bbtn--yellow bbtn--big scan__btn-last-1-2">Отмена</button>
							</div>							

						</div>
					
					</form>
					<script>
						$('form').submit(function(e) {
							e.preventDefault(); 
							var $form = $(this);
							$.ajax({
								type: $form.attr('method'),
          						url: $form.attr('action'),
          						data: $form.serialize()
        					}).done(function() {
          						$('#infoAddCarBox').modal('show');
        					}).fail(function() {
								alert('error');
          						console.log('fail');
        					});
        					//отмена действия по умолчанию для кнопки submit
        					
      					});
						
						$('#btn-modal-close').click(function () {
							$(location).attr('href', "{{ route('carrieroffice', \Auth::user()->id)}}");
						});
					</script>
				</div>
			</div>
		</div>


		
@endsection