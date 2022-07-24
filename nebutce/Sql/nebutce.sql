-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 07 Haz 2022, 15:07:06
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `nebutce`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `expenses`
--

CREATE TABLE `expenses` (
  `expenses_id` int(15) NOT NULL,
  `expenses_price` float(9,2) DEFAULT NULL,
  `expenses_categroy` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci DEFAULT NULL,
  `expenses_date` date NOT NULL,
  `expenses_timedate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `expenses`
--

INSERT INTO `expenses` (`expenses_id`, `expenses_price`, `expenses_categroy`, `expenses_date`, `expenses_timedate`) VALUES
(1, 0.00, 'maaş', '0000-00-00', '2022-06-06 03:46:36'),
(2, 123.00, 'Faturalar', '0000-00-00', '2022-06-06 04:05:09'),
(3, 4546.00, 'Nakit', '0000-00-00', '2022-06-06 04:12:14'),
(4, 6566.00, 'Eğitim', '0000-00-00', '2022-06-06 05:58:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `income`
--

CREATE TABLE `income` (
  `income_id` int(15) NOT NULL,
  `income_price` float(9,2) DEFAULT NULL,
  `income_categroy` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `income_date` date NOT NULL,
  `income_timedate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `income`
--

INSERT INTO `income` (`income_id`, `income_price`, `income_categroy`, `income_date`, `income_timedate`) VALUES
(1, 1243.00, 'Maaş', '0000-00-00', '2022-06-04 06:38:15'),
(2, 1234.00, 'Telif', '0000-00-00', '2022-06-05 17:24:08'),
(3, 4356.00, 'Kira', '0000-00-00', '2022-06-05 17:24:28'),
(4, 646.00, 'Maaş', '0000-00-00', '2022-06-05 17:35:15'),
(5, 3245.00, 'Kira', '0000-00-00', '2022-06-05 17:48:31'),
(6, 3456.00, 'Telif', '0000-00-00', '2022-06-05 17:51:04'),
(7, 5456.00, 'Telif', '0000-00-00', '2022-06-05 18:31:06'),
(8, 789.00, 'Kira', '0000-00-00', '2022-06-05 18:31:14'),
(9, 46.00, 'Telif', '0000-00-00', '2022-06-06 03:22:32'),
(10, 1234.00, 'Telif', '0000-00-00', '2022-06-06 04:00:03'),
(11, 949.00, 'Telif', '0000-00-00', '2022-06-06 04:12:05'),
(12, 4546.00, 'Telif', '0000-00-00', '2022-06-06 05:35:58'),
(13, 1231.00, 'Maaş', '0000-00-00', '2022-06-06 05:58:47'),
(14, 1234.00, 'Kira', '0000-00-00', '2022-06-07 02:37:59');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_image` varchar(40) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slider_image_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `slider_image_order`) VALUES
(1, 'slider01.png', 1),
(2, 'slider02.png', 2),
(3, 'slider03.png', 3);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expenses_id`);

--
-- Tablo için indeksler `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`income_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expenses_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `income`
--
ALTER TABLE `income`
  MODIFY `income_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
