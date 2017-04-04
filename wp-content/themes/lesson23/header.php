<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lesson23
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="favicon.png">
    <title>Курсовая работа по КПЗ</title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <div class="wrapper">
	        <?php if ( is_active_sidebar( 'logo' ) ) : ?>
		        <?php dynamic_sidebar( 'logo' ); ?>
	        <?php endif; ?>
	        <?php if ( is_active_sidebar( 'top_search' ) ) : ?>
		        <?php dynamic_sidebar( 'top_search' ); ?>
	        <?php endif; ?>
            <nav id="site-navigation" class="main-navigation container" role="navigation">
		        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">