<?php
	require_once "../config/connect_bd.php";
	header('Content-Type: text/html; charset=utf-8');

	if ($_POST['reset'])	
	{
		$sql = "SELECT * FROM `compare` WHERE `public`='1' UNION ALL SELECT * FROM `compare` WHERE `public`='2'";
		$data = $pdo->query($sql);
		$rezult = $data->fetchAll();
		if (isset($rezult))
		{
			$sql = "UPDATE `compare` SET `public`='0' WHERE `public`='1'";
			$sql_1 = "UPDATE `compare` SET `public`='0' WHERE `public`='2'";
			$pdo->exec($sql);
			$pdo->exec($sql_1);
		}
	}

	if (isset($_POST) && !empty($_POST) && $_POST['compare'])	
	{
		$compare_text_1 = $_POST['output_text_1'];
		$compare_text_2 = $_POST['output_text_2'];
		$array = array($_POST['output_text_1'], $_POST['output_text_2']);
		$i = 1;
		foreach ($array as $value)
		{
			$sql = "INSERT INTO `compare` (comparetext, public) VALUES ('" .$value. "', '" .$i++. "')";
			$pdo->exec($sql);
		}
	}
	header('Location: ../compare_the_text.php');
?>