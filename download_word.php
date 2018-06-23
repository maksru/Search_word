<?php
	require_once "config/connect_bd.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<meta charset="utf-8">
	<title>Download word</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<br >
				<form action="app/add_download_word.php" method="POST">
					<input type="text" name="word" placeholder="Введите слово..." class="container-box">
					<input type="submit" name="button" value="Отправить" class="submit_button" onclick="validate(this.form)">
					<button class="submit_button"><a href="index.php" style="color: black; text-decoration: none;">Назад</a></button>
				</form>
				<br >
			</div>
			<div class="col-2"></div>
		</div>
	</div>
	<script src="js/script.js" type="text/javascript"></script>
</body>
</html> 