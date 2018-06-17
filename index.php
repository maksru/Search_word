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
	<meta charset="utf-8">
	<title>Download word</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8">
				<form action="app/download_word.php" method="POST">
					<input type="text" name="name_p" placeholder="Введите название..." class="container-box">
					<textarea name="text_p" class="add-coment-box" placeholder="Вставте текст..."></textarea>
					<input type="submit" name="button" value="Отправить" class="submit_button">
				</form>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
</body>
</html> 