@extends('layouts.app')

@section('title', 'Новости и статьи')
  
@section('content')

		<!-- *************************** ПЕРВЫЙ ЭКРАН ***************************************- -->
		<div class="first-screen-page-bg bg-page news-bg">
			<div class="first-screen-page">
				<div class="first-screen-page__title">
					<h1>СТАТЬИ И НОВОСТИ</h1>
				</div>				
			</div>		
		</div>

	<!-- *************************** БЛОК НОВОСТЕЙ ***************************************- -->

		<div class="page-block-bg top-shadow">

			<div class="breadcrumbs">
				<ul>
					<li><a href="{{ route('home') }}">Главная</a></li>
					<li class="{{ route('news') }}"><a >Статьи и новости</a></li>
				</ul>
				
			</div>
			
			@if (Auth::check())
				@if (Auth::user()->role_id == 1)
				<div class="page-block center">
					<a href="{{ route('addnews') }}" class="bbtn bbtn--yellow bbtn--small">
						Добавить новость</a>
				</div>
				@endif
			@endif
				
			<div class="page-block news">
				<div class="fixed-article__bg"></div>
					@each('news.list.item', $news, 'article')
				</div>
			</div>
		
		
		<div class="page-block-bg page-block-bg--article center">
			
			{{ $news->links() }}
			<div class="separator"></div>
			<div class="separator"></div>
			<div class="separator"></div>
						
		</div>
		
@endsection