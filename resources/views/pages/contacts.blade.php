@extends('layouts.app')

@section('title')
    Контакты
@endsection
@include('layouts.THeader')
@include('layouts.TFooter')
@section('content')
    <div class="container-fluid contacts-block">
        <div class="container">
            <div class="row alignc" style="padding: 30px 0; height: 100%;">
                <div class="col-6 col-md-4 order-1 order-md-1">
                    <div class="footer-content">
                        <img src="../images/mobilephone_79875.svg" alt="">
                        <h5>Свяжитесь с нами:</h5>
                        <p><strong><a href="tel:74957971915">+7(495)797-19-15</a></strong><br>
                            <span>info@nfcase.ru</span>
                        </p>
                    </div>
                </div>
                <div class="col-6 col-md-4 order-3 order-md-2">
                    <div class="footer-content">
                        <img src="../images/thefreeforty_location_icon-icons.com_66322.svg" alt="">
                        <h5>Адрес производства:</h5>
                        <p>Москвовская область, Пушкинский район <br>
                            рабочий поселок Лесной, ул. Советская д.21
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 order-2 order-md-3">
                    <div class="footer-content">
                        <img src="../images/clock_icon_128908.svg" alt="">
                        <h5>Часы работы:</h5>
                        <p>Пн - Пт:<br>
                            9:00 - 19:00
                        </p>
                    </div>
                </div>
                <div class="col-12 order-4 order-md-4" style="color: #13192F; ">
                    <h2>Индивидуальный предприниматель:</h2>
                    <p>Пищулин Дмитрий Сергеевич</p>
                    <p>ИНН: 771505032338</p>
                    <p>ОГРНИП: 317774600455910</p>
                </div>
            </div>
            <div class="scrollup" style="display: block;">
                <a class="scrolltop" href="#">
                    <i class="fas fa-chevron-up"></i>
                </a>
            </div>
        </div>
    </div>

@endsection
