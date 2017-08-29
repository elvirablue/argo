
					<div class="fixed-article">
                        <div class="fixed-article__img" style="background-image: url(
						@if ($article->photos->first->photo)
							{{UploadImage::load('image').$article->photos->first->photo->photo}}
						@else
							img/nophoto.png
						@endif
						)"></div>
                        <div class="fixed-article__content">
                            <h5>{{ $article->name }}</h5>
                            <div class="fixed-article__text">
							{!! $article->text !!}
                            </div>
							<div>
								{{ $article->date }}
							</div>
                            <a href="{{ route('shownews', $article) }}" class="fixed-article__link link">Читать подробнее...</a>
                        </div>
                    </div>
                    