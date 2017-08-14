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
					<form action="" method="">
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
									  				<option>Нажмите, чтобы выбрать</option>
									  				<option>Грибы</option>
													<option>Декоративные культуры</option>
													<option>Зерно, зернобобовые</option>
													<option>Комбикорма, зерносмеси</option>
													<option>Корма экструдированные</option>
													<option>Кормовые добавки</option>
													<option>Кормовые дрожжи</option>
													<option>Кормовые корнеплоды</option>
													<option>Масличные культуры</option>
													<option>Мёд, продукция пчеловодства</option>
													<option>Мука кровяная</option>
													<option>Мука мясная</option>
													<option>Мука мясокостная</option>
													<option>Мука перьевая</option>
													<option>Мука рыбная</option>
													<option>Мука травяная</option>
													<option>Некондиционные продукты питания на корм животным</option>
													<option>Овощи</option>
													<option>Орехи</option>
													<option>Отруби</option>
													<option>Прочие корма</option>
													<option>Семена, посевной материал</option>
													<option>Сено, солома, силос</option>
													<option>Соль кормовая</option>	
													<option selected>С/х животные и птица (живок)</option>				
													<option>Технические культуры</option>
													<option>Техническое сырье</option>
													<option>Фрукты. Ягоды</option>
													<option>Яйцо</option>
													<option>ДРУГОЙ</option>					  		
												</select>
											</div>
										</div>	
									</div>	

									<div class="wrapper m-bottom">
										<label class="lab-for-input param-reg" for="user-1-1-card">Подтип груза: </label>
										<div class="input input--small">
											<div class="user-input-bootstrap-wrapper">						
												<select class="user-input-bootstrap" id="user-1-1-card" name="user-1-1-card">
									  				<option>Нажмите, чтобы выбрать</option>	
													<option>Козы</option>
													<option>Кролики</option>
													<option>КРС</option>
													<option>Лошади</option>
													<option>Овцы</option>
													<option>Птицы</option>
													<option>Пчелы</option>
													<option>Рыбопосадочный материал</option>
													<option>Свиньи</option>									  		
												</select>
											</div> 

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
										<label class="lab-for-input lab-min param-reg" for="user-2-card">Вес, т: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
										<div class="input input--small input--min">
											<input type="text" class="user-input" id="user-2-card" name="user-2-card">			
										</div>
										<script type="text/javascript">
											jQuery(function($){
										  			$("#user-2-card").mask("?999.999",{placeholder:""});
											});
										</script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper">
										<label class="lab-for-input lab-min param-reg" for="user-3-card">Объем, м<sup>3</sup>: &nbsp;</label>
										<div class="input input--small input--min">
											<input type="text" class="user-input" id="user-3-card" name="user-3-card">			
										</div>
										<script type="text/javascript">
											jQuery(function($){
										  			$("#user-3-card").mask("?999.999",{placeholder:""});
											});
										</script>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									
								</div>
								<p class="scan__text">Введите вес в тоннах и(или) объем груза в кубометрах в расчете на одну машину.<br><br></p>					
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
									  			$("#user-5-card").mask("?999",{placeholder:""});
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
							<!--
							<div class="row-col">
															
								<div class="wrapper m-bottom">	
									<label class="lab-for-input" for="user-7-1-card">Габариты (Д/Ш/В), м : </label>								
									<div class="input input--small input--short">
										<input type="number" class="user-input" id="user-7-1-card" name="user-7-1-card">			
									</div>
									<label>X &nbsp;&nbsp;</label>
									<div class="input input--small input--short">
										<input type="number" class="user-input" id="user-7-2-card" name="user-7-2-card">			
									</div>
									<label>X &nbsp;&nbsp;</label>
									<div class="input input--small input--short">
										<input type="number" class="user-input" id="user-7-3-card" name="user-7-3-card">			
									</div>
								</div>							
							</div>
							-->

							<div class="row-col">
								<div class="scan__block-col col-1-3">
									<div class="wrapper">
										
										<div class="input input--small input--max param-reg">
											<div class="user-input-bootstrap-wrapper">						
												<select class="user-input-bootstrap" id="user-8-card" name="user-8-card">
									  				<option>Нажмите, чтобы выбрать</option>
									  				<option>2--------------</option>
									  				<option>*******************</option>					  		
												</select>
											</div>	
										</div>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="ch_wrapper in-block m-left">
										<input id="user-9-card" type="checkbox" name="check" value="user-9-card">
										<label for="user-9-card">Сборный груз</label>
									</div>
								</div>
								
							</div>


						</div>

