<?php
	require_once "../config/connect_bd.php";
	session_start();
	header('Content-Type: text/html; charset=utf-8');
		
	if (isset($_POST) && !empty($_POST))
	{
		$word_verse = $_POST['word'];
		$sql = "SELECT * FROM `word` WHERE `addword` = '".$word_verse."'";
		$data = $pdo->query($sql);
		$row = $data->fetch();
		if (!isset($row['addword']))
		{
			$sql = "INSERT INTO `word` (addword) VALUES ('" . $word_verse . "')";
			$pdo->exec($sql);
			echo "OK";
			return;
		}
		echo "Error";
	}
?>