@extends('layouts.app')

@section('title')
    О нашем производстве
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
                            <h2>Компания KOFR-4.</h2>
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
            <h2>KOFR4</h2>
            <p>Студия KOFR4 была создана в 2014 году для производства кейсов для музыкального оборудования, однако очень быстро выросла за пределы узконаправленного сегмента</p>
            <p>С 2015 года KOFR4 производит жесткую упаковку для различных индустрий: космической, нефтегазовой, медицинской, энергетической, развлекательной и телевизионной</p>
            <p>KOFR4 начал свою деятельность в 2018 году как мастерская по производству защитных кейсов для сувениров, подарков и мелких предметов. </p>
            <p>Однако со временем компания стала успешно расширять свою деятельность, удовлетворяя запросы различных секторов. </p>
            <p>Сейчас KOFR4 специализируется на изготовлении защитных кейсов и кофров для различных областей, таких как музыкальные концерты, медицинские учреждения, организация больших мероприятий и транспортировка хрупких предметов. Также предоставляется возможность создания индивидуальных кейсов в качестве уникального подарка.</p>
        </div>
        <div class="container-fluid" style="background-color: #eee; padding: 50px;">
            <div class="container">
                <img src="../images/7-2.jpg" alt="">
            </div>
        </div>
        <div class="container p-5"><h2 class="mt-5">Собственное производство</h2>
            <p>Мастерская <strong style="text-decoration: underline;">"KOFR4"</strong> находится в городском округе Химки Московской области, по адресу ул. Репина, и оборудована современными технологическими устройствами. Каждый продукт создается при участии высококвалифицированных специалистов: проектировщика, раскройщика и сборщика. Детали обрабатываются на станках с ЧПУ, что обеспечивает возможность изготовления кейсов и кофров различной комплектации с учетом индивидуальных параметров, идеально соответствующих вашему оборудованию.</p>

        </div>
    </div>
@endsection