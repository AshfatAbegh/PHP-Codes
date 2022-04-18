-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 07:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookname` varchar(225) NOT NULL,
  `authorname` varchar(225) NOT NULL,
  `publishdate` varchar(225) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookname`, `authorname`, `publishdate`, `id`) VALUES
('c', 'Stuart', '10-04-22', 1),
('c++', 'Maxwell', '14-04-22', 2),
('python', 'Nicolas', '13-04-22', 4),
('java', 'Glenn', '11-04-22', 5),
('php', 'Andrew', '09-04-22', 14);

-- --------------------------------------------------------

--
-- Table structure for table `bookname`
--

CREATE TABLE `bookname` (
  `id` int(11) NOT NULL,
  `bookname` varchar(225) NOT NULL,
  `authorname` varchar(225) NOT NULL,
  `publishdate` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookname`
--

INSERT INTO `bookname` (`id`, `bookname`, `authorname`, `publishdate`) VALUES
(1, 'Intro to Programming', 'Tom', '08-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `bookname` varchar(225) NOT NULL,
  `borrowdate` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `name`, `bookname`, `borrowdate`) VALUES
(1, 'Raisul', 'c', '12-04-22'),
(2, 'Abegh', 'c++', '16-04-22'),
(3, 'Asif', 'python', '17-04-22'),
(4, 'Fahim', 'java', '18-04-22'),
(5, 'Abir', 'php', '19-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `cpass` varchar(225) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`name`, `password`, `email`, `username`, `cpass`, `id`) VALUES
('Raisul', '123', 'raisul@gmail.com', 'raisul', '123', 1),
('Ashfat Al Rashid', '1111', 'mdabegh50@gmail.com', 'as abegh', '1111', 2),
('Asif', '1234', 'asif@gmail.com', 'asif', '1234', 3),
('Fahim', '4321', 'fahim@gmail.com', 'fahim', '4321', 4),
('Abir', '3333', 'abir@gmail.com', 'abir', '3333', 5);

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id` int(11) NOT NULL,
  `librarian` varchar(225) NOT NULL,
  `day` varchar(225) NOT NULL,
  `time` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id`, `librarian`, `day`, `time`) VALUES
(1, 'Raisul', 'Sat-Mon-Wed', '8-11'),
(2, 'Abegh', 'Sat-Mon-Wed', '2-5'),
(3, 'Asif', 'Sun-Tue-Thu', '11-2'),
(4, 'Fahim', 'Sun-Tue-Thu', '5-6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bookname` (`bookname`);

--
-- Indexes for table `bookname`
--
ALTER TABLE `bookname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Abir` (`id`,`librarian`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
