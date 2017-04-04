<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lesson23
 */

get_header(); ?>


				<h1>Заказы склада №1</h1>
                <table border="2">
                    <thead>
                    <tr>
                        <th>order id</th>
                        <th>cargo</th>
                        <th>value</th>
                        <th>clients</th>
                        <th>cars</th>
                        <th>drivers</th>
                    </tr>
                    </thead>
                    <tbody>
                <?php
                $link= mysqli_connect("localhost", "root", "root", "kr");

                $sql = "SELECT * FROM orders;";

                $res = $c->query($sql);
                if ($res) {
                    while($row = $res->fetch_assoc()) {?>
	                    <tr>
	                    <?php
                        echo "<td>"
                             .$row['order_id']."</td><td>"
                             .$row['cargo']."</td><td>"
                             .$row['value']."</td><td>"
                             .$row['clients']."</td><td>"
                             .$row['cars']."</td><td>"
                             .$row['drivers']."</td>";
	                    ?>
	                    </tr>
	                    <?php
                    }
                }
                ?>
                    </tbody>
                </table>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
