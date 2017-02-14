<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
<head>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

    <?php print $styles; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <?php global $base_path; global $base_root; ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
<div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
</div>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>

<div id="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="menu-container">
                <nav class="menu left-menu">
                    <div class="logo">
                        <div class="logo-container">
                            <div class="icon logo-min"></div>
                            <div class="icon logo"></div>
                        </div>
                    </div>
                    <ul class="list-menu">
                        <li class="item-menu">
                            <a class="link-scroll" href="#block-1">Главная</a>
                        </li>
                        <li class="item-menu">
                            <a class="link-scroll" href="#block-2">Who is Ян Кальянов</a>
                        </li>
                        <li class="item-menu">
                            <a class="link-scroll" href="javascript:void(0);">Свадебный вечер</a>
                        </li>
                        <li class="item-menu">
                            <a class="link-scroll" href="javascript:void(0);">Корпоративное мероприятие</a>
                        </li>
                        <li class="item-menu">
                            <a class="link-scroll" href="#block-8">Контакты</a>
                        </li>
                    </ul>
                    <div class="contact-menu">
                        <div class="phone">8 (909) 099-99-00</div>
                        <div class="email">yan-event@ya.ru</div>
                        <ul class="link-social">
                            <li><a href="javascript:void(0);"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="javascript:void(0);"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="page-container">
                <!-- START block-1 -->
                <div id="block-1" class="block block-1">
                    <div class="content">
                        <p class="group-arrow">
                            <i class="icon icon-arrow-right-white"></i>
                            <i class="icon icon-arrow-right-white"></i>
                            <i class="icon icon-arrow-right-white"></i>
                        </p>
                        <h2 class="text-uppercase">Ян</h2>
                        <h2 class="text-uppercase">кальянов</h2>
                        <h3>Тактично. Творчески. С юмором.</h3>
                        <div class="desc">
                            <p>За годы работы вывел для себя одно правило: «Зрителю нужно внимание, удивление и
                                веселье!»</p>
                            <p>Каждое мероприятие следует трем постулатам моей работы.</p>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-custom">Забронировать дату</a>

                        <a class="button-down link-scroll" href="#block-2"></a>
                    </div>
                </div> <!-- END block-1 -->

                <!-- START block-2 -->
                <div id="block-2" class="block block-2">
                    <div class="content">
                        <div class="title-block">
                            <span>Who is Ян Кальянов?</span>
                            <i class="icon icon-arrow-blue-right"></i>
                            <i class="icon icon-arrow-blue-right"></i>
                            <i class="icon icon-arrow-blue-right"></i>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="menu-section">
                                    <li class="item">
                                        <a class="link-scroll" href="#block-3">
                                            <i class="icon icon-microphone"></i>
                                            <span>name link</span>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a class="link-scroll" href="#block-4">
                                            <i class="icon icon-stemware"></i>
                                            <span>name link</span>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a class="link-scroll" href="#block-5">
                                            <i class="icon icon-users"></i>
                                            <span>name link</span>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <a class="link-scroll" href="#block-6">
                                            <i class="icon icon-snowflake"></i>
                                            <span>name link</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- END block-2 -->

                <!-- START block-3 -->
                <div id="block-3" class="block block-3">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6 text-block">
                                <div class="title">
                                    <div class="icon-block">
                                        <i class="icon icon-microphone small"></i>
                                    </div>
                                    <div class="value">Ведущий Event-Fm</div>
                                </div>
                                <div class="desc">
                                    <p>Принимая участие в спецпроектах на ТВ, занимаясь авторским и редакторским делом,
                                        мне посчастливилось попасть в новую для себя сферу. Работа на радио позволила
                                        окунуться в мир шоу-бизнеса, познакомиться со многими российскими селебрити и
                                        профессионалами event-рынка. Ведущий на радио - одно из направлений, которое
                                        помогает развиваться, совершенствовать навыки и уверенно двигаться вперед. </p>
                                </div>
                                <div class="more-link">
                                    Слушать эфир
                                    <div class="icon-block">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 slider-block">
                                <div class="slider-1">
                                    <div class="item-slide">
                                        <img src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-1-img-1.jpg" alt="">
                                    </div>
                                    <div class="item-slide">
                                        <img src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-1-img-1.jpg" alt="">
                                    </div>
                                    <div class="item-slide">
                                        <img src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-1-img-1.jpg" alt="">
                                    </div>
                                    <div class="item-slide">
                                        <img src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-1-img-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- END block-3 -->


                <!-- START block-4 -->
                <div id="block-4" class="block block-4">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="title">
                                    <div class="icon-block">
                                        <i class="icon icon-stemware small"></i>
                                    </div>
                                    <div class="value">Идеи на мероприятия</div>
                                </div>
                                <div class="desc">
                                    <p>Каждое мероприятие, как съемки голливудского фильма. Все понимают свои роли и
                                        импровизируют, а ведущий выступает в роли режиссера, развивая сюжет с интересной
                                        идеей и ярким финалом. Чувство такта, уместный юмор и нетривиальный подход к
                                        проведению тожества позволяют каждому гостю ощущать свою значимость. Хороший
                                        ведущий в Москве – залог качественного отдыха. Почувствуйте себя главным героем
                                        собственного кино, давайте обсудим детали и идеи намечающегося мероприятия.</p>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-custom">Узнать креативные идеи</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- END block-4 -->

                <!-- START block-5 -->
                <div id="block-5" class="block block-5">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6 text-block">
                                <div class="title">
                                    <div class="icon-block">
                                        <i class="icon icon-users small"></i>
                                    </div>
                                    <div class="value">Участник Дуэта #EK_show</div>
                                </div>
                                <div class="desc">
                                    <p>За спиной сотни успешно проведенных мероприятий, в частности дуэтом.
                                        Профессиональный ведущий в Москве обеспечит залу отличное настроение, а
                                        слаженный дуэт ведущих в ином формате наполнит праздник драйвом. Концепция
                                        работы в паре подразумевает больший охват аудитории – каждый гость почувствует
                                        себя в центре событий. Вечер пройдет на волне позитива, особенно, если напарники
                                        годами работают вместе и замечательно дополняют друг друга.</p>
                                </div>
                                <div class="more-link">
                                    перейти на Сайт дуэта
                                    <div class="icon-block">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 slider-block">
                                <div class="slider-2">
                                    <div class="item-slide">
                                        <img src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-2-img-1.jpg" alt="">
                                    </div>
                                    <div class="item-slide">
                                        <img src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-2-img-1.jpg" alt="">
                                    </div>
                                    <div class="item-slide">
                                        <img src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-2-img-1.jpg" alt="">
                                    </div>
                                    <div class="item-slide">
                                        <img src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-2-img-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- END block-5 -->

                <!-- START block-6 -->
                <div id="block-6" class="block block-6">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="title">
                                    <div class="icon-block">
                                        <i class="icon icon-snowflake small"></i>
                                    </div>
                                    <div class="value">Благотворительность</div>
                                </div>
                                <div class="desc">
                                    <p>Посвятив себя развлекательной сфере деятельности, не забываю о тех, кто особо
                                        нуждается в радости и гармонии. Объединив усилия с командой единомышленников,
                                        занимаемся благотворительностью – помогаем нуждающимся. Хотите присоединиться к
                                        нам? Мы открыты к сотрудничеству!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- END block-6 -->

                <!-- START block-7 -->
                <div id="block-7" class="block block-7">
                    <div class="content">
                        <div class="title-block">
                            <span>Всегда на связи</span>
                            <i class="icon icon-arrow-blue-right"></i>
                            <i class="icon icon-arrow-blue-right"></i>
                            <i class="icon icon-arrow-blue-right"></i>
                        </div>
                        <div class="form">
                            <div class="desc">
                                <p>В любое время вы можете узнать свободна ли ваша дата! Оставьте свои данные и я
                                    непременно свяжусь с вами!</p>
                            </div>
                            <div class="content-form">
                                <form action="">
                                    <div class="field-item">
                                        <input type="text" class="field-text" placeholder="имя*">
                                    </div>
                                    <div class="field-item">
                                        <input type="text" class="field-text" placeholder="номер телефона*">
                                    </div>
                                    <div class="field-item">
                                        <input type="text" class="field-date" placeholder="желаемая дата мероприятия">
                                        <textarea class="field-long-text" placeholder="коментарий"></textarea>
                                    </div>
                                    <div class="action-form">
                                        <input type="submit" class="submit" value="Отправить">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- END block-7 -->

                <!-- START block-8 -->
                <div id="block-8" class="block block-8">
                    <div class="content">
                        <div class="title-block">
                            <span>Контакты</span>
                            <i class="icon icon-arrow-blue-right"></i>
                            <i class="icon icon-arrow-blue-right"></i>
                            <i class="icon icon-arrow-blue-right"></i>
                        </div>
                        <div class="row">
                            <div class="col-md-5"></div>
                            <div class="col-md-7">
                                <div class="contacts">
                                    <div class="name">ян кальянов</div>
                                    <div class="desc">
                                        <p>Звони, пиши, бронируй! <br>
                                            Действовать можно в любой последовательности.</p>
                                    </div>
                                    <div class="block-text-icon">
                                        <div class="icon">
                                            <div class="icon-content">
                                                <i class="fa fa-diamond" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <a href="javascript:void(0);">Свадебная презентация</a>
                                        </div>
                                    </div>
                                    <div class="block-text-icon">
                                        <div class="icon">
                                            <div class="icon-content">
                                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <a href="javascript:void(0);">Корпоративная презентация</a>
                                        </div>
                                    </div>
                                    <div class="phone">8 (925) 882-13-38</div>
                                    <div class="email">yan-event@ya.ru</div>
                                    <ul class="link-social">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-vk" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- END block-8 -->

            </div>
        </div>
    </div>
</div>


<script src="<?php print $base_root . $base_path . path_to_theme() ?>/js/main.js"></script>

</body>
</html>