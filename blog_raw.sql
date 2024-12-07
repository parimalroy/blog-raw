-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 09:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_raw`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(250) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `content` text NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `blog_title`, `author`, `publish_date`, `content`, `catagory`, `created_at`) VALUES
(21, 'Bangladesh Bank to launch new notes with new designs', 'Kumar', '2024-12-07', '<p>The much-hyped launch of new Bangladeshi currency notes is on the horizon, with denominations of Tk 20, Tk 100, Tk 500, and Tk 1,000 expected to grace the market within the next six months.</p><p>Bangladesh Bank made the disclosure, sparking widespread curiosity about the design elements of the forthcoming notes.</p><p>The introduction of new notes is certain. But, it is too early to confirm the exact design specifications, said Husne Ara Shikha, spokesperson and executive director of the central bank.</p>', 'vuejs', NULL),
(23, 'Bangladesh Bank', 'Roy', '2024-12-06', '<p>The much-hyped launch of new Bangladeshi currency notes is on the horizon, with denominations of Tk 20, Tk 100, Tk 500, and Tk 1,000 expected to grace the market within the next six months.</p><p>Bangladesh Bank made the disclosure, sparking widespread curiosity about the design elements of the forthcoming notes.</p><p>The introduction of new notes is certain. But, it is too early to confirm the exact design specifications, said Husne Ara Shikha, spokesperson and executive director of the central bank.The much-hyped launch of new Bangladeshi currency notes is on the horizon, with denominations of Tk 20, Tk 100, Tk 500, and Tk 1,000 expected to grace the market within the next six months.</p><p>Bangladesh Bank made the disclosure, sparking widespread curiosity about the design elements of the forthcoming notes.</p><p>The introduction of new notes is certain. But, it is too early to confirm the exact design specifications, said Husne Ara Shikha, spokesperson and executive director of the central bank.</p>', 'vuejs', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
