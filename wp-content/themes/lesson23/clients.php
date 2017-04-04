<div class="tabs__content container">
    <div class="row">
        <h1>Клиенты</h1>
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
			$orders = "SELECT clients_id, clients_name, surname, adress, vip_status FROM clients ORDER BY '1'";
			$res = $link->query( $orders );
			if ( $res ) {
				while ( $row = $res->fetch_assoc() ) {
					?><tr><?php
					echo "<td>"
					     . $row['clients_id'] . "</td><td>"
					     . $row['clients_name'] . "</td><td>"
					     . $row['surname'] . "</td><td>"
					     . $row['adress'] . "</td><td>"
					     . $row['vip_status'] . "</td>"
					?></tr><?php
				}
			}
			?>
            </tbody>
        </table>

    </div>
</div>