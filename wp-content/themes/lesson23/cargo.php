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
<!--        Add new cargo-->
        <form method="post" action="<?php echo get_page_link();?>add_new_cargo_db/">
            <fieldset>
                <legend class="order">Введите новый груз</legend>
                <table border="2">
                    <tr>
                        <th><label>Тип груза</label></th>
                        <th><label>вес груза (т.)</label></th>
                    </tr>
                    <tr>
                        <td>
                            <input name="cargo_type" type="text" placeholder="тип груза..." required>
                        </td>
                        <td>
                            <input name="cargo_value" type="number" step="0.1" placeholder="вес груза..." required>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="ДОБАВИТЬ НОВЫЙ ГРУЗ">
        </form>
    </div>
</div>