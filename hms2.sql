-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 07:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `userId`, `title`, `description`, `createdAt`, `updatedAt`) VALUES
(1, '2', 'test', 'hiiiiiiii', '2022-10-22 20:05:45', '2022-10-22 20:05:45'),
(2, '19', 'test 2', 'hiiiiiiii', '2022-10-22 20:06:22', '2022-10-22 20:06:22'),
(3, '22', 'test 3', 'hiiiiiiii', '2022-10-22 21:46:20', '2022-10-22 21:46:20'),
(4, '23', 'Hello', 'Hello', '2022-12-03 12:33:48', '2022-12-03 12:33:48'),
(5, '25', 'hello', 'hello', '2022-12-03 12:33:48', '2022-12-03 12:33:48'),
(26, '2', 'asd', 'asd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '19', 'qweqrqweqwe', 'qweqwrqwrqrw', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '23', 'qwrqwrq', 'qweqwrwr', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '29', 'gasfasdf', 'agassf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '19', 'Rent Issue', 'Please pay the rent within first 10 days of the month. Thank You', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '19', 'Rent Increased', 'Your rent is increased by 1000 TK from next month. Please pay the rent within first 10 days of the month. Thank You. Stay Happy................................................................................................................................', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '19', 'asdafas', 'hqwbejqwkrfbhweifn.s,dgmwoei qjr nmsafakfjpoasi fjas pojasjfask nflas poa as fla;sjdka;sldasdas asdasdasd a asd asdasd a asd as as as a sdasdesg sdg wetwfaS dw tweraffsdg a qr qetsdggdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '30', 'hello', 'jalksdjlnas kasdj asdk lasjd;laskdlas naskd laksdaksdh lkajsdlk ajs jhalsd ,asdmn.pqwoe al kdlas 0i m,as fmo;qwr asfj;uo jmasfjild gmhg[sugnlk wut hg\'sot gsdg jgsd;fhgergherdfgdfgnrgis [ nwe osdogsghslghposadfhsdg hw ednfp wojfsdojfs gjds fkjspgnsdjf9we m', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `method` enum('1','2','3','4','5') DEFAULT NULL COMMENT '1:BKash, 2:Nagad, 3:Rocket, 4:Bank, 5:Manual',
  `isApproved` tinyint(1) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `method`, `isApproved`, `createdAt`, `updatedAt`, `userId`) VALUES
(1, '1', 1, '0000-00-00 00:00:00', '2022-11-08 07:24:37', 2),
(2, '2', 1, '2022-11-08 07:41:58', '2022-11-08 07:41:58', 19),
(10, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 22),
(12, '3', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 23),
(14, '4', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 25),
(15, '2', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 28),
(16, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 29),
(17, '1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 30);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(11) NOT NULL,
  `building` varchar(255) DEFAULT NULL,
  `floor` varchar(255) DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `rent` varchar(255) DEFAULT NULL,
  `isAvailable` tinyint(1) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `building`, `floor`, `room`, `code`, `rent`, `isAvailable`, `createdAt`, `updatedAt`) VALUES
(1, 'b', 'f', 'r', 'c2', '4000', 0, '2022-10-22 17:17:02', '2022-10-22 17:37:33'),
(3, 'b', 'f', 'r', 'c1', '2000.043', 0, '2022-10-22 17:46:20', '2022-10-22 17:46:20'),
(4, '1', '1', '101', 'c4', '5000', 0, '2022-11-19 08:33:00', '2022-11-19 08:33:00'),
(5, '1', '1', '102', 'c5', '5000', 0, '2022-11-19 08:35:39', '2022-11-19 08:35:39'),
(6, '1', '2', '201', 'c6', '5500', 0, '2022-11-19 08:36:36', '2022-11-19 08:36:36'),
(8, '1', '3', '3', 'B133', '6000', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '1', '5', '503', 'B15503', '6000', 0, '2022-12-03 08:22:44', '2022-12-03 08:22:44'),
(10, '2', '4', '4', 'B244', '5000', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '1', '5', '502', 'B15502', '6000', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '2', '4', '402', 'B24402', '5500', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '3', '2', '203', 'B32203', '5500', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '4', '4', '401', 'B44401', '5000', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '4', '2', '201', 'B42201', '5000', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '2', '7', '701', 'B27701', '6000', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sequelizemeta`
--

CREATE TABLE `sequelizemeta` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sequelizemeta`
--

INSERT INTO `sequelizemeta` (`name`) VALUES
('20221022152631-create-user.js'),
('20221022154148-create-seat.js'),
('20221022160314-create-payment.js'),
('20221022161454-create-notice.js'),
('20221022161514-create-user-notice.js');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `type` enum('1','2') DEFAULT NULL COMMENT '1:Admin, 2:User',
  `nid` varchar(255) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `seatId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `email`, `password`, `phone`, `type`, `nid`, `createdAt`, `updatedAt`, `seatId`) VALUES
(1, 'Super Admin', NULL, 'admin@gmail.com', '123', NULL, '1', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'abc', 'xyz', 'abc@gmail.com', '123', '01516222342', '2', '4444272651', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
(19, 'xyz', 'abc', 'xyz@gmail.com', '123', '01612612612', '2', '12312234132', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4),
(22, 'frz', 'qwer', 'frz@gmail.com', '123', '01515222341', '2', '12312234132', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5),
(23, 'abcd', 'abcd', 'abcd@gmail.com', '123', '01515211341', '2', '12312234123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6),
(25, 'blah', 'blah', 'blah@gmail.com', '123', '01516222342', '2', '1231232541', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8),
(28, 'pqrs', 'pqrs', 'pqrs@gmail.com', '123', '01515222342', '2', '12312234132', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 13),
(29, 'rty', 'rty', 'rty@gmail.com', '123', '01515222342', '2', '12312234123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 16),
(30, 'Fahim', 'qwerty', 'fahim@gmail.com', '123', '01515211341', '2', '5553282541', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_notices`
--

CREATE TABLE `user_notices` (
  `id` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `noticeId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_notices`
--

INSERT INTO `user_notices` (`id`, `createdAt`, `updatedAt`, `noticeId`, `userId`) VALUES
(2, '2022-10-22 20:06:22', '2022-10-22 20:06:22', 2, 1),
(3, '2022-10-22 20:06:22', '2022-10-22 20:06:22', 2, 3),
(4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(5, '2022-10-22 21:46:20', '2022-10-22 21:46:20', 3, 1),
(6, '2022-10-22 21:46:20', '2022-10-22 21:46:20', 3, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sequelizemeta`
--
ALTER TABLE `sequelizemeta`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notices`
--
ALTER TABLE `user_notices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_notices`
--
ALTER TABLE `user_notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
