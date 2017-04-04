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
	        <?php
	        $host="localhost";
	        $user="root";
	        $pass="root";
	        $db_name="kr";
	        $link= mysqli_connect("localhost", "root", "root", $db_name);
	        $link->set_charset("utf8")
	        ?>
            <div class="connect_message">
		        <?php
		        if (!$link) {
			        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
			        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
			        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
			        exit;
		        }
		        echo "Соединение с MySQL установлено!" . PHP_EOL;

		        $db_connect = mysqli_select_db($link, $db_name);
		        if (!$db_connect) {
			        echo "Ошибка соединения с базой данных!";
			        exit;
		        }
		        ?>
                <p class="authorization">Авторизация: <span class="author"><?php echo get_current_user()
			            ?></span></p>
            </div>
            <nav id="site-navigation" class="main-navigation container" role="navigation">
		        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
            </nav><!-- #site-navigation -->
        </div>

    </header><!-- #masthead -->

    <div id="content" class="site-content">