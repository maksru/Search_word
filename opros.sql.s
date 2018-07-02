-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 02 2018 г., 16:34
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd_search`
--
CREATE DATABASE IF NOT EXISTS `bd_search` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_search`;

-- --------------------------------------------------------

--
-- Структура таблицы `poem`
--

CREATE TABLE `poem` (
  `id` int(11) UNSIGNED NOT NULL,
  `time_add_poem` datetime NOT NULL,
  `name_poem` varchar(255) NOT NULL,
  `text_poem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `poem`
--

INSERT INTO `poem` (`id`, `time_add_poem`, `name_poem`, `text_poem`) VALUES
(1, '2018-07-02 12:04:25', 'Иосиф Бродский', 'Мне не хватает твоих глаз\r\nТаких глубоких, чистых, ясных,\r\nТвоих манящих, сладких губ\r\nТаких горячих и прекрасных.\r\n\r\nМне не хватает твоих рук\r\nКоторые ласкают тело,\r\nКак будто солнце по утру\r\nБлуждает лучиком несмело.\r\n\r\nМне не хватает твоих слов,\r\nКоторые так лечат душу,\r\nКоторые кричат «ЛЮБЛЮ»\r\nТак тихо, шепотом несмело.\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `word`
--

CREATE TABLE `word` (
  `id_word` int(11) UNSIGNED NOT NULL,
  `addword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `word`
--

INSERT INTO `word` (`id_word`, `addword`) VALUES
(49, 'Так'),
(50, 'люблю');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `poem`
--
ALTER TABLE `poem`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`id_word`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `poem`
--
ALTER TABLE `poem`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `word`
--
ALTER TABLE `word`
  MODIFY `id_word` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
