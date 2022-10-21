-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 10:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocrs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(25) NOT NULL,
  `fullname` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Bossman Owusu', 'bossman@admin', '026admin'),
(2, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(25) NOT NULL,
  `title` varchar(30) NOT NULL,
  `post_body` varchar(255) NOT NULL,
  `photo` blob NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(25) NOT NULL,
  `date_of_incidence` date NOT NULL,
  `time_of_incidence` time NOT NULL,
  `region` text NOT NULL,
  `location` varchar(25) NOT NULL,
  `crime_type` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `attachment` blob NOT NULL,
  `witness` varchar(5) NOT NULL,
  `witness_details` varchar(255) NOT NULL,
  `reporting_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `date_of_incidence`, `time_of_incidence`, `region`, `location`, `crime_type`, `description`, `attachment`, `witness`, `witness_details`, `reporting_time`) VALUES
(1, '2022-10-14', '15:09:00', 'Accra', 'Bubiashie', '', 'asdadas', '', '0', 'sdd', '2022-10-14 15:10:32'),
(2, '2022-10-06', '17:21:00', 'Takoradi', 'Ekumfi', '', 'He defrauded me', 0x5468652043, '0', 'nimo', '2022-10-14 17:21:47'),
(3, '2022-10-15', '17:30:00', 'Accra', 'Bubiashie', '', 'sdas', '', '0', 'dds', '2022-10-14 17:31:11'),
(9, '2022-10-14', '17:45:00', 'Accra', 'Bubiashie', '', 'aasaas', '', 'y', 'ssasasdaaasd', '2022-10-14 17:45:56'),
(10, '2022-10-14', '17:47:00', 'Accra', 'Bubiashie', '', 'asdqadsd', '', 'yes', 'adadsada', '2022-10-14 17:47:33'),
(11, '2022-10-14', '17:48:00', 'as', 'asdadda', '', 'asdaasd', '', 'no', 'asdas', '2022-10-14 17:48:29'),
(12, '0003-03-31', '03:33:00', 'Accra', 'Mataheko', 'fraud', 'vvvvv', 0x415455204c4f474f2e6a7067, 'no', '', '2022-10-19 22:03:36'),
(13, '2022-09-27', '10:30:00', 'Agogo', 'Kateke', 'arson', 'A very wicked world', 0x576861747341707020496d61676520323032312d31302d313020617420372e30362e333520504d2e6a706567, 'yes', 'Bossman, 0557372750', '2022-10-19 22:09:36'),
(14, '2022-09-28', '02:03:00', 'Accra', 'Bubiashie', 'assault', 'Beat her hard', '', 'no', 'No witness', '2022-10-20 00:25:50'),
(15, '2022-10-11', '03:33:00', 'Central', 'Adum', 'rape', 'fgfm', '', 'yes', 'erghbjnm;kljv', '2022-10-20 16:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(3) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `region` varchar(20) NOT NULL,
  `streetAddress` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `national_id` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `code` int(6) NOT NULL,
  `photo` blob NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `fullname`, `gender`, `nationality`, `dob`, `region`, `streetAddress`, `phone`, `national_id`, `email`, `password`, `code`, `photo`, `dateTime`) VALUES
(1, 'Bossman Owusu Amoako', 'm', 'Ghanain', '2022-08-30', 'Greater Accra', 'Accra, Ghana', '0557372750', 'GH-0033', '', '', 0, '', '2022-10-19 23:00:29'),
(2, 'Samuel Mensah', 'm', 'Ghanaian', '2022-01-05', 'Central Region', 'Nikoi Olai street', '0557372750', 'GH-0033', '', '', 0, '', '2022-10-19 23:00:29'),
(4, 'Lydia Owusu', 'F', 'Ghanaian', '2022-09-27', 'Kumasi', 'GA-0118', '0557372750', 'GA-0118', '', '', 0, '', '2022-10-19 23:00:29'),
(5, 'James Blaboe', 'M', 'Ghanaian', '2002-08-15', 'Greater Accra', 'GA-0118', '0262029792', 'GA-0118', '', '', 0, '', '2022-10-19 23:00:29'),
(6, 'Bossman Owusu Amoako', 'M', 'Ghanaian', '2022-10-11', 'accra', 'GA-0118', '0557372750', 'GA-0118', '', '', 0, '', '2022-10-19 23:00:29'),
(7, 'Kwame Owusu', 'M', 'Ghanaian', '2022-10-10', 'east', 'GA-0118', '0557372750', 'GA-0118', '', '', 0, '', '2022-10-19 23:00:29'),
(8, 'Ransford Boateng', 'M', 'Ghanaian', '1999-11-10', 'ahanti', 'GA-0118', '0540597538', 'GA-0118', '', '', 0, '', '2022-10-19 23:00:29'),
(9, 'James Addo', 'M', '', '2022-10-25', 'western_North', 'Nikoi Olai street', '0557372750', 'GH-0033', '', '', 0, '', '2022-10-19 23:00:29'),
(10, 'Snow White', 'M', 'Ghanaian', '2022-10-27', 'volta', 'Nikoi Olai street', '0542814878', 'GH-0033', 'snow1@gmail.com', 'ZASxcv12345', 0, 0x41, '2022-10-19 23:00:29'),
(11, 'Snow White', 'M', 'Ghanaian', '2022-10-27', 'volta', 'Nikoi Olai street', '0542814878', 'GH-0033', 'snow1@gmail.com', 'ZASxcv12345', 0, 0x41, '2022-10-19 23:00:29'),
(12, 'Snow White', 'M', 'Ghanaian', '2022-10-27', 'volta', 'Nikoi Olai street', '0542814878', 'GH-0033', 'snow1@gmail.com', 'ZASxcv12345', 0, 0x41, '2022-10-19 23:00:29'),
(13, 'Snow White', 'M', 'Ghanaian', '2022-10-27', 'volta', 'Nikoi Olai street', '0542814878', 'GH-0033', 'snow1@gmail.com', 'ZASxcv12345', 0, 0x41, '2022-10-19 23:00:29'),
(14, 'Bossman Owusu Amoako', 'M', 'Ghanaian', '2022-10-26', 'oti', 'Accra, Ghana', '0557372750', 'GH-0033', 'ghowusuboss@gmail.com', '0557boss026', 0, 0x47, '2022-10-19 23:00:29'),
(15, 'Bossman Owusu Amoako', 'M', 'Ghanaian', '2022-10-17', 'central', 'Accra, Ghana', '0557372750', 'GH-0033', 'ghowusuboss@gmail.com', 'bbgB15ts5t', 0, 0x47, '2022-10-19 23:00:29'),
(16, 'Bossman Owusu Amoako', 'M', 'Ghanaian', '2022-10-17', 'central', 'Accra, Ghana', '0557372750', 'GH-0033', 'ghowusuboss@gmail.com', 'bbgB15ts5t', 0, 0x47, '2022-10-19 23:00:29'),
(17, 'Bossman Owusu Amoako', 'F', 'Ghanain', '2022-09-28', 'western', 'Accra, Ghana', '0557372750', 'GH-0033', 'godson@gmail.com', 'ZXCasdf123', 0, 0x47, '2022-10-19 23:00:29'),
(18, 'Bossman Owusu Amoako', 'F', 'Ghanain', '2022-09-28', 'western', 'Accra, Ghana', '0557372750', 'GH-0033', 'godson@gmail.com', 'ZXCasdf123', 0, 0x47, '2022-10-19 23:00:29'),
(19, 'Bossman Owusu Amoako', 'F', 'Ghanain', '2022-09-28', 'western', 'Accra, Ghana', '0557372750', 'GH-0033', 'godson@gmail.com', 'ZXCasdf123', 0, 0x47, '2022-10-19 23:00:29'),
(20, 'Bossman Owusu Amoako', 'F', 'Ghanain', '2022-09-28', 'western', 'Accra, Ghana', '0557372750', 'GH-0033', 'godson@gmail.com', 'ZXCasdf123', 0, 0x47, '2022-10-19 23:00:29'),
(21, 'Enoch Yawson', 'M', 'Ghanaian', '2022-10-09', 'accra', 'Dome A1', '0557372750', 'GH-0033', 'enochgybex@gmail.com', 'GyBex255', 0, 0x41, '2022-10-19 23:00:29'),
(22, 'Nana Ama', 'Female', 'Ghanain', '2022-10-27', 'bono', 'Accra, Ghana', '0557372750', 'GH-0033', 'nanama@gmail.com', 'nanama12', 0, 0x57, '2022-10-19 23:00:29'),
(23, 'Yaw Bosiako', 'Male', 'Ghanaian', '2022-10-24', 'select', 'Att', '0262029792', 'GA-0118', 'bosiako@gmail.com', 'bosiako1', 0, '', '2022-10-19 23:35:10'),
(24, 'Manchester United', 'Male', 'Ghanaian', '19/03/22', 'Accra', '', '05573787347', '', 'manchester@gmail.com', 'manchester1', 0, '', '2022-10-20 17:48:46'),
(25, 'Manchester United', 'Male', 'Ghanaian', '19/03/22', 'Accra', '', '05573787347', '', 'manchester@gmail.com', 'manchester1', 0, '', '2022-10-20 17:50:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
