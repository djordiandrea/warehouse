-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2022 at 03:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_list_vehicle`
--

CREATE TABLE `mst_list_vehicle` (
  `mlv_id` int(11) NOT NULL,
  `mlv_vehicleName` varchar(200) NOT NULL,
  `mlv_vehicleCode` varchar(50) NOT NULL,
  `mlv_vehicleBrand` varchar(50) NOT NULL,
  `mlv_vehicleModel` varchar(50) NOT NULL,
  `mlv_vehicleNumber` varchar(20) NOT NULL,
  `mlv_vehicleLongRun` varchar(20) NOT NULL,
  `mlv_BuyingDate` date NOT NULL,
  `mlv_vehiclePicture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_list_vehicle`
--

INSERT INTO `mst_list_vehicle` (`mlv_id`, `mlv_vehicleName`, `mlv_vehicleCode`, `mlv_vehicleBrand`, `mlv_vehicleModel`, `mlv_vehicleNumber`, `mlv_vehicleLongRun`, `mlv_BuyingDate`, `mlv_vehiclePicture`) VALUES
(1, 'Forza', 'FRZ1404738DTR332', 'Honda', '250CC', 'B 1122 TNR', '3221', '2022-09-20', '/assets/picture/20221221015500.jpg'),
(2, 'CBR', 'CBR1504738ODD150', 'Honda', '150CC', 'B 3232 BRZ', '2100', '2022-09-23', '/assets/picture/20221221031200.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `mus_id` int(11) NOT NULL,
  `mus_fullname` varchar(100) NOT NULL,
  `mus_username` varchar(50) NOT NULL,
  `mus_password` varchar(200) NOT NULL,
  `mus_mac` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`mus_id`, `mus_fullname`, `mus_username`, `mus_password`, `mus_mac`) VALUES
(1, 'Udin Petot', 'udinpetot', 'petot123', 'C8-E2-65-FB-3F-51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_list_vehicle`
--
ALTER TABLE `mst_list_vehicle`
  ADD PRIMARY KEY (`mlv_id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`mus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_list_vehicle`
--
ALTER TABLE `mst_list_vehicle`
  MODIFY `mlv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `mus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
