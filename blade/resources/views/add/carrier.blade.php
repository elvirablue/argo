@extends('layouts.app')
  
@section('content')
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
					<li><a href="index.html">Главная</a></li>
					<li class="active"><a >Добавление транспорта</a></li>
				</ul>				
			</div>

			<div class="page-block form-add-car-wrapper">
				<div class="scan__wrapper">
					<form action="" method="">
						<p class="scan__head">Заполните форму для добавления транспорта</p>

<!-- *************************** ШАГ 1 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 1</span> Кузов</p>
							<div class="row-col">
								<div class="scan__block-col col-1-2">
									<div class="wrapper m-bottom">
										<label class="lab-for-input param-reg" for="user-1-car">Тип кузова: </label>
										<div class="input input--small">
											<div class="user-input-bootstrap-wrapper">						
											<select class="user-input-bootstrap" id="user-1-car" name="user-1-car">
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

								<div class="scan__block-col col-1-2">
									<div class="ch_wrapper in-block">
										<input id="user-2-1-car" type="radio" checked name="radio" value="user-2-1-car">
										<label for="user-2-1-car">Полуприцеп</label>
									</div>
									<div class="ch_wrapper in-block">
										<input id="user-2-2-car" type="radio" name="radio" value="user-2-2-car">
										<label for="user-2-2-car">Грузовик</label>
									</div>
									<div class="ch_wrapper in-block">
										<input id="user-2-3-car" type="radio" name="radio" value="user-2-3-car">
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
										<select class="user-input-bootstrap" id="user-3-car" multiple="multiple" name="user-3-car">								
									  		<option>Верхняя</option>
									  		<option>Боковая</option>
									  		<option>Задняя</option>					  		
										</select>
										</div>																
									</div>
								</div>								

								<div class="wrapper m-bottom">
									<label class="lab-for-input param-reg" for="user-4-car">Грузоподъемность, т: </label>
									<div class="input input--small input--short">
										<input type="number" class="user-input" id="user-4-car" name="user-4-car">			
									</div>
								</div>

								<div class="wrapper m-bottom">
									<label class="lab-for-input param-reg" for="user-5-car">Объем, м<sup>3</sup>: </label>
									<div class="input input--small input--short">
										<input type="number" class="user-input" id="user-5-car" name="user-5-car">			
									</div>
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
								<div class="scan__block-col col-1-3">
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
								</div>

								<div class="scan__block-col col-1-3">
									<div class="ch_wrapper ">
										<input id="user-7-4-car" type="checkbox" name="check" value="user-7-4-car">
										<label for="user-7-4-car">Экспедирование</label>
									</div>
									<div class="ch_wrapper ">
										<input id="user-7-5-car" type="checkbox" name="check" value="user-7-5-car">
										<label for="user-7-5-car">Прохождение весового контроля в пути</label>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="scan__block-border">
										<p class="scan__block-border-title">Прохождение весового контроля в пути </p>
										<p class="scan__text">Проверку службой безопастности проходят только аккредитованные заказчики. <br>С остальными Вы работаете на свой страх и риск.</p>						

										<div class="ch_wrapper ">
											<input id="user-8-1-car" type="checkbox" name="check" value="user-8-1-car">
											<label for="user-8-1-car">Не проверен</label>
										</div>
										<div class="ch_wrapper ">
											<input id="user-8-2-car" type="checkbox" name="check" value="user-8-2-car">
											<label for="user-8-2-car">Полная аккредитация</label>
										</div>
										<div class="ch_wrapper ">
											<input id="user-8-3-car" type="checkbox" name="check" value="user-8-3-car">
											<label for="user-8-3-car">Прошел первичную аккредитацию</label>
										</div>
									</div>
								</div>
							</div>
						</div>

