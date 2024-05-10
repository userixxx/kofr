@extends('layouts.app')

@section('title')
    Доставка и оплата
@endsection
@include('layouts.THeader')
@include('layouts.TFooter')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" style="margin-left: 0; padding-left: 0; margin-top: 150px;">
                <div class="block__1">
                    <div class="row">
                        <div class="col-3 d-none d-md-block">
                        </div>
                        <div class="col-12 col-md-6 block_1_text">
                            <h2>Доставка и оплата</h2>
                        </div>
                        <div class="col-3 d-none d-md-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #5fb3b3; color: #000; margin-top: 200px;">
        <div class="container mt-5" style="padding: 50px 100px;">
            <img src="../images/Depositphotos_44239847_L.jpg" alt="">
            <p class="mt-5">Оплата проходит по договоренности с исполнителем, по выставленному счету. </p>
        </div>
        <div class="container p-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img class="m-3" src="../images/if-advantage-nearby-1034361_88844.svg" alt="" style="height: 100px;">
                    <h3>Доставка по Москве и Московской области</h3>
                    <p>Осуществляется по согласованию с клиентом. Возможен самовывоз с производства по адресу: Московская область, Пушкинский район, рабочий поселок Лесной, ул. Советская, д. 21</p>
                </div>
                <div class="col-12 col-md-6">
                    <img class="m-3" src="../images/deliverytruck_106577.svg" alt="" style="height: 100px;">
                    <h3>Доставка в регионы</h3>
                    <p>Доставка осуществляется транспортными компаниями: Деловые Линии, СДЭК, Возовоз и другими.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
