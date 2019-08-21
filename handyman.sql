-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 01:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handyman`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'mobarak12', 'mobarak.hossain.cse12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) UNSIGNED NOT NULL,
  `provider_name` varchar(100) NOT NULL,
  `service_id` varchar(50) NOT NULL,
  `provider_id` varchar(50) NOT NULL,
  `provider_division` varchar(50) NOT NULL,
  `provider_zilla` varchar(50) NOT NULL,
  `provider_upazila` varchar(50) NOT NULL,
  `provider_address` varchar(100) NOT NULL,
  `provider_lat` decimal(10,8) NOT NULL,
  `provider_lang` decimal(11,8) NOT NULL,
  `provider_pic` text NOT NULL,
  `provider_phone` varchar(50) NOT NULL,
  `provider_email` varchar(50) NOT NULL,
  `provider_nid_number` varchar(50) NOT NULL,
  `about_provider` varchar(220) NOT NULL,
  `provider_username` varchar(50) NOT NULL,
  `provider_password` varchar(100) NOT NULL,
  `provider_status` varchar(50) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `provider_name`, `service_id`, `provider_id`, `provider_division`, `provider_zilla`, `provider_upazila`, `provider_address`, `provider_lat`, `provider_lang`, `provider_pic`, `provider_phone`, `provider_email`, `provider_nid_number`, `about_provider`, `provider_username`, `provider_password`, `provider_status`) VALUES
(54, 'Alamin', 'SER53260243362', '', 'Mymensingh', 'Mymensingh', 'Mymensingh Sadar', '', '0.00000000', '0.00000000', '../images/alamin_1558936491.jpg', '', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'deactive'),
(58, 'mobarak', 'SER421793844768', '12345', 'Mymensingh', 'Mymensingh', 'Fulbaria', '', '0.00000000', '0.00000000', '../images/mobarak_1566385761.jpg', '', '', '', '', '', '827ccb0eea8a706c4c34a16891f84e7b', 'deactive');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(190) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `service_id` varchar(50) NOT NULL,
  `service_slug` varchar(190) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `service_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `service_status` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_id`, `service_slug`, `service_description`, `service_status`) VALUES
(20, 'Electrician', 'SER421793844768', 'Electrician', '', 'active'),
(22, 'রাজমেস্তরি', 'SER491284349509', 'রাজমেস্তরি', '', 'active'),
(23, 'Plumber', 'SER03797011994', 'plumber', '', 'active'),
(24, 'Cleaner', 'SER33526593416', 'Cleaner', '', 'active'),
(25, 'Freezer', 'SER53260243362', 'Freezer', '', 'active'),
(26, 'গ্যাসের মিস্ত্রি', 'SERগ্যাসের মিস্ত্রি57', 'গ্যাসের-মিস্ত্রি', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `meta_key` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `meta_value` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_id` (`service_id`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);

--
-- Constraints for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD CONSTRAINT `user_meta_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
