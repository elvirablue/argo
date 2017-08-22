@extends('layouts.app')

@section('title', 'Редактирование профиля грузовладельца')
 
@section('content')

<!-- *************************** ПЕРВЫЙ ЭКРАН ***************************************- -->
        <div class="first-screen-page-bg bg-page reg-cargo-owner-bg">
            <div class="first-screen-page">
                <div class="first-screen-page__title">
                    <h1>Редактирование профиля грузовладельца</h1>
                </div>              
            </div>      
        </div>

    <!-- *************************** БЛОК ФОРМЫ ***************************************- -->

        <div class="page-block-bg top-shadow">

            <div class="breadcrumbs">
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li class="active"><a >Грузовладелец {{ Auth::user()->name }}</a></li>
                </ul>
                
            </div>


            <div class="page-block form-reg-customer-wrapper">
                <div class="scan__wrapper">
                    <form method="POST" action="{{ route('updatecustomer', $user->id) }}">
                     {{ csrf_field() }}
                        <p class="scan__head">Редактирование параметров (не забудьте сохранить изменения!)</p>

<!-- *************************** ШАГ 1 ***************************************- -->
                        <div class="scan__block-row">
                            <p class="scan__step-head"><span class="text-blue"></span> Личные данные</p>
                            <div class="row-col">
                                <div class="scan__block-col col-1-2">
                                    <div class="wrapper m-bottom">
                                        <label class="lab-for-input lab-min param-reg" for="user-1-customer">Ваше имя: </label>
                                        <div class="input input--small input--max">
                                            <input type="text" class="user-input" id="user-1-customer" name="user-1-customer" value="@if (null !== $user){{$user->name}}@endif" required>
                                        </div> 
                                        <script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-1-customer").mask("?яяяяяяяяяяяяяяяяяяяя",{placeholder:""});
                                            });
                                        </script>                                                                     
                                    </div>

                                </div>

                                <div class="scan__block-col col-1-2">
                                    <div class="wrapper m-bottom">
                                        <label class="lab-for-input lab-min param-reg" for="user-2-customer">Ваша фамилия: </label>
                                        <div class="input input--small input--max">
                                            <input type="text" class="user-input" id="user-2-customer" name="user-2-customer" value="@if (null !== $user){{$user->lastname}}@endif" required>            
                                        </div>
                                        <script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-2-customer").mask("?яяяяяяяяяяяяяяяяяяяяяяяяяяяяяя",{placeholder:""});
                                            });
                                        </script> 
                                    </div>
                                </div>

                            </div>

                            <div class="row-col">
                                <div class="wrapper m-bottom">
                                    <label class="lab-for-input lab-large param-reg" for="user-3-customer">Ваш город: </label>
                                    <div class="input input--small input--max">
                                        <input type="text" class="user-input" id="user-3-customer" name="user-3-customer" value="@if (null !== $user){{$user->city}}@endif" required>            
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(function($){
                                            $("#user-3-customer").mask("?SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS",{placeholder:""});
                                        });
                                    </script>
                                </div>

                                <div class="wrapper m-bottom">
                                    <label class="lab-for-input lab-large param-reg" for="user-4-customer">Название компании: </label>
                                    <div class="input input--small input--max">
                                        <input type="text" class="user-input" id="user-4-customer" name="user-4-customer" value="@if (null !== $user){{$user->company}}@endif" required>            
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(function($){
                                            $("#user-4-customer").mask("?################################################",{placeholder:""});
                                        });
                                    </script>
                                </div>

                                <div class="wrapper m-bottom">
                                    <label class="lab-for-input lab-large param-reg" for="user-5-customer">Мобильный телефон: </label>
                                    <div class="input input--small input--large">
                                        <input type="text" class="user-input" id="user-5-customer" name="user-5-customer" value="@if (null !== $user){{$user->phone}}@endif" required>            
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(function($){
                                            $("#user-5-customer").mask("+7 (999)-999-99-99",{placeholder:"_"});
                                        });
                                    </script>
                                </div>

                            </div>

                        </div>

                            

