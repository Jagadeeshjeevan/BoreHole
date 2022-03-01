-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 05:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trail`
--

-- --------------------------------------------------------

--
-- Table structure for table `borehole`
--

CREATE TABLE `borehole` (
  `aid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `bhName` varchar(100) NOT NULL,
  `cordName` varchar(100) NOT NULL,
  `start_Date` datetime DEFAULT NULL,
  `end_Date` datetime DEFAULT NULL,
  `logged_By` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `DoGWT` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borehole`
--

INSERT INTO `borehole` (`aid`, `uid`, `bhName`, `cordName`, `start_Date`, `end_Date`, `logged_By`, `status`, `DoGWT`, `u_id`) VALUES
(1, 1, 'Samp', '10.20,30.40', '2022-02-01 14:17:40', '2022-02-01 14:17:40', 'test2', 0, 0, 0),
(2, 2, 'BH2', '10.30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'jag', 0, 300, 0),
(3, 1, 'BH3', '9.400,34000', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Ravi', 0, 60, 0);

-- --------------------------------------------------------

--
-- Table structure for table `field_test_data`
--

CREATE TABLE `field_test_data` (
  `ftd_id` int(11) NOT NULL,
  `bh_id` int(11) NOT NULL,
  `d_from` float NOT NULL,
  `d_to` float NOT NULL,
  `soil_rock` varchar(100) NOT NULL,
  `type_of_soil` varchar(100) NOT NULL,
  `sample_desc` varchar(100) NOT NULL,
  `sample_type` varchar(100) NOT NULL,
  `spt_n_1` int(11) NOT NULL,
  `spt_n_2` int(11) NOT NULL,
  `spt_n_3` int(11) NOT NULL,
  `cr` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `field_test_data`
--

INSERT INTO `field_test_data` (`ftd_id`, `bh_id`, `d_from`, `d_to`, `soil_rock`, `type_of_soil`, `sample_desc`, `sample_type`, `spt_n_1`, `spt_n_2`, `spt_n_3`, `cr`, `status`) VALUES
(1, 1, 0, 1, 'red', 'hard', 'sample test soil', 'New', 10, 15, 16, 8, 0),
(2, 1, 1.88, 2.55, 'sand', 'wet', 'sand ', 'red soil', 5, 6, 8, 60, 0),
(3, 2, 9, 10, 'oil', 'well', 'sample', 'sand', 6, 10, 5, 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ma_test`
--

CREATE TABLE `ma_test` (
  `aid` int(11) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `test_type` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ma_test`
--

INSERT INTO `ma_test` (`aid`, `test_name`, `test_type`, `status`) VALUES
(1, 'Sieve Analysis', NULL, 0),
(2, 'Atterberg Limits', NULL, 0),
(3, 'Proctor Test', NULL, 0),
(4, 'Water Content', NULL, 0),
(5, 'UCC', NULL, 0),
(6, 'DS', NULL, 0),
(7, 'Proctor Test', NULL, 0),
(8, 'Triaxial', NULL, 0),
(9, 'Consolidation', NULL, 0),
(10, 'Ph Value', NULL, 0),
(11, 'VST', NULL, 0),
(12, 'FSI', NULL, 0),
(13, 'Swelling Pressure', NULL, 0),
(14, 'Relative Density', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trans_user`
--

CREATE TABLE `trans_user` (
  `aid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `session_id` varchar(100) DEFAULT NULL,
  `session_in` datetime DEFAULT NULL,
  `session_out` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `pcId` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_user`
--

INSERT INTO `trans_user` (`aid`, `username`, `password`, `session_id`, `session_in`, `session_out`, `status`, `pcId`) VALUES
(1, 'test2', 'test2', '123456', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 'fb6c7b5da51977d91ba9cf932b9d1144'),
(2, 'test1', 'test1', '123456', '2022-02-01 13:46:47', '2022-02-01 13:46:47', 0, 'fb6c7b5da51977d91ba9cf932b9d1144');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borehole`
--
ALTER TABLE `borehole`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `field_test_data`
--
ALTER TABLE `field_test_data`
  ADD PRIMARY KEY (`ftd_id`);

--
-- Indexes for table `ma_test`
--
ALTER TABLE `ma_test`
  ADD PRIMARY KEY (`aid`) USING BTREE;

--
-- Indexes for table `trans_user`
--
ALTER TABLE `trans_user`
  ADD PRIMARY KEY (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borehole`
--
ALTER TABLE `borehole`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `field_test_data`
--
ALTER TABLE `field_test_data`
  MODIFY `ftd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ma_test`
--
ALTER TABLE `ma_test`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `trans_user`
--
ALTER TABLE `trans_user`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
