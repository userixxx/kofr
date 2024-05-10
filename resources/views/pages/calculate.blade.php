@extends('layouts.app')

@section('title')
    Каталог
@endsection
@include('layouts.THeader')
@include('layouts.TFooter')
@section('content')
    <div class="container-fluid mb-5">
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
    <div class="container-fluid" style="background-color: #5fb3b3; width: 100%;">
        <div class="container p-5 mt-5 mb-5">
            <div class="form calc">
                <form enctype="multipart/form-data" id="calc-form"
                      action="/"
                      method="POST"
                      class="MultiFile-intercepted">
                    @csrf
                    <table class="tmargin ">
                        <tbody>
                        <tr>
                            <td><label>Выберите материал для кофра</label></td>
                            <td>
                                <select style="" name="material" id="material">
                                    <option value="3">фанера 9 мм</option>
                                    <option value="2">фанера 6 мм</option>
                                    <option value="1">алюминиевый композитный лист 4 мм</option>
                                    <option value="4">сотовый пластик 4/6/9 мм</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="subtype">
                                    Внутренние размеры (<font color="red">в сантиметрах!</font>)
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><label>Длина, см. *</label></td>
                            <td>
                                <input type="text" name="inlenght" id="inlenght"></td>
                        </tr>
                        <tr>
                            <td><label>Ширина (глубина), см. *</label></td>
                            <td>
                                <input type="text" name="inwidth" id="inwidth"></td>
                        </tr>
                        <tr>
                            <td><label>Высота, см. *</label></td>
                            <td>
                                <input type="text" name="inheight" id="inheight"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="subtype">
                                    Фурнитура
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label>Ручки для переноски</label></td>
                            <td>
                                <select style=" " name="handperenos" id="handperenos">
                                    <option value="">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Ручка выдвижная телескопическая</label></td>
                            <td>
                                <select style=" " name="ruchkateleskop" id="ruchkateleskop">
                                    <option value="">0</option>
                                    <option value="1">1</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Замки стягивающие (типа "бабочка")</label></td>
                            <td>
                                <select style=" " name="zamokstag" id="zamokstag">
                                    <option value="">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Замки кейсовые накидные (чемоданные)</label></td>
                            <td>
                                <select style=" " name="zamokkey" id="zamokkey">
                                    <option value="">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Петли малые, накладные, со стопором 90 градусов</label></td>
                            <td>
                                <select style=" " name="petli" id="petli">
                                    <option value="">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Петли большие, врезные, усиленные, со стопором 90 градусов</label></td>
                            <td>
                                <select style=" " name="petli_vrez" id="petli_vrez">
                                    <option value="">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Уголки <b>(8 шт)</b></label></td>
                            <td>
                                <select style=" " name="ugolki" id="ugolki">
                                    <option value="1">уголки - шары</option>
                                    <option value="2">уголки - квадраты</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Уголки стыковочные</label></td>
                            <td>
                                <input readonly="readonly" type="text" value="8" name="ugolkistyk" id="ugolkistyk"></td>
                        </tr>
                        <tr>
                            <td><label>Колеса транспортировочные поворотные (80-100 мм)</label></td>
                            <td>
                                <select style=" " name="kolesa" id="kolesa">
                                    <option value="">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Колеса усиленные для кейсов с выдвижной ручкой</label></td>
                            <td>
                                <select style=" " name="kolesa_keis" id="kolesa_keis">
                                    <option value="">0</option>
                                    <option value="2">2</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Ножки резиновые</label></td>
                            <td>
                                <select style=" " name="nogki" id="nogki">
                                    <option value="">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select></td>
                        </tr>

                        <tr>
                            <td><label>Колесные чашки для вертикальной состыковки кофров</label></td>
                            <td>
                                <select style=" " name="uglkoles" id="uglkoles">
                                    <option value="">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Количество отсеков с перегородками, полок</label></td>
                            <td>
                                <select style=" " name="otsek" id="otsek">
                                    <option value="">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Сложность кофра</label></td>
                            <td>
                                <select style=" " name="complex" id="complex">
                                    <option value="1">обычный</option>
                                    <option value="2">средней сложности (дополнительные крышки, дверцы)</option>
                                    <option value="3">высокой сложности (разборные крышки, фрезеровки, криволинейные
                                        соединения)
                                    </option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Трехмерная модель кофра</label></td>
                            <td>
                                <select style=" " name="project" id="project">
                                    <option value="1">не требуется</option>
                                    <option value="2">простая: не сложный кофр и ложемент</option>
                                    <option value="3">сложная: индивидуальная модель кейса, со сложным наполнением и
                                        согласованием
                                        трехмерной модели
                                    </option>
                                </select></td>
                        </tr>
                        <tr>
                            <td><label>Ложемент</label></td>
                            <td>
                                <select style=" " name="logement" id="logement">
                                    <option value="1">простой (обивка по периметру)</option>
                                    <option value="4">средний (опорные столбики, или частично вырезной ЧПУ)</option>
                                    <option value="2">сложный ложемент (фигурный, объемный)</option>
                                    <option value="3">без ложемента</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="subtype">
                                    Тираж
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label> Требуемое количество кофров</label></td>
                            <td>
                                <input type="text" value="1" name="kofrkount" id="kofrkount"></td>
                        </tr>


                        <tr>
                            <td colsapn="2"><i>* - поле обязательно для заполнения</i></td>
                        </tr>

                        <tr>
                            <td><label>Email *</label></td>
                            <td><input type="email" name="email" id="email" required></td>
                        </tr>

                        </tbody>
                    </table>

                    <div class="tmargin mt-5" style="text-align:center;">
                        <input style="height:47px;" class="button" type="submit" name="yt0" value="Рассчитать"></div>

                </form>
            </div>
        </div>
    </div>
@endsection
