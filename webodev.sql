-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 May 2020, 00:21:17
-- Sunucu sürümü: 10.4.10-MariaDB
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `webodev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `todolist`
--

CREATE TABLE `todolist` (
  `id` int(11) NOT NULL,
  `todo` varchar(250) DEFAULT NULL,
  `useremail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `todolist`
--

INSERT INTO `todolist` (`id`, `todo`, `useremail`) VALUES
(1, 'dasdsad', 'mmm@mm.com'),
(2, 'dasdsad', 'mmm@mm.com'),
(3, 'Deneme', 'hcmhmt@hcmhmt.com'),
(4, 'asdsad', 'mmm@mm.com'),
(5, 'Deneme Taskı', 'mmm@mm.com'),
(6, 'Web Tasarım Ödevi Yapılacak', 'mhmt@mhmt.com'),
(7, 'Web Tasarım Ödevi Gönderilecek', 'mhmt@mhmt.com'),
(8, 'Sayfayı yenilediğimizde veriler dinamik olarak geliyor.', 'mhmt@mhmt.com'),
(9, 'BLM5218 Ödev Teslimi Yapılacak', 'hcmhmt1@hcmhmt.com'),
(10, 'Veriler AJAX ile dinamik olarak ekleniyor', 'hcmhmt1@hcmhmt.com'),
(11, 'Ve aynı zamanda sayfayı yenilediğimizde dinamik olarak geliyor', 'hcmhmt1@hcmhmt.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `mail` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `fullname`, `mail`, `password`) VALUES
(1, 'hcmhmt', 'hcmhmt@asd.com', '123123'),
(2, 'deneme', 'mmm@mm.com', '123123'),
(3, 'hcmhmt', 'hcmhmt@hcmhmt.com', '123123'),
(4, 'Hacı Mehmet', 'mhmt@mhmt.com', '123123'),
(5, 'Hacı Mehmet', 'hcmhmt1@hcmhmt.com', '123123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `todolist`
--
ALTER TABLE `todolist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
