<div class="tabs__content container">
    <div class="row">
        <h1>Транспорт</h1>
        <table border="2">
            <thead>
            <tr>
                <th>ID машины</th>
                <th>Марка</th>
                <th>Гос. номер</th>
                <th>Грузоподъёмность</th>
                <th>Техническое состояние</th>
            </tr>
            </thead>
            <tbody>
			<?php
			$orders = "SELECT cars_id, brend, gov_number, load_capacity, condition FROM cars ORDER BY '1'";
			$res = $link->query( $orders );
			if ( $res ) {
				while ( $row = $res->fetch_assoc() ) {
					?><tr><?php
					echo "<td>"
					     . $row['cars_id'] . "</td><td>"
					     . $row['brend'] . "</td><td>"
					     . $row['gov_number'] . "</td><td>"
					     . $row['load_capacity'] . "</td><td>"
					     . $row['condition'] . "</td>"
					?></tr><?php
				}
			}
			?>
            </tbody>
        </table>

    </div>
</div>