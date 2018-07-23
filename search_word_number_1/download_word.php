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
	<link rel="stylesheet" type="text/css" href="style/style_popup.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
	<meta charset="utf-8">
	<title>Додати слово</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<form id="form_word" class="form_word" name="form_word">
					<input type="text" id="word" name="word" placeholder="Введите слово..." class="container-box">
					<input type="submit" name="button" value="Отправить" class="submit_button">
					<button class="submit_button"><a href="index.php" style="color: black; text-decoration: none;">Назад</a></button>
				</form>
				<br />
				<div class="word-in-bd">
					<h3>Слова в базі данних</h3>
					<?php
						$sql = "SELECT * FROM `word`";
						$data = $pdo->query($sql);
						$rezult = $data->fetchAll();
						foreach ($rezult as $value)
						{
							echo('<div id="new_word">'.$value['addword'].'</div><br />');
							echo ('<div><button class="sbutton" onclick="del_word('.$value['id_word'].')">Видалити</button></div>');
						}  
					?>
				</div>
			</div>
			<div class="col-2"></div>
		</div>
	</div>

	<footer>
		<div class="overlay js-overlay-thank-you">
			<div class="popup_ko js-thank-you_ko">
				<h2>Слово добавлене.</h2>
				<div class="close-popup js-close-thank-you"></div>
			</div>
		</div>

		<div class="overlay_ko js-overlay-thank-you_ko">
			<div class="popup_ko js-thank-you_ko">
				<h2>Таке слово вже існує.</h2>
				<div class="close-popup_ko js-close-thank-you_ko"></div>
			</div>
		</div>
	</footer>

	<script src="js/script_download.js" type="text/javascript"></script>
</body>
</html> 