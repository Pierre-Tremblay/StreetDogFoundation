<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
<nav class="headernav">
    <?php
        wp_nav_menu(array(
        'menu' => 'Menu principal',
        ));
    ?>
</nav>

    <?php wp_body_open(); ?>