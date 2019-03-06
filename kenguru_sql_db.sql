-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 05:13 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kenguru`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_info`
--

CREATE TABLE `access_info` (
  `id_access` int(5) NOT NULL,
  `value` varchar(45) NOT NULL,
  `storage_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_info`
--

INSERT INTO `access_info` (`id_access`, `value`, `storage_id`) VALUES
(10, '24 Hour Access', 10),
(11, 'Loading/Unloading Parking', 10),
(12, 'Own Keys', 10),
(13, '24 Hour Access', 11),
(14, 'Loading/Unloading Parking', 11),
(15, 'Own Keys', 11),
(16, '24 Hour Access', 12),
(17, 'Loading/Unloading Parking', 12),
(18, 'Own Keys', 12),
(19, '24 Hour Access', 11),
(20, 'Loading/Unloading Parking', 11),
(21, 'Own Keys', 11),
(22, '24 Hour Access', 11),
(23, 'Loading/Unloading Parking', 11),
(24, 'Own Keys', 11);

-- --------------------------------------------------------

--
-- Table structure for table `additional_details`
--

CREATE TABLE `additional_details` (
  `idadditional_details` int(5) NOT NULL,
  `value` varchar(45) NOT NULL,
  `storage_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `additional_details`
--

INSERT INTO `additional_details` (`idadditional_details`, `value`, `storage_id`) VALUES
(13, 'Dry', 11),
(14, 'Dust Free', 11),
(15, 'Heated', 11),
(16, 'Help With Loading', 11),
(17, 'Dust Free', 12),
(18, 'Dry', 11),
(19, 'Dust Free', 11),
(20, 'Heated', 11),
(21, 'Help With Loading', 11),
(22, 'Dry', 11),
(23, 'Dust Free', 11),
(24, 'Heated', 11),
(25, 'Help With Loading', 11);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address2_id` int(5) NOT NULL,
  `state` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `house_flat_no` int(10) NOT NULL,
  `land_mark` varchar(10) NOT NULL,
  `pincode` int(7) NOT NULL,
  `street_colony` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address2_id`, `state`, `city`, `house_flat_no`, `land_mark`, `pincode`, `street_colony`) VALUES
(5, 'Karnataka', 'Chikkamaga', 111, 'koramangal', 560042, 'sg palya'),
(6, 'Karnataka', 'Bengaluru ', 222, 'hbu', 560078, 'asd'),
(7, 'Karnataka', 'Bengaluru ', 222, 'koramangal', 560034, 'sg palya'),
(8, 'Karnataka', 'Bengaluru ', 133, 'christ sch', 560034, 'maryabhavan'),
(9, 'Karnataka', 'Bengaluru ', 1234, 'christ uni', 546734, 'asdf'),
(10, 'Karnataka', 'Mandya', 634, 'church', 562312, 'sdgah'),
(11, 'Karnataka', 'Chamarajan', 743, 'temple', 563823, 'madsfh');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` bigint(10) NOT NULL,
  `admin_pass` int(6) NOT NULL,
  `admin_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `email` varchar(45) NOT NULL,
  `contact` int(11) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_pass` int(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone_number` bigint(12) NOT NULL,
  `dob` date NOT NULL,
  `display_picture` varchar(650) NOT NULL,
  `address2_id` int(10) NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `aadhar_card` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_pass`, `first_name`, `last_name`, `email`, `phone_number`, `dob`, `display_picture`, `address2_id`, `customer_id`, `aadhar_card`) VALUES
(0, 'shiju', 'abraham', 'k.ashiju10@gmail.com', 9988776655, '0000-00-00', '1.jpg', 0, '34', ''),
(0, 'alwin', 'joseph', 'alwin@gmail.com', 7788997766, '0000-00-00', '', 0, '87', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `idmessage` int(30) NOT NULL,
  `message` varchar(510) NOT NULL,
  `from_user` varchar(10) NOT NULL,
  `to_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `security_features`
--

CREATE TABLE `security_features` (
  `idsecurity_features` int(5) NOT NULL,
  `value` varchar(45) NOT NULL,
  `storage_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_features`
--

INSERT INTO `security_features` (`idsecurity_features`, `value`, `storage_id`) VALUES
(24, 'High Security Lock', 10),
(25, 'CCTV', 10),
(26, 'Supervised', 10),
(27, 'Security personal', 10),
(28, 'Well Lit Area', 10),
(29, 'Someone usually at home', 10),
(30, 'Security personal', 10),
(31, 'High Security Lock', 11),
(32, 'CCTV', 11),
(33, 'Supervised', 11),
(34, 'Security personal', 11),
(35, 'Well Lit Area', 11),
(36, 'Someone usually at home', 11),
(37, 'Security personal', 11),
(38, 'High Security Lock', 12),
(39, 'CCTV', 12),
(40, 'Supervised', 12),
(41, 'Security personal', 12),
(42, 'Well Lit Area', 12),
(43, 'Someone usually at home', 12),
(44, 'Security personal', 12),
(45, 'High Security Lock', 11),
(46, 'CCTV', 11),
(47, 'Supervised', 11),
(48, 'Security personal', 11),
(49, 'Well Lit Area', 11),
(50, 'Someone usually at home', 11),
(51, 'CCTV', 11),
(52, 'Supervised', 11),
(53, 'Security personal', 11),
(54, 'Security personal', 11);

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `storage_id` int(10) NOT NULL,
  `storage_size` int(10) NOT NULL,
  `rent` int(5) NOT NULL,
  `picture` varchar(650) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `start_date` date NOT NULL,
  `stop_date` date NOT NULL,
  `saftey_feature` varchar(100) NOT NULL,
  `owner_id` varchar(10) NOT NULL,
  `storage_name` varchar(30) NOT NULL,
  `payment_method` int(10) NOT NULL,
  `storage_type` varchar(50) NOT NULL,
  `yt_video` varchar(200) NOT NULL,
  `desc_space` varchar(500) NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `address2_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`storage_id`, `storage_size`, `rent`, `picture`, `status`, `start_date`, `stop_date`, `saftey_feature`, `owner_id`, `storage_name`, `payment_method`, `storage_type`, `yt_video`, `desc_space`, `customer_id`, `address2_id`) VALUES
(10, 150, 500, '', 0, '2019-03-06', '2020-03-06', '', '87', 'garage', 0, 'Garage', '', 'store your cars here', '', 0),
(11, 200, 2000, '', 0, '2019-03-06', '2019-07-06', '', '87', 'commercial', 0, 'Commercial/self storage', '', 'jhhj dumb dsm ', '', 0),
(12, 200, 500, '', 0, '2019-03-06', '2020-03-06', '', '87', 'garage_gh', 0, 'Garage', 'https://youtu.be/rXWrpE1Khkk', 'vscnv dsjhfj kjsanc', '', 0),
(13, 200, 3000, '', 0, '2019-03-06', '2019-04-06', '', '87', 'commercial', 0, 'Commercial/self storage', 'https://www.youtube.com/watch?v=J-LeEWbNlBg', '', '', 0),
(14, 200, 5000, '', 0, '2019-03-06', '2021-03-06', '', '87', 'commercial', 0, 'Commercial/self storage', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `storage_pictures`
--

CREATE TABLE `storage_pictures` (
  `idstorage_pictures` int(11) NOT NULL,
  `picture_name` int(45) NOT NULL,
  `storage_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storage_pictures`
--

INSERT INTO `storage_pictures` (`idstorage_pictures`, `picture_name`, `storage_id`) VALUES
(6, 13, 10),
(7, 11, 11),
(8, 7, 12),
(9, 15, 11),
(10, 15, 11);

-- --------------------------------------------------------

--
-- Table structure for table `storage_suitable`
--

CREATE TABLE `storage_suitable` (
  `idsecurity_suitable` int(5) NOT NULL,
  `storage_id` int(10) NOT NULL,
  `value` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storage_suitable`
--

INSERT INTO `storage_suitable` (`idsecurity_suitable`, `storage_id`, `value`) VALUES
(12, 11, 0),
(13, 11, 0),
(14, 11, 0),
(15, 11, 0),
(16, 11, 0),
(17, 11, 0),
(18, 11, 0),
(19, 11, 0),
(20, 11, 0),
(21, 12, 0),
(22, 12, 0),
(23, 11, 0),
(24, 11, 0),
(25, 11, 0),
(26, 11, 0),
(27, 11, 0),
(28, 11, 0),
(29, 11, 0),
(30, 11, 0),
(31, 11, 0),
(32, 11, 0),
(33, 11, 0),
(34, 11, 0),
(35, 11, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_info`
--
ALTER TABLE `access_info`
  ADD PRIMARY KEY (`id_access`),
  ADD KEY `storage_id` (`storage_id`);

--
-- Indexes for table `additional_details`
--
ALTER TABLE `additional_details`
  ADD PRIMARY KEY (`idadditional_details`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address2_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`idmessage`),
  ADD KEY `from_user` (`from_user`),
  ADD KEY `to_user` (`to_user`);

--
-- Indexes for table `security_features`
--
ALTER TABLE `security_features`
  ADD PRIMARY KEY (`idsecurity_features`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`storage_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `storage_pictures`
--
ALTER TABLE `storage_pictures`
  ADD PRIMARY KEY (`idstorage_pictures`);

--
-- Indexes for table `storage_suitable`
--
ALTER TABLE `storage_suitable`
  ADD PRIMARY KEY (`idsecurity_suitable`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_info`
--
ALTER TABLE `access_info`
  MODIFY `id_access` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `additional_details`
--
ALTER TABLE `additional_details`
  MODIFY `idadditional_details` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address2_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` bigint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `idmessage` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `security_features`
--
ALTER TABLE `security_features`
  MODIFY `idsecurity_features` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `storage_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `storage_pictures`
--
ALTER TABLE `storage_pictures`
  MODIFY `idstorage_pictures` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `storage_suitable`
--
ALTER TABLE `storage_suitable`
  MODIFY `idsecurity_suitable` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `access_info`
--
ALTER TABLE `access_info`
  ADD CONSTRAINT `storage_id` FOREIGN KEY (`storage_id`) REFERENCES `storage` (`storage_id`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `to_user` FOREIGN KEY (`to_user`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `storage`
--
ALTER TABLE `storage`
  ADD CONSTRAINT `address2_id` FOREIGN KEY (`address2_id`) REFERENCES `address` (`address2_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
