<div class="tabs__content container">
    <div class="row">
        <h1>Ввод нового заказа</h1>
        <form method="post" action="update_db.php">
            <fieldset>
                <legend class="order">Введите данные по заказу</legend>
                <table border="2">
                    <tr>
                        <th><label for="cargo">Тип груза</label></th>
                        <th><label for="value">вес груза (т.)</label></th>
                        <th><label for="client">Клиент</label></th>
                        <th><label for="car">Машина</label></th>
                        <th><label for="driver">Водитель</label></th>
                    </tr>
                    <tr>
                        <td>
                            <select name="cargo" required>
                                <option selected value="">груз</option>
                                <?php
                                $sql = mysqli_query( $link,"SELECT `cargo_type` FROM `cargo`");
                                $i=0;
                                while ($result = mysqli_fetch_array($sql)) {
                                    $i++;
                                    echo "<option value=\"$i\">".$result['cargo_type']."</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <input type="number" name="value" placeholder="вес груза..." required>
                        </td>
                        <td>
                            <select name="client" required>
                                <option selected value="">клиент</option>
                                <?php
                                $sql = mysqli_query( $link,"SELECT `clients_name`, `surname` FROM `clients`");
                                $i=0;
                                while ($result = mysqli_fetch_array($sql)) {
                                    $i++;
                                    echo "<option value=\"$i\">".$result['clients_name']." ".$result['surname']."</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name="car" required>
                                <option selected value="">машина</option>
                                <?php
                                $sql = mysqli_query( $link,"SELECT `brend`, `gov_number` FROM `cars`");
                                $i=0;
                                while ($result = mysqli_fetch_array($sql)) {
                                    $i++;
                                    echo "<option value=\"$i\">".$result['brend']." (".$result['gov_number'].")</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name="driver" required>
                                <option selected value="">водитель</option>
                                <?php
                                $sql = mysqli_query( $link,"SELECT `name_driver`, `surname_driver` FROM `drivers`");
                                $i=0;
                                while ($result = mysqli_fetch_array($sql)) {
                                    $i++;
                                    echo "<option value=\"$i\">".$result['name_driver']." ".$result['surname_driver']."</option>";
                                }
    //							mysqli_close($link); //закроем соединение с БД
                                ?>
                            </select>
                        </td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" value="ДОБАВИТЬ НОВЫЙ ЗАКАЗ">
        </form>
        <div class="order_list">
			<?php
			while ( have_posts() ) : the_post();
				the_content(); /*entry-content*/
			endwhile; // End of the loop.
			?>
        </div>
    </div>
</div>