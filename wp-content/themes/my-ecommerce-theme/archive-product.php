<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Correct WordPress way to include style.css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="site-header">
    <h1 class="site-title"><?php bloginfo('name'); ?></h1>

    <nav class="main-nav">
        <?php 
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-menu'
            ]);
        ?>
    </nav>
</header>

<main class="site-main">
