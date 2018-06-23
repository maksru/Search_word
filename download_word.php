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
				<form id="form_word" action="app/add_download_word.php" method="POST">
					<input type="text" id="word" name="word" placeholder="Введите слово..." class="container-box">
					<input type="submit" name="button" value="Отправить" class="submit_button">
					<button class="submit_button"><a href="index.php" style="color: black; text-decoration: none;">Назад</a></button>
				</form>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
	<script src="js/script_download.js" type="text/javascript"></script>
</body>
</html> 