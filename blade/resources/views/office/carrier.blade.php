@extends('layouts.app')
  
@section('content')

<!-- *************************** ПЕРВЫЙ ЭКРАН ***************************************- -->
        <div class="first-screen-page-bg bg-page-small private-office-carrier-bg">
            <div class="first-screen-page">
                <div class="first-screen-page__title title-left">
                    <h1>Личный кабинет перевозчика</h1>
                </div>              
            </div>      
        </div>

    <!-- *************************** БЛОК  ***************************************- -->

        <div class="page-block-bg">

            <div class="breadcrumbs">
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li class="active"><a >Личный кабинет перевозчика</a></li>
                </ul>
                
            </div>

            <div class="page-block private-office">
                <div style="position: relative; z-index: 100;">                 
                    <div class="fixed-article__bg bg-private-office-bottom"></div>

                    <div class="page-block__wr-border-gray ">
                        <h4>Контактная информация</h4>
                        <div class="row-col">
                            <div class="col-2-3 col-private-office office">
                                <div class="in-block">
                                    <p class="wrapper">
                                        <span class="span-private-office">Имя: </span>
                                        <span class="span-private-office blue">{{ $user->name }}</span>
                                    </p>

                                    <p class="wrapper">
                                        <span class="span-private-office">Фамилия: </span>
                                        <span class="span-private-office blue">{{ $user->lastname }}</span>
                                    </p>
                                
                                    <p class="wrapper">
                                        <span class="span-private-office">Компания: </span>
                                        <span class="span-private-office blue">{{ $user->company }}</span>
                                    </p>

                                    <p class="wrapper">
                                        <span class="span-private-office">E-mail: </span>
                                        <span class="span-private-office blue">{{ $user->email }}</span>
                                    </p>

                                    <p class="wrapper">
                                        <span class="span-private-office">Телефон: </span>
                                        <span class="span-private-office blue">{{ $user->phone }}</span>
                                    </p>
                                </div>
                                <a href="#" class="bbtn bbtn--yellow bbtn--small private-office__btn">Редактировать данные</a>
                                                                
                            </div>

                            <div class="col-1-3 col-private-office">
                                <!-- show avatar -->
                                <!--
                                <div class="private-office__avatar" style="background-image: url(img/nophoto.png);"></div>
                                
                                <div class="private-office__req">Р РµРєРІРёР·РёС‚С‹ <a href="#" class="link">(скачать <span class="glyphicon glyphicon-save"></span>)</a></div>
                                -->
                            

                                <!-- markup -->
                                <!-- note: your server code `avatar_upload.php` will receive `$_FILES['avatar']` on form submission -->
                                <!-- load avatar -->
                                <div id="kv-avatar-errors-2" class="center-block" style="width:300px;display:none"></div>
                                <form class="form form-vertical" action="/avatar_upload.php" method="post" enctype="multipart/form-data">                           
                                    <div class="kv-avatar center-block text-center" style="width:200px">
                                        <input id="avatar-2" name="avatar-2" type="file" class="file-loading" required>
                                    
                                    <button type="submit" class="private-office__load">Загрузить</button>
                                    </div>                          
                                </form>

                                <!-- the fileinput plugin initialization -->
                                <script>
                                
                                $("#avatar-2").fileinput({
                                    overwriteInitial: true,
                                    maxFileSize: 1500,
                                    showClose: false,
                                    showCaption: false,
                                    showBrowse: false,
                                    browseOnZoneClick: true,
                                    removeLabel: '',
                                    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
                                    removeTitle: 'Удалить аватар',
                                    elErrorContainer: '#kv-avatar-errors-2',
                                    msgErrorClass: 'alert alert-block alert-danger',
                                    defaultPreviewContent: '<img src="img/nophoto.png" alt="Ваш аватар" style="width:200px"><h6 class="text-muted">Выбрать</h6>',
                                    
                                    allowedFileExtensions: ["jpg", "png", "gif"]
                                });
                                </script>
                                <!-- end load avatar -->
                                
                                <!--
                                <a href="#" class="private-office__out">Выйти</a>
                                <div class="private-office__req">Реквизиты <a href="#" class="link">(скачать <span class="glyphicon glyphicon-save"></span>)</a></div>
                                -->
                                <!-- class  st-tested - green border and text
                                            st-notested - blue
                                            st-agent - yellow
                                -->
                                <div class="private-office__status st-tested">Проверенный перевозчик <i class="help">?</i></div>
                            </div>
                            
                        </div>
                    </div>

                </div>




            </div>