<!-- *************************** ШАГ 2 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 2</span> Тип кузова и загрузки</p>
							<div class="row-col">
								<div class="scan__block-col col-1-2">
									<div class="wrapper m-bottom">
										<label class="lab-for-input param-reg" for="user-10-card">Тип кузова: </label>
										<div class="input input--small">
											<div class="user-input-bootstrap-wrapper">						
											<select class="user-input-bootstrap" id="user-10-card" name="user-10-card">
										  		<option>Нажмите, чтобы выбрать</option>
										  		<option>Скотовоз</option>
										  		<option>Тушевоз</option>
										  		<option>Кормовоз</option>	
										  		<option>Зерновоз</option>
										  		<option>Молоковоз</option>
										  		<option>Птицевоз</option>
										  		<option>Сельхозник</option>
										  		<option>Рефрежератор</option>
										  		<option>Комбайн</option>
										  		<option>Молотилка</option>
										  		<option>Тент</option>					  		
											</select>
											</div>																
										</div>
									</div>
								</div>
							</div>

							<div class="row-col">
								<div class="scan__block-col col-1-2">
									<div class="wrapper m-bottom">
										<label class="lab-for-input" for="user-11-card">Тип загрузки: </label>
										<div class="input input--small">
											<div class="user-input-bootstrap-wrapper">						
											<select class="user-input-bootstrap"  multiple="multiple" id="user-11-card" name="user-11-card">
										  		<option>Верхняя</option>
										  		<option>Боковая</option>
										  		<option>Задняя</option>				  		
											</select>
											</div>																
										</div>
									</div>

									
								</div>

								<div class="scan__block-col col-1-2">
									<div class="ch_wrapper in-block">
										<input id="user-11-1-card" type="radio" name="radio" checked value="user-11-1-card">
										<label for="user-11-1-card">"или" (любой из выбранных)</label>
									</div>
									<div class="ch_wrapper in-block m-left m-bottom-mobil">
										<input id="user-11-2-card" type="radio" name="radio" value="user-11-2-card">
										<label for="user-11-2-card">"и" (все обязательны)</label>
									</div>
									
								</div>
							</div>

							<div class="row-col">
								<div class="wrapper m-bottom">
									<br>
									<label class="lab-for-input lab-min param-reg" for="user-13-card">Объем, м<sup>3</sup>: </label>
									<div class="input input--small input--min">
										<input type="text" class="user-input" id="user-13-card" name="user-13-card">			
									</div>
								</div>
								<script type="text/javascript">
										jQuery(function($){
									  			$("#user-13-card").mask("?999.999",{placeholder:""});
										});
								</script>
							</div>

						</div>

