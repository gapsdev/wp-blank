<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>

<nav class="primary-navigation">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'menu_class'     => 'primary-menu-class',
        'container'      => 'div',
        'container_class'=> 'primary-menu-container'
    ));
    ?>
</nav>
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
</header>