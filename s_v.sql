-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 03 2014 г., 09:07
-- Версия сервера: 5.5.23-log
-- Версия PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `s_v`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fund`
--

CREATE TABLE IF NOT EXISTS `fund` (
  `id_fund` int(11) NOT NULL AUTO_INCREMENT COMMENT 'непридатний',
  `id_prizovnyk` int(11) NOT NULL,
  `dateUnfitness` date NOT NULL COMMENT 'дата непридатності',
  `why` varchar(150) NOT NULL COMMENT 'причина',
  PRIMARY KEY (`id_fund`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Непридатний' AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `fund`
--

INSERT INTO `fund` (`id_fund`, `id_prizovnyk`, `dateUnfitness`, `why`) VALUES
(1, 1, '2012-05-10', 'Остеохондроз'),
(2, 2, '2012-05-10', 'Остеохондроз');

-- --------------------------------------------------------

--
-- Структура таблицы `prizovnyk`
--

CREATE TABLE IF NOT EXISTS `prizovnyk` (
  `id_prizovnyk` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthday` date NOT NULL COMMENT 'ДН',
  `education` varchar(100) NOT NULL COMMENT 'Остіва',
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_prizovnyk`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `prizovnyk`
--

INSERT INTO `prizovnyk` (`id_prizovnyk`, `name`, `address`, `birthday`, `education`, `foto`) VALUES
(1, 'Костенко Петро', 'м.Київ п-т Науки 28', '1992-03-01', 'Вища', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<img align="middle" alt="" height="128" src="/upload/userfiles/images/a3c8ad8671f34def6485c9de91d0a5bb.jpg" width="200" /></p>\r\n'),
(2, 'Петренко Степан', 'м.Київ п-т Науки 28', '1992-05-06', 'Середня', '<p>\r\n	<img align="middle" alt="" height="160" src="/upload/userfiles/images/74b2bc2592fbb09616f224e0a9f35984.png" width="200" /></p>\r\n'),
(3, 'Лопатов Микола', 'м.Київ п-т Науки 28', '1992-07-06', 'Вища', '<p>\r\n	<img align="middle" alt="" height="52" src="/upload/userfiles/images/e85afce7c9202026014b82c589b65021.png" width="46" /></p>'),
(4, 'Сантаров Олександр', 'м.Київ п-т Науки 28', '1992-09-06', 'Вища', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<img align="middle" alt="" height="100" src="/upload/userfiles/images/05ba04584fa1432885e2ab732ee19dad.jpg" width="200" /></p>'),
(5, 'Пилипко Сергій', 'м.Київ п-т Науки 28', '1991-09-06', 'Середня', '<p>\r\n	<img align="middle" alt="" height="100" src="/upload/userfiles/images/e762d17e1ea3c49de437f53fbeaf9d3d.jpg" width="200" /></p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `troop`
--

CREATE TABLE IF NOT EXISTS `troop` (
  `id_troop` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id_troop`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Типи Військ' AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `troop`
--

INSERT INTO `troop` (`id_troop`, `title`, `address`) VALUES
(1, 'Повітряні війська', 'м.Київ вул. Комосова 3'),
(2, 'Морські війська', 'м.Київ вул. Єфімова 33'),
(3, 'Мотострілкові війська', 'м.Київ вул. Лабудова 16');

-- --------------------------------------------------------

--
-- Структура таблицы `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `id_unit` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `disposition` varchar(100) NOT NULL COMMENT 'розташування',
  PRIMARY KEY (`id_unit`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Частина' AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `unit`
--

INSERT INTO `unit` (`id_unit`, `title`, `disposition`) VALUES
(1, 'НТМ ТТ', 'м.Київ, вул. Печерська 18'),
(2, 'МОТ КАУ', 'м.Київ, вул. Заносова 23В'),
(3, 'ПРТ 2', 'м.Київ, вул. Лоптєва 18');

-- --------------------------------------------------------

--
-- Структура таблицы `vzabovyazanyj`
--

CREATE TABLE IF NOT EXISTS `vzabovyazanyj` (
  `id_vzabovyazanyj` int(11) NOT NULL AUTO_INCREMENT,
  `id_prizovnyk` int(11) NOT NULL,
  `dateIn` date NOT NULL,
  `dateOut` date NOT NULL,
  `term` varchar(100) NOT NULL COMMENT 'Строк',
  `id_troop` int(11) NOT NULL COMMENT 'id Тип військ',
  `id_unit` int(11) NOT NULL COMMENT 'Частина',
  PRIMARY KEY (`id_vzabovyazanyj`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `vzabovyazanyj`
--

INSERT INTO `vzabovyazanyj` (`id_vzabovyazanyj`, `id_prizovnyk`, `dateIn`, `dateOut`, `term`, `id_troop`, `id_unit`) VALUES
(1, 3, '2013-06-01', '2014-03-01', '9 місяців', 1, 1),
(2, 4, '2013-05-01', '2013-02-01', '9 місяців', 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
