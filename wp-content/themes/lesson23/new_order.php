<div class="tabs__content container">
    <div class="row">
        <h1>Ввод нового заказа</h1>
        <form method="post" action="<?php echo get_page_link();
        ?>add_new_db/">
            <fieldset>
                <legend class="order">Введите данные по заказу</legend>
                <table border="2">
                    <tr>
                        <th><label for="cargo_id">Тип груза</label></th>
                        <th><label for="value">вес груза (т.)</label></th>
                        <th><label for="client">Клиент</label></th>
                        <th><label for="car">Машина</label></th>
                        <th><label for="driver">Водитель</label></th>
                    </tr>
                    <tr>
                        <td>
                            <select name="cargo_id" required>
                                <option selected value="">груз</option>
                                <?php
                                $sql = mysqli_query( $link,"SELECT * FROM `cargo`");
                                while ($result = mysqli_fetch_array($sql)) {
                                    echo "<option value=\"".$result['cargo_id']."\">".$result['cargo_type']."</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <input type="number" step="0.1"  name="order_value" placeholder="вес груза..." required>
                        </td>
                        <td>
                            <select name="clients_id" required>
                                <option selected value="">клиент</option>
                                <?php
                                $sql = mysqli_query( $link,"SELECT * FROM `clients`");
                                while ($result = mysqli_fetch_array($sql)) {
                                    echo "<option value=\"".$result['clients_id']."\">".$result['clients_name']." "
                                         .$result['surname']."</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name="cars_id" required>
                                <option selected value="">машина</option>
                                <?php
                                $sql = mysqli_query( $link,"SELECT * FROM `cars`");
                                while ($result = mysqli_fetch_array($sql)) {
                                    echo "<option value=\"".$result['cars_id']."\">".$result['brend']." (".$result['gov_number'].")</option>";
                                }
                                ?>
                            </select>
                        </td>
                        <td>
                            <select name="drivers_id" required>
                                <option selected value="">водитель</option>
                                <?php
                                $sql = mysqli_query( $link,"SELECT * FROM `drivers`");
                                while ($result = mysqli_fetch_array($sql)) {
                                    echo "<option value=\"".$result['drivers_id']."\">".$result['name_driver']." "
                                         .$result['surname_driver']."</option>";
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