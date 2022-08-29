-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 10:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `search-using-key-word`
--

CREATE TABLE `search-using-key-word` (
  `id` int(11) NOT NULL,
  `name` varchar(220) NOT NULL,
  `price` varchar(220) NOT NULL,
  `stock` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search-using-key-word`
--

INSERT INTO `search-using-key-word` (`id`, `name`, `price`, `stock`) VALUES
(1, 'test', '10', 'nil'),
(2, 'stff', '10', '40'),
(3, 'stfdf', '10', '40'),
(4, 'stfrf', '10', '40'),
(5, 'rdstff', '10', '40'),
(6, 'erfstff', '10', '40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search-using-key-word`
--
ALTER TABLE `search-using-key-word`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search-using-key-word`
--
ALTER TABLE `search-using-key-word`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
