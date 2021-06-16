-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 04:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `author` varchar(55) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `author`, `created_at`) VALUES
(5, 'Nuggets-i eliminisani iz playoff-a!', 'Pheonix Suns su pobedili Jokiceve Nuggets-e 4-0 u drugoj rundi playoff-a.', 'damianz', '2021-06-16 14:15:41'),
(7, 'Neverovatna utakmica Duranta', 'Kevin Durant je ostvario tripl-dabl sa 49 poena, 10 asistencija i 17 skokova. Ovakva statistika je osigurala pobedu Bruklina nad Milvokijem. Bruklin trenutno vodi 3-2.', 'zobid', '2021-06-16 15:00:29'),
(8, 'Suns-i favoriti?', 'Sunsi su eliminisali Lejkerse u prvoj rundi i Jokiceve Nuggetse u drugoj rundi (4-2 protiv Lejkersa, 4-0 protiv Denvera). Buduci da su pobedili ova 2 jaka tima, da li bi trebali da gledamo na Sunse kao na favorite za finale NBA-a? U sledecoj rundi ce igrati protiv Dzezera ili protiv Klipersa, sto znaci da ce imati veoma dobre sanse da dodju u finale. U finalima bi onda igrali protiv pobednika istocne konferencije. Vecina misle da ce to biti Bruklin, ali i Filadelfija i Milvoki imaju dobre sanse.', 'damianz', '2021-06-16 15:21:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
