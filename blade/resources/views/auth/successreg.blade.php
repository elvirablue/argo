@extends('layouts.app')

@section('title', 'Успешно')

@section('content')

        <div class="breadcrumbs">
            <ul>
                <li><a href="{{ route('home') }}">Главная</a></li>
            </ul>
            
        </div>

        <div class="page-block">
            <p class="page-block__subtitle center">Регистрация пройдена успешно</p>
			<p>На указанный e-mail Вам выслано письмо. Перейдите по ссылке для подтверждения адреса почты и активации аккаунта в системе.</p>

        </div>

                    
                
@endsection
