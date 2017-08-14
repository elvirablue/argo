@extends('layouts.app')

@section('content')
    <!-- *************************** ПЕРВЫЙ ЭКРАН ***************************************- -->
        <div class="first-screen-bg">
            <div class="first-screen">
                <h1>БЕЗОПАСНЫЙ ПОИСК&nbsp;ГРУЗОВ <br>И ПЕРЕВОЗЧИКОВ ДЛЯ&nbsp;АГРОСЕКТОРА</h1>
                @if (Auth::guest())
                    <a href="{{ route('login') }}" class="first-screen__bbtn bbtn bbtn--yellow bbtn--big bbtn--shadow">
                        <span>Регистрация и вход</span>
                    </a>
                @else
                        
                @endif    
            </div>      
        </div>

    <!-- *************************** БЛОК ПРЕИМУЩЕСТВ ***************************************- -->

        <div class="page-block">
            <h2 class="page-block__head yellow-line">Система AgroCargo - это: </h2>         
        </div>

        <div class="main-benefit">
            <div class="block-benefit">
                <div class="block-benefit__img" style="background-image: url(img/benefit-1.png)"></div>
                <div class="block-benefit__text">
                    <b>Гарантия фактичес&shy;кого на&shy;ли&shy;чия груза</b> и платеже&shy;способ&shy;ности аккре&shy;дито&shy;ван&shy;ных грузо&shy;владель&shy;цев
                </div>
            </div>

            <div class="block-benefit">
                <div class="block-benefit__img" style="background-image: url(img/benefit-2.png)"></div>
                <div class="block-benefit__text">
                    <b>Гарантия фактичес&shy;кого нали&shy;чия груза</b> и платеже&shy;способ&shy;ности аккре&shy;дито&shy;ван&shy;ных грузо&shy;владель&shy;цев
                </div>
            </div>

            <div class="block-benefit">
                <div class="block-benefit__img" style="background-image: url(img/benefit-3.png)"></div>
                <div class="block-benefit__text">
                    <b>Гарантия фактичес&shy;кого нали&shy;чия груза</b> и платеже&shy;способ&shy;ности аккре&shy;дито&shy;ван&shy;ных грузо&shy;владель&shy;цев
                </div>
            </div>

            <div class="block-benefit">
                <div class="block-benefit__img" style="background-image: url(img/benefit-4.png)"></div>
                <div class="block-benefit__text">
                    <b>Гарантия фактичес&shy;кого нали&shy;чия груза</b> и платеже&shy;способ&shy;ности аккре&shy;дито&shy;ван&shy;ных грузо&shy;владель&shy;цев
                </div>
            </div>
        </div>

         @if (Auth::guest())
            <div class="page-block">
                <button type="button" class="page-block__bbtn bbtn bbtn--yellow bbtn--big">
                        <span>Зарегистрироваться и получить доступ</span>
                </button>           
            </div>
        @else
                        
        @endif 



        <div class="separator"></div>
    <!-- *************************** БЛОКИ ПОИСКА ***************************************- -->
        <div class="main-call-form">
            <div class="block-call-form yellow">
                <a href="#">
                <p class="block-call-form__title">ПОИСК ГРУЗОВ</p>
                <p class="block-call-form__subtitle">Посмотрите все открытые заявки на перевозку грузов</p>
                <button class="js-btn-car block-call-form__bbtn bbtn bbtn--gray">
                    Добавить транспорт (бесплатно) 
                </button>               
                <div class="block-call-form__img" style="background-image: url(img/pic-1.png)"></div>
                </a>
            </div>

            <div class="block-call-form blue">
                <a href="#">
                <p class="block-call-form__title">ПРОВЕРКА ПАРТНЕРА</p>
                <p class="block-call-form__subtitle">Проверяйте порядочность перевозчиков или заказчиков</p>
                <button class="block-call-form__bbtn bbtn bbtn--gray">
                    Проверить перевозчика или заказчика 
                </button>
                <div class="block-call-form__img" style="background-image: url(img/pic-2.png)"></div>
                </a>
            </div>

            <div class="block-call-form gray">
                <a href="#">
                <p class="block-call-form__title">ПОИСК ТРАНСПОРТА</p>
                <p class="block-call-form__subtitle">Оставляйте заявку на перевозку&nbsp;груза </p>
                <button class="block-call-form__bbtn bbtn bbtn--gray js-btn-cargo">
                    Добавить груз (бесплатно) 
                </button>
                <div class="block-call-form__img" style="background-image: url(img/pic-3.png)"></div>
                </a>
            </div>
            
        </div>

    <!-- ***************************ВСПЛЫВАЮЩИЙ БЛОК ПОИСКА ГРУЗОВ ***************************************- -->
    <!-- ***************************ВСПЛЫВАЮЩИЙ БЛОК ПОИСКА ГРУЗОВ ***************************************- -->
    <!-- ***************************ВСПЛЫВАЮЩИЙ БЛОК ПОИСКА ГРУЗОВ ***************************************- -->
        <div class="page-block scan scan-car">
            <h2 class="page-block__head yellow-line">ПОИСК <span class="text-blue">грузов</span></h2>
            <p class="page-block__info">Инструкция по размещению заявки на перевозку находится в разделе <a href="#">помощь</a></p>

            <div class="scan__wrapper">
            <form action="" method="">
                <p class="scan__head">Заполните форму для добавления вашего транспорта (шаг <span class="js-step-num">1</span> из 2)</p>

                <div class="scan__block-row">
                    <label for="user-auto-cargo">Ваш транспорт: </label>
                    <div class="input input--small scan__input-auto-cargo">
                        <div class="user-input-bootstrap-wrapper">                      
                        <select class="user-input-bootstrap" id="user-auto-car" name="user-auto-car">
                            <option>1-Митсубиси Кантер, 3 т</option>
                            <option>2-Митсубиси Кантер, 3 т</option>
                            <option>3-Митсубиси Кантер, 3 т</option>                            
                        </select>
                        </div>                                                              
                    </div>                                  

                    <p class="scan__text">Вы можете выбрать несколько видов автотранспорта</p>
                </div>


                <div class="scan__block-row scan-car__step1">
                    <p class="scan__step-head"><span class="text-blue">Шаг 1</span> Выберите место и дату погрузки и разгрузки</p>
                    <div class="scan__block-col col-1-3">
                        <div class="input input--big input--date">
                            <input type="text" class="datetimepicker6 user-input" id="user-date-begin-cargo" name="user-date-begin-cargo">
                            <i>Дата погрузки</i>
                        </div>
                        <div class="input input--big input--date">
                            <input type="text" class="datetimepicker6 user-input" id="user-date-end-cargo" name="user-date-end-cargo">
                            <i>Дата разгрузки</i>
                        </div>
                    </div>

                    <div class="scan__block-col col-1-3">
                        <div class="input input--big input--wh">
                            <div class="user-input-bootstrap-wrapper-big">          
                            <select class="user-input-bootstrap" id="user-whence-cargo" name="user-whence-cargo">                               
                                <option>1-----**********</option>
                                <option>2--------------</option>
                                <option>3-------</option>                           
                            </select>
                            </div>
                            <i>Откуда</i>                       
                        </div>
                        <div class="input input--big input--km">
                            <input type="number" class="user-input required" id="user-whence-plus-cargo" name="user-whence-plus-cargo">
                            <i>+ км</i>
                        </div>
                    </div>

                    <div class="scan__block-col col-1-3">
                        <div class="input input--big input--wh">
                            <div class="user-input-bootstrap-wrapper-big">                      
                            <select class="user-input-bootstrap" id="user-where-cargo" name="user-where-cargo">                             
                                <option>1--------**********--</option>
                                <option>2--------------</option>
                                <option>3--****11111111111111111111111******  **** ****** ******-----</option>                          
                            </select>
                            </div>
                            <i>Куда</i>                     
                        </div>
                        <div class="input input--big input--km">
                            <input type="number" class="user-input required" id="user-where-plus-cargo" name="user-where-plus-cargo">
                            <i>+ км</i>
                        </div>
                    </div>

                    <div class="scan__block-col col-1-3">                       
                        <div class="ch_wrapper ">
                            <input id="check1" type="checkbox" name="check" value="check1">
                            <label for="check1">Длина маршрута</label>
                        </div>                      
                        
                    </div>

                    <div class="scan__block-col col-1-3">
                        <div class="input input--big input--distance">
                            <input type="number" class="user-input required" id="user-min-distance-cargo" name="user-min-distance-cargo">
                            <i>Минимальное расстояние, +км</i>                      
                        </div>
                    </div>

                    <div class="scan__block-col col-1-3">
                        <div class="input input--big input--distance">
                            <input type="number" class="user-input required" id="user-max-distance-cargo" name="user-max-distance-cargo">
                            <i>Максимальное расстояние, +км</i>                     
                        </div>
                    </div>
                    

                    <div class="scan__block-btn">
                        <button type="button" class="js-btn-step1 bbtn bbtn--yellow bbtn--big scan__btn">Продолжить</button>
                    </div>
                    
                </div>
            <!-- *********** ШАГ 2 ********** ВСПЛЫВАЮЩИЙ БЛОК ПОИСКА ГРУЗОВ ***************************************- -->
                <div class="scan__block-row scan-car__step2">
                    <p class="scan__step-head"><span class="text-blue">Шаг 2</span> Способ оплаты и поиск доступных заявок на перевозку</p>

                    <div class="scan__block-col col-1-3">
                        <div class="scan__block-border">
                            <p class="scan__block-border-title">Выберите статус заказчика</p>
                            <p class="scan__text">Проверку службой безопастности проходят только аккредитованные заказчики. <br>С остальными Вы работаете на свой страх и риск.</p>                     

                            <div class="ch_wrapper ">
                                <input id="check21" type="checkbox" name="check" value="check21">
                                <label for="check21">Аккредитован</label>
                            </div>
                            
                            <div class="ch_wrapper ">
                                <input id="check23" type="checkbox" name="check" value="check23">
                                <label for="check23">Прошел первичную аккредитацию</label>
                            </div>

                            <div class="ch_wrapper ">
                                <input id="check22" type="checkbox" name="check" value="check22">
                                <label for="check22">Не аккредитован</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="scan__block-col col-1-3">
                        <div class="ch_wrapper ">
                            <input id="check24" type="checkbox" name="check" value="check24">
                            <label for="check24">Предоплата</label>
                        </div>
                        <div class="ch_wrapper ">
                            <input id="check25" type="checkbox" name="check" value="check25">
                            <label for="check25">Стаки</label>
                        </div>
                        <div class="ch_wrapper ">
                            <input id="check26" type="checkbox" name="check" value="check26">
                            <label for="check26">Без ставки</label>
                        </div>
                    </div>


                    <div class="scan__block-col col-1-3">                       
                        <div class="ch_wrapper ">
                            <input id="radio21" type="radio" name="radio" value="radio21">
                            <label for="radio21">За наличную оплату</label>
                        </div>
                        <div class="ch_wrapper ">
                            <input id="radio22" type="radio" name="radio" value="radio22">
                            <label for="radio22">Оплата б/н с НДС</label>
                        </div>
                        <div class="ch_wrapper ">
                            <input id="radio23" type="radio" name="radio" value="radio23">
                            <label for="radio23">Оплата б/н без НДС</label>
                        </div>  

                    </div>

                    <div class="scan__block-col-absolut">
                        <div class="input input--small output-price-distance">
                            <input type="text" class="user-input" id="output-price-distance-cargo" name="output-price-distance-cargo" disabled>                                         
                        </div>
                        <div class="input input--small output-price-distance-e">
                            <input type="text" class="user-input" id="output-price-distance-e-cargo" name="output-price-distance-e-cargo" disabled value="руб./км">                                         
                        </div>
                    </div>

                    <div class="scan__block-btn">
                        <button type="submit" class="bbtn bbtn--yellow bbtn--big scan__btn-last">Найти грузы</button>
                    </div>

                    <p class="scan__text" >Поиск грузов осуществляется по параметрам, которые Вы указали в личном кабинете. Если Вы измените их (например, увеличите объем или грузоподъемность), то в поиске будут другие грузы<br></p>

                </div>
            </form> 
            </div>
        </div>

    <!-- ***************************ВСПЛЫВАЮЩИЙ БЛОК ПОИСКА ТРАНСПОРТА ***************************************- -->
    <!-- ***************************ВСПЛЫВАЮЩИЙ БЛОК ПОИСКА ТРАНСПОРТА ***************************************- -->
    <!-- ***************************ВСПЛЫВАЮЩИЙ БЛОК ПОИСКА ТРАНСПОРТА ***************************************- -->
        <div class="page-block scan scan-cargo">
            <h2 class="page-block__head yellow-line">ПОИСК <span class="text-blue">транспорта</span></h2>
            <p class="page-block__info">Инструкция по размещению заявки на перевозку находится в разделе <a href="#">помощь</a></p>

            <div class="scan__wrapper">
            <form action="" method="">
                <p class="scan__head">Заполните форму для добавления вашего груза (шаг <span class="js-step-num">1</span> из 4)</p>

                <div class="scan__block-row scan-cargo__step1">
                    <p class="scan__step-head"><span class="text-blue">Шаг 1</span> Выберите место и дату погрузки и разгрузки</p>
                    <div class="scan__block-col col-1-3">
                        <div class="input input--big input--date">
                            <input type="text" class="datetimepicker6 user-input" id="user-date-begin-car" name="user-date-begin-car">
                            <i>Дата погрузки</i>
                        </div>
                        <div class="input input--big input--date">
                            <input type="text" class="datetimepicker6 user-input" id="user-date-end-car" name="user-date-end-car">
                            <i>Дата разгрузки</i>
                        </div>
                    </div>

                    <div class="scan__block-col col-1-3">
                        <div class="input input--big input--wh">
                            <div class="user-input-bootstrap-wrapper-big">          
                            <select class="user-input-bootstrap" id="user-whence-car" name="user-whence-car">                               
                                <option>1-----**********</option>
                                <option>2--------------</option>
                                <option>3-------</option>                           
                            </select>
                            </div>
                            <i>Откуда</i>                       
                        </div>
                        <div class="input input--big input--km">
                            <input type="number" class="user-input required" id="user-whence-plus-car" name="user-whence-plus-car">
                            <i>+ км</i>
                        </div>
                    </div>

                    <div class="scan__block-col col-1-3">
                        <div class="input input--big input--wh">
                            <div class="user-input-bootstrap-wrapper-big">                      
                            <select class="user-input-bootstrap" id="user-where-car" name="user-where-car">                             
                                <option>1--------**********--</option>
                                <option>2--------------</option>
                                <option>3--****11111111111111111111111******  **** ****** ******-----</option>                          
                            </select>
                            </div>
                            <i>Куда</i>                     
                        </div>
                        <div class="input input--big input--km">
                            <input type="number" class="user-input required" id="user-where-plus-car" name="user-where-plus-car">
                            <i>+ км</i>
                        </div>
                    </div>

                    <div class="scan__block-col col-1-3">                       
                        <div class="ch_wrapper ">
                            <input id="check2" type="checkbox" name="check" value="check2">
                            <label for="check2">Длина маршрута</label>
                        </div>                      
                        
                    </div>

                    <div class="scan__block-col col-1-3">
                        <div class="input input--big input--distance">
                            <input type="number" class="user-input" id="user-distance-car" name="user-distance-car">
                            <i>Расстояние, км</i>                       
                        </div>
                    </div>

                    <div class="scan__block-col col-1-3">
                        <a href="#" class="scan__link">Расчет расстояний</a>
                    </div>
                    

                    <div class="scan__block-btn">
                        <button type="button" class="js-btn-step1 bbtn bbtn--yellow bbtn--big scan__btn">Продолжить</button>
                    </div>
                    
                </div>

            <!-- *********** ШАГ 2 ********** ВСПЛЫВАЮЩИЙ БЛОК ПОИСКА ТРАНСПОРТА ***************************************- -->
                <div class="scan__block-row scan-cargo__step2">
                    <p class="scan__step-head"><span class="text-blue">Шаг 2</span> Укажите тип и параметры груза</p>

                    <div class="scan__block-col col-1-3">
                        <div class="input input--big input--type">
                            <div class="user-input-bootstrap-wrapper-big">                      
                            <select class="user-input-bootstrap" id="user-type-car" name="user-type-car">
                                <option>Нажмите, чтобы выбрать</option>
                                <option>Грибы</option>
                                <option>Декоративные культуры</option>
                                <option>Зерно, зернобобовые</option>
                                <option>Комбикорма, зерносмеси</option>
                                <option>Корма экструдированные</option>
                                <option>Кормовые добавки</option>
                                <option>Кормовые дрожжи</option>
                                <option>Кормовые корнеплоды</option>
                                <option>Масличные культуры</option>
                                <option>Мёд, продукция пчеловодства</option>
                                <option>Мука кровяная</option>
                                <option>Мука мясная</option>
                                <option>Мука мясокостная</option>
                                <option>Мука перьевая</option>
                                <option>Мука рыбная</option>
                                <option>Мука травяная</option>
                                <option>Некондиционные продукты питания на корм животным</option>
                                <option>Овощи</option>
                                <option>Орехи</option>
                                <option>Отруби</option>
                                <option>Прочие корма</option>
                                <option>Семена, посевной материал</option>
                                <option>Сено, солома, силос</option>
                                <option>Соль кормовая</option>  
                                <option selected>С/х животные и птица (живок)</option>                  
                                <option>Технические культуры</option>
                                <option>Техническое сырье</option>
                                <option>Фрукты. Ягоды</option>
                                <option>Яйцо</option>
                                <option>ДРУГОЙ</option> 
                                                        
                            </select>
                            </div>
                            <i>Выберите тип груза</i>                       
                        </div>

                        <div class="input input--big input--type">
                            <div class="user-input-bootstrap-wrapper-big">                      
                            <select class="user-input-bootstrap" id="user-subtype-car"  name="user-subtype-car">
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
                            <i>Выберите подтип груза</i>                        
                        </div>
                    </div>

                    <div class="scan__block-col col-1-3">
                        <div class="input input--big input--type">
                            <div class="user-input-bootstrap-wrapper-big">                      
                            <select class="user-input-bootstrap" id="user-loading-car" multiple="multiple" name="user-loading-car">     
                                <option>Верхняя</option>
                                <option>Боковая</option>
                                <option>Задняя</option>                     
                                                            
                            </select>
                            </div>
                            <i>Выберите способ загрузки</i>                     
                        </div>
                    </div>

                    <div class="scan__block-col col-1-3">
                        <div class="scan__block-border">
                            <div class="wrapper">
                                <label class="lab-for-input" for="user-weight-car">Вес, т: </label>
                                <div class="input input--small input--size-car">
                                    <input type="number" class="user-input" id="user-weight-car" name="user-weight-car">            
                                </div>
                            </div>
                            <div class="wrapper">
                                <label class="lab-for-input" for="user-weight-car">Объем, м<sup>3</sup>: </label>
                                <div class="input input--small input--size-car">
                                    <input type="number" class="user-input" id="user-weight-car" name="user-weight-car">            
                                </div>
                            </div>
                            <div class="wrapper">
                                <label class="lab-for-input" for="user-size1-car">Длина, м: </label>
                                <div class="input input--small input--size-car">
                                    <input type="number" class="user-input" id="user-size1-car" name="user-size1-car">          
                                </div>
                            </div>
                            <div class="wrapper">
                                <label class="lab-for-input" for="user-size2-car">Ширина, м: </label>
                                <div class="input input--small input--size-car">
                                    <input type="number" class="user-input" id="user-size2-car" name="user-size2-car">          
                                </div>
                            </div>
                            <div class="wrapper">
                                <label class="lab-for-input" for="user-size3-car">Высота, м: </label>
                                <div class="input input--small input--size-car">
                                    <input type="number" class="user-input" id="user-size3-car" name="user-size3-car">          
                                </div>
                            </div>  
                        </div>
                    </div>

                    <div class="scan__block-btn">
                        <button type="button" class="js-btn-step2 bbtn bbtn--yellow bbtn--big scan__btn">Продолжить</button>
                    </div>
                </div>

            <!-- *********** ШАГ 3 ********** ВСПЛЫВАЮЩИЙ БЛОК ПОИСКА ТРАНСПОРТА ***************************************- -->
                <div class="scan__block-row scan-cargo__step3">
                    <p class="scan__step-head"><span class="text-blue">Шаг 3</span> Требования и пожелания к перевозчику</p>

                    <div class="scan__block-col col-1-3">
                        <div class="ch_wrapper ">
                            <input id="check31" type="checkbox" name="check" value="check31">
                            <label for="check31">Медицинская книжка</label>
                        </div>
                        <div class="ch_wrapper ">
                            <input id="check32" type="checkbox" name="check" value="check32">
                            <label for="check32">Спецодежда для перевозки кормов и свиней </label>
                        </div>
                        <div class="ch_wrapper ">
                            <input id="check33" type="checkbox" name="check" value="check33">
                            <label for="check33">Пропуск на МКАД</label>
                        </div>
                    </div>

                    <div class="scan__block-col col-1-3">
                        <div class="ch_wrapper ">
                            <input id="check34" type="checkbox" name="check" value="check34">
                            <label for="check34">Экспедирование</label>
                        </div>
                        <div class="ch_wrapper ">
                            <input id="check35" type="checkbox" name="check" value="check35">
                            <label for="check35">Прохождение весового контроля в пути</label>
                        </div>
                    </div>

                    <div class="scan__block-col col-1-3">
                        <div class="scan__block-border">
                            <p class="scan__block-border-title">Выберите статус перевозчика</p>
                            <p class="scan__text">Проверку службой безопастности проходят только аккредитованные перевозчики. <br>С остальными Вы работаете на свой страх и риск.</p>                       

                            <div class="ch_wrapper ">
                                <input id="check36" type="checkbox" name="check" value="check36">
                                <label for="check36">Агент АгроКарго</label>
                            </div>
                            
                            <div class="ch_wrapper ">
                                <input id="check38" type="checkbox" name="check" value="check38">
                                <label for="check38">Проверенный перевозчик</label>
                            </div>

                            <div class="ch_wrapper ">
                                <input id="check37" type="checkbox" name="check" value="check37">
                                <label for="check37">Не проверенный перевозчик</label>
                            </div>
                        </div>
                    </div>

                    <div class="scan__block-btn">
                        <button type="button" class="js-btn-step3 bbtn bbtn--yellow bbtn--big scan__btn">Продолжить</button>
                    </div>
                </div>

            <!-- *********** ШАГ 4 ********** ВСПЛЫВАЮЩИЙ БЛОК ПОИСКА ТРАНСПОРТА ***************************************- -->
                <div class="scan__block-row scan-cargo__step4">
                    <p class="scan__step-head"><span class="text-blue">Шаг 4</span> Способ оплаты перевозки и размещение заявки на перевозку</p>

                    <div class="scan__block-col col-1-3">
                        <div class="ch_wrapper ">
                            <input id="check39" type="checkbox" name="check" value="check39">
                            <label for="check39">Предоплата</label>
                        </div>
                        <div class="ch_wrapper ">
                            <input id="check40" type="checkbox" name="check" value="check40">
                            <label for="check40">Ставка</label>
                        </div>
                        <div class="ch_wrapper ">
                            <input id="check41" type="checkbox" name="check" value="check41">
                            <label for="check41">Без ставки</label>
                        </div>
                    </div>


                    <div class="scan__block-col col-1-3">                       
                        <div class="ch_wrapper ">
                            <input id="radio42" type="radio" name="radio" value="radio42">
                            <label for="radio42">За наличную оплату</label>
                        </div>
                        <div class="ch_wrapper ">
                            <input id="radio43" type="radio" name="radio" value="radio43">
                            <label for="radio43">Оплата б/н с НДС</label>
                        </div>
                        <div class="ch_wrapper ">
                            <input id="radio44" type="radio" name="radio" value="radio44">
                            <label for="radio44">Оплата б/н без НДС</label>
                        </div>  

                    </div>

                    <div class="scan__block-col-absolut">
                        <div class="input input--small output-price-distance">
                            <input type="text" class="user-input" id="output-price-distance-cargo" name="output-price-distance-cargo" disabled>                                         
                        </div>
                        <div class="input input--small output-price-distance-e">
                            <input type="text" class="user-input" id="output-price-distance-e-cargo" name="output-price-distance-e-cargo" disabled value="руб./км">                                         
                        </div>
                    </div>

                

                    <div class="scan__block-btn">
                        <button type="submit" class="bbtn bbtn--yellow bbtn--big scan__btn-last">Разместить заявку на перевозку груза</button>
                    </div>

                </div>
            </form>
            </div>
        </div>

    <!-- *************************** БЛОК НОВОЕ НА ФОРУМАХ ***************************************- -->
        <div class="page-block-bg page-block-bg--forum top-shadow">
            <div class="page-block">
                <h2 class="page-block__head yellow-line">НОВОЕ НА ФОРУМАХ</h2>

                <div class="block-filter">
                    <i class="filter active">Профессиональная деятельность</i>
                    <i class="filter">Международные перевозки</i>
                    <i class="filter">Автосервис и ремонт</i>
                    <i class="filter max">Проблемные места загрузки и разгрузки</i>
                    <i class="filter">Юридические вопросы</i>
                    <i class="filter">Продажа, аренда и обмен техники</i>
                </div>              
    
                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/nophoto.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Название темы на форуме</h4>
                        <p class="rubrik">Рубрика: Название рубрики</p>
                        <p class="block-count">
                            <span class="block-count__last-date">Последнее сообщение: 01.01.2017</span> 
                            <span class="block-count__sum-message">Ответов и сообщений: 1 218 </span>
                            <span class="block-count__topic-date">Дата создания темы: 01.01.2016</span>
                        </p>
                    </div>
                    
                </div>

                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/nophoto.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Название темы на форуме темы на форуме темы на форуме темы на форуме</h4>
                        <p class="rubrik">Рубрика: Название рубрики</p>
                        <p class="block-count">
                            <span class="block-count__last-date">Последнее сообщение: 01.01.2017</span> 
                            <span class="block-count__sum-message">Ответов и сообщений: 1 218 </span>
                            <span class="block-count__topic-date">Дата создания темы: 01.01.2016</span>
                        </p>
                    </div>
                    
                </div>
    
                <div class="block-main-forum">
                    <div class="block-main-forum__img" style="background-image: url(img/nophoto.png)"></div>
                    <div class="block-main-forum__content">
                        <h4>Название темы на форуме</h4>
                        <p class="rubrik">Рубрика: Название рубрики</p>
                        <p class="block-count">
                            <span class="block-count__last-date">Последнее сообщение: 01.01.2017</span> 
                            <span class="block-count__sum-message">Ответов и сообщений: 1 218 </span>
                            <span class="block-count__topic-date">Дата создания темы: 01.01.2016</span>
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>


        <!-- *************************** БЛОК СТАТЬИ И НОВОСТИ ***************************************- -->
        
        <div class="page-block-bg page-block-bg--article">          
        
            <div class="page-block main-article">
                <h2 class="page-block__head yellow-line">СТАТЬИ И НОВОСТИ</h2>

                <div class="page-block__wrapper">
                    <div class="fixed-article__bg"></div>
                    <div class="fixed-article">
                        <div class="fixed-article__img" style="background-image: url(img/nophoto.png)"></div>
                        <div class="fixed-article__content">
                            <h5>Длинный заголовок статьи заголовок статьи заголовок статьи заголовок статьи</h5>
                            <div class="fixed-article__text">
                                <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                <p>Duis vulputate Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                            </div>
                            <a href="new-item.html" class="fixed-article__link link">Читать подробнее...</a>
                        </div>
                    </div>
                    
                </div>

                <div class="page-block__wrapper slider slider_article js_slider simple js_ease">
                    <div class="frame js_frame">
                        <ul class="slides js_slides">
                            <li class="js_slide">
                                <div class="block-main-article main-article__item">
                                    <a href="new-item.html">
                                    <div class="block-main-article__img" style="background-image: url(img/nophoto.png)"></div>
                                    <div class="block-main-article__content">
                                        <h5>Длинный заголовок статьи заголовок статьи заголовок статьи заголовок статьи</h5>
                                        <div class="block-main-article__text">
                                            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                            <p>Duis vulputate Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                        </div>
                                        <a href="new-item.html" class="block-main-article__link link">Читать подробнее...</a>
                                    </div>
                                    </a>
                                </div>
                            </li>

                            <li class="js_slide">
                                <div class="block-main-article main-article__item">
                                    <a href="new-item.html">
                                    <div class="block-main-article__img" style="background-image: url(img/nophoto.png)"></div>
                                    <div class="block-main-article__content">
                                        <h5>Длинный заголовок статьи заголовок статьи заголовок статьи заголовок статьи</h5>
                                        <div class="block-main-article__text">
                                            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                            <p>Duis vulputate Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                        </div>
                                        <a href="new-item.html" class="block-main-article__link link">Читать подробнее...</a>
                                    </div>
                                    </a>
                                </div>
                            </li>

                            <li class="js_slide">
                                <div class="block-main-article main-article__item">
                                    <a href="new-item.html">
                                    <div class="block-main-article__img" style="background-image: url(img/nophoto.png)"></div>
                                    <div class="block-main-article__content">
                                        <h5>Длинный заголовок статьи заголовок статьи заголовок статьи заголовок статьи</h5>
                                        <div class="block-main-article__text">
                                            <p>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                            <p>Duis vulputate Lorem ipsum dolor sit amet,consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. </p>
                                        </div>
                                        <a href="new-item.html" class="block-main-article__link link">Читать подробнее...</a>
                                    </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <span class="js_prev prev">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 451.847 451.847" style="enable-background:new 0 0 451.847 451.847;" xml:space="preserve"> 
                        <g><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0   c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744   c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z" fill="#ffde00"/> </g>
                    </svg>
                    </span>
                    <span class="js_next next">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 451.847 451.847" style="enable-background:new 0 0 451.847 451.847;" xml:space="preserve">
                        <g><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744   L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284   c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z" fill="#ffde00"/></g>
                    </svg>
                    </span>             
                    
                </div>
            </div>
            

            <div class="page-block">
                <a href="news.html" class="page-block__bbtn bbtn bbtn--yellow bbtn--big">
                    <span>Показать все статьи</span>
                </a>            
            </div>



            <div class="separator"></div>

        </div>
@endsection
