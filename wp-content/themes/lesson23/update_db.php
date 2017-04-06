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
get_header();
$link = mysqli_connect( "localhost", "root", "root", "kr" );
$link->set_charset("utf8");
foreach ($_POST as $key => $value ) {
	$sql_update = "UPDATE orders_copy SET ";
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
                echo "<p>Дані успішно додано в БД</p>";
                } else {
                echo "<p>Виникла помилка:".$link->error."</p>";//Maybe need fix value use - mysqli_real_escape_string
		        //($link, $value);
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
		        echo "<p>Дані успішно додано в БД</p>";
	        } else {
		        echo "<p>Виникла помилка:".$link->error."</p>";//Maybe need fix value use - mysqli_real_escape_string
		        //($link, $value);
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
		        echo "<p>Дані успішно додано в БД</p>";
	        } else {
		        echo "<p>Виникла помилка:".$link->error."</p>";//Maybe need fix value use - mysqli_real_escape_string
		        //($link, $value);
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
		        echo "<p>Дані успішно додано в БД</p>";
	        } else {
		        echo "<p>Виникла помилка:".$link->error."</p>";//Maybe need fix value use - mysqli_real_escape_string
		        //($link, $value);
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
		        echo "<p>Дані успішно відкориговані в БД</p>";
	        } else {
		        echo "<p>Виникла помилка:".$link->error."</p>"; //Maybe need fix value use - mysqli_real_escape_string
                //($link, $value);
	        }
            break;
        default:
            return 'Key wrong !!!';
	        echo "<p>Key wrong !!!</p>";
    }
}


//$spamAsString = '';
//if (array_key_exists('spam', $_REQUEST)) {
//    $spam = $_REQUEST['spam']; // array!!!
//	// Добавити код, щоб масив опцій відображався як рядок символів
//	foreach ($_REQUEST['spam'] as $key => $value ) {
//	    $spam[] = $value;
//    }
//}
//$c = mysqli_connect("localhost", "myuser", "111", "mydatabase");
//$firstName = mysqli_real_escape_string($c, $firstName);
//
//$sql = "INSERT INTO anketa (firstname, secondname, gender, age, birthday, familystatus, socialstatus, address, activities, frequency, bookshaveread, multipleselect, comments, spam, complexity)".
//    " VALUES ('$firstName', '$secondName', '$genderWord', '$age', '$birthday', '$familyStatusWord',".
//    "'$statusSocial', '$address', '$activitiesAsString', '$frequency', '$booksHaveRead', '$multipleselAsString', '$comments', '$spamAsString', '$complexity');";
//echo $sql;
//$res = $c->query($sql);
//if ($res) {
//    echo "<p>Дані успішно додано в БД";
//} else {
//    echo "Виникла помилка:".$c->error;
//}
?>
<div class="update_db">
			<?php
			while ( have_posts() ) : the_post();
				the_content(); /*entry-content*/
			endwhile; // End of the loop.
			?>
</div>