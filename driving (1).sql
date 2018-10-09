-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 01:51 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driving`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `lesson` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `first_name`, `last_name`, `email`, `lesson`) VALUES
(1, 'Stanley', 'Lezeni', 'stanley97@gmail.com', 'Customer Service Training For Drivers'),
(2, 'Emmanuel', 'Walubengo', 'emman@yahoo.com', 'Intermediate Defense Driving Course'),
(3, 'Dennis', 'Maigua', 'denniezy08@gmail.com', 'Intermediate Defensive With Practical');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `name`, `phone`, `subject`, `message`) VALUES
(1, 'emman97@yahoo.com', 'Emmanuel Walubengo', '0721436587', 'Driver Bureau', 'DYGFBEJ FENHEFJ FJ jefjbefjh ffjnejfh'),
(2, 'harry09@gmail.com', 'Harry Wafula', '0707491550', 'Membership', 'Hello World!');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `name`, `phone`, `subject`, `message`) VALUES
(1, 'ant@gmail.com', 'Rose', '0774125840', 'Membership', 'Enter message. Feedback form.'),
(2, 'denniezy08@gmail.com', 'Denniezy', '0712345678', 'Services', 'Hello World!!'),
(3, 'philip@yahoo.com', 'Philip', '0756742310', 'Lessons', 'guefhkjw'),
(4, 'martink@gmail.com', 'Martin', '0707491550', 'General', 'Thanks for the driving lessons!');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phonenumber` int(12) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `national_id` int(10) NOT NULL,
  `town` varchar(30) NOT NULL,
  `vehicle_type` varchar(30) NOT NULL,
  `vehicle_category` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`firstname`, `lastname`, `email`, `phonenumber`, `gender`, `date_of_birth`, `nationality`, `national_id`, `town`, `vehicle_type`, `vehicle_category`) VALUES
('hgy', 'mhbgyu', 'kjhuguyjf', 656656, ' Female', '0000-00-00', 'kjhyt', 36568, 'lmjjnj', 'manual ', 'lightcommercial');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
