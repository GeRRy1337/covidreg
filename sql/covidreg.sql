-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Ápr 28. 10:15
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `covidreg`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `regisztracio`
--

CREATE TABLE `regisztracio` (
  `id` int(11) NOT NULL,
  `taj` text COLLATE utf8_hungarian_ci NOT NULL,
  `nev` text COLLATE utf8_hungarian_ci NOT NULL,
  `email` text COLLATE utf8_hungarian_ci NOT NULL,
  `szuletes` date NOT NULL,
  `vakcina` text COLLATE utf8_hungarian_ci NOT NULL,
  `megjegyzes` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `regisztracio`
--

INSERT INTO `regisztracio` (`id`, `taj`, `nev`, `email`, `szuletes`, `vakcina`, `megjegyzes`) VALUES
(1, '123-123-123', 'Gergő', 'asd@asd.asd', '2002-08-03', 'Szputnyik V', ''),
(2, '123-456-789', 'Test', 'asd@asd.asd', '1998-06-17', 'AstraZeneca', 'test'),
(3, '824-617-861', 'test2', 'asd@asd.asd', '1999-01-23', 'Moderna', 'test'),
(4, '625-892-498', 'test123', 'asd@asd.asd', '1988-02-04', 'Moderna', 'test'),
(5, '253-463-466', 'test', 'asd@asd.asd', '1988-03-31', 'AstraZeneca', ''),
(6, '999-999-999', 'test', 'asd@asd.asd', '1993-02-03', 'AstraZeneca', '');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `regisztracio`
--
ALTER TABLE `regisztracio`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `regisztracio`
--
ALTER TABLE `regisztracio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
