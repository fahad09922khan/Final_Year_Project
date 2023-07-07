-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 08:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_darsgah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE `tbl_books` (
  `id` int(11) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `bdesc` text NOT NULL,
  `attachmeent` text NOT NULL,
  `bstatus` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`id`, `bname`, `bdesc`, `attachmeent`, `bstatus`) VALUES
(2, 'The Power Of Education', 'Education is the most empowering force in the world. It creates knowledge, builds confidence, and breaks down barriers to opportunity. For children, it is their key to open the door to a better life.', 'NetAcad Learning Transcript.pdf', '0'),
(4, 'Create Your Motive', 'Start how to think big', 'Literature Review.pdf', '0'),
(9, 'The Galaxy', 'The Galaxy Book is all about the power of thinking and also will make you able to think big!', 'NetAcad Learning Transcript (1).pdf', '0'),
(11, 'The Hit Man', 'The Fighter Of Fighter', 'Sample_pairs_average (2) (1) (2).pdf', '0'),
(19, 'The Power Of Education', 'Learn how hello world', 'White Grey Clean Simple Resume (1).pdf', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clothes_donation`
--

CREATE TABLE `tbl_clothes_donation` (
  `id` int(11) NOT NULL,
  `donor_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `zipcode` varchar(20) DEFAULT NULL,
  `clothing_type` varchar(50) DEFAULT NULL,
  `clothing_size` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `conditions` varchar(50) DEFAULT NULL,
  `donation_date` date DEFAULT NULL,
  `status` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_clothes_donation`
--

INSERT INTO `tbl_clothes_donation` (`id`, `donor_name`, `email`, `phone`, `address`, `city`, `state`, `country`, `zipcode`, `clothing_type`, `clothing_size`, `quantity`, `conditions`, `donation_date`, `status`, `user`, `vid`) VALUES
(27, 'Fahad', 'fahadkhan09922@gmail.com', '03172090176', 'address', 'Karachi', '...', 'Pakistan', '75080', 'Pant', 'Medium', 2, 'New', '2023-07-15', 0, 0, 0),
(28, 'Fahad', 'fahadkhan09922@gmail.com', '03172090176', 'address', 'Karachi', '...', 'Pakistan', '75080', 'Pant', 'Medium', 2, 'New', '2023-07-15', 0, 0, 0),
(39, 'shaff kazi', 'shaffkazi98@gmail.com', '03035262000', 'address', 'karachi', '...', 'Pakistan', '75600', 'Kameez/Shalwar', 'Medium', 200, 'Old', '2023-01-13', 0, 0, 0),
(40, 'Ehsan', 'Ehsan09922@gmail.com', '03172090176', 'Gilshan e iqbal', 'lahore', '...', 'Pakistan', '75080', 'Shirt', 'XL', 4, 'Old', '2023-07-04', 1, 0, 0),
(41, 'Fahad', 'fahadkhan09922@gmail.com', '03172090176', 'address', 'Karachi', 'Sindh', 'Pakistan', '75080', 'Shirt', 'XL', 3, 'Old', '2023-07-14', 0, 0, 0),
(42, 'Fahad', 'fahadkhan09922@gmail.com', '03172090176', 'address', 'Karachi', 'Sindh', 'North Vietnam', '75080', 'Shirt', 'XL', 2, 'New', '2023-07-20', 1, 0, 31),
(43, 'Fahad', 'fahadkhan09922@gmail.com', '03172090176', 'address', 'Karachi', 'Sindh', 'Pakistan', '75080', 'Pant', 'XL', 3, 'Average', '2023-07-21', 1, 0, 29),
(44, 'Fahad', 'fahadkhan09922@gmail.com', '03172090176', 'address', 'Karachi', 'Sindh', 'Pakistan', '75080', 'Shirt', 'XL', 2, 'Old', '2023-07-07', 1, 0, 29),
(45, 'Fahad', 'fahadkhan09922@gmail.com', '03172090176', 'address', 'Karachi', 'Sindh', 'Pakistan', '75080', 'Shirt', 'XXL', 3, 'New', '2023-07-09', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `subject`, `email`, `message`) VALUES
(14, 'bellingham', 'bellingham@gmail.com', 'Footballer', 'KArma'),
(47, 'Fahad', 'Khans', 'fahadkhan09922@gmail.com', 'asdasdsa'),
(50, 'Salman', 'Khan', 'Salman@gmail.com', 'Aliskja'),
(53, 'Subhan', 'Food Waste', 'Subhan@gmail.com', 'Kindly approved the request'),
(54, 'Saleem', 'Power ', 'Saleem@gmail.com', 'Classic'),
(56, 'Fahad', 'sadsad', 'fahadkhan09922@gmail.com', 'asdsaxx'),
(57, 'Fahad', 'Hello World', 'fahadkhan09922@gmail.com', 'HEllo Worlds');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fooddonate`
--

CREATE TABLE `tbl_fooddonate` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `address` text NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `vid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_fooddonate`
--

INSERT INTO `tbl_fooddonate` (`id`, `name`, `phone`, `date`, `address`, `message`, `status`, `userid`, `vid`) VALUES
(10, 'Fahad', '03172090176', '2023-07-07', 'House #9,street #17, area F-1, Malir Ext.Colony, Karachi Pakistan', 'Come Fast!', 0, 12, 0),
(11, 'Shamim', '3172090176', '2023-07-15', 'House #9,street #17, area F-1, Malir Ext.Colony, Karachi Pakistan', 'Early', 1, 12, 29),
(17, 'Kazi', '03172090176', '2023-07-06', 'House #9,street #17, area F-1, Malir Ext.Colony, Karachi Pakistan', 'Kindly Come Fast', 1, 12, 31),
(19, 'Fahad', '03172090176', '2023-07-09', 'House #9,street #17, area F-1, Malir Ext.Colony, Karachi Pakistan', 'Hello Worlds', 1, 17, 31);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` text NOT NULL,
  `roles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` text NOT NULL,
  `roles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `name`, `email`, `password`, `roles`) VALUES
