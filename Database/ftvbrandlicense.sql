-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 06:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ftvbrandlicense`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `designation` varchar(128) NOT NULL,
  `state` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `investment_capacity` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `contact`, `designation`, `state`, `city`, `investment_capacity`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'yogesh mishra', 'yogeshmishra2599@gmail.com', '9321032481', 'Jr. Full Stack Web Developer', 'Andaman and Nicobar Islands', 'Garacharma', '10', 'test data', '2024-03-28 07:38:08', NULL, NULL),
(10, 'Yogesh Manoj Mishra', 'yogeshmishra2599@gmail.com', '9321032481', 'Jr. Full Stack Web Developer', 'Maharashtra', 'Mudkhed', '10', 'Is it the data that is being inserted into the db??????? test', '2024-03-28 07:53:50', NULL, NULL),
(11, 'Yogesh Mishra', 'yogeshmishra2599@gmail.com', '9321032481', 'Jr. Full Stack Web Developer', 'Maharashtra', 'Mumbai', '10', 'Is the data that is being inserted into the database??????', '2024-03-28 07:55:58', NULL, NULL),
(12, 'yogesh mishra', 'yogeshmishra2599@gmail.com', '9321032481', 'Jr. Fullstack Web Developer', 'Maharashtra', 'Mudkhed', '10', 'Test Data 28/3/2024 12:31PM', '2024-03-28 08:01:07', NULL, NULL),
(13, 'Yogesh Mishra', 'yogeshmishra2599@gmail.com', '9321032481', 'Jr. Fullstack Web Developer', 'Maharashtra', 'Mumbai', '20', 'Final Test for the contact page: Modified the thankyou page for the same', '2024-03-28 08:08:11', NULL, NULL),
(14, 'arvind gupta', 'arvindgupta123@gmail.com', '7775801766', 'web developer', 'Maharashtra', 'Mumbai', '15', 'Paisa hi paisa hai apne pass', '2024-03-29 08:44:18', NULL, NULL),
(15, 'arvind gupta', 'test@gmail.com', '7775801766', 'web developer', 'Maharashtra', 'Mumbai', '20', 'Doing testing for brand license - Arvind Gupta', '2024-03-29 08:46:06', NULL, NULL),
(16, 'arvind gupta', 'test@gmail.com', '7775801766', 'web developer', 'Maharashtra', 'Mumbai', '14', 'Test', '2024-03-29 08:48:37', NULL, NULL),
(17, 'arvind gupta', 'arvind@gmail.com', '7775801766', 'kefksdjfj', 'Goa', 'Caranzalem', '16', 'gfjhsdfjhsdf test', '2024-03-29 08:53:03', NULL, NULL),
(18, 'arvind gupta', 'test@gmail.com', '7775801766', 'web developer', 'Maharashtra', 'Mumbai', '10', 'sfsffs', '2024-03-29 08:55:57', NULL, NULL),
(19, 'sff sff', 'fsfsf@gmail.com', '7775801766', 'sff', 'Jammu and Kashmir', 'Birwah', '16', 'dfdfdf', '2024-03-29 08:58:25', NULL, NULL),
(20, 'yogesh mishra', 'yogeshmishra2599@gmail.com', '9422231668', 'Jr. Fullstack Web Developer', 'Maharashtra', 'Mumbai', '13', 'Test 01', '2024-03-29 10:02:24', NULL, NULL),
(21, 'yogesh mishra', 'yogeshmishra2599@gmail.com', '9422231668', 'Jr. Full Stack Web Developer', 'Maharashtra', 'Mumbai', '17', 'Test 01', '2024-03-29 10:05:41', NULL, NULL),
(22, 'Yogesh Mishra', 'yogeshmisra@gmail.com', '7208974391', 'Web Developer', 'Maharashtra', 'Ambajogai', '179', 'I want to know more about brand license: 03/04/2024 Wednesday TEST By Yogesh Mishra', '2024-04-03 08:51:36', NULL, NULL),
(23, 'Yogesh Mishra', 'yogeshmishra.ftv.ind@gmail.in', '7208974391', 'web developer', 'Maharashtra', 'Mumbai', '99', 'just for test', '2024-04-03 14:42:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_enquiry`
--

CREATE TABLE `home_enquiry` (
  `id` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_enquiry`
--

INSERT INTO `home_enquiry` (`id`, `fullname`, `email`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ddsgsd', 'dxgd@sasf', 'dsdf', '2023-10-16 09:15:16', NULL, NULL),
(2, 'vxcv ', 'dsfdsfd', 'dsffds', '2023-10-16 09:16:24', NULL, NULL),
(3, 'asds', 'dasdsa', 'adsdsa', '2023-10-16 11:16:57', NULL, NULL),
(4, 'asds', 'dasdsa', 'adsdsa', '2023-10-16 11:17:22', NULL, NULL),
(5, 'rttrryttr hg', 'fhh', 'hgfhf', '2023-10-16 11:18:18', NULL, NULL),
(6, 'safsa', 'fsfds', 'fsdfds', '2023-10-16 11:37:45', NULL, NULL),
(7, 'test test', 'test@test.com', 'testing', '2023-10-16 12:28:16', NULL, NULL),
(8, 'test test', 'test@test.com', 'test', '2023-10-16 14:52:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meta_content`
--

CREATE TABLE `meta_content` (
  `id` int(11) NOT NULL,
  `meta_source_name` varchar(100) NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0 COMMENT '0=Active, 1=inactive',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `unsubscribed` int(1) NOT NULL DEFAULT 0 COMMENT '0=Subscribe,1=unsubscribe',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `unsubscribed`, `created_at`, `updated_at`, `deleted_at`) VALUES
(20, 'yogesh.ftv.ind@gmail.com', 0, '2024-04-01 15:05:31', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_enquiry`
--
ALTER TABLE `home_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_content`
--
ALTER TABLE `meta_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `home_enquiry`
--
ALTER TABLE `home_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `meta_content`
--
ALTER TABLE `meta_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
