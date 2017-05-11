-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 29 2017 г., 18:40
-- Версия сервера: 5.5.33-log
-- Версия PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `tiketshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Bilet`
--

CREATE TABLE IF NOT EXISTS `Bilet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `nomi` varchar(255) NOT NULL,
  `manzili` text NOT NULL,
  `sana` date NOT NULL,
  `narxi` varchar(255) NOT NULL,
  `soni` int(11) NOT NULL,
  `qator` varchar(255) NOT NULL,
  `joy` varchar(255) NOT NULL,
  `uri` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `Bilet`
--

INSERT INTO `Bilet` (`id`, `cat_id`, `nomi`, `manzili`, `sana`, `narxi`, `soni`, `qator`, `joy`, `uri`) VALUES
(1, 2, 'Gala konsert', 'Istiqlol san`at saroyi, (Xalqlar do''stligi saroyi)', '2016-04-30', '15000', 20, '30', '490', ''),
(2, 1, 'Muqimiy teatri', 'Muqimiy teatri (Beshyog''och), Xalqlar do''stligi ', '2016-04-28', '6000', 41, '10', '91', ''),
(7, 1, 'O''zbekcha raqs', 'Toshkent Shahar, Shayhontoxur tumani, Xamza nomidagi akademik teatri', '2016-05-22', '10000', 200, '70', '350', ''),
(8, 2, 'Alisher Fayz', 'Toshkent shahar, Beshyog;och, Xlaqlar do''stligi, Istiqlol sanát saroyi', '2016-08-15', '40000', 500, '10', '400', ''),
(9, 2, 'adasdasdas', 'adasdasdasda', '2016-05-23', '50000', 500, '50', '500', ''),
(10, 2, 'Maher Zain konsert', 'est ', '2016-05-23', '70000', 500, '50', '500', ''),
(11, 2, 'Maher Zain konsert', 'Tn konsert dastruri', '2016-06-15', '50000', 598, '60', '598', 'ozod.jpg'),
(12, 2, 'Vodiy qo''shiqchilari', 'lkjlkjlkj kjkhkjhkjh', '2016-05-23', '20000', 400, '40', '400', 'footbol.jpg'),
(13, 1, 'Свободный роман', 'Спектакль «Свободный роман» ', '2016-05-15', '19000', 300, '30', '300', 'ulugbek.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Teatr'),
(2, 'Konsert');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `role`) VALUES
(1, 'admin', '3d186804534370c3c817db0563f0e461', 1),
(2, 'bobur9909', 'bb2d91d0fbbebe8719509ed0f865c63f', 2),
(3, 'abbos1202', 'bb2d91d0fbbebe8719509ed0f865c63f', 2),
(4, 'rustam1111', '250cf8b51c773f3f8dc8b4be867a9a02', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE IF NOT EXISTS `zakaz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `bilet_id` int(5) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `soni` int(11) NOT NULL,
  `manzil` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `qator` int(5) NOT NULL,
  `joy` varchar(255) NOT NULL,
  `pass_seriya` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`id`, `uid`, `bilet_id`, `user_fname`, `user_lname`, `soni`, `manzil`, `phone`, `qator`, `joy`, `pass_seriya`) VALUES
(1, 4, 2, 'Afruz', 'Temirov', 0, 'Toshkent Shahar, Chilonzor tumani, 21 - kvartla 1 xonadon', '+998946543232', 3, '33, 35', 'AA2412020'),
(2, 3, 2, 'Axror', 'Tursunov', 5, 'adasdasdasdasdasdasd asdasd asd asd asd asd asd asdasdasdasdasd', '+998988522525', 4, '44', 'AA2410202'),
(3, 2, 1, 'asdasd', 'asdasdas', 4, 'werwerwe werwer werwer werwer werwer werwer werwer wer wer wer wer wer wer werwer', '654654654654', 6, '66,65,64,63', 'asdasd'),
(4, 2, 1, 'Jasur', 'Jumayev', 2, 'test descrtrtytr rtrtertr', '+998977523256', 7, '77,78', 'AA3213211'),
(5, 1, 11, 'Sardor', 'Umirov', 2, 'Toshkent shahar, olmazor tumani 12/5/2', '+998946203114', 3, '35,36', 'aa2563121');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