<!-- *************************** БЛОК Доступные Заказы в таблицу ***************************************- -->
            <div class="page-block">
                <h2 class="page-block__head yellow-line">Доступные Заказы</h2>

                <div class="block-filter">
                    <!--**************-->
                    <div class="block-filter__wrapper">
                        <label class="lab-filter" for="filter-1">Дата погрузки: </label>
                        <div class="input filter filter--orders">
                            <div class="user-input-bootstrap-wrapper">                      
                                <select class="user-input-bootstrap" id="filter-1" name="filter-1">
                                    <option>Нажмите, чтобы выбрать</option> 
                                    <option>По возрастанию</option>
                                    <option>По убыванию</option>                                                
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--**************-->
                    
                    <div class="block-filter__wrapper">
                        <label class="lab-filter" for="filter-2">Откуда: </label>
                        <div class="input filter filter--orders">
                            <div class="user-input-bootstrap-wrapper">                      
                                <select class="user-input-bootstrap" id="filter-2" name="filter-2">
                                    <option>Нажмите, чтобы выбрать</option> 
                                    <option>Подгружаемый параметр</option>
                                    <option>Подгружаемый параметр</option>                                          
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--**************-->
                    
                    <div class="block-filter__wrapper">
                        <label class="lab-filter" for="filter-3">Куда: </label>
                        <div class="input filter filter--orders">
                            <div class="user-input-bootstrap-wrapper">                      
                                <select class="user-input-bootstrap" id="filter-3" name="filter-3">
                                    <option>Нажмите, чтобы выбрать</option> 
                                    <option>Подгружаемый параметр</option>
                                    <option>Подгружаемый параметр</option>                                          
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--**************-->

                    <div class="block-filter__wrapper">
                        <label class="lab-filter" for="filter-4">Расстояние: </label>
                        <div class="input filter filter--orders">
                            <div class="user-input-bootstrap-wrapper">                      
                                <select class="user-input-bootstrap" id="filter-4" name="filter-4">
                                    <option>Нажмите, чтобы выбрать</option> 
                                    <option>По возрастанию</option>
                                    <option>По убыванию</option>                                            
                                </select>
                            </div>
                        </div>
                    </div>                  
                    <!--**************-->

                    <div class="block-filter__wrapper">
                        <label class="lab-filter" for="filter-5">Статус заказчика: </label>
                        <div class="input filter filter--orders">
                            <div class="user-input-bootstrap-wrapper">                      
                                <select class="user-input-bootstrap" id="filter-5" name="filter-5">
                                    <option>Нажмите, чтобы выбрать</option> 
                                    <option>Аккредитован</option>
                                    <option>Первичная аккредитация</option> 
                                    <option>Не аккредитован</option>                                        
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--**************-->

                    <div class="block-filter__wrapper ">
                        <label class="lab-filter" for="filter-6">Тип груза: </label>
                        <div class="input filter filter--orders">
                            <div class="user-input-bootstrap-wrapper">                      
                                <select class="user-input-bootstrap" id="filter-6" name="filter-6">
                                    <option>Нажмите, чтобы выбрать</option> 
                                    <option>С/х животные и птица (живок)</option>
                                                                            
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--**************-->
                    
                    <div class="block-filter__wrapper">
                        <label class="lab-filter" for="filter-7">Подтип груза: </label>
                        <div class="input filter filter--orders">
                            <div class="user-input-bootstrap-wrapper">                      
                                <select class="user-input-bootstrap" id="filter-7" name="filter-7">
                                    <option>Нажмите, чтобы выбрать</option> 
                                    <option>Козы</option>
                                    <option>Кролики</option>
                                    <option>КРС</option>
                                    <option>Лошади</option>
                                    <option>Овцы</option>
                                    <option>Птицы</option>
                                    <option>Пчелы</option>
                                    <option>Рыбопосадочный материал</option>
                                    <option>Свиньи</option>                                         
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--**************-->

                    <div class="block-filter__wrapper">
                        <a href="#" class="bbtn bbtn--yellow bbtn--small block-filter__btn">Применить фильтры</a>

                    </div>
                </div>  

                

                <div class="page-block__wr-border-gray private-office__table-wr">
                    <table class="private-office__table">
                        <tbody>
                            <tr>
                                <th>Дата погрузки</th>
                                <th>Откуда</th>
                                <th>Куда</th>
                                <th>Расстояние</th>
                                <th>Тип груза</th>
                                <th>Подтип груза</th>
                                <th>Статус заказчика</th>
                            </tr>

                            <tr>
                                <td>31.07.2017 10:49:59</td>
                                <td>c. Тербуны, Липецкая обл, Тербунский р-н</td>
                                <td>Склад, Кашино, Московская обл, Волоколамский р-н</td>
                                <td>600</td>
                                <td>Культура</td>
                                <td>Ячмень</td>
                                <td>Не аккредитован</td>
                            </tr>

                            <tr>
                                <td>31.07.2017 10:49:59</td>
                                <td>c. Тербуны, Липецкая обл, Тербунский р-н</td>
                                <td>Склад, Кашино, Московская обл, Волоколамский р-н</td>
                                <td>600</td>
                                <td>Культура</td>
                                <td>Ячмень</td>
                                <td>Не аккредитован</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                    
        </div>
    

        <div class="page-block-bg page-block-bg--article">  
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
        </div>
    
    </div>

                    
               
@endsection
