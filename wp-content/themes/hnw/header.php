<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=edge" /><![endif]-->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="row">
        <div class="col">
            <img class="site-header__menu-logo" src="<?php echo get_template_directory_uri(); ?>/images/menu-logo.svg" alt="holding-cfa-logo">
            <span class="site-header__title">Hire a charterholder</span>
        </div>
        <div class="col">
            <a href="" class="site-header__language active">English</a>
            <a href="" class="site-header__language">Français</a>
            <a href="" class="site-header__menu">
                <img src="<?php echo get_template_directory_uri(); ?>/images/menu-icon.svg" alt="">
            </a>
        </div>
    </div>
    <nav class="nav" data-module="navigation">
    <div class="nav--container bg-blue">
        <a href="" class="close button">
            <img src="<?php echo get_template_directory_uri(); ?>/images/close-icon.svg" alt="" class="button__icon">
        </a>
        <?php
            wp_nav_menu( array(
                'echo' => true,
                'menu' => 'Main',
                'container' => null
            ) )
        ?>
    </div>
</nav>
</header>