							<li class="js_slide">
                                <div class="block-main-article main-article__item">
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
                                        <div class="block-main-article__text">
										{!! $article->text  !!}
                                        </div>
										<div>
										{{ $article->date }}
										</div>
                                        <a href="{{ route('shownews', $article) }}" class="block-main-article__link link">Читать подробнее...</a>
                                    </div>
                                    </a>
                                </div>
                            </li>