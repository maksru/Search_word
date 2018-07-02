<?php
	require_once "../config/connect_bd.php";

	$word_del = $_POST['new_word'];
	if (isset($_POST) && !empty($_POST)) 
	{
		$del = "SELECT * FROM `word` WHERE addword='".$word_del."' ";
		$row = $pdo->query($del);
		$del_pas = $row->fetch();
		$sql = "DELETE FROM `word` WHERE addword='".$word_del."'";
		$pdo->query($sql);
		echo "Success";
	}
?>