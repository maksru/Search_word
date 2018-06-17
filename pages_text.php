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
	<?php
		$sql = "SELECT * FROM `poem`";
		$sql_2 = "SELECT * FROM `word`";
		$data = $pdo->query($sql);
		$data_2 = $pdo->query($sql_2);

		$rezult = $data->fetchAll();
		$rezult_2 = $data_2->fetchAll();

		function 	search_word($text, $word)
		{
			$array = explode(" ", $text);
			$i = 0;
			while ($array[$i])
			{
				$d = 0;
				while ($word[$d])
				{
					if ($array[$i] == $word[$d])
					{
						$array[$i] = "<b style='color:red;'>".$array[$i]."</b>";
					}
					$d++;
				}
				$i++;
			}
			return ($array);
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
			$ds = 0;
			while ($des[$ds])
			{
				echo $des[$ds]." ";
				$ds++;
			}
		}
	?>
</body>
</html>