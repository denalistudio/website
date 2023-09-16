<?php

/**
 * The header for this theme
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Denali studio
 * @since Denali studio 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Denali studio">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/safari-pinned-tab.svg" color="#000000">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://denali.studio">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Denali studio">
    <meta property="og:description" content="Budujeme vaši přítomnost na internetu.">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/opengraph.png">
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="denali.studio">
    <meta property="twitter:url" content="https://denali.studio">
    <meta name="twitter:title" content="Denali studio">
    <meta name="twitter:description" content="Budujeme vaši přítomnost na internetu.">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/opengraph.png">
    <!-- Meta Tags Generated via https://www.opengraph.xyz -->

</head>

<body <?php body_class(); ?>>
    <?php
    get_template_part('template-parts/header-mobile');
    get_template_part('template-parts/header-desktop');
    ?>
    <div class="header_space"></div>