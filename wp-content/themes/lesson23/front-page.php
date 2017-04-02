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
				<p>Попробуйте создать аналогичную форму. Для целей демонстрации вполне подойдут и вымышленные.</p>
				<form method="post" action="submit.php">
					<fieldset>
						<legend>Коротко о себе</legend>
						<dl>
							<dt><label for="firstname">Имя:</label></dt>
							<dd><input type="text" name="firstname" id="firstname" required></dd>
						</dl>
						<dl>
							<dt><label for="secondname">Фамилия:<label></dt>
							<dd><input type="text" name="secondname" id="secondname" required ></dd>
						</dl>
						<dl>
							<dt>Пол:</dt>
							<dd>
								<input type="radio" name="gender" id="gender-m" value="m" checked>
								<label for="gender-m">Мужской</label>
								<input type="radio" name="gender" id="gender-f" value="f">
								<label for="gender-f">женский</label>
							</dd>
						</dl>
						<dl>
							<dt><label for="age">Возраст:<label></dt>
							<dd><input type="number" name="age" id="age" min= "1" max="55"> лет</dd>
						</dl>
					</fieldset>
					<fieldset>
						<legend>Подробнее о себе</legend>
						<ul>
							<li>
								<input type="radio" name="gender2" id="gender2-m" value="m">
								<label for="gender2-m">Молодой человек</label>
							</li>
							<li>
								<input type="radio" name="gender2" id="gender2-f" value="f">
								<label for="gender2-f">Девушка</label>
							</li>
							<li>
								<input type="text" name="birthday" id="birthday" placeholder="xxxx-xx-xx">
								<label for="birthday">Дата рождения</label>
							</li>
							<li>
								<input type="text" name="status" id="status">
								<label for="status">Семейное положение</label>
							</li>
							<li>
								<input type="text" name="status-soc" id="status-soc">
								<label for="status-soc">Социальный статус</label>
							</li>
							<li>
								<input type="text" name="address" id="address">
								<label for="address">Местожительство</label>
							</li>
						</ul>
						<p>Что Вы обычно делаете на выходных:</p>
						<ul>
							<li>
								<input type="checkbox" name="activities[]" id="sleeping" value="sleeping">
								<label for="sleeping">Сплю</label>
							</li>
							<li>
								<input type="checkbox" name="activities[]" id="friends" value="friends">
								<label for="friends">Гуляю с друзьями</label>
							</li>
							<li>
								<input type="checkbox" name="activities[]" id="fishing" value="fishing">
								<label for="fishing">Хожу на рыбалку</label>
							</li>
							<li>
								<input type="checkbox" name="activities[]" id="games" value="games">
								<label for="games">Играю в игры</label>
							</li>
						</ul>
						<p>Рассказать о формах в книге, посвященной HTML:</p>
						<ul>
							<li>
								<select name="frequency">
									<option selected value="0">Site frequency</option>
									<option value="1">Low</option>
									<option value="2">Middle</option>
									<option value="3">High</option>
								</select>
							</li>
						</ul>
						<p>Сколько книг Вы прочитали за свою жизнь:</p>
						<ul>
							<li>
								<input type="radio" name="books" id="books10" value="10">
								<label for="books10">0-10</label>
							</li>
							<li>
								<input type="radio" name="books" id="books20" value="20">
								<label for="books20">11-20</label>
							</li>
							<li>
								<input type="radio" name="books" id="books50" value="50">
								<label for="books50">21-50</label>
							</li>
							<li>
								<input type="radio" name="books" id="books50p" value="9999">
								<label for="books50p">50+</label>
							</li>
						</ul>
						<p><label for="comments">Ваши комментарии:</label></p>
						<textarea cols="100" rows="5" name="comments">
    </textarea>
						<p></p>
						<select name="multiplesel" multiple="multiple" cols="3">
							<option value="1">Первая позиция</option>
							<option value="2">Вторая позиция</option>
							<option value="3">Третья позиция</option>
						</select>
					</fieldset>
					<fieldset>
						<legend>И в заключение</legend>
						<input type="text" name="samplefield" value="Это поле было введено до вас" disabled="true">
						<label for="email">Email:</label>
						<input type="email" name="email" id="email">
						<p>Хотите подписаться на самую модную категорию спама?</p>
						<i>Выберите категории</i>
						<ul>
							<li>
								<input type="checkbox" name="spam[]" id="equipment" value="equipment">
								<label for="equipment">Оборудование</label>
							</li>
							<li>
								<input type="checkbox" name="spam[]" id="cooking" value="cooking">
								<label for="cooking">Как приготовить обеды</label>
							</li>
							<li>
								<input type="checkbox" name="spam[]" id="earn" value="earn">
								<label for="earn">Заработай миллион за два дня!</label>
							</li>
						</ul>
						<p>Насколько сложная задача?</p>
						<ul>
							<li>
								<input type="radio" name="complexity" id="easiest" value="easiest">
								<label for="easiest">Совсем нет</label>
							</li>
							<li>
								<input type="radio" name="complexity" id="easy" value="easy">
								<label for="easy">Так себе</label>
							</li>
							<li>
								<input type="radio" name="complexity" id="easy" value="easy">
								<label for="easy">Еле справилась</label>
							</li>
						</ul>
					</fieldset>
					<input type="submit" value="Отправить">
				</form>
				<a href="list.php">Переглянути уже заповнені дані</a>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

