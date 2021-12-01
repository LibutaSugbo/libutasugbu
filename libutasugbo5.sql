-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 03:51 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libutasugbo5`
--

-- --------------------------------------------------------

--
-- Table structure for table `bb_accomodation`
--

CREATE TABLE `bb_accomodation` (
  `BB_Accmm_ID` int(10) NOT NULL,
  `BB_Accmm_Image` blob NOT NULL,
  `BB_Room_Type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BB_Quantity` int(10) NOT NULL,
  `BB_Price` float(10,2) NOT NULL,
  `BB_Info` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Booking_ID` int(10) NOT NULL,
  `Booking_Time` datetime NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Guest_Adult` int(10) NOT NULL,
  `Guest_Children` int(10) NOT NULL,
  `Check_In` datetime NOT NULL,
  `Check_Out` datetime NOT NULL,
  `Traveler_ID` int(10) NOT NULL,
  `Host_ID` int(10) NOT NULL,
  `R_Accmm_ID` int(10) NOT NULL,
  `BB_Accmm_ID` int(10) NOT NULL,
  `Vehicle_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bucketlist`
--

CREATE TABLE `bucketlist` (
  `Bucketlist_ID` int(10) NOT NULL,
  `Host_Info` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Traveler_ID` int(10) NOT NULL,
  `Host_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `Host_ID` int(10) NOT NULL,
  `Host_BName` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Host_LName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Host_FName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Host_MName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Host_ExtName` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Host_City_Muni` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Host_Brgy` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Host_Street` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Host_ZIP` int(5) NOT NULL,
  `Host_ContactNum` bigint(11) NOT NULL,
  `Host_Direction` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Host_Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Host_Password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Host_Type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_Acc_ID` int(10) NOT NULL,
  `Host_Website` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messaging`
--