(12, 'Fahad Ali Khan', 'fahadkhan09922@gmail.com', 'd7c967ff448c49531c68ccbb7a2d922a', 0),
(13, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(14, 'Fahad Ali Khan', 'fahadkhan09922@gmail.com', 'd7c967ff448c49531c68ccbb7a2d922a', 0),
(15, 'Fahad Ali Khan', 'fahadkhan09922@gmail.com', '9494139569a58bdd7434d7b631bed61f', 1),
(16, 'bilal', 'bilal@gmail.com', 'dba52b5f5080c7d317be07dab34e974b', 0),
(17, 'fahad ali khan', 'fahadkhan09922@gmail.com', '9494139569a58bdd7434d7b631bed61f', 0),
(18, 'Fahad Ali Khan', 'Khan@gmail.com', 'fc5e038d38a57032085441e7fe7010b0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_volunteer`
--

CREATE TABLE `tbl_volunteer` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `profile` text NOT NULL,
  `status` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_volunteer`
--

INSERT INTO `tbl_volunteer` (`id`, `name`, `email`, `contact`, `address`, `profile`, `status`, `user`) VALUES
(5, 'Fahad Ali Khan', 'fahadkhan09922@gmail.com', '92346300804', 'House #9,street #17, area F-1, Malir Ext.Colony, Karachi Pakistan', '', 0, 0),
(11, 'Bilal Khan', 'Bilallehri33@gmail.com', '099332', 'House #9,street #17, area F-1, Malir Ext.Colony, Karachi Pakistan', '', 0, 0),
(29, 'Agha Khan', 'Agha@gmail.com', '453435643555', 'House #9,street #17, area F-1, Malir Ext.Colony, Karachi Pakistan', '', 1, 0),
(31, 'Fahad', 'fahadkhan09922@gmail.com', '453435643555', 'House #9,street #17, area F-1, Malir Ext.Colony, Karachi Pakistan', '', 1, 0),
(35, 'Maheen', 'maheen@gmail.com', '099232322', 'Gulshan e Iqbal', '', 0, 0),
(36, 'Maheen', 'maha@gmail.com', '453435643555', 'House #9,street #17, area F-1, Malir Ext.Colony, Karachi Pakistan', '', 0, 0),
(37, 'Fahad', 'fahadkhan09922@gmail.com', '453435643555', 'House #9,street #17, area F-1, Malir Ext.Colony, Karachi Pakistan', '', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_clothes_donation`
--
ALTER TABLE `tbl_clothes_donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fooddonate`
--
ALTER TABLE `tbl_fooddonate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_volunteer`
--
ALTER TABLE `tbl_volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_clothes_donation`
--
ALTER TABLE `tbl_clothes_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_fooddonate`
--
ALTER TABLE `tbl_fooddonate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_volunteer`
--
ALTER TABLE `tbl_volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
