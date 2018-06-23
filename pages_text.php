<?php
	require_once "config/connect_bd.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<meta charset="utf-8">
	<title>Pages text</title>
</head>
<body>
	<a name="top"></a>
	<div class="container">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8" id="text_block">
				<?php
					//Запросы в базу данных.
					$sql = "SELECT * FROM `poem`";
					$sql_2 = "SELECT * FROM `word`";
					$data = $pdo->query($sql);
					$data_2 = $pdo->query($sql_2);

					$rezult = $data->fetchAll();
					$rezult_2 = $data_2->fetchAll();

					//Функция получения случайного цвета.
					function random_html_color()
					{
					    return sprintf( '#%02X%02X%02X', rand(0, 255), rand(0, 255), rand(0, 255) );
					}

					//Функция поиска слова в тексте.
					function 	search_word($text, $word)
					{
						if (!empty($word))
						{
							$regexp_request = implode("|", $word);
							$text_p = preg_replace("/(".$regexp_request.")/im", "<b style='color:".random_html_color()."';>$1</b>", $text);
							print("<div class='container-box-add	'><pre>".$text_p."</pre></div>");	
						}
						else
						{
							print("<div class='container-box-add'>".$text."</div>");
						}
					}

					//Массив слов.
					$my_array = array();
					$count = 0;
					foreach ($rezult_2 as $rez)
					{
						$my_array[$count] = $rez['word'];
						$count++;
					}

					//Поиск слов в тексте.
					foreach ($rezult as $value)
					{
						$des = search_word($value['text_poem'], $my_array);
					}
				?>
				<p><a href="#top">Наверх</a></p>
				<p><a href="index.php">Назад</a></p>
				</div>
			<div class="col-2"></div>
		</div>
	</div>
</body>
</html>