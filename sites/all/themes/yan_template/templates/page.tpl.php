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
                        <?php
                            $emailContact = check_plain(theme_get_setting('email'));
                            $phoneContact = check_plain(theme_get_setting('phone'));
                        ?>
                        <?php if ($phoneContact): ?>
                            <div class="phone">
                                <?php print $phoneContact; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($phoneContact): ?>
                            <div class="email">
                                <a href="mailto:<?php print $emailContact; ?>">
                                    <?php print $emailContact; ?>
                                </a>
                            </div>
                        <?php endif; ?>

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

                <!-- #page -->
                <div id="page" class="clearfix">

                    <?php if ($page['highlighted']): ?>
                        <!-- #top-content -->
                        <div id="top-content" class="clearfix">
                            <div class="container-fluid">

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
                        <div class="container-fluid">

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
                            <div class="container-fluid">

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

                <?php if ($page['block_header']) : ?>
                    <!-- START block-1 -->
                    <?php print render($page['block_header']); ?>
                    <!-- END block-1 -->
                <?php endif; ?>


                <?php if ($page['block_content']) : ?>
                    <?php print render($page['block_content']); ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>


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

<?php if ($page['footer']): ?>
<footer id="subfooter" class="clearfix">
    <div class="container">
        <!-- #subfooter-inside -->
        <div id="subfooter-inside" class="clearfix">
            <div class="row">
                <div class="col-md-12">
                    <!-- #subfooter-left -->
                    <div class="subfooter-area">
                        <?php print render($page['footer']); ?>
                    </div>
                    <!-- EOF: #subfooter-left -->
                </div>
            </div>
        </div>
        <!-- EOF: #subfooter-inside -->
    </div>
</footer>
<!-- EOF:#subfooter -->
<?php endif; ?>

<?php if ($success): ?>
    <div class="success_form_popup open">
        <div class="success_form_popup_content">
            <div class="text">
                <p>Ваш запрос успешно отправлен</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a href="#" class="btn btn-custom close-request-popup">Ok</a>
                </div>
            </div>
        </div>
        <div class="success_form_popup_bg"></div>
    </div>
<?php endif; ?>


<div id="modal-form-learn-creative-ideas">
    <div class="container-popup">
        <div class="container-popup-content">
            <div class="link-close">
                <a class="close-popup" href="#"><i class="icon icon-close"></i></a>
            </div>
            <?php
                $block = block_load('webform', 'client-block-11');
                $block_content = _block_render_blocks(array($block));
                $build = _block_get_renderable_array($block_content);
                print drupal_render($build);
            ?>
        </div>
        <div class="container-popup-bg"></div>
    </div>
</div>
