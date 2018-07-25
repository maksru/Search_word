<?php
	require_once "config/connect_bd.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="style/style_compare_text.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
	<meta charset="utf-8">
	<title>Порівняти текст</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-1">
				<a href="index.php"><img src="img/left2.png"></a>
			</div>
			<div class="col-10">
				<form method="POST" action="app/compare_text.php">
					<textarea id='output_text_1' name="output_text_1" required>
						<?php
							//Запросы в базу данных.
							$sql = "SELECT * FROM `compare` WHERE `public`='1'";
							//$sql_2 = "SELECT * FROM `word`";
							$data = $pdo->query($sql);
							//$data_2 = $pdo->query($sql_2);
							$rezult = $data->fetchAll();
							//$rezult_2 = $data_2->fetchAll();
							print_r($rezult);
							//Функция получения случайного цвета.
							// function random_html_color()
							// {
							//     return sprintf( '#%02X%02X%02X', rand(0, 255), rand(0, 255), rand(0, 255) );
							// }

							// //Функция поиска слова в тексте.
							// function 	search_word($text, $word)
							// {
							// 	if (!empty($word))
							// 	{
							// 		// $regexp_request = implode("|", $word);
							// 		$text_p = preg_replace("/(".implode('|', $word) .")/iu", "<b style='color:".random_html_color()."'>$1</b>", $text);
							// 		echo($text_p);
							// 	}
							// 	else
							// 	{
							// 		echo($text);
							// 	}
							// }

							// //Массив слов.
							// $my_array = array();
							// $count = 0;
							// foreach ($rezult_2 as $rez)
							// {
							// 	$my_array[$count] = $rez['addword'];
							// 	$count++;
							// }
							// // //Поиск слов в тексте.
							// foreach ($rezult as $value)
							// {
							// 	$des = search_word($value['comparetext'], $my_array);
							// }
						?>
					</textarea>
					<textarea id='output_text_2' name="output_text_2" required>
						<?php
							// //Запросы в базу данных.
							// $sql = "SELECT * FROM `compare` WHERE `public`='2'";
							// $sql_2 = "SELECT * FROM `word`";
							// $data = $pdo->query($sql);
							// $data_2 = $pdo->query($sql_2);
							// $rezult = $data->fetchAll();
							// $rezult_2 = $data_2->fetchAll();

							// //Функция получения случайного цвета.
							// function random_html_color_2()
							// {
							//     return sprintf( '#%02X%02X%02X', rand(0, 255), rand(0, 255), rand(0, 255) );
							// }

							// //Функция поиска слова в тексте.
							// function 	search_word_2($text, $word)
							// {
							// 	if (!empty($word))
							// 	{
							// 		// $regexp_request = implode("|", $word);
							// 		$text_p = preg_replace("/(".implode('|', $word) .")/iu", "<b style='color:".random_html_color_2()."'>$1</b>", $text);
							// 		echo($text_p);
							// 	}
							// 	else
							// 	{
							// 		echo($text);
							// 	}
							// }

							// //Массив слов.
							// $my_array = array();
							// $count = 0;
							// foreach ($rezult_2 as $rez)
							// {
							// 	$my_array[$count] = $rez['addword'];
							// 	$count++;
							// }
							// // //Поиск слов в тексте.
							// foreach ($rezult as $value)
							// {
							// 	$des = search_word_2($value['comparetext'], $my_array);
							// }
						?>
					</textarea>
					<input type="submit" name="compare" value="Перевірити">
				</form>
				<!-- <input type="button" value="Clear" onclick="clearContentText1()"> -->
				<!-- <input type="button" value="Clear" onclick="clearContentText2()"> -->
			</div>
		</div>
	</div>
	<script src="js/script_compare_the_text.js" type="text/javascript"></script>
</body>
</html>