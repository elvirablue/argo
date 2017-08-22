<div class="modal-content">
	      <!-- Заголовок модального окна -->
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	        <h4 class="modal-title">Информация о транспорте №{{$car->id}}</h4>
	      </div>
	      <!-- Основное содержимое модального окна -->
	      <div class="modal-body">
	      	<h6 class="modal-title">Перевозчик - {{$carrier->user->lastname}} {{$carrier->user->name}} (Статус - Аккредитован)</h6>
	      	<div class="row">
	      		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	      			<table>
	      				<caption>Транспортное средство</caption>	        	
	      				<tbody>
	      					<tr>
	      						<td><label>Название: </label></td>
	      						<td>{{$car->name}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Гос. регистр. знак:</label></td>
	      						<td>{{$car->sign}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Тип кузова: </label></td>
	      						<td>{{$carrier->body}} - {{$carrier->trailer}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Тип загрузки: </label></td>
	      						<td>{{$carrier->load}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Вес, т</label></td>
	      						<td>{{$carrier->carrying}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Объем, м<sup>3</sup></label></td>
	      						<td>{{$carrier->capacity}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>ПТС (серия/номер):</label></td>
	      						<td>{{$car->series}} {{$car->number}}</td>
	      					</tr>	      					
	      					<tr>
	      						<td><label>Дата регистрации:</label></td>
	      						<td>{{$car->datereg}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Выдано ГИБДД:</label></td>
	      						<td>{{$car->gibdd}}</td>
	      					</tr>	      						        		
	      				</tbody>
	      			</table>
	      		</div>

	      		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	      			<table>
	      				<caption>Собственник / Водитель</caption>        		
	      				<tbody>
	      					<tr>
	      						<td><label>ФИО собственника: </label></td>
	      						<td>{{$carowner->lname}} {{$carowner->fname}} {{$carowner->oname}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>ФИО водителя: </label></td>
	      						<td>{{$driver->lname}} {{$driver->fname}} {{$driver->oname}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Водительское удостоверение:</label></td>
	      						<td>{{$driver->series}} {{$driver->number}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Имеются разрешения: </label></td>
	      						<td><p>@if ($carrier->medbook == 1) Медицинская книжка @endif</p>
	      							<p>@if ($carrier->coverall == 1) Спецодежда для перевозки кормов и свиней @endif</p>
	      							<p>@if ($carrier->passmkad == 1) Пропуск на МКАД @endif</p>
	      							<p>@if ($carrier->forwarding == 1) Экспедирование @endif</p></td>
	      					</tr>
	      						        		       		
	      				</tbody>
	      			</table>
	      		</div>	      		
	      	</div>
	        
	        
	        <table>
	        	<caption>Информация об оплате</caption>        		
	        	<tbody>
	        		<tr>
	        			<td><label>Безналичный расчет @if ($carrier->paynoncash == 1) - ДА @else - НЕТ @endif / учитывать НДС @if ($carrier->tax == 1) - ДА @else - НЕТ @endif</label></td>	        			
	        		</tr>
	        		<tr>
	        			<td><label>Минимальна ставка {{$carrier->rate or 0}} {{$carrier->rateunit}} общая макимальная</label></td>	        			
	        		</tr>	        		
	        		<tr>
	        			<td>
	        				<label>Примечание:</label>
	        				<p>{{$carrier->description}}</p>
	        			</td>	        			
	        		</tr>	        		       		
	        	</tbody>
	        </table>
	      </div>
	      <!-- Футер модального окна -->
	      <div class="modal-footer">
	        <button type="button" class="bbtn bbtn--yellow bbtn--small bbtn--modal" data-dismiss="modal">Закрыть</button>
	        
	      </div>
	    </div>