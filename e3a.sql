-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 11:15 AM
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
-- Database: `e3a`
--

-- --------------------------------------------------------

--
-- Table structure for table `chemst`
--

CREATE TABLE `chemst` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(12) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `review` tinyint(5) NOT NULL,
  `price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `image`, `title`, `category`, `review`, `price`) VALUES
(3, 'pic1.jpg', 'The web Development Bootcamp 2024 ', 'Programming', 5, 99),
(4, 'pic2.jpg', 'Digital Marketing Course', 'Marketing', 2, 19),
(5, 'pic3.jpg', 'Machine Learning for Beginners', 'Artificial Intelligence', 5, 59),
(6, 'pic4.jpg', 'The Complete Python Bootcamp ', 'Programming', 3, 99),
(7, 'pic6.jpg', 'Graphic Design Masterclass', 'Graphic Design', 5, 79),
(8, 'pic7.jpg', 'The Complete Cyber Security Course', 'Cyber Security', 4, 49),
(9, 'pic9.jpg', 'Introduction To Fiber Optic Cabling', 'IT & Software', 1, 19),
(10, 'pic8.jpg', 'Learn Ethical Hacking From Scratch 2024', 'IT & Software', 4, 99);

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `course_name`, `price`, `description`) VALUES
(1, 'Programming', 100.00, 'TEst test'),
(2, 'Design', 200.00, 'Test'),
(3, 'Test', 400.00, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `physst`
--

CREATE TABLE `physst` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `physst`
--

INSERT INTO `physst` (`id`, `name`, `surname`, `major`) VALUES
(1, 'aa', 'aa', 'aa'),
(2, 'qq', 'qq', 'qq');

-- --------------------------------------------------------

--
-- Table structure for table `progst`
--

CREATE TABLE `progst` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `progst`
--

INSERT INTO `progst` (`id`, `name`, `surname`, `major`) VALUES
(1, 'abc', 'abc', 'aa'),
(2, 'ac', 'ac', 'ac');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_profile`
--

CREATE TABLE `teacher_profile` (
  `id` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `Company_Name` varchar(255) NOT NULL,
  `PhoneNum` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `Postcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_profile`
--

INSERT INTO `teacher_profile` (`id`, `FullName`, `occupation`, `Company_Name`, `PhoneNum`, `addres`, `city`, `state`, `Postcode`) VALUES
(1, 'edi', 'CTO', 'EduChamp', 'PhoneNum', '5-S2-20 Dummy City, UK', 'US', 'California', '000702'),
(2, 'drilon mahmuti', 'Profesor', 'DigitalSchool', '63623633', 'Sllatine', 'Teovo', 'North Macedonia', '000702');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `confirm_password`, `is_admin`) VALUES
(1, 'edi', 'edi@gmail.com', 'ediibraimi', '$2y$10$w46MX1RGGOTaAl8bACrQquq7l9NasBk2f6P3rWpRrKseEQjoliGn.', '', 'true'),
(2, 'andet', 'a@gmail.com', 'andett', '$2y$10$RZsjhR.TVy70SkzgqN79xOZCZOYkY/sO0hOOF4wbjRoxKdCXGMTt6', '', ''),
(3, 'Mark John', 'mj@gmail.com', 'MJ1', '$2y$10$ClYuLOsMzeoXkg7t95wMBuFdDzKRnj5meDTXDkGEBFR9836jGQhuC', '', ''),
(4, 'besar idrizi', 'besar@gmail.com', 'besar', '$2y$10$dP2BPKZt55ZxkWj7WgFfTOF6y47XK919Jls1EiAucBz0eO1033sla', '', ''),
(5, 'agon kamberi', 'a@gmail.com', 'agonBISHA', '$2y$10$8FuvDP69KwlvDQFbSvpF8eTLRBvye6HG7fHSermBTQGz1Orh/feey', '', ''),
(6, 'abc', 'test@test.com', '11', '$2y$10$op153U/chvCSJpksDLA3cOCT4vsPRPq4FxJl6.kr.RZ1VBh3J3tZm', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chemst`
--
ALTER TABLE `chemst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physst`
--
ALTER TABLE `physst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progst`
--
ALTER TABLE `progst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_profile`
--
ALTER TABLE `teacher_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chemst`
--
ALTER TABLE `chemst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `physst`
--
ALTER TABLE `physst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `progst`
--
ALTER TABLE `progst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher_profile`
--
ALTER TABLE `teacher_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
