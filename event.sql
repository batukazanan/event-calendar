-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Mar 2024, 14:34:57
-- Sunucu sürümü: 8.0.34
-- PHP Sürümü: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `calendar`
--

--
-- Tablo döküm verisi `event`
--

UPDATE `event` SET `id` = 1,`event_name` = 'SYS',`event_title` = 'SYS - Sistem Yönetimi Uzman Eğitimi',`color` = 'green',`link` = 'https://kodlamavakti.com',`start_date` = '2024-03-08',`end_date` = '2024-03-16' WHERE `event`.`id` = 1;
UPDATE `event` SET `id` = 2,`event_name` = 'DEV',`event_title` = 'DEV - Geliştirme Yönetimi Uzman Eğitimi\r\n\r\n',`color` = 'red',`link` = NULL,`start_date` = '2024-04-02',`end_date` = '2024-04-11' WHERE `event`.`id` = 2;
UPDATE `event` SET `id` = 3,`event_name` = 'INV',`event_title` = 'INV - Envanter Yönetimi Uzman Eğitimi\r\n\r\n',`color` = 'blue',`link` = NULL,`start_date` = '2024-03-22',`end_date` = '2024-04-12' WHERE `event`.`id` = 3;
UPDATE `event` SET `id` = 4,`event_name` = 'PUR',`event_title` = 'PUR - Satınalma Yönetimi Uzman Eğitimi\r\n\r\n',`color` = 'yellow',`link` = NULL,`start_date` = '2024-04-10',`end_date` = '2024-04-28' WHERE `event`.`id` = 4;
UPDATE `event` SET `id` = 6,`event_name` = 'asd',`event_title` = 'asdasdadsadasdasdsadasd\r\n',`color` = 'yellow',`link` = NULL,`start_date` = '2024-04-10',`end_date` = '2024-04-28' WHERE `event`.`id` = 6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
