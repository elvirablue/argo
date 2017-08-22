@extends('layouts.app')
  
@section('content')
	<!-- *************************** ПЕРВЫЙ ЭКРАН ***************************************- -->
		<div class="first-screen-page-bg bg-page add-card-bg">
			<div class="first-screen-page">
				<div class="first-screen-page__title">
					<h1>ДОБАВЛЕНИЕ ГРУЗА</h1>
				</div>				
			</div>		
		</div>

	<!-- *************************** БЛОК ФОРМЫ ***************************************- -->

		<div class="page-block-bg top-shadow">

			<div class="breadcrumbs">
				<ul>
					<li><a href="index.html">Главная</a></li>
					<li class="active"><a >Добавление груза</a></li>
				</ul>
				
			</div>

			<div class="page-block form-add-card-wrapper">
				<div class="scan__wrapper">
					<form action="{{ route('storeoffer') }}" method="POST" class="js-form-address">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<p class="scan__head">Заполните форму для добавления груза</p>

<!-- *************************** ШАГ 1 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 1</span> Груз</p>
							<div class="row-col">
								<div class="scan__block-col col-1-2">
									<div class="wrapper m-bottom">
										<label class="lab-for-input param-reg" for="user-1-card">Тип груза: </label>
										<div class="input input--small">
											<div class="user-input-bootstrap-wrapper">						
												<select class="user-input-bootstrap" id="user-1-card" name="user-1-card">
									  				@foreach ($cargoTypes as $key => $value) 
														<option>{{$value}}</option>
													@endforeach
												</select>
											</div>
										</div>	
									</div>	

									<div class="wrapper m-bottom">
										<label class="lab-for-input param-reg" for="user-1-1-card">Подтип груза: </label>
										<div class="input input--small">
											<div class="user-input-bootstrap-wrapper">						
												<select class="user-input-bootstrap" id="user-1-1-card" name="user-1-1-card">
												
									  				@foreach ($cargoSubTypes as $key => $value) 
														<option>{{$value}}</option>
													@endforeach								  		
												
												
												</select>
											</div> 
										<script>
											$( "#user-1-card" ).change(function() {
												$.ajax({
													url: "{{ route('getsubtypes') }}",
													data: {type : $( "#user-1-card" ).val()},
													success: function(data){
														$('#user-1-1-card').find('option').remove();

														$('#user-1-1-card').multiselect('destroy');

														jQuery.each (data, function() {
															$("#user-1-1-card").append(this);
														});


														$('#user-1-1-card').multiselect(														  
														    {
														      maxHeight: 200,
														      nonSelectedText: 'Нажмите, чтобы выбрать',
														      nSelectedText: ' шт. выбрано',
														      allSelectedText: 'Выбрано ',
														      disabledText: 'Нажмите, чтобы выбрать',
														    }
														);
													}
												});
											});
										</script>
										</div>	

									</div>															
															
									


								</div>

								<div class="scan__block-col col-1-2">

									<div class="wrapper">
										<label class="lab-for-input lab-min p-left" for="user-1-2-card">Другой: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-1-2-card" name="user-1-2-card">			
										</div>
									</div>
									<p class="scan__text m-bottom">Если в списке нет вашего груза, выберите "Другой"  и введите его вручную в дополнительное поле</p>
								</div>

								<script type="text/javascript">
									jQuery(function($){
   										$("#user-1-2-card").mask("?яяяяяяяяяяяяяяяяяяяяяяяяяяяяяяяяяяя",{placeholder:""});
									});
								</script>				

								
							</div>

							<div class="row-col">								
								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom-mobil">
										<label class="lab-for-input lab-min " for="user-2-card">Вес, т: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
										<div class="input input--small input--min">
											<input type="text" class="user-input" id="user-2-card" name="user-2-card">			
										</div>
										<script type="text/javascript">
											jQuery(function($){
										  			$("#user-2-card").mask("?000000",{placeholder:""});
											});
										</script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper">
										<label class="lab-for-input lab-min " for="user-3-card">Объем, м<sup>3</sup>: &nbsp;</label>
										<div class="input input--small input--min">
											<input type="text" class="user-input" id="user-3-card" name="user-3-card">			
										</div>
										<script type="text/javascript">
											jQuery(function($){
										  			$("#user-3-card").mask("?000000",{placeholder:""});
											});
										</script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									
								</div>
								<p class="scan__text">Введите вес в тоннах или объем груза в кубометрах в расчете на одну машину.<br><br></p>					
							</div>

							<div class="row-col">								
								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-4-card">Упаковка: </label>
										<div class="input input--small input--large">
											<input type="text" class="user-input" id="user-4-card" name="user-4-card">			
										</div>
										<script type="text/javascript">
											jQuery(function($){
										  			$("#user-4-card").mask("?яяяяяяяяяяяяяяяяяяяяяяяя",{placeholder:""});
											});
										</script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom m-left">
										<label class="lab-for-input lab-min p-left" for="user-5-card">Шт: </label>
										<div class="input input--small input--min">
											<input type="text" class="user-input" id="user-5-card" name="user-5-card">			
										</div>
									</div>
									<script type="text/javascript">
										jQuery(function($){
									  			$("#user-5-card").mask("?9999",{placeholder:""});
										});
									</script>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min p-left" for="user-6-card">Ремней, шт: </label>
										<div class="input input--small input--min">
											<input type="text" class="user-input" id="user-6-card" name="user-6-card">			
										</div>										
									</div>
									<script type="text/javascript">
										jQuery(function($){
									  			$("#user-6-card").mask("?999",{placeholder:""});
										});
									</script>
								</div>					
							</div>							


						</div>

