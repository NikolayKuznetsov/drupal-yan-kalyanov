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

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- start wow -->
    <script src="<?php print $base_root . $base_path . path_to_theme() ?>/js/wow/wow.js"></script>
    <link rel="stylesheet" href="<?php print $base_root . $base_path . path_to_theme() ?>/css/animate.css"/>
    <!-- .end wow -->

    <script src="<?php print $base_root . $base_path . path_to_theme() ?>/js/jquery.viewportChecker.js"></script>
    <!-- start parallax -->
<!--    <script src="--><?php //print $base_root . $base_path . path_to_theme() ?><!--/js/parallax/parallax.js"></script>-->
    <!-- .end parallax -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>

<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>

<script src="<?php print $base_root . $base_path . path_to_theme() ?>/js/main.js"></script>

</body>
</html>