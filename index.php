<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans: regular,500,600,700,800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/normalize1.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-icon.css">
    <link rel="stylesheet" href="css/media.css">
    <script src="js/script.js" defer></script>
    <title>Document</title>
</head>

<body>

    <div class="wrapper">
        <div class="container">
            <header class="header">
                <div class="header__logo">
                    <a href="#">
                        <picture>
                            <source srcset="img/logo.png" media="(min-width:1082px)">
                            <source srcset="img/logo2.png" media="(min-width:690px)">
                            <source srcset="img/logo3.png" media="(max-width: 690px)">
                            <img src="img/logo.png" alt="Логотип">
                        </picture>
                    </a>
                </div>
                <nav class="header__menu menu">
                    <div class="menu__icon icon__menu ">
                        <span></span>
                    </div>
                    <div class="menu__body">
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a href="#" class="menu__link">FAQ</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link">Гарантии</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link">Каталог</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link">Подписка</a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <main class="law">
                <div class="law__head">
                    <h2 class="law__title title title--active">Юридические услуги</h2>
                    <h2 class="law__title title">Услуги дизайна</h2>
                    <h2 class="law__title title">IT-услуги</h2>
                    <h2 class="law__title title">Маркетинг</h2>
                    <h2 class="law__title title">Кадровые услуги</h2>
                    <h2 class="law__title title">Для маркетплейсов</h2> 

                    <div class="law__menu menu-tabs">
                        <button class="tab icon-li1 tab--active" type="button" ></button>
                        <button class="tab icon-li2" type="button" ></button>
                        <button class="tab icon-li33" type="button" ></button>
                        <button class="tab icon-li4" type="button" ></button>
                        <button class="tab icon-li5" type="button" ></button>
                        <button class="tab icon-li6" type="button" ></button>
                    </div>
                    <div class="law__search ">
                        <form action="#" class="search">
                            <a class="search__icon icon-search" type="submit">
                            </a>
                            <input class="search__field" type="text" placeholder="Поиск услуг">
                        </form>
                    </div>
                </div>
                <div class="law__body">
                    <div class="service__group">
                        <div class="service service__law service--active">
                        <?php 
                        include "law.php" 
                        ?>
                        </div>
                        <div class="service service__design">
                            <?php
                            include("design.php");
                            ?>
                        </div> 
                        <div class="service service__it">
                            <?php
                            include("it.php")
                            ?>
                        </div>
                        <div class="service service__marketing">
                            <?php
                            include("marketing.php");
                            ?>
                        </div>
                        <div class="service service__hr">
                            <?php
                            include("hr.php");
                            ?>
                        </div>
                        <div class="service service__ecommerce">
                            <?php
                            include("ecommerce.php");
                            ?>
                        </div>
                    </div>
                    <div class="law__basket basket">
                        <h3 class="basket__title title-min">Корзина</h3>
                        <div class="basket__position">
                            <div class="basket__close">&times</div>
                            <div class="basket__img">
                                <img src="img/service-basket.png" alt="">
                            </div>
                            <div class="basket__label label-basket">
                                <h4 class="label-basket__title">Составление иска</h4>
                                <div class="label-basket__text">юридическая услуга</div>
                                <div class="label-basket__price">от 3000р</div>
                            </div>
                            <div class="basket__qty">1</div>
                        </div>
                        <div class="basket__position">
                            <div class="basket__close">&times</div>
                            <div class="basket__img">
                                <img src="img/service-basket.png" alt="">
                            </div>
                            <div class="basket__label label-basket">
                                <h4 class="label-basket__title">Договор <br> купли-продажи</h4>
                                <div class="label-basket__text">юридическая услуга</div>
                                <div class="label-basket__price">от 3000р</div>
                            </div>
                            <div class="basket__qty">2</div>
                        </div>
                        <div class="basket__position">
                            <div class="basket__close">&times</div>
                            <div class="basket__img">
                                <img src="img/service-basket.png" alt="">
                            </div>
                            <div class="basket__label label-basket">
                                <h4 class="label-basket__title">Трудовой договор</h4>
                                <div class="label-basket__text">юридическая услуга</div>
                                <div class="label-basket__price">от 3000р</div>
                            </div>
                            <div class="basket__qty">3</div>
                        </div>
                        <div class="basket__description">
                            <div class="basket__total">Итого</div>
                            <div class="basket__text">
                                <div class="icon-basket-i1"> <span>от 13000 руб</span> </div>
                                <div class="icon-basket-i2"> <span>от 3 дней</span> </div>
                            </div>
                        </div>
                        <button class="basket__button" href="">Перейти к оформлению</button>
                    </div>
                </div>
            </main>
        </div>
        <footer class="footer">
            <div class="footer__container container">
                <div class="footer__logo">
                    <a href="#">
                        <picture>
                            <source srcset="img/logo2.png" media="(min-width:1082px)">
                            <source srcset="img/logo3.png" media="(min-width: 490px)">
                            <source srcset="img/logo4.png" media="(max-width: 490px)">
                            <img src="img/logo.png" alt="Логотип">
                        </picture>
                    </a>
                </div>
                <div class="footer__column footer__column_1">
                    <ul>
                        <li> <a href="">Общая правовая информация</a> </li>
                        <li> <a href="">Политика конфиденциальности</a> </li>
                        <li> <a href="">Политика платежей</a> </li>
                        <li> <a href="">Каталог</a> </li>
                    </ul>
                </div>
                <div class="footer__column footer__column_2">
                    <ul>
                        <li> <a href="">Информация для инвесторов</a> </li>
                        <li> <a href="">Портфолио</a> </li>
                        <li> <a href="">Отправить свое резюме</a> </li>
                        <li> <a href="">Контакты</a> </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>