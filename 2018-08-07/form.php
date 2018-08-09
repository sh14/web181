<?php

$errors = save_post();
$data   = array(
	'title'   => '',
	'content' => '',
);
if ( ! empty( $errors ) ) {
	$data = $_POST;
}
echo $errors;
?>
	<link rel="stylesheet" href="assets/style.css">
	<form method="post" class="form">
		<input type="text" name="title" value="<?php echo $data['title']; ?>">
		<textarea name="content" id="" cols="30" rows="10"
		          class="form__textarea"><?php echo $data['content']; ?></textarea>
		<button type="submit" class="form__submit">ok</button>
		<input type="hidden" name="save_post" value="1">
	</form>

	<a href="?event=logout">Log out</a>

	<ol>
		<li>Сделать проверку передаваемых данных, чтобы все специальные символы заменялись html-сущностями</li>
		<li>Составьте запрос, чтобы получить n записей, начиная с x</li>
		<li>Найти способ получения числа записей не делая перебор с помощью цикла</li>
		<li>Сделать элементы навигации для перехода к первой и последней странице</li>
		<li>При большом кол-ве страниц необходимо выводить +- 3 страницы от текущей</li>
		<li>Сделать функцию, формирующу меню с вложенными списками, пункты которого хранятся в БД</li>
	</ol>

<< < 22 23 24 [25] 26 27 28 > >>

<?php

get_posts();

pagination();
