<?php
	require_once "../config/connect_bd.php";
	header('Content-Type: text/html; charset=utf-8');
	//print_r($_POST);
	if (isset($_POST) && !empty($_POST))	
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