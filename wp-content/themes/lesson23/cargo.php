<div class="tabs__content container">
    <div class="row">
        <h1>Товары на складе</h1>
        <form id="cargo_form" action="#" method="post">
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
			$sql_cargo = "SELECT cargo_id, cargo_type, cargo_value FROM cargo ORDER BY '1'";
			$res = $link->query( $sql_cargo );
			if ( $res ) {
				while ( $row = $res->fetch_assoc() ) { ?>
                    <tr>
						<?php $m = 1; ?>
                        <td><input type='number' name='cargo_id_<?php echo $m ?>' value='<?php echo $row['cargo_id'] ?>'
                                   readonly></td>
                        <td><input type='text' name='cargo_type_<?php echo $m ?>' value='<?php echo $row['cargo_type'] ?>'
                            ></td>
                        <td><input type='text' name='cargo_value_<?php echo $m ?>' value='<?php echo $row['cargo_value'] ?>'
                            ></td>
                    </tr>
					<?php
					$m++;
				}
			}
			?>
            </tbody>
        </table>
        </form>
        <input type="submit" form="cargo_form" value="СОХРАНИТЬ ИЗМЕНЕНИЯ">
    </div>
</div>