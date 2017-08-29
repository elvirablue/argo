@extends('layouts.app')

@section('content')
 <div class="breadcrumbs">
            <ul>
                <li><a href="{{ route('home') }}">Главная</a></li>
                <li class="active"><a >Восстановление пароля</a></li>
            </ul>            
        </div>


         <div class="page-block">
            <p class="page-block__subtitle center">Введите электронную почту, которая использовалась в качестве логина. <br> Мы вышлем Вам письмо с новым паролем.</p>

            @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
            @endif
            <div class="page-block__wr-border-gray page-block__ingress">
                 <form method="POST" action="/password/email">
                        {{ csrf_field() }}
                    <div class="row-col">
                        
                        <div class="wrapper m-bottom{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="lab-for-input" for="user-login">E-mail:&nbsp;&nbsp;&nbsp;&nbsp; </label>
                            <div class="input input--small input--login">
                                <input id="email" type="email" class="user-input" id="user-login" name="email" value="{{ $email or old('email') }}" required autofocus>
                            </div>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                           
                        </div>

                       

                        
                        <button type="submit" class="bbtn bbtn--yellow bbtn--small">Восстановить пароль</button>
                        
                    </div>
                </form>
            </div>

            <a href="{{ route('register') }}" class="page-block__subtitle link center">Регистрация для новых пользователей</a>
            

        </div>





@endsection
