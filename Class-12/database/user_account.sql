-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2019 at 07:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_content`
--

CREATE TABLE `user_content` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip_code` int(10) NOT NULL,
  `website` varchar(150) NOT NULL,
  `do_you_have_hosting?` text NOT NULL,
  `comment` text NOT NULL,
  `photo` varchar(200) NOT NULL,
  `coverPhoto` varchar(200) NOT NULL DEFAULT 'cover.jpg',
  `gender` text NOT NULL,
  `birthday` varchar(200) NOT NULL DEFAULT 'Not-set',
  `interested` varchar(100) NOT NULL DEFAULT 'Not-set',
  `languages` varchar(100) NOT NULL DEFAULT 'Not-set'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_content`
--

INSERT INTO `user_content` (`id`, `name`, `email`, `password`, `phone`, `address`, `city`, `state`, `zip_code`, `website`, `do_you_have_hosting?`, `comment`, `photo`, `coverPhoto`, `gender`, `birthday`, `interested`, `languages`) VALUES
(1, 'Md. Shariful Islam', 'mohummadshorifulislam@gmail.com', '51A20h7r', '01712074151', '93, Narinda Road, Dhaka', 'Dhaka', 'Bangladesh', 1100, 'https://www.jonecoder.com', 'yes', 'Nothing messages!', '1.jpg', 'cover.jpg', 'male', 'Not-set', 'Not-set', 'Not-set'),
(2, 'Malala Yousafzai', 'malala@gmail.com', '51A20h7r', '012345678956', 'Pakistan', 'Gujrat', 'Indiana', 1111, 'https://www.jonestven.com', 'yes', 'Nothing!', '2.png', '2cover.jpeg', 'female', 'Not-set', 'Not-set', 'Not-set'),
(3, 'Hassan Mahmoud', 'hassan@gmail.com', '20H40j7r', '009887654212', 'bandhura, Nowbabgonj', 'Dhaka', 'Bangladesh', 1300, 'https://www.hassan.com', 'yes', 'No comments!', '3.jpg', '3cover.jpg', 'male', 'Not-set', 'Not-set', 'Not-set');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `user_id` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` text NOT NULL,
  `name` text NOT NULL,
  `pro_pic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`user_id`, `post`, `photo`, `status`, `name`, `pro_pic`) VALUES
(1, 1, '1_post_1.jpeg', 'Something!', 'Md. Shariful Islam', '1.jpg'),
(2, 2, '2_post_1.jpg', 'Independent woman !', 'Malala Yousafzai', '2.png'),
(2, 3, '2_post_2.jpg', 'Education is the best way to go to school.', 'Malala Yousafzai', '2.png'),
(1, 4, '1_post_2.jpg', 'I can change my destiny!', 'Md. Shariful Islam', '1.jpg'),
(3, 5, '3_post_1.jpg', 'My village', 'Hassan Mahmoud', '3.jpg'),
(1, 6, '1_post_3.jpg', 'Time is not string!', 'Md. Shariful Islam', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_content`
--
ALTER TABLE `user_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`post`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_content`
--
ALTER TABLE `user_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
