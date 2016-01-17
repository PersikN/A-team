-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Hoszt: 127.0.0.1
-- Létrehozás ideje: 2016. Jan 02. 16:21
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
CREATE TABLE IF NOT EXISTS `felhasznalok` (
 `id` int(11) NOT NULL AUTO_INCREMENT, `felhasznalo` varchar(255)
  COLLATE utf8_hungarian_ci DEFAULT NULL, `jelszo` varchar(255)
  COLLATE utf8_hungarian_ci DEFAULT NULL, `nev` varchar(255)
  COLLATE utf8_hungarian_ci DEFAULT NULL, `cim` varchar(255)
  COLLATE utf8_hungarian_ci DEFAULT NULL, `email` varchar(255)
  CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL, `telefon` varchar(24) 
  COLLATE utf8_hungarian_ci DEFAULT NULL, `jogosultsag` varchar(255)
  COLLATE utf8_hungarian_ci DEFAULT NULL, 
  PRIMARY KEY (`id`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8 
  COLLATE=utf8_hungarian_ci AUTO_INCREMENT=1;

   


--
-- A tábla adatainak kiíratása `fajlok`
--

INSERT INTO `fajlok` (`id`, `nev`, `fajl`) VALUES
(1, 'proba', 'fajlok/16533DesignLibrary_Photoshop.log'),
(2, 'valami', 'fajlok/1331Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE IF NOT EXISTS `felhasznalok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `felhasznalo` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `jogosultsag` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=2 ;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `felhasznalo`, `jogosultsag`) VALUES
(1, 'admin', '0');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `jog` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci AUTO_INCREMENT=7 ;

--
-- A tábla adatainak kiíratása `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`, `jog`) VALUES
(1, 'Feltöltés', '1', 2),
(2, 'Letöltés', '2', 3),
(3, 'Módosítás', '4', 1),
(4, 'Törlés', '3', 1),
(5, 'Adatok módosítása', '5', 3),
(6, 'Felhasználók kezelése', '6', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
