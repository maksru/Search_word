<?php
	require_once "../config/connect_bd.php";
	session_start();
	if (isset($_POST) && !empty($_POST))
	{
		$name_verse = $_POST['name_p'];
		$text_verse = $_POST['text_p'];
		$sql = "SELECT * FROM `poem` WHERE `name_poem` = '".$name_verse."'";
		$data = $pdo->query($sql);
		$row = $data->fetch();
		if (!isset($row['name_poem']))
		{
			$sql = "INSERT INTO `poem` (time_add_poem, name_poem, text_poem) VALUES (now(), '" . $name_verse . "', '" . $text_verse . "')";
			$pdo->exec($sql);
			header("refresh:0;../pages_text.php");
		}
		else
		{
			echo "<script type=\"text/javascript\">"."alert('Такой текст уже существует!');</script>";
			header("refresh:0;../index.php");
		}
	}
?>
<!-- <script type="text/javascript">
	alert("Developer loh");
</script> -->