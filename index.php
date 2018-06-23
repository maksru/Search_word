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
				<br >
				<form id="myform" action="app/download_text.php" method="POST">
					<input id="name" type="text" name="name_p" placeholder="Введіть назву вірша..." class="container-box">
					<textarea id="text" name="text_p" class="add-coment-box" placeholder="Вставте текст..."></textarea>
					<input type="submit" name="button" value="Відправити" class="submit_button">
				</form>
				<br >
				<div class="download_word">
					<a href="download_word.php" style="color: black">Додати пошукове слово.</a>
				</div>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
	<!-- <script src="js/script.js" type="text/javascript"></script> -->
	<script>
		$().ready(function() {
			// $.validator.methods.email = function( value, element ) {
				//	console.log(element);
				// return this.optional( element ) || /^[0-9a-z-\.]+\@[0-9a-z-]{2,}\.[a-z.]{2,}$/i.test( value );
			// }
			$("#myform").validate({
				rules: {
					name_p: {
						required: true
					}
				},
				messages: {
					name_p: {
						required:"Enter plz Name"
					}
				}
			});
		
			
		});
	</script>
</body>
</html> 