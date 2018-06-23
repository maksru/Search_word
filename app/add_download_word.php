<?php
	require_once "../config/connect_bd.php";
	session_start();
	header('Content-Type: text/html; charset=utf-8');
	if (isset($_POST) && !empty($_POST))
	{
		$word_verse = $_POST['word'];
		$sql = "SELECT * FROM `word` WHERE `word` = '".$word_verse."'";
		$data = $pdo->query($sql);
		$row = $data->fetch();
		if (!isset($row['word']))
		{
			$sql = "INSERT INTO `word` (word) VALUES ('" . $word_verse . "')";
			$pdo->exec($sql);
			header("refresh:0;../download_word.php");
		}
		else
		{
			echo "<script type=\"text/javascript\">".
				"alert('Таке слово вже існує!');".
				"</script>";
			header("refresh:0;../download_word.php");
		}
	}
?>