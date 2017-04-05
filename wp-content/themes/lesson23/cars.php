<div class="tabs__content container">
    <div class="row">
        <h1>Транспорт</h1>
        <form id="cars_form" action="#" method="post">
        <table border="2">
            <thead>
            <tr>
                <th>ID машины</th>
                <th>Марка</th>
                <th>Гос. номер</th>
                <th>Грузоподъёмность</th>
                <th>Тех. состояние ('1'-раб., '0'-рем.)</th>
            </tr>
            </thead>
            <tbody>
			<?php
			$sql_cars = "SELECT * FROM cars ORDER BY '1'";
			$res = $link->query( $sql_cars );
			if ( $res ) {
				while ( $row = $res->fetch_assoc() ) { ?>
                    <tr>
						<?php $y = 1; ?>
                        <td><input type='number' name='cars_id_<?php echo $y ?>' value='<?php echo $row['cars_id']
                            ?>'
                                   readonly></td>
                        <td><input type='text' name='brend_<?php echo $y ?>' value='<?php echo $row['brend'] ?>'
                            ></td>
                        <td><input type='text' name='gov_number_<?php echo $y ?>' value='<?php echo $row['gov_number']
                            ?>'
                            ></td>
                        <td><input type='text' name='load_capacity_<?php echo $y ?>' value='<?php echo $row['load_capacity']
                            ?>'
                            ></td>
                        <td>
                            <select name='condition_<?php echo $y ?>' required>
                                <option value='<?php echo $row['condition'] ?>' selected>
				                    <?php echo $row['condition'] ?></option>
                                <option value="1">1</option>
                                <option value="0">0</option>
                            </select>
                        </td>
                    </tr>
					<?php
					$y++;
				}
			}
			?>
            </tbody>
        </table>
        </form>
        <input type="submit" form="cars_form" value="СОХРАНИТЬ ИЗМЕНЕНИЯ">
    </div>
</div>