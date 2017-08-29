				<div class="block-main-article news__item">
					<a href="{{ route('shownews', $article) }}">
					<div class="block-main-article__img" style="background-image: url(
					@if ($article->photos->first->photo)
						{{UploadImage::load('image').$article->photos->first->photo->photo}}
					@else
						img/nophoto.png
					@endif
					)"></div>
					<div class="block-main-article__content">
						<h5>{{ $article->name }}</h5>
						<div>
							{{ $article->date }}
						</div>
						
						<a href="{{ route('shownews', $article) }}" class="block-main-article__link link">Читать подробнее...</a>
						@if (Auth::check())
							@if (Auth::user()->role_id == 1)
								<a href="{{ route('deletenews', $article->id) }}" onClick="return window.confirm('Вы уверены, что хотите удалить эту новость?');">
									<span class="glyphicon glyphicon-trash"></span>
								</a>
							@endif
						@endif
					</div>
					</a>
				</div>