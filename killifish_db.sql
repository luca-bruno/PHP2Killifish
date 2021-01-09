-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 08:51 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `killifish_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(10) UNSIGNED NOT NULL,
  `commentDescription` varchar(1000) NOT NULL,
  `commentCreated_at` int(10) DEFAULT NULL,
  `commentUpdated_at` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsID` int(10) UNSIGNED NOT NULL,
  `newsTitle` varchar(600) NOT NULL,
  `newsDescription` varchar(1000) NOT NULL,
  `newsAuthor` varchar(600) NOT NULL,
  `newsCreated_at` int(10) DEFAULT NULL,
  `newsUpdated_at` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsID`, `newsTitle`, `newsDescription`, `newsAuthor`, `newsCreated_at`, `newsUpdated_at`, `slug`) VALUES
(1, 'dsfdsfg', 'detfgdgs', '', 1608650990, 1608650990, 'asdfg-asdfg'),
(2, '1212', '21212', '', 1608651287, 1608651287, 'sadasdasdad'),
(3, '123122131', '131231231', '', 1608652274, 1608652274, 'qwerr-qwerr'),
(4, 'aaaaaaaaa', 'aaaaaaaaaaaaaaaa', '', 1610200508, 1610200508, 'fghjk-fghjk'),
(5, 'Test111', 'this is a test ', '', 1610213808, 1610213808, 'test_111'),
(6, 'please work', 'please please work', '', 1610213859, 1610213859, 'please_work'),
(7, '2312321', '312312312', '', 1610215145, 1610215145, '2312321'),
(8, 'Elvis is sighted in Malta', 'Elvis is sighted in Malta', '', 1610219316, 1610219316, 'Elvis-is-sighted-in-Malta'),
(9, 'please work', '3123', '', 1610221625, 1610221625, 'please-work');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postID` int(10) UNSIGNED NOT NULL,
  `postTitle` varchar(600) NOT NULL,
  `postDescription` varchar(1000) NOT NULL,
  `postCreated_at` int(10) DEFAULT NULL,
  `postUpdated_at` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `postTitle`, `postDescription`, `postCreated_at`, `postUpdated_at`) VALUES
(1, 'post test 1', 'this is a test post', 1610207091, 1610207091),
(2, 'dsada', 'sdada', 1610207148, 1610207148);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) UNSIGNED NOT NULL,
  `userFirstName` varchar(600) NOT NULL,
  `userLastName` varchar(600) NOT NULL,
  `userScreenName` varchar(255) NOT NULL,
  `userEmail` varchar(600) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userCreated_at` int(10) DEFAULT NULL,
  `userUpdated_at` int(10) UNSIGNED DEFAULT NULL,
  `userIsAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userFirstName`, `userLastName`, `userScreenName`, `userEmail`, `userPassword`, `userCreated_at`, `userUpdated_at`, `userIsAdmin`) VALUES
(2, 'Camden', 'Thomas', 'jicujov', 'peruwyp@mailinator.com', 'Pa$$w0rd!', 0, 0, 0),
(3, 'Lars', 'Kirby', 'vywecizysi', 'hydycyvede@mailinator.com', 'Pa$$w0rd!', 1607422057, 1607422057, 0),
(4, 'Kaitlin', 'Lindsey', 'mudulo', 'nohapu@mailinator.com', 'Pa$$w0rd!', 1607431748, 1607431748, 0),
(5, 'Noble', 'Taylor', 'qopegim', 'mojip@mailinator.com', 'Pa$$w0rd!', 1607446645, 1607446645, 0),
(6, 'Abbot', 'Russell', 'fupiqe', 'jotoqu@mailinator.com', 'Pa$$w0rd!', 1607451464, 1607451464, 0),
(7, 'Marcia', 'Riggs', 'ducywoz', 'mekoqelify@mailinator.com', 'Pa$$w0rd!', 1607452753, 1607452753, 0),
(8, 'Zahir', 'Finch', 'junakose', 'ceri@mailinator.com', 'Pa$$w0rd!', 1607956300, 1607956300, 0),
(12, 'Igor', 'Vaughan', 'lumozamowi', 'wexuqum@mailinator.com', 'Pa$$w0rd!', 1607981382, 1607981382, 0),
(13, 'Melyssa', 'Bryan', 'botasamisy', 'femary@mailinator.com', 'Pa$$w0rd!', 1607981642, 1607981642, 0),
(14, 'Michael', 'Osborn', 'lobap', 'nijiqyxipi@mailinator.com', 'Pa$$w0rd!', 1607981657, 1607981657, 0),
(15, 'Joseph', 'Petty', 'puwumosecy', 'dudiris@mailinator.com', 'Pa$$w0rd!', 1607981881, 1607981881, 0),
(16, 'Jameson', 'Mathews', 'muwyvyte', 'jihumeg@mailinator.com', '$2y$10$KZCfChnj20ludW/kLMDiE.o1iP7.JnO6DqziDHPZpP6R/ujU7WtFq', 1607982532, 1607982532, 0),
(17, 'Rhea', 'Odonnell', 'test', 'test@test.com', '$2y$10$ciWJdsWrHwmSr9kTvGtTfuMWsrQlUwFAWiQY3OTfRJ2xF4Lym7Z6i', 1607982658, 1607982658, 1),
(18, 'Dawn', 'Molina', 'naloxunohi', 'xogifac@mailinator.com', '$2y$10$ZC.PNFXEbxradgJRd185gOMGS6yCtpSV4uVuFUv0r6d8hja/PVHdG', 1608028957, 1608028957, 0),
(19, 'aaron', 'sammut', 'asssss', 'aa@gmail.com', '$2y$10$hCS/7SKEsioN3LX.FBWlIeWGZ7S1OJkgAZ4aKw8P6c5kG.Dr6xe4u', 1608650605, 1608650605, 0),
(20, 'Eve', 'Cardenas', 'test2', 'tohak@mailinator.com', '$2y$10$WvV1y6kVfMZZ4KMasC450OkwOF4Yo0WNBlBiEWCENlvPqKIg/XWUG', 1610198677, 1610198677, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
