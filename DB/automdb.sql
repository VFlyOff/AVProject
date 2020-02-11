-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 11 2020 г., 20:42
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `automdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `автомобили`
--

CREATE TABLE `автомобили` (
  `Код_автомобиля` int(11) NOT NULL,
  `Производитель` char(32) DEFAULT NULL,
  `Модель` char(32) DEFAULT NULL,
  `Год_выпуска` int(11) DEFAULT NULL,
  `Коробка_передач` char(16) DEFAULT NULL,
  `Мощность_двигателя` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `автомобили`
--

INSERT INTO `автомобили` (`Код_автомобиля`, `Производитель`, `Модель`, `Год_выпуска`, `Коробка_передач`, `Мощность_двигателя`) VALUES
(1, 'Audi', 'A3 8V (1.4 AMT)', 2016, 'Автомат', 150),
(2, 'BMW', '5 G30 (520d AT)', 2016, 'Автомат', 190),
(3, 'Mitsubishi', '3000 GT I (3.0 Turbo MT)', 1990, 'Механика', 320),
(4, 'Skoda', 'Felicia II (1.6MT)', 1998, 'Механика', 75),
(5, 'Lada', 'Vesta Sport I (1.8MT)', 2018, 'Механика', 145);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `автомобили`
--
ALTER TABLE `автомобили`
  ADD PRIMARY KEY (`Код_автомобиля`),
  ADD KEY `MFa` (`Производитель`),
  ADD KEY `MDa` (`Модель`),
  ADD KEY `MFCa` (`Производитель`),
  ADD KEY `MF_a` (`Производитель`),
  ADD KEY `MD_a` (`Модель`),
  ADD KEY `YR_a` (`Год_выпуска`),
  ADD KEY `BB_a` (`Коробка_передач`),
  ADD KEY `PE_a` (`Мощность_двигателя`),
  ADD KEY `MaF_a` (`Производитель`),
  ADD KEY `MoD_a` (`Модель`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `автомобили`
--
ALTER TABLE `автомобили`
  MODIFY `Код_автомобиля` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
