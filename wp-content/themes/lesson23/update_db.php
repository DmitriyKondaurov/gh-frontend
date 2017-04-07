<?php
/** Template Name: Update_db_page
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
        <h1>Результат корректировки</h1>
        <div>
<?php
$link = mysqli_connect( "localhost", "root", "root", "kr" );
$link->set_charset("utf8");
foreach ($_POST as $key => $value ) {
	$sql_update = "UPDATE orders SET ";
	switch(true)
    {
        case strpos($key, 'order_id' ) !== false:
            $sql_condition = " WHERE " . "order_id" . " = " . $value;
            break;

        case strpos($key, 'cargo' ) !== false:
	        if (is_numeric($value))
		        $sql_update .= "cargo_id" . " = " . $value . ", ";
	        else
		        $sql_update .= "cargo_id" . " = " . "'" . $value . "'" . ", ";
	        $sql_update = trim($sql_update, ' '); // first trim last space
	        $sql_update = trim($sql_update, ','); // then trim trailing and prefixing commas
	        $sql_update .= $sql_condition;
	        $res = mysqli_query($link, $sql_update);
	        if ($res) {
		        echo "<p class='report_message'>Данные успешно откорректированны!</p>";
                } else {
                echo "<p class='report_message alert-danger'>Ошибка записи в БД!:".$link->error."</p>";
                //Maybe need fix value use - mysqli_real_escape_string ($link, $sql_update);
                }
	        break;
        case strpos($key, 'order_value' ) !== false:
	        if (is_numeric($value))
		        $sql_update .= "order_value" . " = " . $value . ", ";
	        else
		        $sql_update .= "order_value" . " = " . "'" . $value . "'" . ", ";
	        $sql_update = trim($sql_update, ' '); // first trim last space
	        $sql_update = trim($sql_update, ','); // then trim trailing and prefixing commas
	        $sql_update .= $sql_condition;
	        $res = mysqli_query( $link, $sql_update );
	        if ($res) {
		        echo "<p class='report_message'>Данные успешно откорректированны!</p>";
	        } else {
		        echo "<p class='report_message alert-danger'>Ошибка записи в БД!:".$link->error."</p>";
		        //Maybe need fix value use - mysqli_real_escape_string ($link, $sql_update);
	        }
            break;
        case strpos($key, 'clients_surname' ) !== false:
	        if (is_numeric($value))
		        $sql_update .= "clients_id" . " = " . $value . ", ";
	        else
		        $sql_update .= "clients_id" . " = " . "'" . $value . "'" . ", ";
	        $sql_update = trim($sql_update, ' '); // first trim last space
	        $sql_update = trim($sql_update, ','); // then trim trailing and prefixing commas
	        $sql_update .= $sql_condition;
	        $res = mysqli_query( $link, $sql_update );
	        if ($res) {
		        echo "<p class='report_message'>Данные успешно откорректированны!</p>";
	        } else {
		        echo "<p class='report_message alert-danger'>Ошибка записи в БД!:".$link->error."</p>";
		        //Maybe need fix value use - mysqli_real_escape_string ($link, $sql_update);
	        }
            break;
        case strpos($key, 'car' ) !== false:
	        if (is_numeric($value))
		        $sql_update .= "cars_id" . " = " . $value . ", ";
	        else
		        $sql_update .= "cars_id" . " = " . "'" . $value . "'" . ", ";
	        $sql_update = trim($sql_update, ' '); // first trim last space
	        $sql_update = trim($sql_update, ','); // then trim trailing and prefixing commas
	        $sql_update .= $sql_condition;
	        $res = mysqli_query( $link, $sql_update );
	        if ($res) {
		        echo "<p class='report_message'>Данные успешно откорректированны!</p>";
	        } else {
		        echo "<p class='report_message alert-danger'>Ошибка записи в БД!:".$link->error."</p>";
		        //Maybe need fix value use - mysqli_real_escape_string ($link, $sql_update);
	        }
            break;
        case strpos($key, 'surname_driver' ) !== false:
	        if (is_numeric($value))
		        $sql_update .= "drivers_id" . " = " . $value . ", ";
	        else
		        $sql_update .= "drivers_id" . " = " . "'" . $value . "'" . ", ";
	        $sql_update = trim($sql_update, ' '); // first trim last space
	        $sql_update = trim($sql_update, ','); // then trim trailing and prefixing commas
	        $sql_update .= $sql_condition;
	        $res = mysqli_query( $link, $sql_update );
	        if ($res) {
		        echo "<p class='report_message'>Данные успешно откорректированны!</p>";
	        } else {
		        echo "<p class='report_message alert-danger'>Ошибка записи в БД!:".$link->error."</p>";
		        //Maybe need fix value use -  mysqli_real_escape_string ($link, $sql_update);
	        }
            break;
        default:
            return 'Key wrong !!!';
	        echo "<p class='report_message alert-danger'>Key wrong !!!</p>";
    }
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
</div>
