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
	<title>Download word</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<br >
				<form id="myform" class="myform" name="myform">
					<input id="poem_name" type="text" name="name_p" placeholder="Введіть назву вірша..." class="container-box">
					<textarea id="poem_text" name="text_p" class="add-coment-box" placeholder="Вставте текст..."></textarea>
					<input type="submit" name="button" value="Відправити" id="submit_button" class="submit_button">
				</form>
				<br >
				<div class="download_word">
					<a href="download_word.php" style="color: black">Додати пошукове слово.</a>
				</div>
				<br >
				<div class="download_word">
					<a href="pages_text.php" style="color: black">Переглянути текст.</a>
				</div>
				<br >
			</div>
			<div class="col-2"></div>
		</div>
	</div>

	<footer>
		<div class="overlay js-overlay-thank-you">
			<div class="popup_ko js-thank-you_ko">
				<h2>Текст відправленний.</h2>
				<div class="close-popup js-close-thank-you"></div>
			</div>
		</div>

		<div class="overlay_ko js-overlay-thank-you_ko">
			<div class="popup_ko js-thank-you_ko">
				<h2>Такий текст вже існує.</h2>
				<div class="close-popup_ko js-close-thank-you_ko"></div>
			</div>
		</div>
	</footer>

	<script src="js/script_index.js" type="text/javascript"></script>
</body>
</html> 