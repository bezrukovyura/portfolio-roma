<!doctype html>
<html>
	<head>
        <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
        <meta name="robots" content="noindex">
        <link rel="stylesheet" href="/wp-content/themes/portfolio-roma/style_tpl.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>" />

        <meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(); ?>"/>
        <meta property="og:description" content="<?php bloginfo('description'); ?>"/>
        <meta property="og:image" content="http://creative5.net/wp-content/themes/portfolio-roma/img/ic.jpg"/>
        <meta property="vk:image"  content="http://creative5.net/wp-content/themes/portfolio-roma/img/ic.jpg" />
    </head>

    <div class="mobile-menu-text">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </div>

    <div class="wrapp-roma megamenu">
        <div class="top-menu">
            <a href="/" class="logo">CREATIVE <font>5</font></a>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            <div class="mobile-menu" onClick="toggle(this)">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>

    <div class="wrapp-roma main-content">
        <div class="wrapper">