<!-- *************************** ШАГ 3 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 3</span> Когда</p>
							<div class="row-col">
								<div class="ch_wrapper m-bottom">
									<input id="user-9-1-car" type="radio" name="radio" value="user-9-1-car">
									<label for="user-9-1-car">Готов к загрузке <b>(с сегодняшнего дня +2 дня)</b></label>
								</div>
								<div class="ch_wrapper m-bottom">
									<input id="user-9-2-car" type="radio" name="radio" value="user-9-2-car">
									<label for="user-9-2-car">С&nbsp;&nbsp;&nbsp;</label>
									<div class="input input--small input--date">
										<input type="text" class="datetimepicker6 user-input" id="user-9-2-1-car" name="user-9-2-1-car">							
									</div>
									<span class="wr">
									<label>&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;</label>
									<div class="input input--small input--day">
										<input type="number" class="user-input required" id="user-9-2-2-car" name="user-9-2-2-car">										
									</div>

									<label for="user-9-2-2-car">&nbsp;&nbsp;&nbsp;дней</label>
									</span>

								</div>
								<div class="ch_wrapper m-bottom">
									<input id="user-9-3-car" type="radio" name="radio" value="user-9-3-car">
									<label for="user-9-3-car">Постоянно&nbsp;&nbsp;&nbsp;</label>
									<span class="wr">
									<div class="input input--small input--time">
										<div class="user-input-bootstrap-wrapper">						
										<select class="user-input-bootstrap" id="user-9-3-1-car" name="user-9-3-1-car">
									  		<option>В течение 1 месяца</option>
									  		<option>В течение 6 месяцев</option>
									  		<option>В течение 1 года</option>
									  		<option>Безсрочно</option>					  		
										</select>
										</div>															
									</div>
									</span>
									<span class="wr">
									<label>&nbsp;&nbsp;&nbsp;<b>(с сегодняшнего дня +2 дня)</b></label></span>
								</div>	
							</div>
							<p class="scan__text">В течении этого времени заявка будет находится в системе, после чего будет автоматически удалена.<br>Если заявка потеряет актуальность раньше, не забудьте её удалить из системы.</p>
						</div>

<!-- *************************** ШАГ 4 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 4</span> Оплата</p>
							<div class="row-col">
								<div class="wrapper m-bottom">
									<label class="lab-for-input" for="user-10-car">Минимальная ставка: </label>
									<div class="input input--small input--short">
										<input type="number" class="user-input" id="user-rate-car" name="user-10-car">			
									</div>
									<div class="input input--small ">
										<div class="user-input-bootstrap-wrapper">						
										<select class="user-input-bootstrap" id="user-10-1-car" name="user-10-1-car">								
									  		<option>руб./км</option>
									  		<option>руб./км</option>				  						  		
										</select>
										</div>																
									</div>
								</div>

								<div class="wrapper m-bottom">
									<label class="lab-for-input" for="">Способ оплаты: </label>
									<div class="ch_wrapper in-block">
										<input id="user-11-1-car" type="checkbox" name="check" value="user-11-1-car">
										<label for="user-11-1-car">Безналичный</label>
									</div>
									<div class="ch_wrapper in-block">
										<input id="user-11-2-car" type="checkbox" name="check" value="user-11-2-car">
										<label for="user-11-2-car">Наличный</label>
									</div>
									<div class="ch_wrapper in-block">
										<input id="user-11-3-car" type="checkbox" name="check" value="user-11-3-car">
										<label for="user-11-3-car">НДС</label>
									</div>
									<div class="ch_wrapper in-block">
										<input id="user-11-4-car" type="checkbox" name="check" value="user-11-4-car">
										<label for="user-11-4-car">На карту</label>
									</div>
								</div>
							</div>
						</div>

