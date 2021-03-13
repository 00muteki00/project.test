-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Час створення: Бер 12 2021 р., 08:57
-- Версія сервера: 8.0.23
-- Версія PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `site`
--

-- --------------------------------------------------------

--
-- Структура таблиці `rozklad`
--

CREATE TABLE `rozklad` (
  `id` int NOT NULL,
  `day` varchar(50) NOT NULL,
  `first_less` varchar(50) NOT NULL,
  `second_less` varchar(50) NOT NULL,
  `third_less` varchar(50) NOT NULL,
  `fourth_less` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `rozklad`
--

INSERT INTO `rozklad` (`id`, `day`, `first_less`, `second_less`, `third_less`, `fourth_less`) VALUES
(1, 'Понеділок', 'Фізкультура', 'Фізика', 'Математика', 'Українська мова'),
(2, 'Вівторок', 'Математика', 'Фізика', 'Література', 'Українська мова'),
(3, 'Середа', 'Українська мова', 'Фізика', 'Математика', 'Фізкультура'),
(4, 'Четвер', 'Фізика', 'Математика', 'Література', 'Українська мова'),
(5, 'П\'ятниця', 'Література', 'Математика', 'Фізкультура', 'Українська мова');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `rozklad`
--
ALTER TABLE `rozklad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `rozklad`
--
ALTER TABLE `rozklad`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