<!-- *************************** ШАГ 2 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 2</span> Тип кузова</p>
							<div class="row-col">
								<div class="scan__block-col col-1-2">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min param-reg" for="user-10-card">Тип кузова: </label>
										<div class="input input--small">
											<div class="user-input-bootstrap-wrapper">						
											<select class="user-input-bootstrap" id="user-10-card" name="user-10-card">
										  		@foreach ($bodyTypes as $key => $value) 
														<option>{{$value}}</option>
												@endforeach		
											</select>
											</div>																
										</div>
									</div>
								</div>
							
								<div class="scan__block-col col-1-2">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min " for="user-11-card">Тип загрузки: </label>
										<div class="input input--small">
											<div class="user-input-bootstrap-wrapper">						
											<select class="user-input-bootstrap"  multiple="multiple" id="user-11-card" name="user-11-card[]">
										  		@foreach ($loadTypes as $key => $value) 
														<option>{{$value}}</option>
												@endforeach			  		
											</select>
											</div>																
										</div>
									</div>

									
								</div>

								
							</div>

							

						</div>

<!-- *************************** ШАГ 3 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 3</span> Маршрут и время загрузки</p>
							<div class="row-col">
								<label class="lab-for-input lab-max lab-title">Откуда:</label>
								<div class="scan__block-col col-1-2">
									
									<div class="wrapper m-bottom">
                                        <label class="lab-for-input lab-min param-reg" for="user-14-1-carrier">Регион: </label>
                                        <input type="text" class="user-input-map input input--small input--max" id="user-14-1-1-card" placeholder="Начните вводить текст" name="region"> 
                                        <input type="text" class="copy-label" style="display: none;" id="lab-regionfrom" name="lab-regionfrom" value="">                                       
                                    </div>
                                </div>

                                <div class="scan__block-col col-1-2">
									
									<div class="wrapper m-bottom">
                                        <label class="lab-for-input lab-min param-reg" for="user-14-2-carrier">Населенный пункт: </label>
                                        <input type="text" class="user-input-map input input--small input--large" id="user-14-1-2-card" placeholder="Начните вводить текст" name="city"> 
                                        <input type="text" class="copy-label" style="display: none;" id="lab-cityfrom" name="lab-cityfrom" value="">                                      
                                    </div>
                                </div>
                            </div>

                            <div class="row-col">
                            	<div class="scan__block-col col-1-3">
                            		<div class="wrapper m-bottom">											
										<label for="user-14-2-card" class="lab-for-input lab-min param-reg">Дата загрузки: </label>
										<div class="input input--small input--date">
											<input type="text" class="datetimepicker6 user-input" id="user-14-1-3-card" name="user-14-2-1-card">
										</div>
									</div>
                            	</div>

                            	<div class="scan__block-col col-1-2">
                            		<div class="wrapper m-bottom m-left">
										<label for="user-14-2-2-card" class="lab-for-input lab-min param-reg">Время загрузки:&nbsp;&nbsp;</label>
										<div class="wr">
											<label> &nbsp;&nbsp;&nbsp;&nbsp;c&nbsp;&nbsp;</label>
											<div class="input input--small input--hour">
												<input type="text" class="datetimepicker3 user-input" id="user-14-1-4-card" name="user-14-2-2-card">					
											</div>										
									
											<label> &nbsp;&nbsp;по&nbsp;&nbsp;</label>
											<div class="input input--small input--hour">
												<input type="text" class="datetimepicker3 user-input" id="user-14-1-5-card" name="user-14-2-3-card">					
											</div>
										</div>										
									</div>
                            	</div>

                            </div>


                            <div class="row-col">
								<label class="lab-for-input lab-max lab-title"><br><br>Куда:</label>
								<div class="scan__block-col col-1-2">
									
									<div class="wrapper m-bottom">                                       
                                        <label class="lab-for-input lab-min param-reg" for="user-14-1-carrier">Регион: </label>
                                        <input type="text" class="user-input-map input input--small input--max" id="user-14-2-1-card" placeholder="Начните вводить текст" name="region1">
                                        <input type="text" class="copy-label" style="display: none;" id="lab-regionto" name="lab-regionto" value="">
                                    </div>
                                    
                                </div>

                                <div class="scan__block-col col-1-2">									
									<div class="wrapper m-bottom">
                                        <label class="lab-for-input lab-min param-reg" for="user-14-2-carrier">Населенный пункт: </label>
                                        <input type="text" class="user-input-map input input--small input--large" id="user-14-2-2-card" placeholder="Начните вводить текст" name="city1">  
                                        <input type="text" class="copy-label" style="display: none;" id="lab-cityto" name="lab-cityto" value="">                                     
                                    </div>
                                </div>

                                <div class="tooltip" style="display: none;"><b></b><span></span></div>
                            </div>

                            <div class="row-col">
                            	<div class="scan__block-col col-1-3">
                            		<div class="wrapper m-bottom">											
										<label for="user-15-2-card">Дата разгрузки: </label>
										<div class="input input--small input--date">
											<input type="text" class="datetimepicker6 user-input" id="user-14-2-3-card" name="user-15-2-1-card">
										</div>
									</div>
                            	</div>

                            	<div class="scan__block-col col-1-2">
                            		<div class="wrapper m-bottom m-left">
										<label for="user-15-2-2-card" class="lab-for-input lab-min">Время разгрузки:&nbsp;&nbsp;</label>
										<div class="wr">
											<label> &nbsp;&nbsp;&nbsp;&nbsp;c&nbsp;&nbsp;</label>
											<div class="input input--small input--hour">
												<input type="text" class="datetimepicker3 user-input" id="user-14-2-4-card" name="user-15-2-2-card">					
											</div>										
									
											<label> &nbsp;&nbsp;по&nbsp;&nbsp;</label>
											<div class="input input--small input--hour">
												<input type="text" class="datetimepicker3 user-input" id="user-14-2-5-card" name="user-15-2-3-card">					
											</div>
										</div>										
									</div>
                            	</div>

                            </div>

                            <div class="row-col">
                            	<div class="wrapper">
                            		<br>									
									<label for="user-16-card">Расстояние: </label>
									<div class="input input--small input--short m-left">
										<input type="text" class="user-input" id="user-16-card" name="user-16-card">
									</div>
									<script type="text/javascript">
										jQuery(function($){
									  			$("#user-16-card").mask("?99999",{placeholder:""});
										});
									</script>
									<label>км</label>
								</div>

								<p class="scan__text">Укажите расстояние в километрах, если оно известно</p><br>							

                            </div>
								

							
						</div>
