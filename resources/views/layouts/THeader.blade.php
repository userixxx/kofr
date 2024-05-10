@section('THeader')

    <div class="container-fluid block_1">
        <header class="header" id="header">
            <div class="header__mobile">
                <div class="container">
                    <a href="/" class="logo">
                        <picture>
                            <source srcset="../images/logo-2.png" type="image/svg+xml">
                            <img src="../images/logo-2.png">
                        </picture>
                    </a>
                    <div>
                        <button class="standart__btn">
	            	<span>
						Заказать звонок
					</span>
                        </button>
                        <div class="header__mobile-btns">
                            <div class="burger__bg">
                                <div class="burger__menu">
                                    <span> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mobile">
                <div class="header__center">
                    <div class="container">
                        <div class="header__center-item element-animation">
                            <div class="header__center-soc">
                                <a href="#">
                                    <picture>
                                        <source srcset="../images/whatsapp.svg" type="image/svg+xml">
                                        <img src="../images/whatsapp.svg">
                                    </picture>
                                </a>
                                <a href="#">
                                    <picture>
                                        <source srcset="../images/telegram.svg" type="image/svg+xml">
                                        <img src="../images/telegram.svg">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="header__center-item element-animation">
                            <a href="{{ route('home') }}" class="logo">
                                <picture>
                                    <img src="../images/logo-2.png">
                                </picture>
                            </a>
                        </div>
                        <div class="header__center-item element-animation">
                            <div class="header__center-call">
                                <a href="tel:89859971545" class="phone-link">
                                    <small class="phone-number">+7(985)-997-15-45</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__bottom element-animation">
                    <div class="container">
                        <ul class="navbar">
                            <div class="navbar-link">
                                <li class="nav-link">
                                    <a href="{{ route('catalog') }}" class="menu-title" title="Каталог">Каталог</a>
                                </li>
                                <li class="nav-link">
                                    <a href="{{ route('production') }}" class="menu-title" title="О производстве">О производстве</a>
                                </li>
                                <li class="nav-link">
                                    <a href="{{ route('contacts') }}" class="menu-title" title="Контакты">Контакты</a>
                                </li>
                                <li class="nav-link">
                                    <a href="{{ route('portfolio') }}" class="menu-title" title="Портфолио">Портфолио</a>
                                </li>
                                <li class="nav-link">
                                    <a href="{{ route('purchase') }}" class="menu-title" title="Доставка и оплата">Доставка и оплата</a>
                                </li>
                                <li class="nav-link">
                                    <a href="{{ route('calculate') }}" class="menu-title" title="Расчет стоимости">Расчет стоимости</a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
@show
