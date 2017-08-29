@extends('layouts.app')

@section('title', 'Новость')
  
@section('content')


		<!-- *************************** БЛОК НОВОСТИ ***************************************- -->		

		<div class="page-block-bg top-shadow new-item">

			<div class="breadcrumbs">
				<ul>
					<li><a href="{{ route('home') }}">Главная</a></li>
					<li><a href="{{ route('news') }}">Статьи и новости</a></li>
					<li class="active"><a>{{ $article->name }}</a></li>
				</ul>				
			</div>

			<div class="page-block">
				
				<h3 class="page-block__head yellow-line">{{ $article->name }}</h3>
			
				<div style="position: relative; z-index: 100;">
					<div class="fixed-article__bg new-top"></div>
					<div class="fixed-article__bg new-bottom"></div>
					<div class="page-block__wr-border-gray new-item__content">
						<p class="new-item__date">{{ $article->created_at }}</p>
						<div class="new-item__img" style="background-image: url(
						@if ($article->photos->first->photo)
							{{UploadImage::load('image').$article->photos->first->photo->photo}}
						@else
							img/nophoto.png
						@endif
						);"></div>
						<div class="text-content">
						{!! $article->text !!}
							
						</div>
						<div>
						{{ $article->date }}
						</div>

						<div class="turn-pages-wrapper">

							<a href="#" class="turn-pages turn-pages--prev">
								<p>Предыдущая статья</p>
								<span class="arrow arrow--prev">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 451.847 451.847" style="enable-background:new 0 0 451.847 451.847;" xml:space="preserve"> 
						               	<g><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0   c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744   c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z" fill="#e5e5e5"/></path></g></svg>	
								</span>
								<h4>Заголовок предыдущей статьи</h4>
							</a>
							<a href="#" class="turn-pages turn-pages--next">				<p>Следующая статья</p>	
								<h4>Заголовок следущей статьи следущей статьи следущей статьи следущей статьи следущей статьи следущей статьи следущей статьи</h4>				
								<span class="arrow arrow--next">
						               	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 451.847 451.847" style="enable-background:new 0 0 451.847 451.847;" xml:space="preserve">
						               	<g><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744   L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284   c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z" fill="#e5e5e5"/></path></g></svg>
						           	</span>
						           </a>
						</div>

					</div>
				</div>
			

			</div>
		<div class="separator"></div>
		</div>

			<!--<div class="page-block-bg page-block-bg--article">

		<div class="page-block anons-wrapper">
				<p class="page-block__subtitle">Похожие статьи:</p>
				

			</div>
		</div>	-->

			<div class="separator"></div>
			<div class="separator"></div>
			
		

@endsection