<!-- *************************** ШАГ 5 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 5</span> Примечание</p>
							<div class="row-col">
								<div class="input input-area">
									<textarea name="user-12-car" id="user-12-car" cols="7" rows="10" class="user-input area" maxlength="1500"></textarea>
									<i>Введите дополнительную информацию. Запрещается размещать контактную информацию (телефоны, #ICQ и т.д.)</i>
								</div>
							</div>
						</div>

<!-- *************************** ШАГ 6 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 6</span> ПТС</p>
							<div class="row-col">
								<label class="lab-for-input lab-max lab-title">Свидетельство о регистрации ТС:</label>
								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-13-car">ТС: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-13-car" name="user-13-car">			
										</div>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-14-car">Серия: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-14-car" name="user-14-car">			
										</div>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-15-car">Номер: </label>
										<div class="input input--small input--large">
											<input type="number" class="user-input" id="user-15-car" name="user-15-car">			
										</div>
									</div>
								</div>								
							</div>

							<div class="row-col">
								<div class="wrapper m-bottom">
									<label class="lab-for-input lab-large" for="user-16-car">Гос. регистрационный знак:  </label>
									<div class="input input--small input--large">
										<input type="text" class="user-input" id="user-16-car" name="user-16-car">			
									</div>
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
								</div>

								<div class="wrapper m-bottom">	
									<label class="lab-for-input lab-large" for="user-19-car"> </label>								
									<div class="input input--small input--large">
										<input type="text" class="user-input" id="user-19-car" name="user-19-car">			
									</div>
								</div>

								<div class="wrapper m-bottom">
									<label class="lab-for-input lab-large" for="user-20-car">Отметка о снятии с учета:  </label>
									<div class="input input--small input--large">
										<input type="text" class="user-input" id="user-20-car" name="user-20-car">			
									</div>
								</div>

								<div class="wrapper m-bottom">
									<label class="lab-for-input lab-large" for="user-21-car">Дата снятия с учета:  </label>
									<div class="input input--small input--date">
										<input type="text" class="datetimepicker6 user-input" id="user-21-car" name="user-21-car">							
									</div>
								</div>
							</div>

							<div class="scan__block-btn">
								<button type="submit" class="bbtn bbtn--yellow bbtn--big scan__btn-last">Загрузить фотографии</button>
								<p class="scan__text">Список загруженных файлов Список загруженных файлов Список загруженных файлов</p>
								
							</div>
						</div>

<!-- *************************** ШАГ 7 ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__step-head"><span class="text-blue">Шаг 7</span> Контакты</p>
							<div class="row-col">
								<label class="lab-for-input lab-max lab-title">Собственник:</label>
								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-23-car">Фамилия: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-23-car" name="user-23-car">			
										</div>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min p-left" for="user-24-car">Имя: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-24-car" name="user-24-car">			
										</div>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-25-car">Отчество: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-25-car" name="user-25-car">			
										</div>
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
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min p-left" for="user-27-car">КПП: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-27-car" name="user-27-car">			
										</div>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min p-left" for="user-28-car">ОГРН: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-28-car" name="user-28-car">			
										</div>
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
									</div>
								</div>
								<div class="scan__block-col col-1-2">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min p-left" for="user-30-car">В банке: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-30-car" name="user-30-car">			
										</div>
									</div>
								</div>
							</div>

							<div class="row-col">
								<div class="wrapper m-bottom">
									<label class="lab-for-input lab-large" for="user-3132-car">Юридический адрес: </label>
									<div class="input input--small input--max">
										<input type="text" class="user-input" id="user-3132-car" name="user-3132-car">			
									</div>
								</div>

								<div class="wrapper m-bottom">
									<label class="lab-for-input lab-large" for="user-32-car">Фактический адрес:&nbsp;&nbsp; </label>
									<div class="input input--small input--max">
										<input type="text" class="user-input" id="user-32-car" name="user-32-car">			
									</div>
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
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min p-left" for="user-34-car">Имя: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-34-car" name="user-34-car">			
										</div>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-35-car">Отчество: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-35-car" name="user-35-car">			
										</div>
									</div>
								</div>					
							</div>

							<div class="row-col">
								
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-large" for="user-36-car">Регистрационная карточка: </label>
										<div class="input input--small input--large">
											<input type="text" class="user-input" id="user-36-car" name="user-36-car">			
										</div>
									</div>
								
							</div>

							<div class="row-col">
								
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-large" for="user-37-car">Удостоверение №:</label>
										<div class="input input--small input--large">
											<input type="text" class="user-input" id="user-37-car" name="user-37-car">			
										</div>
									</div>
								
							</div>	
							
							<div class="row-col">								
								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-38-car">Рег. №: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-38-car" name="user-38-car">			
										</div>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-39-car">Серия: </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-39-car" name="user-39-car">			
										</div>
									</div>
								</div>

								<div class="scan__block-col col-1-3">
									<div class="wrapper m-bottom">
										<label class="lab-for-input lab-min" for="user-40-car">Номер:  </label>
										<div class="input input--small input--max">
											<input type="text" class="user-input" id="user-40-car" name="user-40-car">			
										</div>
									</div>
								</div>					
							</div>
						</div>

<!-- *************************** КНОПКИ ***************************************- -->
						<div class="scan__block-row">
							<p class="scan__text param-reg" style="padding: 0; text-align: left;">Поля, обязательные для заполнения<br></p>
							<div class="scan__block-btn">
								<button type="submit" class="bbtn bbtn--yellow bbtn--big scan__btn-last-1-2">Добавить транспорт</button>
								<button type="submit" class="bbtn bbtn--yellow bbtn--big scan__btn-last-1-2">Закрыть</button>
							</div>							

						</div>
					
					</form>
				</div>
			</div>
		</div>


		
@endsection