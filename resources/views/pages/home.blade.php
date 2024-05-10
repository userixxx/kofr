@extends('layouts.app')

@section('title')Домашняя@endsection
@include('layouts.THeader')
@include('layouts.TFooter')
@section('content')
    <div class="row">
        <div class="col-12" style="margin-left: 0; padding-left: 0; margin-top: 350px;">
            <div class="block__1">
                <div class="row">
                    <div class="col-3 d-none d-md-block">
                    </div>
                    <div class="col-12 col-md-6 block_1_text">
                        <h2>Кофры и кейсы под заказ от 9 300р.</h2>
                        <h3>выполнены из 9мм фанеры</h3>
                    </div>
                    <div class="col-3 d-none d-md-block">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid block_2" id="services">
        <div class="row">
            <div class="col-12 block_2_margin element-animation">
                <p>Что мы предлагаем?</p>
            </div>
            <div class="col-12 mt-3 pt-3 block_2__divl element-animation">
                <div class="row" style="margin-top: 5px">
                    <div class="col-2 d-none d-xl-block">
                    </div>
                    <div class="col-12 col-lg-4 block_2__subdiv">
                        <img src="images/group-22.svg" style="margin-left: 10px; margin-right: 10px;">
                        <span>КОФРЫ ДЛЯ МУЗЫКАЛЬНЫХ ИНСТРУМЕНТОВ / КОЛОНОК / ПУЛЬТОВ / ОБОРУДОВАНИЯ</span>
                    </div>
                    <div class="col-12 col-lg-4 block_2__subdiv">
                        <img src="images/group-22.svg" style="margin-left: 10px; margin-right: 10px;">
                        <span>КОФРЫ ДЛЯ КОНЦЕРТНОГО И СВЕТОВОГО ОБОРУДОВАНИЯ</span>
                    </div>
                    <div class="col-2 d-none d-xl-block">
                    </div>
                </div>
            </div>
            <div class="col-12 block_2__divr pt-3 element-animation">
                <div class="row" style="margin-top: 5px">
                    <div class="col-2 d-none d-xl-block">
                    </div>
                    <div class="col-12 col-lg-4 block_2__subdiv">
                        <img src="images/group-22.svg" style="margin-left: 10px; margin-right: 10px;">
                        <span>КОФРЫ ДЛЯ ТЕАТРАЛЬНОГО РЕКВИЗИТА / ОДЕЖДЫ / ДЕКОРАЦИЙ</span>
                    </div>
                    <div class="col-12 col-lg-4 block_2__subdiv">
                        <img src="images/group-22.svg" style="margin-left: 10px; margin-right: 10px;">
                        <span>КОФРЫ ИЗ ПЛАСТИКА С НАНЕСЕНИЕМ ЛОГОТИПОВ</span>
                    </div>
                    <div class="col-2 d-none d-xl-block">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container element-animation" style="text-align: center;">
            <h2>Калькулятор расчёта</h2>
            <p>Здесь вы можете индивидуально рассчитать каждый параметр</p>
            <div class="form calc">
                <form enctype="multipart/form-data" id="calc-form" method="post" >
                    <label for="material">Выберите материал для кофра</label>
                    <select name="material" id="material">
                        <option value="3">фанера 9 мм</option>
                        <option value="2">фанера 6 мм</option>
                        <option value="1">алюминиевый композитный лист 4 мм</option>
                        <option value="4">сотовый пластик 4/6/9 мм</option>
                    </select>
                    <label for="inlength">Длина, см. *</label>
                    <input type="text" name="inlength" id="inlength" required>
                    <label for="inwidth">Ширина (глубина), см. *</label>
                    <input type="text" name="inwidth" id="inwidth" required>
                    <label for="inheight">Высота, см. *</label>
                    <input type="text" name="inheight" id="inheight" required>
                    <label for="handperenos">Ручки для переноски</label>
                    <select name="handperenos" id="handperenos">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <!-- Добавьте остальные опции здесь -->
                    </select>
                    <label for="kofrkount">Требуемое количество кофров</label>
                    <input type="text" name="kofrkount" id="kofrkount">
                    <i>* - поле обязательно для заполнения</i>
                    <br><br>
                    <input style="height: 47px;" class="button" type="submit" name="yt0" value="Рассчитать">
                </form>

                <p id="result"></p>

                <script>
                    document.getElementById("calc-form").addEventListener("submit", function (event) {
                        event.preventDefault();

                        const material = parseFloat(document.getElementById("material").value);
                        const inlength = parseFloat(document.getElementById("inlength").value);
                        const inwidth = parseFloat(document.getElementById("inwidth").value);
                        const inheight = parseFloat(document.getElementById("inheight").value);
                        const handperenos = parseFloat(document.getElementById("handperenos").value);
                        const kofrkount = parseFloat(document.getElementById("kofrkount").value);

                        const result = material * inlength * inwidth * inheight + handperenos * 10 + kofrkount * 50;

                        document.getElementById("result").innerHTML = "Стоимость: " + result + " рублей";
                    });
                </script>


            </div>
        </div>
        <div class="container-fluid block_3 block_3_bg" id="about">
            <div class="row">
                <div class="col-8 col-sm-6 block_3_1">
                    <div class="row">
                        <div class="col-5 d-none d-xl-block">
                        </div>
                        <div class="col-9 col-md-12 col-xl-6 element-animation">
                            <h4>KOFR-4:</h4>
                            <img src="images/line.svg" style="margin-top: 20px; margin-bottom: 20px;">
                            <p>Производство кофров и кейсов из качественной ламинированной фанеры толщиной 6 или 9 мм, немецкий сотовый пластик 4, 6 и 9 мм, и фурнитура фирм Adam Hall (Германия) и Penn Elcom (Великобритания).</p>
                        </div>
                        <div class="col-1 d-none d-xl-block">
                        </div>
                    </div>
                </div>
                <div class="d-none d-sm-block col-4 col-sm-6 block_3_2 element-animation">
                    <div class="row">
                        <div class="col-12">
                            <img src="images/rectangle-8.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid block_5" id="call">
            <div class="row">
                <div class="col-2 d-none d-md-block">
                </div>
                <div class="col-12 col-md-8 block_5_margin">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 element-animation">
                                    <h4>Мы будем рады ответить на все ваши вопросы</h4>
                                    <p style="margin-top: 30px;">Для получения необходимой информации заполните форму ниже и мы обязательно свяжемся с вами</p>
                                </div>
                                <div class="col-12">
                                    <div class="row" style="width: 100%;">
                                        <div class="col-6" style="width: 100%;">
                                            <form action="" method="POST" style="width: 100%;">
                                                <input class="block_input element-animation" type="text" name="name" placeholder="Ваше имя">
                                                <input class="block_input element-animation" type="email" name="email" placeholder="E-mail" style="margin-top: 30px;">
                                                <input class="block_input element-animation" type="tel" name="tel" placeholder="Номер телефона" style="margin-top: 30px;"><br>
                                                <label class="block_5_label element-animation" style="margin-top: 25px;"><input class="block_5_checkbox" type="checkbox"><span class="fake"></span><span style="color: #13192F; margin-left: 30px;font-size: 14px;">Даю согласие на обработку персональных данных</span></label>
                                        </div>
                                        <div class="col-6 element-animation" style="text-align: right;">
                                            <textarea type="text" name="text" placeholder="Ваше сообщение" style=""></textarea>
                                            <button type="submit" name="do_form">Отправить</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 d-none d-md-block">
                </div>
            </div>
        </div>
@endsection

