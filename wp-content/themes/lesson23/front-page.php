<?php
/**
 * Created by PhpStorm.
 * User: invis
 * Date: 02.04.2017
 * Time: 10:10
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lesson23
 */
get_header(); ?>
	<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row">
				<h1>Склад №1</h1>
				<p class="text_align_center">Авторизация: <span class="author"><?php echo get_current_user()
                        ?></span></p>
                <?php
                    $host="localhost";
                    $user="root";
                    $pass="root"; //установленный вами пароль
                    $db_name="kr";
                    $link= mysqli_connect("localhost", "root", "root", $db_name);
                    $link->set_charset("utf8")
                ?>
                <div class="text_align_center">
                <?php
                    if (!$link) {
                        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
                        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
                        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
                        exit;
                    }
                    echo "Соединение с MySQL установлено!" . PHP_EOL;

                    $db_connect = mysqli_select_db($link, $db_name);
                    if (!$db_connect) {
                        echo "Ошибка соединения с базой данных!";
                        exit;
                    }
                ?>
                </div>
				<form method="post" action="submit.php">
					<fieldset>
						<legend class="order">Введите данные по заказу</legend>
						<div class="order_item">
							<div><label for="cargo">Тип груза</label></div>
							<div>
								<select name="cargo" required>
									<option selected value="">груз</option>
									<?php
									$sql = mysqli_query( $link,"SELECT `type` FROM `cargo`");
									$i=0;
									while ($result = mysqli_fetch_array($sql)) {
										$i++;
										echo "<option value=\"$i\">".$result['type']."</option>";
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
									$sql = mysqli_query( $link,"SELECT `name`, `surname` FROM `clients`");
									$i=0;
									while ($result = mysqli_fetch_array($sql)) {
										$i++;
										echo "<option value=\"$i\">".$result['name']." ".$result['surname']."</option>";
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
									$sql = mysqli_query( $link,"SELECT `name`, `surname` FROM `drivers`");
									$i=0;
									while ($result = mysqli_fetch_array($sql)) {
										$i++;
										echo "<option value=\"$i\">".$result['name']." ".$result['surname']."</option>";
									}
									mysqli_close($link); //закроем соединение с БД
									?>
								</select>
                                <p>

                                </p>
							</div>
						</div>
                        <input type="submit" value="Сохранить">
                    </fieldset>
				</form>
				<a href="list.php" class="order_list">Посмотреть список всех заказов</a>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

