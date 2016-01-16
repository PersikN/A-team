-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Hoszt: 127.0.0.1
-- Létrehozás ideje: 2016. Jan 16. 20:41
-- Szerver verzió: 5.6.17
-- PHP verzió: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `rft`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fajlok`
--

CREATE TABLE IF NOT EXISTS `fajlok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nev` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `fajl` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `kategoria` varchar(254) COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=16 ;

--
-- A tábla adatainak kiíratása `fajlok`
--

INSERT INTO `fajlok` (`id`, `nev`, `fajl`, `kategoria`) VALUES
(1, 'proba', './public/uploads/16533DesignLibrary_Photoshop.log', 'jegyzet'),
(2, 'valami', 'fajlok/1331Chrysanthemum.jpg', 'jegyzet'),
(10, 'valami', './public/uploads/31884Lighthouse.jpg', 'tétel'),
(13, 'tárolás', './public/uploads/9397Desert.jpg', 'tétel'),
(14, 'tárolás2', './public/uploads/7874Desert.jpg', 'jegyzet'),
(15, 'tihateszt', './public/uploads/31766barimage.bmp', 'tétel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
