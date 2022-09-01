-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 23 Oca 2019, 20:32:45
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uygunticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

DROP TABLE IF EXISTS `mesajlar`;
CREATE TABLE IF NOT EXISTS `mesajlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yazan` varchar(255) NOT NULL,
  `eposta` varchar(255) NOT NULL,
  `mesaj` text NOT NULL,
  `onay` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `yazan`, `eposta`, `mesaj`, `onay`) VALUES
(3, 'a', 'a', 'a', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `Kimlik` int(11) NOT NULL AUTO_INCREMENT,
  `resim` varchar(255) NOT NULL,
  `marka` varchar(255) NOT NULL,
  `urun_adi` varchar(255) NOT NULL,
  `fiyat` varchar(255) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  PRIMARY KEY (`Kimlik`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`Kimlik`, `resim`, `marka`, `urun_adi`, `fiyat`, `kategori_id`) VALUES
(3, 'kadinayakkabi9.PNG', 'Butigo', '18S-531 Beyaz Kadin Ayakkabi', '79,99 TL', 6),
(2, 'kadinayakkabi8.PNG', 'Butigo', 'Cs18039 Beyaz Kadin 573', '79,99 TL', 6),
(4, 'kadinayakkabi12.PNG', 'Miss - F', 'Ds18049 Siyah Kadin Basic Dress', '99,99 TL', 6),
(5, 'erkekayakkabi9.PNG', 'Lumberjack', 'Gale Lacivert Kum Rengi Kirmizi Erkek Sneaker', '99,99 TL', 5),
(6, 'cocukayakkabi.PNG', 'Kinetix', 'Denni Mor Kiz Cocuk Sneaker', '19,99 TL', 1),
(7, 'kadinayakkabi15.PNG', 'Puma', 'Puma Vikky Ribbon S Siyah Kadin Sneaker', '309,90 TL', 6),
(11, 'erkekayakkabi3.PNG', 'Adidas', 'Adidas Siyah Beyaz Erkek Sneaker', '255,00 TL', 5),
(12, 'erkekayakkabi4.PNG', 'Adidas', 'Adidas Cf Advantage Cl Lacivert Erkek Sneaker', '192,00 TL', 5),
(13, 'erkekayakkabi5.PNG', 'Adidas', 'Adidas Vs Advantage Beyaz Siyah Erkek Sneaker', '255,00 TL', 5),
(14, 'erkekayakkabi6.PNG', 'Kinetix', 'Adona Lacivert Erkek Ayakkabi', '69,99 TL', 5),
(15, 'erkekayakkabi7.PNG', 'Kinetix', 'Ruben Haki Erkek Ayakkabi', '89,99 TL', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