<!-- *************************** ШАГ 3 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 3</span> Когда</p>
							<div class="row-col">
								<div class="scan__block-col col-1-2">
									<div class="row-col">
										<div class="ch_wrapper m-bottom">
											<input id="user-14-1-card" type="radio" name="radio" value="user-14-1-card">
											<label for="user-14-1-card">Готов к загрузке &nbsp;&nbsp;</label>
											<div class="input input--small input--large">
												<div class="user-input-bootstrap-wrapper">						
													<select class="user-input-bootstrap" id="user-14-1-1-card" name="user-14-1-card">
										  				<option>Нажмите, чтобы выбрать</option>
										  				<option>2--------------</option>
										  				<option>*******************</option>					  		
													</select>
												</div>	
											</div>	
										</div>
										<div class="ch_wrapper m-bottom">
											<input id="user-14-2-card" type="radio" name="radio" value="user-14-2-card">
											<label for="user-14-2-card">С&nbsp;&nbsp;&nbsp;</label>
											<div class="input input--small input--date">
												<input type="text" class="datetimepicker6 user-input" id="user-14-2-1-card" name="user-14-2-1-card">							
											</div>
											<span class="wr">
												<label>&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;</label>
												<div class="input input--small input--day">
													<input type="text" class="user-input required" id="user-14-2-2-card" name="user-14-2-2-card">										
												</div>

												<label for="user-14-2-2-card">&nbsp;&nbsp;&nbsp;дней</label>
											</span>

										</div>
										<div class="ch_wrapper m-bottom">
											<input id="user-14-3-card" type="radio" name="radio" value="user-14-3-card">
											<label for="user-14-3-card">Постоянно&nbsp;&nbsp;&nbsp;</label>
											<span class="wr">
												<div class="input input--small input--time">
													<div class="user-input-bootstrap-wrapper">						
													<select class="user-input-bootstrap" id="user-14-3-1-card" name="user-14-3-1-card">
												  		<option>В течение 1 месяца</option>
												  		<option>В течение 6 месяцев</option>
												  		<option>В течение 1 года</option>
												  		<option>Безсрочно</option>					  		
													</select>
													</div>															
												</div>
											</span>
											<span class="wr">
												<label for="user-14-3-1-card">&nbsp;&nbsp;&nbsp;<b>(с сегодняшнего дня + 2 дня)</b></label>
											</span>
										</div>	
									</div>
									

								</div>

								<div class="scan__block-col col-1-2">
									
									<div class="wrapper m-bottom m-left">
										<label for="user-15-1-card" class="lab-for-input lab-min">Время заргузки:&nbsp;&nbsp;</label>
										<div class="wr">
											<label> &nbsp;&nbsp;&nbsp;&nbsp;c&nbsp;&nbsp;</label>
											<div class="input input--small input--hour">
												<input type="text" class="datetimepicker3 user-input" id="user-15-1-card" name="user-15-1-card">					
											</div>										
									
											<label> &nbsp;&nbsp;по&nbsp;&nbsp;</label>
											<div class="input input--small input--hour">
												<input type="text" class="datetimepicker3 user-input" id="user-15-2-card" name="user-15-2-card">					
											</div>
										</div>										
									</div>

									<div class="wrapper m-bottom m-left">
										<label for="user-16-1-card" class="lab-for-input lab-min">Время разгрузки:</label>
										<div class="wr">
											<label> &nbsp;&nbsp;&nbsp;&nbsp;c&nbsp;&nbsp;</label>
											<div class="input input--small input--hour">
												<input type="text" class="datetimepicker3 user-input" id="user-16-1-card" name="user-16-1-card">					
											</div>										
									
											<label> &nbsp;&nbsp;по&nbsp;&nbsp;</label>
											<div class="input input--small input--hour">
												<input type="text" class="datetimepicker3 user-input" id="user-16-2-card" name="user-16-2-card">					
											</div>
										</div>										
									</div>

								</div>

								<p class="scan__text">В течении этого времени заявка будет находится в системе, после чего будет автоматически удалена.<br>Если заявка потеряет актуальность раньше, не забудьте её удалить из системы.</p>

							</div>
						</div>