<!-- *************************** ШАГ 2 ***************************************- -->
                        <div class="scan__block-row">
                            <p class="scan__step-head"><span class="text-blue"></span>Контакты и реквизиты</p>
                            <div class="row-col">
                                <label class="lab-for-input lab-max lab-title">Директор:</label>
                                <div class="scan__block-col col-1-3">
                                    <div class="wrapper m-bottom">
                                        <label class="lab-for-input lab-min" for="user-11-carrier">Фамилия: </label>
                                        <div class="input input--small input--max">
                                            <input type="text" class="user-input" id="user-11-carrier" name="user-11-carrier" value="@if (null !== $user->entity){{$user->entity->lname}}@endif">          
                                        </div>
                                        <script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-11-carrier").mask("?яяяяяяяяяяяяяяяяяяяяяяяяяяяяяя",{placeholder:""});
                                            });
                                        </script>
                                    </div>
                                </div>

                                <div class="scan__block-col col-1-3">
                                    <div class="wrapper m-bottom">
                                        <label class="lab-for-input lab-min p-left" for="user-12-carrier">Имя: </label>
                                        <div class="input input--small input--max">
                                            <input type="text" class="user-input" id="user-12-carrier" name="user-12-carrier" value="@if (null !== $user->entity){{$user->entity->fname}}@endif">          
                                        </div>
                                        <script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-12-carrier").mask("?яяяяяяяяяяяяяяяяяяяяяяяяяяяяяя",{placeholder:""});
                                            });
                                        </script>
                                    </div>
                                </div>

                                <div class="scan__block-col col-1-3">
                                    <div class="wrapper m-bottom">
                                        <label class="lab-for-input lab-min" for="user-13-carrier">Отчество: </label>
                                        <div class="input input--small input--max">
                                            <input type="text" class="user-input" id="user-13-carrier" name="user-13-carrier" value="@if (null !== $user->entity){{$user->entity->oname}}@endif">            
                                        </div>
                                        <script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-13-carrier").mask("?яяяяяяяяяяяяяяяяяяяяяяяяяяяяяя",{placeholder:""});
                                            });
                                        </script>
                                    </div>
                                </div>                              
                            </div>

                            <div class="row-col">
                                <div class="scan__block-col col-1-2">
                                    <div class="wrapper m-bottom">
                                        <label class="lab-for-input " for="user-14-carrier">Название компании: </label>
                                        <div class="input input--small input--large">
                                            <input type="text" class="user-input" id="user-14-carrier" name="user-14-carrier" value="@if (null !== $user->entity){{$user->entity->company}}@endif">
                                        </div>  
                                        <script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-2-carrier").mask("?###########################################",{placeholder:""});
                                            });
                                        </script>                            
                                    </div>

                                </div>

                                <div class="scan__block-col col-1-2">
                                    <div class="wrapper m-bottom">
                                        <label class="lab-for-input p-left" for="user-15-carrier">Вид деятельности: </label>
                                        <div class="input input--small input--large">
                                             <div class="user-input-bootstrap-wrapper">                      
                                            <select class="user-input-bootstrap" id="user-15-carrier" name="user-15-carrier">
												@foreach ($workingTypes as $type)
													<option>{{$type}}</option>
												@endforeach
                                            </select>
                                            </div>           
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>

                            <hr><br><br>

                            <div class="row-col">
                                
                                <div class="scan__block-col col-1-3">
                                    <div class="wrapper m-bottom">
                                        <label class="lab-for-input lab-min" for="user-16-carrier">ИНН: </label>
                                        <div class="input input--small input--max">
                                            <input type="text" class="user-input" id="user-16-carrier" name="user-16-carrier" value="@if (null !== $user->entity){{$user->entity->inn}}@endif">          
                                        </div>
                                        <script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-16-carrier").mask("999999999999",{placeholder:""});
                                                //Для организации (десятизначный цифровой код)
                                                //Для физического лица (двенадцатизначный цифровой код)
                                            });
                                        </script>
                                    </div>
                                </div>

                                <div class="scan__block-col col-1-3">
                                    <div class="wrapper m-bottom">
                                        <label class="lab-for-input lab-min p-left" for="user-17-carrier">КПП: </label>
                                        <div class="input input--small input--max">
                                            <input type="text" class="user-input" id="user-17-carrier" name="user-17-carrier" value="@if (null !== $user->entity){{$user->entity->kpp}}@endif">          
                                        </div>
                                        <script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-17-carrier").mask("999999999",{placeholder:""});
                                                //Структура КПП представляет собой девятизначный код: NNNNPPXXX
                                            });
                                        </script>
                                    </div>
                                </div>

                                <div class="scan__block-col col-1-3">
                                    <div class="wrapper m-bottom">
                                        <label class="lab-for-input lab-min p-left" for="user-18-carrier">ОГРН: </label>
                                        <div class="input input--small input--max">
                                            <input type="text" class="user-input" id="user-18-carrier" name="user-18-carrier" value="@if (null !== $user->entity){{$user->entity->ogrn}}@endif">          
                                        </div>
                                        <script type="text/javascript">
                                            jQuery(function($){
                                                $("#user-18-carrier").mask("9999999999999",{placeholder:""});
                                                //Структура ОГРН представляет собой 13-значный код: СГГККННХХХХХЧ
                                            });
                                        </script>
                                    </div>
                                </div>                              
                            </div>

                            <div class="row-col">
                                <div class="wrapper m-bottom">
                                    <label class="lab-for-input lab-min" for="user-19-carrier">Р/сч: </label>
                                    <div class="input input--small input--max">
                                        <input type="text" class="user-input" id="user-19-carrier" name="user-19-carrier" value="@if (null !== $user->entity){{$user->entity->rsch}}@endif">          
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(function($){
                                            $("#user-19-carrier").mask("999.99.999.9.9999.9999999",{placeholder:" "});
                                            //20-значное число, имеющее следующую структуру: ААА.ББ.ВВВ.Г.ДДДД.ЕЕЕЕЕЕЕ:
                                        });
                                    </script>
                                </div>

                                <div class="wrapper m-bottom">
                                    <label class="lab-for-input lab-min" for="user-20-carrier">К/сч: </label>
                                    <div class="input input--small input--max">
                                        <input type="text" class="user-input" id="user-20-carrier" name="user-20-carrier" value="@if (null !== $user->entity){{$user->entity->ksch}}@endif">          
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(function($){
                                            $("#user-20-carrier").mask("99999999999999999999",{placeholder:""});
                                            //20-значное число
                                        });
                                    </script>
                                </div>

                                <div class="wrapper m-bottom">
                                    <label class="lab-for-input lab-min" for="user-20-1-carrier">БИК: </label>
                                    <div class="input input--small input--large">
                                        <input type="text" class="user-input" id="user-20-1-carrier" name="user-20-1-carrier" value="@if (null !== $user->entity){{$user->entity->bik}}@endif">          
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(function($){
                                            $("#user-20-1-carrier").mask("999999999",{placeholder:""});
                                            //9-значное число
                                        });
                                    </script>
                                </div>

                                <div class="wrapper m-bottom">
                                    <label class="lab-for-input" for="user-21-carrier">Наименование банка: </label>
                                    <div class="input input--small input--max">
                                        <input type="text" class="user-input" id="user-21-carrier" name="user-21-carrier" value="@if (null !== $user->entity){{$user->entity->bank}}@endif">          
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(function($){
                                            $("#user-21-carrier").mask("?##############################",{placeholder:""});
                                        });
                                    </script>
                                </div>

                                <div class="wrapper m-bottom">
                                    <label class="lab-for-input" for="user-22-carrier">Юридический адрес: </label>
                                    <div class="input input--small input--max">
                                        <input type="text" class="user-input" id="user-22-carrier" name="user-22-carrier" value="@if (null !== $user->entity){{$user->entity->yuraddr}}@endif">          
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(function($){
                                            $("#user-22-carrier").mask("?############################################################",{placeholder:""});
                                        });
                                    </script>
                                </div>

                                <div class="wrapper m-bottom">
                                    <label class="lab-for-input" for="user-23-carrier">Фактический адрес: </label>
                                    <div class="input input--small input--max">
                                        <input type="text" class="user-input" id="user-23-carrier" name="user-23-carrier" value="@if (null !== $user->entity){{$user->entity->factaddr}}@endif">          
                                    </div>
                                    <script type="text/javascript">
                                        jQuery(function($){
                                            $("#user-23-carrier").mask("?############################################################",{placeholder:""});
                                        });
                                    </script>
                                </div>

                            </div>
                        </div>

<!-- *************************** КНОПКИ ***************************************- -->
                        <div class="scan__block-row">
                            <p class="scan__text param-reg" style="padding: 0; text-align: left;">Поля, обязательные для заполнения<br></p>
                            <div class="scan__block-btn">
                                <button type="submit" class="bbtn bbtn--yellow bbtn--big scan__btn-last-1-2">Сохранить изменения</button>
                                <a href="{{URL::previous()}}" class="bbtn bbtn--yellow bbtn--big scan__btn-last-1-2">Отмена</a>
                                
                            </div>                          

                        
                    </form>
                </div>
            </div>
                

            </div>
        </div>

                    
               
@endsection
