-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 05:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fswd14_cr12_mount_everest_laura_moldovan`
--
CREATE DATABASE IF NOT EXISTS `fswd14_cr12_mount_everest_laura_moldovan` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fswd14_cr12_mount_everest_laura_moldovan`;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `latitude` decimal(8,6) DEFAULT NULL,
  `longitude` decimal(9,6) DEFAULT NULL,
  `picture` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `price`, `description`, `latitude`, `longitude`, `picture`) VALUES
(1, 'Mount Everest', '459.90', 'Mount Everest is Earth\'s highest mountain above sea level, located in the Mahalangur Himal sub-range of the Himalayas.', '27.990170', '86.924720', 'everest.jpg'),
(2, 'The Grand Canyon', '578.50', 'The Grand Canyon is a steep-sided canyon carved by the Colorado River in Arizona, United States.', '36.062200', '-112.136640', 'canion.jpg'),
(3, 'Great Pyramid of Giza', '430.00', 'The Great Pyramid of Giza (also known as the Pyramid of Khufu or the Pyramid of Cheops) is the oldest and largest of the pyramids in the Giza pyramid complex bordering present-day Giza in Greater Cairo, Egypt. It is the oldest of the Seven Wonders of the Ancient World, and the only one to remain largely intact.', '29.977550', '31.132500', 'piramid.jpg'),
(4, 'Disneyland', '175.90', 'Disneyland Paris, is an entertainment resort that encompasses two theme parks, many resort hotels, Disney Nature Resorts, a shopping, dining, and entertainment complex, and a golf course, in addition to several additional recreational and entertainment venues.', '48.867570', '2.783580', 'disney.jpg'),
(5, 'Machu Picchu', '489.90', 'Machu Picchu is a 15th-century Inca citadel. The Urubamba River flows past it, cutting through the Cordillera and creating a canyon with a tropical mountain climate.', '-13.161790', '-72.545020', 'macpic.jpg'),
(6, 'Great Wall of China', '1099.90', 'The Great Wall of China is a series of fortifications that were built across the historical northern borders of ancient Chinese states and Imperial China as protection against various nomadic groups from the Eurasian Steppe. ', '40.434210', '116.570090', 'wall.jpg'),
(7, 'Ochiul Bei', '350.00', 'Ochiul Beiului este un lac carstic cu o suprafață de 284 m² în apropierea Cascadelor Beușniței de pe pârâul Beu, în Parcul Național Cheile Nerei-Beușnița.', '44.936490', '21.790310', 'ochi.jpg'),
(8, 'Cascada Bigar', '215.00', 'Bigăr was one of the most unusual waterfalls in the world and one of the most beautiful in Romania, according to The World Geography.', '45.008130', '21.959920', 'bigar.jpg'),
(9, 'Babele', '450.00', 'Babele is one of the most popular tourist destinations in the country. The name comes from some mushroom shaped rock formations, the result of erosion and varying hardness of the rock layers.', '45.434720', '25.467010', 'babe.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
