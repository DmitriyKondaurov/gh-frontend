<div class="tabs__content container">
    <div class="row">
        <h1>Водители</h1>
        <table border="2">
            <thead>
            <tr>
                <th>ID Водителя</th>
                <th>Имя водителя</th>
                <th>Фамилия водителя</th>
            </tr>
            </thead>
            <tbody>
			<?php
			$orders = "SELECT drivers_id, name_driver, surname_driver FROM drivers ORDER BY '1'";
			$res = $link->query( $orders );
			if ( $res ) {
				while ( $row = $res->fetch_assoc() ) {
					?><tr><?php
					echo "<td>"
					     . $row['drivers_id'] . "</td><td>"
					     . $row['name_driver'] . "</td><td>"
					     . $row['surname_driver'] . "</td>"
					?></tr><?php
				}
			}
			?>
            </tbody>
        </table>

    </div>
</div>