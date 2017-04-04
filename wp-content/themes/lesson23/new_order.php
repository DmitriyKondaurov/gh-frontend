<div class="tabs__content container">
    <div class="row">
        <h1>Склад №1</h1>
        <form method="post" action="submit.php">
            <fieldset>
                <legend class="order">Ввод нового заказа</legend>
                <div class="order_item">
                    <div><label for="cargo">Тип груза</label></div>
                    <div>
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
                    </div>
                </div>
                <div class="order_item">
                    <div><label for="value">вес груза (т.)</label></div>
                    <div>
                        <input type="number" name="value" placeholder="вес груза..." required>
                    </div>
                </div>
                <div class="order_item">
                    <div><label for="client">Клиент</label></div>
                    <div>
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
                    </div>
                </div>
                <div class="order_item">
                    <div><label for="car">Машина</label></div>
                    <div>
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
                    </div>
                </div>
                <div class="order_item">
                    <div><label for="driver">Водитель</label></div>
                    <div>
                        <select name="driver" required>
                            <option selected value="">водитель</option>
							<?php
							$sql = mysqli_query( $link,"SELECT `name_driver`, `surname_driver` FROM `drivers`");
							$i=0;
							while ($result = mysqli_fetch_array($sql)) {
								$i++;
								echo "<option value=\"$i\">".$result['name_driver']." ".$result['surname_driver']."</option>";
							}
							mysqli_close($link); //закроем соединение с БД
							?>
                        </select>
                    </div>
                </div>
                <input type="submit" value="Сохранить">
            </fieldset>
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