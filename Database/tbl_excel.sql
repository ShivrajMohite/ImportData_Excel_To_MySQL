-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 10:18 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `tbl_excel`
--

CREATE TABLE `tbl_excel` (
  `excel_id` int(11) NOT NULL,
  `excel_name` varchar(250) NOT NULL,
  `excel_email` varchar(300) NOT NULL,
  `excel_phone` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_excel`
--

INSERT INTO `tbl_excel` (`excel_id`, `excel_name`, `excel_email`, `excel_phone`) VALUES
(1, 'shivraj', 'shivraj@21gmail.com', 0),
(2, 'amruta', 'amruta@gmail.com', 0),
(3, 'raj', 'raj@gmail.com', 0),
(4, 'akshay', 'akshay@gmail.com', 0),
(5, 'shivraj', 'shivrajmohite21@gmail.com', 0),
(6, 'Amruta', 'amruta@gmail.com', 0),
(7, 'Akshay', 'aksh@gmail.com', 0),
(8, 'vinay', 'vinay@gmail.com', 0),
(9, 'shivraj', 'shivrajmohite21@gmail.com', 0),
(10, 'Amruta', 'amruta@gmail.com', 0),
(11, 'Akshay', 'aksh@gmail.com', 0),
(12, 'vinay', 'vinay@gmail.com', 0),
(13, 'Xyz', 'xyz@gmail.com', 0),
(14, 'shivraj', 'shivrajmohite21@gmail.com', 0),
(15, 'Amruta', 'amruta@gmail.com', 0),
(16, 'Akshay', 'aksh@gmail.com', 0),
(17, 'vinay', 'vinay@gmail.com', 0),
(18, 'Xyz', 'xyz@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_excel`
--
ALTER TABLE `tbl_excel`
  ADD PRIMARY KEY (`excel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_excel`
--
ALTER TABLE `tbl_excel`
  MODIFY `excel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
