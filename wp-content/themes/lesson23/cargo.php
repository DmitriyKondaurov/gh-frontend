<div class="tabs__content container">
    <div class="row">
        <h1>Товары на складе</h1>
        <table border="2">
            <thead>
            <tr>
                <th>Номер п.п.</th>
                <th>Груз</th>
                <th>Масса груза (т.)</th>
            </tr>
            </thead>
            <tbody>
			<?php
			$link = mysqli_connect( "localhost", "root", "root", "kr" );
			$link->set_charset("utf8");
			$orders = "SELECT cargo_id, cargo_type, cargo_value FROM cargo ORDER BY '1';";
			$res = $link->query( $orders );
			if ( $res ) {
				while ( $row = $res->fetch_assoc() ) {
					?><tr><?php
					echo "<td>"
					     . $row['cargo_id'] . "</td><td>"
					     . $row['cargo_type'] . "</td><td>"
					     . $row['cargo_value'] . "</td>"
					?></tr><?php
				}
			}
			?>
            </tbody>
        </table>

    </div>
</div>