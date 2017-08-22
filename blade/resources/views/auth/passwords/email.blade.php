@extends('layouts.app')

@section('content')
 <div class="breadcrumbs">
            <ul>
                <li><a href="index.html">Главная</a></li>
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
                 <form method="POST" action="{{ route('password.email') }}">
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




<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
