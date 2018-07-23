<?php
	require_once "../config/connect_bd.php";
	header("Content-Type: text/html; charset=utf-8");
	// $word_del = $_POST['new_word'];
	$word_del = $_POST['checkbox'];
	if (isset($_POST) && !empty($_POST)) 
	{
		foreach ($_POST['checkbox'] as $valueid)
		{
			$del = "SELECT * FROM `word` WHERE id_word='".$valueid."' ";
			$row = $pdo->query($del);
			$del_pas = $row->fetch();
			$sql = "DELETE FROM `word` WHERE id_word='".$valueid."'";
			$pdo->query($sql);
		}
		// echo "Success";
	}
	header('Location: ../download_word.php');
?>