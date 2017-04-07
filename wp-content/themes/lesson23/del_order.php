<?php
/** Template Name: del_order_db
 *
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
get_header();?>
<div class="container">
    <div class="row">
        <h1>Результат удаления заказа</h1>
        <?php

        $link = mysqli_connect( "localhost", "root", "root", "kr" );
        $link->set_charset("utf8");
        $sql_del = "DELETE FROM orders WHERE order_id = ";
        foreach ($_POST as $key => $value ) {
            if (strpos($key, 'order_id' ) !== false) {
	            $sql_del .= $value;
            }
        }
        $sql_del = trim($sql_del, ' '); // first trim last space
        $sql_del = trim($sql_del, ','); // then trim trailing and prefixing commas
        $res = mysqli_query( $link, $sql_del );
        if ($res) {
            echo "<p class='report_message'>Данные успешно удалены!</p>";
        } else {
            echo "<p class='report_message alert-danger'>Ошибка записи в БД!:".$link->error."</p>"."<br><br>"
                 .$sql_del."<br>"; //Maybe need fix value use - mysqli_real_escape_string($link, $sql_add_new);
        }
        ?>
        <div class="update_db">
            <?php
            while ( have_posts() ) : the_post();
                the_content(); /*entry-content*/
            endwhile; // End of the loop.
            ?>
        </div>
    </div>
</div>