CREATE TABLE `messaging` (
  `Message_ID` int(10) NOT NULL,
  `Message_Sender` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message_Recipient` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message_Content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message_TimeStamp` datetime NOT NULL,
  `Traveler_ID` int(10) NOT NULL,
  `Host_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `Promo_ID` int(10) NOT NULL,
  `Promo_StartDate` datetime NOT NULL,
  `Promo_EndDate` datetime NOT NULL,
  `Host_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Reservation_ID` int(10) NOT NULL,
  `Reservation_Date` datetime NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Guest_Adult` int(10) NOT NULL,
  `Guest_Children` int(10) NOT NULL,
  `Check_In` datetime NOT NULL,
  `Check_Out` datetime NOT NULL,
  `Traveler_ID` int(10) NOT NULL,
  `Host_ID` int(10) NOT NULL,
  `R_Accmm_ID` int(10) NOT NULL,
  `BB_Accmm_ID` int(10) NOT NULL,
  `Vehicle_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resortaccomodation`
--

CREATE TABLE `resortaccomodation` (
  `R_Accmm_ID` int(10) NOT NULL,
  `R_Accmm_Image` int(11) NOT NULL,
  `R_Accmm_Type` blob NOT NULL,
  `R_Accmm_Price` float(8,2) NOT NULL,
  `R_Accmm_Info` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `R_Room_Type` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `R_Room_Quantity` int(10) DEFAULT NULL,
  `R_Room_MaxCap` int(10) DEFAULT NULL,
  `R_Cot_Quantity` int(10) DEFAULT NULL,
  `R_Cot_Max` int(10) DEFAULT NULL,
  `R_Tab_Quantity` int(10) DEFAULT NULL,
  `R_Tab_MaxCap` int(10) DEFAULT NULL,
  `R_Act_Type` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resto_cafe_menu`
--

CREATE TABLE `resto_cafe_menu` (
  `RC_ID` int(10) NOT NULL,
  `RC_Image` blob NOT NULL,
  `RC_Type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RC_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RC_Description` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RC_Price` float(10,2) NOT NULL,
  `RC_Info` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `Sub_ID` int(10) NOT NULL,
  `Sub_Payment` float(10,2) NOT NULL,
  `Sub_StartDate` datetime NOT NULL,
  `Sub_EndDate` datetime NOT NULL,
  `Sub_Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Host_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `touristattraction`
--

CREATE TABLE `touristattraction` (
  `TA_ID` int(10) NOT NULL,
  `TA_Image` blob NOT NULL,
  `TA_Activity` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TA_Grouping` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TA_DateAvailable` datetime NOT NULL,
  `TA_Fee` float(10,2) NOT NULL,
  `TA_Info` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traveler`
--

CREATE TABLE `traveler` (
  `Traveler_ID` int(10) NOT NULL,
  `Traveler_LName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Traveler_FName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Traveler_BirthDate` date NOT NULL,
  `Traveler_Contact` bigint(11) NOT NULL,
  `Traveler_Email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Traveler_Address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Login_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_Acc_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `User_Acc_ID` int(10) NOT NULL,
  `User_Acc_Desc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `Vehicle_ID` int(10) NOT NULL,
  `Vehicle_Image` blob NOT NULL,
  `Vehicle_Type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Vehicle_With` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Vehicle_Allow` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Vehicle_RentPrice` float(10,2) NOT NULL,
  `Vehicle_MaxCap` int(10) NOT NULL,
  `Vehicle_Quantity` int(10) NOT NULL,
  `Vehicle_Info` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bb_accomodation`
--
ALTER TABLE `bb_accomodation`
  ADD PRIMARY KEY (`BB_Accmm_ID`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_ID`),
  ADD KEY `Traveler_ID` (`Traveler_ID`),
  ADD KEY `Host_ID` (`Host_ID`,`R_Accmm_ID`,`BB_Accmm_ID`,`Vehicle_ID`);

--
-- Indexes for table `bucketlist`
--
ALTER TABLE `bucketlist`
  ADD PRIMARY KEY (`Bucketlist_ID`),
  ADD KEY `Traveler_ID` (`Traveler_ID`),
  ADD KEY `Host_ID` (`Host_ID`);

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`Host_ID`),
  ADD UNIQUE KEY `User_Acc_ID` (`User_Acc_ID`);

--
-- Indexes for table `messaging`
--
ALTER TABLE `messaging`
  ADD PRIMARY KEY (`Message_ID`),
  ADD KEY `Traveler_ID` (`Traveler_ID`),
  ADD KEY `Host_ID` (`Host_ID`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`Promo_ID`),
  ADD KEY `Host_ID` (`Host_ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reservation_ID`),
  ADD KEY `Host_ID` (`Host_ID`),
  ADD KEY `R_Accmm_ID` (`R_Accmm_ID`),
  ADD KEY `BB_Accmm_ID` (`BB_Accmm_ID`),
  ADD KEY `Vehicle_ID` (`Vehicle_ID`);

--
-- Indexes for table `resortaccomodation`
--
ALTER TABLE `resortaccomodation`
  ADD PRIMARY KEY (`R_Accmm_ID`);

--
-- Indexes for table `resto_cafe_menu`
--
ALTER TABLE `resto_cafe_menu`
  ADD PRIMARY KEY (`RC_ID`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`Sub_ID`),
  ADD KEY `Host_ID` (`Host_ID`);

--
-- Indexes for table `touristattraction`
--
ALTER TABLE `touristattraction`
  ADD PRIMARY KEY (`TA_ID`);

--
-- Indexes for table `traveler`
--
ALTER TABLE `traveler`
  ADD PRIMARY KEY (`Traveler_ID`),
  ADD KEY `User_Acc_ID` (`User_Acc_ID`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`User_Acc_ID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`Vehicle_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bb_accomodation`
--
ALTER TABLE `bb_accomodation`
  MODIFY `BB_Accmm_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Booking_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bucketlist`
--
ALTER TABLE `bucketlist`
  MODIFY `Bucketlist_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `Host_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messaging`
--
ALTER TABLE `messaging`
  MODIFY `Message_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `Promo_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservation_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resortaccomodation`
--
ALTER TABLE `resortaccomodation`
  MODIFY `R_Accmm_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resto_cafe_menu`
--
ALTER TABLE `resto_cafe_menu`
  MODIFY `RC_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `Sub_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `touristattraction`
--
ALTER TABLE `touristattraction`
  MODIFY `TA_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `traveler`
--
ALTER TABLE `traveler`
  MODIFY `Traveler_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `User_Acc_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `Vehicle_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `host`
--
ALTER TABLE `host`
  ADD CONSTRAINT `host_ibfk_1` FOREIGN KEY (`User_Acc_ID`) REFERENCES `useraccount` (`User_Acc_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `promotion_ibfk_1` FOREIGN KEY (`Host_ID`) REFERENCES `host` (`Host_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscription`
--
ALTER TABLE `subscription`
  ADD CONSTRAINT `subscription_ibfk_1` FOREIGN KEY (`Host_ID`) REFERENCES `host` (`Host_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `traveler`
--
ALTER TABLE `traveler`
  ADD CONSTRAINT `traveler_ibfk_1` FOREIGN KEY (`User_Acc_ID`) REFERENCES `useraccount` (`User_Acc_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
