<?php
include_once "connect_bd.php";
try {
	$pdo = new PDO($BD_CONECT, $BD_USER, $BD_PASSWORD);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// Структура таблицы `poem`
	$sql = "CREATE TABLE IF NOT EXISTS `poem` (
			`id` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
			`time_add_poem` datetime NOT NULL,
			`name_poem` varchar(255) NOT NULL,
			`text_poem` text NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	// Структура таблицы `word`
	$sql .= "CREATE TABLE IF NOT EXISTS `word` (
			`id_word` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
			`addword` varchar(255) NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	// Структура таблицы `compare`
	$sql .= "CREATE TABLE IF NOT EXISTS `compare` (
			`id_compare` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
			`comparetext` varchar(255) NOT NULL,
			`pablic` int(11) NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	$pdo->exec($sql);
	header('Location: ../index.php');
} catch (PDOException $e) {
	echo 'Error: ' . $e->getMessage();
}  
?>

