<div class="tabs__content container active">
    <div class="row">
        <h1>Заказы по складу</h1>
        <form id="orders_form" action="#" method="post">
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
			if ( $res ) {
				while ( $row = $res->fetch_assoc() ) {
				    $n=1;?>
                    <tr>
                        <td>
                            <input type="number" name="order_id" value="<?php echo $row['order_id'] ?>" readonly>
                        </td>
                        <td>
                            <select name='cargo_<?php echo $n ?>' required>
                                <option value='<?php echo $row['cargo_type'] ?>' selected>
				                    <?php echo $row['cargo_type'] ?></option>
					        <?php $sql = mysqli_query( $link, "SELECT * FROM cargo" );
			                    while ( $result = mysqli_fetch_array( $sql ) ) {
				                    echo "<option value='" . $result['cargo_type'] . "'>" . $result['cargo_type'] .
                                         "</option>";
			                    }
			                    //	mysqli_close($link); //закроем соединение с БД
			                    ?>
                            </select>
                        </td>
                        <td>
                            <input type="number" name="order_value" value="<?php echo $row['order_value'] ?>">
                        </td>
                        <td>
                            <select name='clients_surname_<?php echo $n ?>' required>
                                <option value='<?php echo $row['surname'] ?>' selected>
                                    <?php echo $row['surname'] ?></option>
                                <?php $sql = mysqli_query( $link, "SELECT * FROM clients" );
                                while ( $result = mysqli_fetch_array( $sql ) ) {
                                    echo "<option value='" . $result['surname'] . "'>" . $result['surname'] .
                                         "</option>";
                                }
                                //	mysqli_close($link); //закроем соединение с БД
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name='car_<?php echo $n ?>' required>
                                <option value='<?php echo $row['gov_number'] ?>' selected>
                                    <?php echo $row['gov_number'] ?></option>
                                <?php $sql = mysqli_query( $link, "SELECT * FROM cars" );
                                while ( $result = mysqli_fetch_array( $sql ) ) {
                                    echo "<option value='" . $result['gov_number'] . "'>" . $result['gov_number'] .
                                         "</option>";
                                }
                                //	mysqli_close($link); //закроем соединение с БД
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name='surname_driver_<?php echo $n ?>' required>
                                <option value='<?php echo $row['surname_driver'] ?>' selected>
                                    <?php echo $row['surname_driver'] ?></option>
                                <?php $sql = mysqli_query( $link, "SELECT * FROM drivers" );
                                while ( $result = mysqli_fetch_array( $sql ) ) {
                                    echo "<option value='" . $result['surname_driver'] . "'>" . $result['surname_driver'] .
                                         "</option>";
                                }
                                //	mysqli_close($link); //закроем соединение с БД
                                ?>
                            </select>
                        </td>
					</tr><?php
				}
			}
			?>
            </tbody>
        </table>
        </form>
        <input type="submit" form="orders_form" value="СОХРАНИТЬ ИЗМЕНЕНИЯ">
    </div>
</div>