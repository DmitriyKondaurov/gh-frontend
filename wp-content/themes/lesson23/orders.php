<?php /* Template Name: CustomPage_orders_list */
get_header(); ?>
    <div class="container">
    <div class="row">
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
			$link = mysqli_connect( "localhost", "root", "root", "kr" );
			$link->set_charset("utf8");
			$orders = "SELECT order_id, cargo_type, order_value, clients_name, surname, brend, gov_number, name_driver, surname_driver FROM orders NATURAL JOIN cargo NATURAL JOIN clients NATURAL JOIN cars NATURAL JOIN drivers ORDER BY order_id;";

			$res = $link->query( $orders );
			if ( $res ) {
				while ( $row = $res->fetch_assoc() ) {
					?><tr><?php
					echo "<td>"
					     . $row['order_id'] . "</td><td>"
					     . $row['cargo_type'] . "</td><td>"
					     . $row['order_value'] . "</td><td>"
					     . $row['clients_name'] . " "
					     . $row['surname'] . "</td><td>"
					     . $row['brend'] . " "
					     . $row['gov_number'] . "</td><td>"
					     . $row['name_driver'] . " "
					     . $row['surname_driver'] . "</td>";
					?></tr><?php
				}
			}
			?>
            </tbody>
        </table>
        <div class="order_list">
			<?php
			while ( have_posts() ) : the_post();
				the_content(); /*entry-content*/
			endwhile; // End of the loop.
			?>
        </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
