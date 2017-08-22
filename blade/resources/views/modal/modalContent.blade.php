			<div class="modal-content">
	      <!-- Заголовок модального окна -->
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	        <h4 class="modal-title">Информация о заказе №{{$offer->id}}</h4>
	      </div>
	      <!-- Основное содержимое модального окна -->
	      <div class="modal-body">
	      	<h6 class="modal-title">Заказчик - {{$user->lastname}} {{$user->name}} (Статус - 
	      		@if ($user->accred == 1)
					Аккредитован
				@else
					Не аккредитован
				@endif)</h6>
	      	<div class="row">
	      		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	      			<table>
	      				<caption>Информация о грузе</caption>	        	
	      				<tbody>
	      					<tr>
	      						<td><label>Тип груза: </label></td>
	      						<td>{{$offer->cargoType}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Подтип груза:</label></td>
	      						<td>{{$offer->cargoSubType}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Вес, т</label></td>
	      						<td>{{$offer->weight}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Объем, м<sup>3</sup></label></td>
	      						<td>{{$offer->cargoVolume}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Упаковка: </label></td>
	      						<td>{{$offer->packing}} @if ($offer->count > 0) {{$offer->count}} шт. @endif @if ($offer->straps) (ремней - {{$offer->straps}} шт.) @endif</td>
	      					</tr>
	      					<tr>
	      						<td><label>Тип кузова:</label></td>
	      						<td>{{$offer->bodyType}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Тип загрузки:</label></td>
	      						<td>{{$offer->loadType}}</td>
	      					</tr>	        		
	      				</tbody>
	      			</table>
	      		</div>

	      		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
	      			<table>
	      				<caption>Информация о маршруте</caption>        		
	      				<tbody>
	      					<tr>
	      						<td><label>Откуда: </label></td>
	      						<td>{{$offer->fromRegion}}, {{$offer->fromLocality}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Дата и время загрузки: </label></td>
	      						<td>{{$offer->dateLoad}} с {{$offer->timeLoadFrom}} до {{$offer->timeLoadTo}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Куда:</label></td>
	      						<td>{{$offer->toRegion}}, {{$offer->toLocality}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Дата и время рагрузки: </label></td>
	      						<td>{{$offer->dateUnload}} с {{$offer->timeUnloadFrom}} до {{$offer->timeUnloadTo}}</td>
	      					</tr>
	      					<tr>
	      						<td><label>Расстояние, км</label></td>
	      						<td>{{$offer->distance}}</td>
	      					</tr>	        		       		
	      				</tbody>
	      			</table>
	      		</div>	      		
	      	</div>
	        
	        
	        <table>
	        	<caption>Информация об оплате</caption>        		
	        	<tbody>
	        		<tr>
	        			<td><label>
						Безналичный расчет @if ($offer->paynoncash == 1) ДА @else НЕТ @endif/ учитывать НДС - @if ($offer->tax == 1) ДА @else НЕТ @endif
						</label></td>	        			
	        		</tr>
	        		<tr>
	        			<td><label>Ставка {{$offer->rate or 0}} {{$offer->rateunit}}</label></td>	        			
	        		</tr>
	        		<tr>
	        			<td><label>Вариант оплаты: {{$offer->payment}} @if ($offer->paydays !== null) {{$offer->paydays}} дней @endif</label></td>	        			
	        		</tr>
	        		<tr>
	        			<td><label>Прямой договор - @if ($offer->contract == 1) ДА @else НЕТ @endif/ Возможен торг - @if ($offer->discount == 1) ДА @else НЕТ @endif </label></td>	        			
	        		</tr>
	        		<tr>
	        			<td>
	        				<label>Примечание:</label>
	        				<p>{{$offer->description}}</p>
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