@extends('layouts.app')

@section('content')
        <div class="breadcrumbs">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li class="active"><a >Регистрация в системе</a></li>
            </ul>
            
        </div>

        <div class="page-block">
            <p class="page-block__subtitle center">Выберите свой статус, под которым хотите пройти регистрацию в системе:</p>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <a href="{{ route('registercustomer') }}" class="registry-status" id="status-card">
                    грузовладелец
                </a>            
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <a href="{{ route('registercarrier') }}" class="registry-status" id="status-car">
                    Перевозчик
                </a>            
            </div>
            
            

        </div>

        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
        <div class="separator"></div>
@endsection
