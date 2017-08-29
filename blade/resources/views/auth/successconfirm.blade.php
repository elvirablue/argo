@extends('layouts.app')

@section('title', 'Успешно')

@section('content')

        <div class="breadcrumbs">
            <ul>
                <li><a href="{{ route('home') }}">Главная</a></li>
            </ul>
            
        </div>

        <div class="page-block">
            <p class="page-block__subtitle center">E-mail подтвержден</p>
			<p>Аккаунт активирован, теперь Вы можете зайти в систему под своим логином</p>

        </div>

                    
                
@endsection
