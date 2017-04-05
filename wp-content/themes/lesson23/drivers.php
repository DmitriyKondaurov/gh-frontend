<div class="tabs__content container">
    <div class="row">
        <h1>Водители</h1>
        <form id="drivers_form" action="#" method="post">
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
			$sql_drivers = "SELECT drivers_id, name_driver, surname_driver FROM drivers ORDER BY '1'";
			$res = $link->query( $sql_drivers );
			if ( $res ) {
				while ( $row = $res->fetch_assoc() ) { ?>
                    <tr>
						<?php $x = 1; ?>
                        <td><input type='number' name='drivers_id_<?php echo $x ?>' value='<?php echo $row['drivers_id']
                            ?>'
                                   readonly></td>
                        <td><input type='text' name='name_driver_<?php echo $x ?>' value='<?php echo
                            $row['name_driver'] ?>'
                            ></td>
                        <td><input type='text' name='surname_driver_<?php echo $x ?>' value='<?php echo $row['surname_driver'] ?>'
                            ></td>
                    </tr>
					<?php
					$x++;
				}
			}
			?>
            </tbody>
        </table>
        </form>
        <input type="submit" form="drivers_form" value="СОХРАНИТЬ ИЗМЕНЕНИЯ">
    </div>
</div>