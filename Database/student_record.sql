-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 07:02 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_record`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Email_ID` varchar(38) DEFAULT NULL,
  `Phone_No` bigint(20) DEFAULT NULL,
  `Query` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `Name`, `Email_ID`, `Phone_No`, `Query`) VALUES
(7, 'Rishab Pant', 'rishabpant1997@gmail.com', 9836547, 'i want to take admission for Web Technology.'),
(8, 'Shubhaman Gill', 'ShubhmanRocks@gmail.com', 985263, '     I want to take admission in Machine Learning Course.'),
(9, 'Shreyas Iyer', 'ShreyasIyer1996@gmail.com', 8563421178, 'Iwant to take admission in Cloud Computing.'),
(10, 'Mitchell Marsh', 'mitchellmarsh@gmail.com', 98635482, 'I am interested to take admission in Machine Learning course.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Registration_No` bigint(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` enum('Male','Female','Others') NOT NULL,
  `Email` varchar(38) NOT NULL,
  `Phone_No` bigint(20) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Present_Address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Registration_No`, `Name`, `DOB`, `Gender`, `Email`, `Phone_No`, `Course`, `Present_Address`) VALUES
(2282016, 'Shreya Santra', '2001-04-03', 'Female', 'ShreyaSantra@gmail.com', 9823654789, 'Big Data', '  Suzy Queue\r\n4455 Landing Lange, APT 4\r\nLouisville, KY 40018-1234'),
(2282018, 'Srishti Sengupta', '2023-10-04', 'Female', 'SrishtiSengupta@gmail.com', 6203127246, 'Machine Learning', 'Suzy Queue\r\n4455 Landing Lange, APT 4\r\nLouisville, KY 40018-1234');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'admin@gmail.com', 'admin'),
(3, 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Registration_No`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
