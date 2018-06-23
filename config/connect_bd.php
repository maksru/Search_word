<?php
	include_once "database.php";
	try
	{
	    $pdo = new PDO($BD_CONECT, $BD_USER, $BD_PASSWORD);
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}
?>