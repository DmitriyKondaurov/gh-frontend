<div class="tabs__content container">
    <div class="row">
        <h1>Клиенты</h1>
        <form id="clients_form" action="#" method="post">
        <table border="2">
            <thead>
            <tr>
                <th>ID Клиента</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Адресс</th>
                <th>VIP статус</th>
            </tr>
            </thead>
            <tbody>
			<?php
			$sql_clients = "SELECT * FROM clients ORDER BY '1'";

			$res         = $link->query( $sql_clients );
			if ( $res ) {
				while ( $row = $res->fetch_assoc() ) { ?>
                    <tr>
					<?php $k = 1; ?>
                    <td><input type='number' name='id_<?php echo $k ?>' value='<?php echo $row['clients_id'] ?>'
                               readonly></td>
                   <td><input type='text' name='client_name_<?php echo $k ?>' value='<?php echo $row['clients_name'] ?>'
                               ></td>
                   <td><input type='text' name='surname_<?php echo $k ?>' value='<?php echo $row['surname'] ?>'
                               ></td>
                   <td><input type='text' name='address_<?php echo $k ?>' value='<?php echo $row['address'] ?>'
                               ></td>
                   <td><input type='text' name='vip_<?php echo $k ?>' value='<?php echo $row['vip_status'] ?>'
                               ></td>
                    </tr>
            <?php
            $k++;
				}
			}
			?>
            </tbody>
        </table>
        </form>
        <input type="submit" form="clients_form" value="СОХРАНИТЬ ИЗМЕНЕНИЯ">
    </div>
</div>