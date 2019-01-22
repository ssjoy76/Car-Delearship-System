-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 10:51 PM
-- Server version: 10.1.29-MariaDB
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
-- Database: `bd_gari`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `sid` varchar(150) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `sid`, `userid`, `name`, `pass`, `address`, `phone`, `email`, `date`) VALUES
(1, '20', '13143103001', 'Methon', '123', 'Mirpur', 1274638, 'mm@gmail.com', '2018-08-13 17:32:33'),
(2, '0', '13143103002', 'Shamim', '123', 'Dhaka', 1274638, 'mm1@gmail.com', '2018-08-14 01:43:41'),
(3, '686', '13143103003', 'Shamim', '12', 'Dhanmondi', 1274638, 'bvmcbm', '2018-08-14 01:44:32'),
(4, '686', '13143103004', 'Shova', '1', 'Framgate', 1274638, 'bvmcbm', '2018-08-14 01:45:00'),
(5, '686', '13143103005', 'Zahid', '11', 'Shahbag', 1274638, 'kk@gmail.com', '2018-08-14 01:44:54'),
(8, 'dmp2rpnggv04gbl4iqduajvni2', '13143103006', 'MD. MAHBUBUL HAQUE M', '12345', 'Framgate', 1274638, 'mm2@gmail.com', '2018-08-13 17:33:24'),
(9, '57g2mdk6vrnbhvkh5ap6i52r81', '13143103007', 'Rabbi', '1234', 'Framgate', 1274638, 'mm3@gmail.com', '2018-08-14 01:45:14'),
(21, 'kttijhikk8hb6l3kl5kl7kbjam', '123456', 'Nawshin', '123', 'dhaka', 127485, 'm@gmail.com', '2018-08-14 01:45:23'),
(22, 'kttijhikk8hb6l3kl5kl7kbjam', '13143103025', 'Bilai', '123', 'Framgate', 1724569300, 'mm8@gmail.com', '2018-08-14 02:10:41'),
(23, 'kttijhikk8hb6l3kl5kl7kbjam', '13143103038', 'Shalahuddin Raj', '123', 'Dhaka', 1708595909, 'raj@gmail.com', '2018-08-14 01:38:53'),
(24, 'kttijhikk8hb6l3kl5kl7kbjam', '13143103047', 'Shahin ali', '123', 'Dhaka', 1758888888, 'shahin@gmail.com', '2018-08-14 01:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(11) NOT NULL,
  `ccat` varchar(50) NOT NULL,
  `svgPhoto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `ccat`, `svgPhoto`) VALUES
(1, 'RV', 'svgicons/rv.svg'),
(2, 'Sedan', 'svgicons/sedan.svg'),
(3, 'SUV', 'svgicons/suv.svg'),
(4, 'Station Wagon', 'svgicons/StationWagon.svg'),
(5, 'Hatchback', 'svgicons/Hatchback.svg');

-- --------------------------------------------------------

--
-- Table structure for table `gari`
--

CREATE TABLE `gari` (
  `Stock_no` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Make` varchar(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Body_Type` varchar(100) NOT NULL,
  `Interior_Color` varchar(100) NOT NULL,
  `Exterior_Color` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Engine` varchar(100) NOT NULL,
  `Transmission` varchar(100) NOT NULL,
  `Fuel_Type` varchar(100) NOT NULL,
  `drive_Type` varchar(100) NOT NULL,
  `Tyre` varchar(100) NOT NULL,
  `Mileage` int(11) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `New_old` varchar(100) NOT NULL,
  `cat` int(11) NOT NULL,
  `Grade` varchar(300) NOT NULL,
  `product_status` enum('0','1') NOT NULL COMMENT '0-active,1-inactive',
  `quantity` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gari`
--

INSERT INTO `gari` (`Stock_no`, `id`, `Make`, `Model`, `Body_Type`, `Interior_Color`, `Exterior_Color`, `Year`, `Engine`, `Transmission`, `Fuel_Type`, `drive_Type`, `Tyre`, `Mileage`, `Capacity`, `price`, `photo`, `New_old`, `cat`, `Grade`, `product_status`, `quantity`, `logo`) VALUES
(390707149, 1, 'Toyota', 'Toyota Corolla Axio', 'Sedan', 'Beige', 'White', '2014', '1500cc', 'Automatic', 'Gasoline', '2WD', '4', 58000, 5, '1980000', 'images/01.jpg', 'New', 2, '1.5 X', '0', 5, 'Premium'),
(390706127, 2, 'Toyota', 'TOYOTA LAND CRUISER PRADO TX 4WD', 'RV', 'Black', 'Pearl White', '2015', '2700cc', 'Automatic', 'Gasoline', '4WD', '4', 29000, 5, '10400000', 'images/8.jpg', 'New', 1, 'Argento Cross', '0', 2, 'Premium'),
(390803149, 3, 'Toyota', 'Toyota C-HR G-T 4WD TURBO', 'Hatchback', 'Black', 'Pearl White', '2017', '1200cc', 'Automatic', 'Gasoline', '4WD', '4', 200, 5, '4500000', 'images/016.jpg', 'New', 5, 'FAT Grade', '0', 3, 'Premium'),
(390707046, 4, 'Honda', 'Honda Vezel', 'SUV', 'Black', 'Silver', '2014', '1500cc', 'Automatic', 'Gasoline', '2WD', '4', 13000, 5, '3100000', 'images/024.jpg', 'New', 3, 'X', '0', 1, 'Premium'),
(390707164, 5, 'Honda', ' HONDA SHUTTLE', 'Station Wagon', 'Black', 'Silver', '2015', '1500cc', 'Automatic', 'Gasoline', '2WD', '4', 38000, 4, '2350000', 'images/032.jpg', 'New', 4, 'G', '0', 6, 'Premium'),
(390709116, 6, 'Toyota', 'Toyota Allion A15', 'Sedan', 'Beige', 'Pearl White', '2013', '1500cc', 'Automatic', 'Gasoline', '2WD', '4', 26500, 5, '2750000', 'images/040.jpg', 'New', 2, 'G Package', '0', 7, 'Premium'),
(390709117, 7, 'Toyota', 'Toyota Corolla Axio 1.3', 'Sedan', 'Gray', 'Beige', '2012', '1300cc', 'Automatic', 'Gasoline', '2WD', '4', 17000, 5, '1500000', 'images/051.jpg', 'Old', 0, ' X', '0', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `gari_name`
--

CREATE TABLE `gari_name` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gari_name`
--

INSERT INTO `gari_name` (`id`, `name`) VALUES
(1, 'Toyota'),
(2, 'Honda'),
(3, 'Hero'),
(4, 'Hundai');

-- --------------------------------------------------------

--
-- Table structure for table `key`
--

CREATE TABLE `key` (
  `Stock_no2` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Features` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `key`
--

INSERT INTO `key` (`Stock_no2`, `id`, `Features`) VALUES
(390707149, 1, 'ABS Brakes'),
(390707149, 2, 'Adaptive Headlight(s)'),
(390707149, 3, 'Air Conditioning'),
(390707149, 4, 'AM/FM Stereo'),
(390707149, 5, 'Auto Transmission'),
(390707149, 6, 'Crystal Break Light'),
(390707149, 7, ' Discharge Headlight'),
(390707149, 8, 'Keyless Entry'),
(390707149, 9, 'Leather Seat'),
(390707149, 10, 'Overhead Airbags'),
(390707149, 11, 'Power Lock(s)'),
(390707149, 12, 'Power Steering'),
(390707149, 13, 'Power WIndow(s)'),
(390707149, 14, 'Semi-Leather Seat(s)'),
(390707149, 15, 'Travel Comfort'),
(390706127, 16, ' ABS Brakes'),
(390706127, 17, 'Extra Wheel'),
(390706127, 18, ' Projector Light'),
(390706127, 19, ' Adaptive Headlight(s)'),
(390706127, 20, 'Fabric Seats'),
(390706127, 21, 'Push Start'),
(390706127, 22, 'Air Conditioning'),
(390706127, 23, 'Fog Light'),
(390706127, 24, 'Rain Guards'),
(390706127, 25, 'Alloy Wheels'),
(390706127, 26, ' Front Glass Heater'),
(390706127, 27, 'Rear Spoiler'),
(390706127, 28, ' AM/FM Stereo'),
(390706127, 29, 'HID-Headlights'),
(390706127, 30, 'Roof Rail'),
(390706127, 31, ' Auto Transmission'),
(390706127, 32, 'Navigation Sys (GPS)'),
(390706127, 33, ' Smart Key'),
(390706127, 34, 'Black & White Combination Seat'),
(390706127, 35, 'Overhead Airbags'),
(390706127, 36, ' SRS Airbag'),
(390706127, 37, ' Power Lock(s)'),
(390706127, 38, 'Tool Box'),
(390706127, 39, 'Blind Spot Warning'),
(390706127, 40, 'Power Steering'),
(390706127, 41, ' TV'),
(390706127, 42, 'CD Audio'),
(390706127, 43, 'Power WIndow(s)'),
(390706127, 44, 'Wheel Jacks'),
(390706127, 45, 'Combined Breaking System (CBS)'),
(390803149, 46, ' 4WD'),
(390803149, 47, ' Keyless Entry'),
(390803149, 48, 'Privacy Glass'),
(390803149, 49, 'ABS Brakes'),
(390803149, 50, 'Navigation Sys (GPS)'),
(390803149, 51, 'Projector Light'),
(390803149, 52, 'Air Conditioning'),
(390803149, 53, 'Overhead Airbags'),
(390803149, 54, ' Push Start'),
(390803149, 55, ' Alloy Wheels'),
(390803149, 56, 'Park Assist'),
(390803149, 57, ' Rear Spoiler'),
(390803149, 58, 'AM/FM Stereo'),
(390803149, 59, 'Parking Sensors'),
(390803149, 60, ' Rear Wiper'),
(390803149, 61, 'Auto Transmission'),
(390803149, 62, ' Power Lock(s)'),
(390803149, 63, 'Side Airbags'),
(390803149, 64, ' Blind Spot Warning'),
(390803149, 65, 'Power Mirror(s)'),
(390803149, 66, 'Smart Key'),
(390803149, 67, ' Bluetooth'),
(390803149, 68, ' Power Steering'),
(390803149, 69, 'SRS Airbag'),
(390803149, 70, ' Crystal Break Light'),
(390803149, 71, ' Power WIndow(s)'),
(390803149, 72, ' Tool Box'),
(390803149, 73, ' Fold-Down Rear Seat'),
(390803149, 74, ' Warning Light'),
(390803149, 75, 'Premium Package'),
(390707046, 76, 'ABS Brakes'),
(390707046, 77, ' Fog Light'),
(390707046, 78, 'Power WIndow(s)'),
(390707046, 79, 'Air Conditioning'),
(390707046, 80, 'Front Wheel Drive'),
(390707046, 81, 'Projector Light'),
(390707046, 82, 'Alloy Wheels'),
(390707046, 83, 'HID-Headlights'),
(390707046, 84, 'Rear Parking Camera'),
(390707046, 85, 'AM/FM Stereo'),
(390707046, 86, 'Keyless Entry'),
(390707046, 87, 'Rear Spoiler'),
(390707046, 88, ' Auto Transmission'),
(390707046, 89, 'Navigation Sys (GPS)'),
(390707046, 90, ' Rear Wiper'),
(390707046, 91, 'CD Audio'),
(390707046, 92, 'Overhead Airbags'),
(390707046, 93, 'Smart Key'),
(390707046, 94, 'Cloth Seat(s)'),
(390707046, 95, 'Power Lock(s)'),
(390707164, 96, ' ABS Brakes'),
(390707164, 97, ' LED Break Light'),
(390707164, 98, ' Rear Spoiler'),
(390707164, 99, 'Adaptive Headlight(s)'),
(390707164, 100, 'Overhead Airbags'),
(390707164, 101, 'Rear Wiper'),
(390707164, 102, 'Alloy Wheels'),
(390707164, 103, 'Power Lock(s)'),
(390707164, 104, ' SRS Airbag'),
(390707164, 105, ' AM/FM Stereo'),
(390707164, 106, 'Power Mirror(s)'),
(390707164, 107, 'Tire Temporary Mobility Restoration Kit'),
(390707164, 108, ' CD Audio'),
(390707164, 109, 'Premium Package'),
(390707164, 110, 'Crystal Break Light'),
(390707164, 111, 'Privacy Glass'),
(390707164, 112, 'Discharge Headlight'),
(390707164, 113, 'Projector Light'),
(390707164, 114, 'Travel Comfort'),
(390707164, 115, 'Fabric Seats'),
(390709116, 116, 'ABS Brakes'),
(390709116, 117, 'Power Mirror(s)'),
(390709116, 118, 'SRS Airbag'),
(390709116, 119, ' Air Conditioning'),
(390709116, 120, ' Power Steering'),
(390709116, 121, ' Tool Box'),
(390709116, 122, ' AM/FM Stereo'),
(390709116, 123, ' Power WIndow(s)'),
(390709116, 124, ' Travel Comfort'),
(390709116, 125, ' Auto Transmission'),
(390709116, 126, ' Premium Package'),
(390709116, 127, ' Warning Light'),
(390709116, 128, 'Crystal Break Light'),
(390709116, 129, 'Projector Light'),
(390709116, 130, 'Wheel Jacks'),
(390709116, 131, ' Discharge Headlight'),
(390709116, 132, 'Push Start'),
(390709116, 133, ' Fabric Seats'),
(390709116, 134, 'Rain Guards'),
(390709116, 135, 'Fog Light'),
(390709117, 136, ' Air Conditioning'),
(390709117, 137, 'Overhead Airbags'),
(390709117, 138, 'Tire Temporary Mobility Restoration Kit'),
(390709117, 139, 'AM/FM Stereo'),
(390709117, 140, 'Power Steering'),
(390709117, 141, ' Auto Transmission'),
(390709117, 142, ' Power WIndow(s)'),
(390709117, 143, ' Tool Box'),
(390709117, 144, 'SRS Airbag'),
(390709117, 145, 'Wheel Jacks'),
(390709117, 146, ' Fabric Seats'),
(390709117, 147, ' LED Break Light'),
(390709117, 148, 'Xenon Lights');

-- --------------------------------------------------------

--
-- Table structure for table `lohin`
--

CREATE TABLE `lohin` (
  `adminId` int(11) NOT NULL,
  `adminEmail` varchar(100) NOT NULL,
  `adminPass` varchar(100) NOT NULL,
  `adminName` varchar(300) NOT NULL,
  `adminUser` varchar(300) NOT NULL,
  `pho` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lohin`
--

INSERT INTO `lohin` (`adminId`, `adminEmail`, `adminPass`, `adminName`, `adminUser`, `pho`) VALUES
(1, 'kk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Methon', 'admin', '0'),
(2, 'methon@gmail.com', '123456', 'Methon', 'admin', '5.jpg'),
(3, 'raj@gmail.com', '123', 'Raj', 'admin', '02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `ui` varchar(100) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` text NOT NULL,
  `approve` varchar(100) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `Datee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `sid`, `ui`, `item_id`, `item_name`, `quantity`, `total`, `approve`, `delivery`, `status`, `Datee`) VALUES
(1, 'dmp2rpnggv04gbl4iqduajvni2', '13143103001', 2, 'TOYOTA LAND CRUISER PRADO TX 4WD', 1, '10400000', 'Approved', 'Delivered', 'Yes', '2018-08-08'),
(2, 'nrnpjfocq8nnbojcqonq0ea43u', '13143103002', 1, 'Toyota Corolla Axio', 3, '1980000', 'Approved', 'Delivered', 'No', '2018-08-02'),
(3, 'nrnpjfocq8nnbojcqonq0ea43u', '13143103002', 1, 'Toyota Corolla Axio', 3, '1980000', 'Approved', 'Delivered', '', '2018-08-08'),
(4, '9rn7uqq2pmlffbrnclmq4su7vc', '13143103003', 1, 'Toyota Corolla Axio', 2, '1980000', '', '', '', '2018-08-07'),
(5, 'l434poj2b2ir4pphogtdcd3og9', '13143103003', 4, 'Honda Vezel', 1, '3100000', '', '', '', '2018-07-02'),
(6, 'l434poj2b2ir4pphogtdcd3og9', '13143103004', 2, 'TOYOTA LAND CRUISER PRADO TX 4WD', 1, '10400000', '', '', '', '2018-05-09'),
(7, '1jm34ogr1e8m219lj7i5d1bh09', '13143103005', 1, 'Toyota Corolla Axio', 1, '1980000', '', '', '', '2018-08-20'),
(8, '1jm34ogr1e8m219lj7i5d1bh09', '13143103005', 1, 'Toyota Corolla Axio', 1, '1980000', '', '', '', '2018-08-09'),
(9, '564g14qjnf0901ubins9f57np0', '13143103004', 4, 'Honda Vezel', 3, '3100000', '', '', '', '0000-00-00'),
(10, '57g2mdk6vrnbhvkh5ap6i52r81', '13143103006', 2, 'TOYOTA LAND CRUISER PRADO TX 4WD', 3, '10400000', '', '', '', '2018-08-08'),
(11, '57g2mdk6vrnbhvkh5ap6i52r81', '13143103006', 1, 'Toyota Corolla Axio', 1, '1980000', '', '', '', '2018-08-08'),
(12, 'qbof86bqbbrtd5k2s6l80f7n6r', '13143103001', 3, 'Toyota C-HR G-T 4WD TURBO', 2, '4500000', '', '', 'No', '2018-08-06'),
(13, 'qbof86bqbbrtd5k2s6l80f7n6r', '13143103001', 3, 'Toyota C-HR G-T 4WD TURBO', 1, '4500000', '', '', '', '2018-08-10'),
(14, 'adpfa51n8vunhc0iegr3ol0i7e', '13143103007', 1, 'Toyota Corolla Axio', 2, '1980000', 'Approved', 'Delivered', 'No', '2018-08-12'),
(61, 'kttijhikk8hb6l3kl5kl7kbjam', '13143103007', 1, 'Toyota Corolla Axio', 1, '1980000', '', '', '', '2018-08-13'),
(62, 'kttijhikk8hb6l3kl5kl7kbjam', '13143103001', 1, 'Toyota Corolla Axio', 1, '1980000', '', '', '', '2018-08-13'),
(63, 'kttijhikk8hb6l3kl5kl7kbjam', '13143103001', 1, 'Toyota Corolla Axio', 1, '1980000', '', '', '', '2018-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `Stock_no1` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`Stock_no1`, `id`, `photo`) VALUES
(390707149, 1, 'images/02.jpg'),
(390707149, 2, 'images/01.jpg'),
(390707149, 3, 'images/03.jpg'),
(390707149, 4, 'images/04.jpg'),
(390707149, 5, 'images/05.jpg'),
(390707149, 6, 'images/06.jpg'),
(390707149, 7, 'images/07.jpg'),
(390707149, 8, 'images/08.jpg'),
(390706127, 9, 'images/8.jpg'),
(390706127, 10, 'images/09.jpg'),
(390706127, 11, 'images/010.jpg'),
(390706127, 12, 'images/011.jpg'),
(390706127, 13, 'images/012.jpg'),
(390706127, 14, 'images/013.jpg'),
(390706127, 15, 'images/014.jpg'),
(390706127, 16, 'images/015.jpg'),
(390803149, 17, 'images/016.jpg'),
(390803149, 18, 'images/017.jpg'),
(390803149, 19, 'images/018.jpg'),
(390803149, 20, 'images/019.jpg'),
(390803149, 21, 'images/020.jpg'),
(390803149, 22, 'images/021.jpg'),
(390803149, 23, 'images/022.jpg'),
(390803149, 24, 'images/023.jpg'),
(390707046, 25, 'images/024.jpg'),
(390707046, 26, 'images/025.jpg'),
(390707046, 27, 'images/026.jpg'),
(390707046, 28, 'images/027.jpg'),
(390707046, 29, 'images/028.jpg'),
(390707046, 30, 'images/029.jpg'),
(390707046, 31, 'images/031.jpg'),
(390707164, 32, 'images/032.jpg'),
(390707164, 33, 'images/033.jpg'),
(390707164, 34, 'images/034.jpg'),
(390707164, 35, 'images/035.jpg'),
(390707164, 36, 'images/036.jpg'),
(390707164, 37, 'images/037.jpg'),
(390707164, 38, 'images/038.jpg'),
(390707164, 39, 'images/039.jpg'),
(390709116, 40, 'images/040.jpg'),
(390709116, 41, 'images/042.jpg'),
(390709116, 42, 'images/041.jpg'),
(390709116, 43, 'images/043.jpg'),
(390709116, 44, 'images/044.jpg'),
(390709116, 45, 'images/045.jpg'),
(390709116, 46, 'images/046.jpg'),
(390709117, 47, 'images/047.jpg'),
(390709117, 48, 'images/048.jpg'),
(390709117, 49, 'images/049.jpg'),
(390709117, 50, 'images/050.jpg'),
(390709117, 51, 'images/051.jpg'),
(390709117, 52, 'images/052.jpg'),
(390709117, 53, 'images/053.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gari`
--
ALTER TABLE `gari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gari_name`
--
ALTER TABLE `gari_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `key`
--
ALTER TABLE `key`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lohin`
--
ALTER TABLE `lohin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gari`
--
ALTER TABLE `gari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gari_name`
--
ALTER TABLE `gari_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `key`
--
ALTER TABLE `key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `lohin`
--
ALTER TABLE `lohin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
