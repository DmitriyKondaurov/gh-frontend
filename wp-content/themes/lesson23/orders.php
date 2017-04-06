<div class="tabs__content container active">
    <div class="row">
        <h1>Заказы по складу</h1>
        <form id="orders_form" action="<?php echo get_page_link();
        ?>update_db/" method="post">
        <table border="2">
            <thead>
            <tr>
                <th>Номер заказа</th>
                <th>Груз</th>
                <th>Масса груза (т.)</th>
                <th>Фамилия клиента</th>
                <th>Гос. № машины</th>
                <th>Фамилия водителя</th>
            </tr>
            </thead>
            <tbody>
			<?php
			$link = mysqli_connect( "localhost", "root", "root", "kr" );
			$link->set_charset("utf8");
			$sql_orders = "SELECT * FROM orders NATURAL JOIN cargo NATURAL JOIN clients NATURAL JOIN cars 
                        NATURAL JOIN drivers ORDER BY order_id";
			$res = $link->query( $sql_orders );
			$n=1;
			if ( $res ) {
				while ( $row = $res->fetch_assoc() ) {
				    ?>
                    <tr>
                        <td>
                            <input type="number" name="order_id_<?php echo $n ?>" value="<?php echo $row['order_id'] ?>" readonly>
                        </td>
                        <td>
                            <select name='cargo_<?php echo $n ?>' required>
                                <option value='<?php echo $row['cargo_id'] ?>' selected>
				                    <?php echo $row['cargo_type'] ?></option>
					        <?php $sql = mysqli_query( $link, "SELECT * FROM cargo" );
			                    while ( $result = mysqli_fetch_array( $sql ) ) {
				                    echo "<option value='" . $result['cargo_id'] . "'>" . $result['cargo_type'] .
                                         "</option>";
			                    }
			                    //	mysqli_close($link); //закроем соединение с БД
			                    ?>
                            </select>
                        </td>
                        <td>
                            <input type="number" name="order_value_<?php echo $n ?>" value="<?php echo $row['order_value'] ?>" required>
                        </td>
                        <td>
                            <select name='clients_surname_<?php echo $n ?>' required>
                                <option value="<?php echo $row['clients_id'] ?>" selected><?php echo $row['surname'] ?></option>
                                <?php $sql = mysqli_query( $link, "SELECT * FROM clients" );
                                while ( $result = mysqli_fetch_array( $sql ) ) {
                                    echo "<option value='" . $result['clients_id'] . "'>" . $result['surname'] .
                                         "</option>";
                                }
                                //	mysqli_close($link); //закроем соединение с БД
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name='car_<?php echo $n ?>' required>
                                <option value='<?php echo $row['cars_id'] ?>' selected><?php echo $row['gov_number'] ?></option>
                                <?php $sql = mysqli_query( $link, "SELECT * FROM cars" );
                                while ( $result = mysqli_fetch_array( $sql ) ) {
                                    echo "<option value='" . $result['cars_id'] . "'>" . $result['gov_number'] .
                                         "</option>";
                                }
                                //	mysqli_close($link); //закроем соединение с БД
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name='surname_driver_<?php echo $n ?>' required>
                                <option value='<?php echo $row['drivers_id'] ?>' selected><?php echo $row['surname_driver'] ?></option>
                                <?php $sql = mysqli_query( $link, "SELECT * FROM drivers" );
                                while ( $result = mysqli_fetch_array( $sql ) ) {
                                    echo "<option value='" . $result['drivers_id'] . "'>" . $result['surname_driver'] .
                                         "</option>";
                                }
                                //	mysqli_close($link); //закроем соединение с БД
                                ?>
                            </select>
                        </td>
					</tr><?php
                    $n++;
				}
			}
			?>
            </tbody>
        </table>
        </form>
        <input type="submit" form="orders_form" value="СОХРАНИТЬ ИЗМЕНЕНИЯ">
    </div>
</div>