<?php
/**
 * Created by PhpStorm.
 * User: invis
 * Date: 02.04.2017
 * Time: 10:10
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lesson23
 */
get_header(); ?>
	<main id="main" class="site-main" role="main">

        <?php
        include 'orders.php';
        include 'edit_orders.php';
        include 'new_order.php';
        include 'cargo.php';
        include 'clients.php';
        include 'drivers.php';
        include 'cars.php';
        ?>
    </main><!-- #main -->

<?php
get_sidebar();
get_footer();

