@extends('layouts.app')

@section('title', 'Отправить повторное письмо с подтверждением')

@section('content')

        <div class="breadcrumbs">
            <ul>
                <li><a href="{{ route('home') }}">Главная</a></li>
                <li class="active"><a >Отправить повторное письмо с подтверждением</a></li>
            </ul>
            
        </div>

        <div class="page-block">
            <p class="page-block__subtitle center">Отправить повторное письмо с подтверждением</p>
            <div class="page-block__wr-border-gray page-block__ingress">
                <form method="POST" action="{{ route('sendRepeat') }}">
                    {{ csrf_field() }}
                    <div class="row-col">
                        <div class="wrapper m-bottom">
                            <label class="lab-for-input" for="user-login">Email:&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <div class="input input--small input--login">
                                <input id="email" type="email" class="user-input" id="user-login" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                        </div>
                        <button type="submit" class="bbtn bbtn--yellow bbtn--small">Отправить</button>
						@if(Session::has('message'))
							{!!Session::get('message')!!}
						@endif
                    </div>
                </form>
            </div>
            

        </div>

                    
                
@endsection
