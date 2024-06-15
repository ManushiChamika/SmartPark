-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 09:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartparkpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `admin_id` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`admin_id`, `user_name`, `password`) VALUES
(1, 'Thusha_ammu', 'queen30'),
(3, 'Admin_thusha', 'thusha12'),
(4, 'Admin_ammu', 'Aqueen02');

-- --------------------------------------------------------

--
-- Table structure for table `basement_parking_space`
--

CREATE TABLE `basement_parking_space` (
  `slot_number` char(4) NOT NULL,
  `is_available` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basement_parking_space`
--

INSERT INTO `basement_parking_space` (`slot_number`, `is_available`) VALUES
('P-1', 1),
('P-10', 1),
('P-11', 0),
('P-12', 1),
('P-13', 1),
('P-14', 0),
('P-15', 1),
('P-16', 0),
('P-17', 1),
('P-18', 0),
('P-19', 0),
('P-2', 0),
('P-20', 0),
('P-21', 1),
('P-22', 0),
('P-23', 1),
('P-24', 0),
('P-3', 1),
('P-4', 0),
('P-5', 1),
('P-6', 1),
('P-7', 1),
('P-8', 0),
('P-9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `User_ID` varchar(20) NOT NULL,
  `booking_ID` varchar(20) NOT NULL,
  `name` char(50) NOT NULL,
  `floor` char(50) NOT NULL,
  `slot` varchar(50) NOT NULL,
  `car_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `entry_date` date NOT NULL,
  `entry_time` time NOT NULL,
  `exit_date` date NOT NULL,
  `exit_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`User_ID`, `booking_ID`, `name`, `floor`, `slot`, `car_number`, `email`, `entry_date`, `entry_time`, `exit_date`, `exit_time`) VALUES
('1ZjG4yOfsrjZHIc3vcZI', 'l61WMMedrZVHlPopEhVx', 'manu', 'Outer parking', 'P-24', '89', 'ekettipearachchi@gmail.com', '2024-05-02', '02:27:00', '2024-05-23', '03:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(10) NOT NULL,
  `employee_name` varchar(30) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `salary` int(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `FID` int(25) NOT NULL,
  `Feedbacks` text NOT NULL,
  `MemberId` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `first_floor_parking`
--

CREATE TABLE `first_floor_parking` (
  `slot_number` char(4) NOT NULL,
  `is_available` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `first_floor_parking`
--

INSERT INTO `first_floor_parking` (`slot_number`, `is_available`) VALUES
('P-1', 1),
('P-10', 0),
('P-11', 1),
('P-12', 1),
('P-13', 0),
('P-14', 0),
('P-15', 1),
('P-16', 0),
('P-17', 1),
('P-18', 1),
('P-19', 1),
('P-2', 0),
('P-20', 0),
('P-21', 1),
('P-22', 0),
('P-23', 1),
('P-24', 0),
('P-3', 1),
('P-4', 1),
('P-5', 0),
('P-6', 1),
('P-7', 1),
('P-8', 0),
('P-9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `MemberId` varchar(25) DEFAULT NULL,
  `Vehicle` varchar(25) NOT NULL,
  `ParkingSection` varchar(25) NOT NULL,
  `Contact` int(25) NOT NULL,
  `Services` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `outer_parking`
--

CREATE TABLE `outer_parking` (
  `slot_number` char(4) NOT NULL,
  `is_available` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `outer_parking`
--

INSERT INTO `outer_parking` (`slot_number`, `is_available`) VALUES
('P-1', 1),
('P-10', 1),
('P-11', 1),
('P-12', 0),
('P-13', 1),
('P-14', 1),
('P-15', 1),
('P-16', 0),
('P-17', 0),
('P-18', 0),
('P-19', 1),
('P-2', 1),
('P-20', 0),
('P-21', 0),
('P-22', 0),
('P-23', 1),
('P-24', 1),
('P-3', 1),
('P-4', 1),
('P-5', 0),
('P-6', 0),
('P-7', 0),
('P-8', 1),
('P-9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `booking_ID` varchar(20) NOT NULL,
  `name` char(50) NOT NULL,
  `cardnumber` varchar(50) NOT NULL,
  `expmonth` varchar(50) NOT NULL,
  `expyear` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CVC_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `second_floor_parking`
--

CREATE TABLE `second_floor_parking` (
  `slot_number` char(4) NOT NULL,
  `is_available` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `second_floor_parking`
--

INSERT INTO `second_floor_parking` (`slot_number`, `is_available`) VALUES
('P-1', 0),
('P-10', 1),
('P-11', 1),
('P-12', 0),
('P-13', 1),
('P-14', 1),
('P-15', 1),
('P-16', 0),
('P-17', 1),
('P-18', 1),
('P-19', 1),
('P-2', 0),
('P-20', 0),
('P-21', 0),
('P-22', 0),
('P-23', 1),
('P-24', 1),
('P-3', 1),
('P-4', 1),
('P-5', 0),
('P-6', 0),
('P-7', 1),
('P-8', 1),
('P-9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `person_name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `user_Password` varchar(10) DEFAULT NULL,
  `Confirm_password` varchar(10) DEFAULT NULL,
  `Contact_no` int(11) DEFAULT NULL,
  `Vehicle_type` varchar(20) DEFAULT NULL,
  `Number_plate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basement_parking_space`
--
ALTER TABLE `basement_parking_space`
  ADD PRIMARY KEY (`slot_number`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `first_floor_parking`
--
ALTER TABLE `first_floor_parking`
  ADD PRIMARY KEY (`slot_number`);

--
-- Indexes for table `outer_parking`
--
ALTER TABLE `outer_parking`
  ADD PRIMARY KEY (`slot_number`);

--
-- Indexes for table `second_floor_parking`
--
ALTER TABLE `second_floor_parking`
  ADD PRIMARY KEY (`slot_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
