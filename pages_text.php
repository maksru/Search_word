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
	<title>Pages text</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8" id="text_block">
				<?php
					$sql = "SELECT * FROM `poem`";
					$sql_2 = "SELECT * FROM `word`";
					$data = $pdo->query($sql);
					$data_2 = $pdo->query($sql_2);

					$rezult = $data->fetchAll();
					$rezult_2 = $data_2->fetchAll();

					function 	search_word($text, $word)
					{
						$regexp_request = implode("|", $word);
						$test = preg_replace("/(".$regexp_request.")/im", "<span style='color:red;'>$1</span>", nl2br($text));
						echo ("<div class='container-box'>".$test."</div>");
					}

					$my_array = array();
					$count = 0;
					foreach ($rezult_2 as $rez)
					{
						$my_array[$count] = $rez['word'];
						$count++;
					}

					foreach ($rezult as $value)
					{
						$des = search_word($value['text_poem'], $my_array);
					}
				?>
				</div>
			<div class="col-2"></div>
		</div>
	</div>
</body>
</html>