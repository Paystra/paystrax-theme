<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">
<head>
    <!-- Google Tag Manager -->
    <!-- End Google Tag Manager -->
	<!-- Google Analytics -->
	<!-- End Google Analytics -->
	<script src="https://www.google.com/recaptcha/api.js"></script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php img(); ?>/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php img(); ?>/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php img(); ?>/fav/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:image" content="https://paystra.com/wp-content/uploads/2020/01/paystra-og.jpg" />
    <link rel="stylesheet" href="https://use.typekit.net/ysy6loa.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&display=swap" rel="stylesheet">
	<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
		
    <?php wp_head(); ?>

</head>

<body>

<?php if(is_front_page()) {
    $class = "home";
    $logo = get_template_directory_uri().'/assets/images/logo-white.svg';
} else {
    $class = "internal";
    $logo = get_template_directory_uri().'/assets/images/logo-color.svg';
} ?>

<header class="<?php echo $class; ?>">
    <div class="wrapper">
        <a href="<?php echo site_url(); ?>" class="logo">
            <img src="<?php echo $logo; ?>" class="default">
            <img src="<?php img(); ?>/logo-blue.svg" class="scrolled">
        </a>
        <div class="menu">
            <?php
            $defaults = array(
                'theme_location' => 'header_menu',
                'container' => '',
                'items_wrap' => '<ul class="navigation">%3$s</ul>'
            );
            wp_nav_menu($defaults);
            ?>
            <a href="#" class="side-menu-btn" style="display: none;">
                <img src="<?php img(); ?>/icon-side-menu.svg">
            </a>
        </div>
        <div class="mobile-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

<div class="mobile-menu">
    <div class="mobile-close"></div>
    <div class="wrapper">
        <div class="wrap">
            <?php
            $defaults = array(
                'theme_location' => 'header_menu',
                'container' => '',
                'items_wrap' => '<ul class="navigation">%3$s</ul>'
            );
            wp_nav_menu($defaults);
            ?>
        </div>
    </div>
</div>

<div class="hover-menu" style="display: none;">
    <div class="left">
        <?php
        $defaults = array(
            'theme_location' => 'header_sub_menu_1',
            'container' => '',
            'items_wrap' => '<ul class="navigation">%3$s</ul>'
        );
        wp_nav_menu($defaults);
        ?>
    </div>
    <div class="right">
        <?php
        $defaults = array(
            'theme_location' => 'header_sub_menu_2',
            'container' => '',
            'items_wrap' => '<ul class="navigation">%3$s</ul>'
        );
        wp_nav_menu($defaults);
        ?>
    </div>
</div>