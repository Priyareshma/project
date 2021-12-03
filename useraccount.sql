-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 08:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample2`
--

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` double NOT NULL,
  `otp` double NOT NULL,
  `createdtime` time NOT NULL,
  `otptime` time NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `firstname`, `lastname`, `dob`, `gender`, `email`, `token`, `otp`, `createdtime`, `otptime`, `status`) VALUES
(11, 'Lakshira', 'Lakshu', '2021-11-05', 'Female', 'lakshira2018@gmail.com', 0, 0, '00:00:00', '00:00:00', 1),
(73, 'Renjith', 'rangaraj', '2021-11-12', 'Female', 'priyareshu29@gmail.com', 751836, 4353453, '16:18:07', '16:14:59', 1),
(80, 'Renjith', 'rangaraj', '2021-11-06', 'Male', 'renjith@gmail.com', 675495, 675495, '00:00:00', '00:00:00', 1),
(81, 'Renjith', 'rangaraj', '2021-11-06', 'Male', 'renjith@gmail.com', 675495, 879898, '00:00:00', '00:00:00', 0),
(82, 'Priyareshma', 'Rangaraj', '1998-03-14', 'Female', 'reshma.zeoner@gmail.com', 979131, 979131, '00:00:00', '00:00:00', 1),
(83, 'Praveen', 'Kumar', '1997-12-01', 'Male', 'pravu@gmail.com', 576607, 6674832, '00:00:00', '00:00:00', 0),
(90, 'Sowndarya', 'Parami', '2019-03-20', 'Female', 'sow@gmail.com', 946918, 946918, '00:00:00', '00:00:00', 1),
(96, 'Renjith', 'Rangaraj', '2021-12-11', 'Male', 'renjirenji@gmail.com', 448575, 0, '00:00:00', '00:00:00', 0),
(101, 'sd', 'sd', '2021-12-23', 'Male', 'sd@gmail.com', 673104, 673104, '17:32:50', '17:29:48', 1),
(112, 'sam', 'sudeen', '2021-12-11', 'Female', 'samsu@gmail.com', 755207, 755207, '11:20:46', '11:16:32', 1),
(113, 'sam', 'su', '2021-12-25', 'Male', 'sa@gmail.com', 155821, 444445, '11:22:59', '11:18:08', 0),
(114, 'saaaammm', 'suuuuu', '2021-12-11', 'Male', 'sammmmmsuu@gmail.com', 973717, 973717, '11:24:40', '11:25:37', 0),
(115, 'sameeee', 'sameeeeiiee', '2021-12-03', 'Male', 'sameeiee@gmail.com', 778703, 4567889, '11:50:01', '11:53:34', 0),
(116, 'asif', 'asif', '2021-12-11', 'Male', 'mohammedashifabdullathif@gmail.com', 826718, 826718, '12:34:09', '12:29:40', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
