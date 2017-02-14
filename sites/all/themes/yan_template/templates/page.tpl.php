<?php if (theme_get_setting('scrolltop_display')): ?>
    <div id="toTop"><span class="glyphicon glyphicon-chevron-up"></span></div>
<?php endif; ?>

<?php if ($page['header_top_left'] || $page['header_top_right']) : ?>
    <!-- #header-top -->
    <div id="header-top" class="clearfix">
        <div class="container">

            <!-- #header-top-inside -->
            <div id="header-top-inside" class="clearfix">
                <div class="row">

                    <?php if ($page['header_top_left']) : ?>
                        <div class="<?php print $header_top_left_grid_class; ?>">
                            <!-- #header-top-left -->
                            <div id="header-top-left" class="clearfix">
                                <?php print render($page['header_top_left']); ?>
                            </div>
                            <!-- EOF:#header-top-left -->
                        </div>
                    <?php endif; ?>

                    <?php if ($page['header_top_right']) : ?>
                        <div class="<?php print $header_top_right_grid_class; ?>">
                            <!-- #header-top-right -->
                            <div id="header-top-right" class="clearfix">
                                <?php print render($page['header_top_right']); ?>
                            </div>
                            <!-- EOF:#header-top-right -->
                        </div>
                    <?php endif; ?>

                </div>
            </div>
            <!-- EOF: #header-top-inside -->

        </div>
    </div>
    <!-- EOF: #header-top -->
<?php endif; ?>

<?php if ($page['header']) : ?>
    <!-- header -->
    <header id="header" role="banner" class="clearfix">
        <div class="container">
            <!-- #header-inside -->
            <div id="header-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <?php print render($page['header']); ?>
                    </div>
                </div>
            </div>
            <!-- EOF: #header-inside -->
        </div>
    </header>
    <!-- EOF: #header -->
<?php endif; ?>

<?php if ($page['navigation']) : ?>
    <!-- #main-navigation -->
    <div id="main-navigation" class="clearfix">
        <div class="container">
            <!-- #main-navigation-inside -->
            <div id="main-navigation-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <nav role="navigation">
                            <?php print drupal_render($page['navigation']); ?>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- EOF: #main-navigation-inside -->
        </div>
    </div>
    <!-- EOF: #main-navigation -->
<?php endif; ?>

<?php if ($page['banner']) : ?>
    <!-- #banner -->
    <div id="banner" class="clearfix">
        <div class="container">

            <!-- #banner-inside -->
            <div id="banner-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <?php print render($page['banner']); ?>
                    </div>
                </div>
            </div>
            <!-- EOF: #banner-inside -->

        </div>
    </div>
    <!-- EOF:#banner -->
<?php endif; ?>

<?php global $base_path;
global $base_root; ?>


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
                    <?php if ($page['general_menu']) : ?>
                        <?php print render($page['general_menu']); ?>
                    <?php endif; ?>
                    <div class="contact-menu">
                        <div class="phone">8 (909) 099-99-00</div>
                        <div class="email">yan-event@ya.ru</div>

                        <?php if (theme_get_setting('socialicon_display', 'yan_template')): ?>
                            <?php
                            $facebook_url = check_plain(theme_get_setting('facebook_url', 'yan_template'));
                            $vk_url = check_plain(theme_get_setting('vk_url', 'yan_template'));
                            $instagram_url = check_plain(theme_get_setting('instagram_url', 'yan_template'));
                            $youtube_url = check_plain(theme_get_setting('youtube_url', 'yan_template'));
                            ?>
                            <ul class="link-social">
                                <?php if ($vk_url): ?>
                                    <li>
                                        <a target="_blank" href="<?php print $vk_url; ?>">
                                            <i class="fa  fa-vk" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($facebook_url): ?>
                                    <li>
                                        <a target="_blank" href="<?php print $facebook_url; ?>">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($instagram_url): ?>
                                    <li>
                                        <a target="_blank" href="<?php print $instagram_url; ?>">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($youtube_url): ?>
                                    <li>
                                        <a target="_blank" href="<?php print $youtube_url; ?>">
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </nav>
            </div>
            <div class="page-container">

                <?php if ($page['block_header']) : ?>
                    <!-- START block-1 -->
                    <?php print render($page['block_header']); ?>
                    <!-- END block-1 -->
                <?php endif; ?>


                <?php if ($page['block_content']) : ?>
                    <?php print render($page['block_content']); ?>
                <?php endif; ?>


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
                                        <img
                                            src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-1-img-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-slide">
                                        <img
                                            src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-1-img-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-slide">
                                        <img
                                            src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-1-img-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-slide">
                                        <img
                                            src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-1-img-1.jpg"
                                            alt="">
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
                                        <img
                                            src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-2-img-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-slide">
                                        <img
                                            src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-2-img-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-slide">
                                        <img
                                            src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-2-img-1.jpg"
                                            alt="">
                                    </div>
                                    <div class="item-slide">
                                        <img
                                            src="<?php print $base_root . $base_path . path_to_theme() ?>/images/slider-2-img-1.jpg"
                                            alt="">
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


