@extends('layouts.app')

@section('title', 'Новости и статьи')
  
@section('content')


	<!-- *************************** БЛОК НОВОСТЕЙ ***************************************- -->

		<div class="page-block-bg top-shadow">

			<div class="breadcrumbs">
				<ul>
					<li><a href="{{ route('home') }}">Главная</a></li>
					<li><a href="{{ route('news') }}" >Статьи и новости</a></li>
					<li class="active"><a >Добавить новость</a></li>
				</ul>
				
			</div>

			<div class="page-block news">				
					<form method="POST" action="{{ route('storenews') }}" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div style="text-align: center;">
							<button type="button" class="bbtn bbtn--yellow bbtn--small bbtn--file">Выберите файл
								<input style="opacity: 0; width: 100%; height: 100%; display: block; position: absolute; top:0; bottom:0; left:0; right:0;cursor: pointer;" id="image" type="file" name="image"								
							   			onchange='$("#upload-file-image").text("Файл " + $(this)[0].files[0].name);'>
							</button>
							<span id="upload-file-image" class="scan__text"></span>
						</div>

						<div class="separator"></div>

						<div class="row-col">
							<label class="lab-for-input lab-max" for="date">Дата новости:  </label>
							<div class="input" style="background-color: #fff;">
								<input type="text" name="date" id="date" class="user-input" maxlength="10">								
							</div>
						</div>
						<div class="separator"></div>

						<div class="row-col">
							<label class="lab-for-input lab-max" for="title">Заголовок новости:  </label>
							<div class="input input-area">
								<textarea name="title" id="title" cols="7" rows="5" class="user-input area area--news" maxlength="1500"></textarea>
								
							</div>
						</div>
						<div class="separator"></div>
						

						<div class="row-col">
							<label class="lab-for-input lab-max" for="text">Текст новости:  </label>
							<div class="input input-area">
								<textarea name="text" id="text" cols="7" rows="20" class="user-input area area--news add-tinymce" maxlength="10000"></textarea>								
							</div>
						</div>					

						

						<button type="submit" class="bbtn bbtn--yellow bbtn--big scan__btn-last-1-2">Добавить новость</button>

                                                                                                           
                        <div class="separator"></div>
                        <div class="separator"></div>



						<!--
						<input type="text" id="title" name="title">Название</input>
						<br>
						<input type="text" id="text" name="text">Текст новости</input>
						<br>
						<input type="file" id="image" name="image">Фото<input>
						<br>
						<button type="submit">Добавить</button>
						<br>-->
					</form>
			</div>

			
		</div>

@endsection