<!-- *************************** ШАГ 4 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 4</span> Оплата</p>
							<div class="row-col">
								<div class="wrapper m-bottom">
									<label class="lab-for-input" for="user-17-1-card">Ставка: </label>
									<div class="input input--small input--stavka param-reg m-bottom-mobil">
										<div class="user-input-bootstrap-wrapper">						
										<select class="user-input-bootstrap" id="user-17-1-card" name="user-17-1-card">
									  		<option>Любая</option>
									  		<option>****************</option>
									  		<option>****************</option>		  						  		
										</select>
										</div>																
									</div>
									<div class="input input--small input--short m-left m-bottom-mobil">
										<input type="text" class="user-input" id="user-17-2-card" name="user-17-2-card">
									</div>

									<div class="input input--small m-left">
										<div class="user-input-bootstrap-wrapper">						
											<select class="user-input-bootstrap" id="user-17-3-card" name="user-17-3-card">
									  			<option>руб./км</option>
									  			<option>руб./км</option>			  						  		
											</select>
										</div>																
									</div>
								</div>

							</div>

							<div class="row-col">
								<div class="wrapper m-bottom">
									<label class="lab-for-input" for="user-18-1-card">Ставка б/нал с НДС: </label>
									<div class="input input--small input--stavka param-reg">
										<div class="user-input-bootstrap-wrapper">						
										<select class="user-input-bootstrap" id="user-18-1-card" name="user-18-1-card">
									  		<option>Любая</option>
									  		<option>****************</option>
									  		<option>****************</option>		  						  		
										</select>
										</div>																
									</div>
									<div class="input input--small input--short m-left">
										<input type="text" class="user-input" id="user-18-2-card" name="user-18-2-card">
									</div>
									
								</div>

								<div class="wrapper m-bottom">
									<label class="lab-for-input" for="user-19-1-card">Ставка б/нал без НДС: </label>
									<div class="input input--small input--stavka param-reg">
										<div class="user-input-bootstrap-wrapper">						
										<select class="user-input-bootstrap" id="user-19-1-card" name="user-19-1-card">
									  		<option>Любая</option>
									  		<option>****************</option>
									  		<option>****************</option>		  						  		
										</select>
										</div>																
									</div>
									<div class="input input--small input--short m-left">
										<input type="text" class="user-input" id="user-19-2-card" name="user-19-2-card">
									</div>
									
								</div>

							</div>

							<div class="row-col">
								<div class="wrapper">									
									<div class="ch_wrapper in-block">
										<input id="user-20-1-card" type="checkbox" name="check" value="user-20-1-card">
										<label for="user-20-1-card">Запрос ставки </label>
									</div>
									<div class="ch_wrapper in-block">
										<input id="user-20-2-card" type="checkbox" name="check" value="user-20-2-card">
										<label for="user-20-2-card">Возможен торг </label>
									</div>
								</div>

								<p class="scan__text">Указав конкретную ставку вы уменьшите количество бесполезных звонков в Ваш адрес.</p><br>
							</div>

							<div class="row-col">
								<div class="wrapper in-block">									
									<div class="ch_wrapper in-block">
										<input id="user-21-card" type="checkbox" name="check" value="user-21-card">
										<label for="user-21-card">Предоплата</label>
										<div class="input input--small input--short m-left">
											<input type="text" class="user-input" id="user-21-1-card" name="user-21-1-card">
										</div>
										<label>%</label>
									</div>

								</div>
								<div class="wrapper in-block">
									<div class="ch_wrapper in-block">
										<input id="user-22-card" type="checkbox" name="check" value="user-22-card">
										<label for="user-22-card">На выгрузке</label>
									</div>
								</div>
								<div class="wrapper in-block">
									<div class="ch_wrapper in-block">
										<input id="user-23-card" type="checkbox" name="check" value="user-23-card">
										<label for="user-23-card">Через банк</label>
										<div class="input input--small input--short m-left">
											<input type="text" class="user-input" id="user-24-card" name="user-24-card">
										</div>
										<label for="user-24-card">дней</label>
									</div>
								</div>

								<div class="wrapper">
									<div class="ch_wrapper in-block">
										<input id="user-25-card" type="checkbox" name="check" value="user-25-card">
										<label for="user-25-card">Прямой договор</label>
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
								<button type="submit" class="bbtn bbtn--yellow bbtn--big scan__btn-last-1-2">Закрыть</button>
							</div>							

						</div>


					</form>
				</div>
			</div>
		</div>



		
@endsection