<!-- #page -->
<div id="page" class="clearfix">

    <?php if ($page['highlighted']): ?>
        <!-- #top-content -->
        <div id="top-content" class="clearfix">
            <div class="container">

                <!-- #top-content-inside -->
                <div id="top-content-inside" class="clearfix">
                    <div class="row">
                        <div class="col-md-12">
                            <?php print render($page['highlighted']); ?>
                        </div>
                    </div>
                </div>
                <!-- EOF:#top-content-inside -->

            </div>
        </div>
        <!-- EOF: #top-content -->
    <?php endif; ?>

    <!-- #main-content -->
    <div id="main-content">
        <div class="container">

            <!-- #messages-console -->
            <?php if ($messages): ?>
                <div id="messages-console" class="clearfix">
                    <div class="row">
                        <div class="col-md-12">
                            <?php print $messages; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- EOF: #messages-console -->

            <div class="row">

                <?php if ($page['sidebar_first']): ?>
                    <aside class="<?php print $sidebar_grid_class; ?>">
                        <!--#sidebar-first-->
                        <section id="sidebar-first" class="sidebar clearfix">
                            <?php print render($page['sidebar_first']); ?>
                        </section>
                        <!--EOF:#sidebar-first-->
                    </aside>
                <?php endif; ?>


                <section class="<?php print $main_grid_class; ?>">

                    <!-- #main -->
                    <div id="main" class="clearfix">

                        <?php if ($breadcrumb && theme_get_setting('breadcrumb_display')): ?>
                            <!-- #breadcrumb -->
                            <div id="breadcrumb" class="clearfix">
                                <!-- #breadcrumb-inside -->
                                <div id="breadcrumb-inside" class="clearfix">
                                    <?php print $breadcrumb; ?>
                                </div>
                                <!-- EOF: #breadcrumb-inside -->
                            </div>
                            <!-- EOF: #breadcrumb -->
                        <?php endif; ?>

                        <?php if ($page['promoted']): ?>
                            <!-- #promoted -->
                            <div id="promoted" class="clearfix">
                                <div id="promoted-inside" class="clearfix">
                                    <?php print render($page['promoted']); ?>
                                </div>
                            </div>
                            <!-- EOF: #promoted -->
                        <?php endif; ?>

                        <!-- EOF:#content-wrapper -->
                        <div id="content-wrapper">

                            <?php print render($title_prefix); ?>
                            <?php if ($title): ?>
                                <h1 class="page-title"><?php print $title; ?></h1>
                            <?php endif; ?>
                            <?php print render($title_suffix); ?>

                            <?php print render($page['help']); ?>

                            <!-- #tabs -->
                            <?php if ($tabs): ?>
                                <div class="tabs">
                                    <?php print render($tabs); ?>
                                </div>
                            <?php endif; ?>
                            <!-- EOF: #tabs -->

                            <!-- #action links -->
                            <?php if ($action_links): ?>
                                <ul class="action-links">
                                    <?php print render($action_links); ?>
                                </ul>
                            <?php endif; ?>
                            <!-- EOF: #action links -->

                            <?php print render($page['content']); ?>
                            <?php print $feed_icons; ?>

                        </div>
                        <!-- EOF:#content-wrapper -->

                    </div>
                    <!-- EOF:#main -->

                </section>

                <?php if ($page['sidebar_second']): ?>
                    <aside class="<?php print $sidebar_grid_class; ?>">
                        <!--#sidebar-second-->
                        <section id="sidebar-second" class="sidebar clearfix">
                            <?php print render($page['sidebar_second']); ?>
                        </section>
                        <!--EOF:#sidebar-second-->
                    </aside>
                <?php endif; ?>

            </div>

        </div>
    </div>
    <!-- EOF:#main-content -->

    <?php if ($page['bottom_content']): ?>
        <!-- #bottom-content -->
        <div id="bottom-content" class="clearfix">
            <div class="container">

                <!-- #bottom-content-inside -->
                <div id="bottom-content-inside" class="clearfix">
                    <div class="row">
                        <div class="col-md-12">
                            <?php print render($page['bottom_content']); ?>
                        </div>
                    </div>
                </div>
                <!-- EOF:#bottom-content-inside -->

            </div>
        </div>
        <!-- EOF: #bottom-content -->
    <?php endif; ?>

</div>
<!-- EOF:#page -->

<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']): ?>
    <!-- #footer -->
    <footer id="footer" class="clearfix">
        <div class="container">

            <!-- #footer-inside -->
            <div id="footer-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-3">
                        <?php if ($page['footer_first']): ?>
                            <div class="footer-area">
                                <?php print render($page['footer_first']); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-3">
                        <?php if ($page['footer_second']): ?>
                            <div class="footer-area">
                                <?php print render($page['footer_second']); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-3">
                        <?php if ($page['footer_third']): ?>
                            <div class="footer-area">
                                <?php print render($page['footer_third']); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-3">
                        <?php if ($page['footer_fourth']): ?>
                            <div class="footer-area">
                                <?php print render($page['footer_fourth']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- EOF: #footer-inside -->

        </div>
    </footer>
    <!-- EOF #footer -->
<?php endif; ?>

<footer id="subfooter" class="clearfix">
    <div class="container">

        <!-- #subfooter-inside -->
        <div id="subfooter-inside" class="clearfix">
            <div class="row">
                <div class="col-md-12">
                    <!-- #subfooter-left -->
                    <div class="subfooter-area">

                        <?php if ($page['footer']): ?>
                            <?php print render($page['footer']); ?>
                        <?php endif; ?>

                    </div>
                    <!-- EOF: #subfooter-left -->
                </div>
            </div>
        </div>
        <!-- EOF: #subfooter-inside -->

    </div>
</footer>
<!-- EOF:#subfooter -->