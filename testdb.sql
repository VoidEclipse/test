-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2017 at 10:35 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `secondName` varchar(255) NOT NULL,
  `patronymic` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `phone` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `secondName`, `patronymic`, `birthdate`, `phone`, `email`, `login`, `password`, `photo`) VALUES
(36, 'Name', 'Family', 'Patronymic', '0000-00-00', '+7853535', 'email@mail.ri', 'LoginCheck', 'Password', ''),
(39, '', '', '', '0000-00-00', '8-123-456-7891', 'qqqq@mail.ru', 'qwerty', '', ''),
(41, 'wdqd', 'dwd', 'wewf', '0000-00-00', '8-123-456-7891', 'wadawd@wad.com', 'Ñ„Ð²Ñ†Ñ„Ð²', 'wdwdad545P', ''),
(42, 'wdad', 'wdad', 'wdad', '0000-00-00', '8-123-456-7891', 'lol@mail.ru', 'User22', 'qwdqawP3434', ''),
(43, 'UserName', 'UserSurname', 'Patronymic', '0000-00-00', '8-123-456-7891', 'user@mail.com', 'User0', 'User22823', 0x456c6f6e5f4d75736b5f323031352e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
