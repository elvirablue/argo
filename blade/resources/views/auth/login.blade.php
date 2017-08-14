@extends('layouts.app')

@section('content')

        <div class="breadcrumbs">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li class="active"><a >Вход в личный кабинет</a></li>
            </ul>
            
        </div>

        <div class="page-block">
            <p class="page-block__subtitle center">Вход в систему для зарегистрированных пользоватей</p>
            <div class="page-block__wr-border-gray page-block__ingress">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="row-col">
                        <div class="wrapper m-bottom">
                            <label class="lab-for-input" for="user-login">Логин:&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <div class="input input--small input--login">
                                <input id="email" type="email" class="user-input" id="user-login" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                        </div>
                        <div class="wrapper m-bottom">
                            <label class="lab-for-input" for="user-password">Пароль: &nbsp;</label>
                            <div class="input input--small input--login">
                                <input type="password" class="user-input" id="password" name="password" required>
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="bbtn bbtn--yellow bbtn--small">Вход</button>
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Забыли пароль?
                        </a>
                    </div>
                </form>
            </div>

            <a href="{{ route('register') }}" class="page-block__subtitle link center">Регистрация для новых пользователей</a>
            

        </div>

                    
                
@endsection
