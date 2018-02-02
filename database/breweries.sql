-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 02, 2018 at 10:25 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `breweries`
--

-- --------------------------------------------------------

--
-- Table structure for table `breweries`
--

CREATE TABLE `breweries` (
  `id` int(11) NOT NULL,
  `brewery` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `primarycolor` varchar(40) NOT NULL,
  `secondarycolor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `breweries`
--

INSERT INTO `breweries` (`id`, `brewery`, `city`, `primarycolor`, `secondarycolor`) VALUES
(1, 'Cigar City', 'Tampa, FL', 'Brown', 'Red'),
(2, 'First Magnitude', 'Gainesville, FL', 'Blue', 'Yellow'),
(3, 'Swamphead ', 'Gainesville, FL', 'Brown', 'Green'),
(4, 'Austin Beerworks', 'Austin, TX', 'Yellow', 'Red'),
(5, 'Austin Eastciders', 'Austin, TX', 'Brown', 'Navy blue'),
(6, 'Hell \'N Blazes', 'Melbourne, FL', 'Red', 'Orange'),
(7, 'Columbus', 'Columbus, OH', 'Black', 'Green'),
(8, 'Moon River', 'Savannah, GA', 'Navy Blue', 'Yellow'),
(9, 'Holy City', 'Charleston, SC', 'Black', 'Orange'),
(10, 'Funky Buddha', 'Oakland Park, FL', 'Blue', 'Orange');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breweries`
--
ALTER TABLE `breweries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breweries`
--
ALTER TABLE `breweries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