<!-- *************************** ШАГ 4 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 4</span> Оплата</p>
							<div class="row-col">
								<div class="ch_wrapper in-block m-bottom">
									<input id="user-17-1-card" type="checkbox" name="user-17-1-card" value="1" checked>
									<label for="user-17-1-card">Безналичный расчет</label>
								</div>
								<div class="ch_wrapper in-block m-bottom">
									<input id="user-17-2-card" type="checkbox" name="user-17-2-card" value="1">
									<label for="user-17-2-card">Наличный расчет</label>
								</div>
								<div class="ch_wrapper in-block m-bottom">
									<input id="user-17-3-card" type="checkbox" name="user-17-3-card" value="1">
									<label for="user-17-3-card">Расчет по карте</label>
								</div>
							</div>
							<div class="row-col">
								<div class="ch_wrapper in-block m-bottom">
									<input id="user-17-4-card" type="checkbox" name="user-17-4-card" value="1" checked>
									<label for="user-17-4-card">c НДС</label>
								</div>
							</div>


							<div class="row-col">
								
								<div class="wrapper m-bottom">
									<label class="lab-for-input lab-min" for="user-18-card">Ставка: </label>
									
									<div class="input input--small  m-left m-bottom-mobil">
										<input type="text" class="user-input" id="user-18-card" name="user-18-card">
									</div>
									<script type="text/javascript">
										jQuery(function($){
									  			$("#user-17-card").mask("?999999",{placeholder:""});
										});
									</script>
	
									<div class="input input--small m-left" style="width: 150px;">
										<div class="user-input-bootstrap-wrapper">						
											<select class="user-input-bootstrap" id="user-18-1-card" name="user-18-1-card">
									  			<option>руб./кг</option>
									  			<option>руб./км</option>
									  			<option>руб/тонно-км</option>
									  			<option>Общая максимальная</option>			  						  		
											</select>
										</div>																
									</div>
								</div>
								
								

							</div>

							

							<div class="row-col">
								<label >Варианты оплаты: <br></label>
								<div class="ch_wrapper m-bottom">										
									<input id="user-19-1-card" type="radio" checked name="radio" value="По факту предоставления документов" checked>
									<label for="user-19-1-card">По факту предоставления документов</label>
								</div>
								<div class="ch_wrapper m-bottom">										
									<input id="user-19-2-card" type="radio" checked name="radio" value="Частичная предоплата">
									<label for="user-19-2-card">Частичная предоплата</label>
								</div>	
								<div class="ch_wrapper m-bottom">										
									<input id="user-19-3-card" type="radio" checked name="radio" value="Отсрочка после предоставления документов">
									<label for="user-19-3-card">Отсрочка после предоставления документов </label>
									<div class="input input--small input--short m-left">
										<input type="text" class="user-input" id="user-19-3-1-card" name="user-19-3-1-card">
									</div>
										<script type="text/javascript">
											jQuery(function($){
										  			$("#user-24-card").mask("?999",{placeholder:""});
											});
										</script>

									<label>дней</label>
								</div>

								<div class="wrapper">
									<div class="ch_wrapper in-block">
										<input id="user-25-card" type="checkbox" name="user-25-card" value="1">
										<label for="user-25-card">Прямой договор</label>
									</div>
									<div class="ch_wrapper in-block">
										<input id="user-18-2-card" type="checkbox" name="user-18-2-card" value="1">
										<label for="user-18-2-card">Возможен торг</label>
									</div>
								</div>

								<p class="scan__text">Отметьте "Прямой договор", если будете заключать договор с перевозчиком от своей фирмы.</p>
							</div>
								
							
						</div>

<!-- *************************** ШАГ 5 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 5</span> Примечание</p>
							<div class="row-col">
								<div class="input input-area">
									<textarea name="user-26-card" id="user-26-card" cols="7" rows="10" class="user-input area" maxlength="1500"></textarea>
									<i>Введите дополнительную информацию. Запрещается размещать контактную информацию (телефоны, #ICQ и т.д.)</i>
								</div>
							</div>
						</div>

<!-- *************************** КНОПКИ ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__text param-reg" style="padding: 0; text-align: left;">Поля, обязательные для заполнения<br></p>
							<div class="scan__block-btn">
								<button type="submit" class="bbtn bbtn--yellow bbtn--big scan__btn-last-1-2">Добавить груз</button>
								<button type="button" class="bbtn bbtn--yellow bbtn--big scan__btn-last-1-2">Отмена</button>
							</div>							

						</div>


					</form>
				</div>
			</div>
		</div>



		
@endsection