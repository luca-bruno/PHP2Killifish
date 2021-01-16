-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 07:24 PM
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
  `newsAuthor` int(10) UNSIGNED NOT NULL,
  `newsCreated_at` int(10) DEFAULT NULL,
  `newsUpdated_at` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsID`, `newsTitle`, `newsDescription`, `newsAuthor`, `newsCreated_at`, `newsUpdated_at`, `slug`) VALUES
(4, 'Elvis sighted in Malta!', 'Hello Elvis', 19, NULL, NULL, 'elvis-sighted-in-malta'),
(5, 'Elvis is sighted in Malta', 'Hello Elvis', 17, 1610463741, 1610463741, 'Elvis-is-sighted-in-Malta'),
(6, 'newupdate', 'newupdate', 17, 1610463773, 1610463773, 'newupdate'),
(7, 'Story', 'Il huta killiefish jisimha Jhon. Jhion kien jejx fil midrag fMarsascala, l-iktar post ikrah fmalta, issek ijjad maimi beach imma lost hope. Dan Jhon one fine morning mar dawra helwa fil bahar fejn kellu naqa aventuri sbieh. l ewwel mar passigata mal costa inehi il hmieg tan nies. Waqt din il mixja intaqa ma hafna ostacli fostom il hara li waqa dak il liba Ganni il papra. meta kien mixi intaqa ma Ross, kella koolox issikat u ippupat, kif raha Jhon mal ewwel qabez fuqa u qala \"Hawn irridek wara dan il haxix twil, mhux ha nkun lest sakem jibda johrog trab\". Dik kienet il mawra helwa ta Jhon, u lunika wahda li ha jkollu ghax miskin kielu Guzi il bass. But his legacy will live on ', 17, 1610813437, 1610813437, 'Story'),
(8, 'Story Califronia', 'Kont għaddej mill-Imsida\r\nIlma dieħel mil-bibien\r\nRajt ħabib fuq il-bus stop\r\nGħidtlu inwaslek x\'imkien\r\nMinnu fieh daħal ġewwa\r\nMela t-twapet bit-tajn\r\nTfajtha first u għaqqadtomla ftit\r\nQisni ħriġt bid-disgħin\r\nQalli stenna ħa nqabbad\r\nU xammejt rieħa tfuħ\r\nHa ftit nifsijiet u newwiluli\r\nU dlonk jien ħadt ir-ruħ\r\nRħejnilha għal tas-Sliema\r\nMill-istrand għaddejin\r\nHares lejja b\'ħalqu miftuħ daqsiex\r\nU għajnejh imbexqin\r\nKif jien imġandar u imħassar\r\n- Xi smoke tajba din - Tinżillek fin fin - Zgur ta\'barra din\r\nKemm ili ma nkun daqshekk imċaflas\r\nWiċċi aħmar nar\r\nKull ma nara ċpar\r\nKif se mmur d-dar?\r\nSaqsieni jekk inhiex mgħaggel?\r\nGħidtlu no problem Joe\r\nQalli ninżlu sa l-Exiles\r\nForsi insiru coco\r\nU minn ġol-but ħareg borża\r\nKollha pirmli u x\'naf jien\r\nHareġ żewġ pesisi vjola\r\nU blajinhom flimkien', 17, 1610814239, 1610814239, 'Story-Califronia'),
(9, 'habfhbadksdjlfI really have a long long long longggg longgg title', 'dsklfnSNFJNfnjd', 17, 1610819316, 1610819316, 'habfhbadksdjlf'),
(10, 'I really have a long long long longggg longgg title', 'Batman, Batman, Batman, Batman!\r\n\r\nBatman, Batman, Batman!\r\n\r\nBatman, Batman, Batman, Batman!\r\n\r\nBatman, Batman, Batman!\r\n\r\nBatman, Batman, Batman!\r\n\r\nBatman, Batman, Batman!\r\n\r\nBatman, Batman, Batman!\r\n\r\nNa, na, na, na, na, na, na, na, na, na, na, na, na\r\n\r\nBatman!\r\n\r\n', 17, 1610819358, 1610819358, 'I-really-have-a-long-long-long-longggg-longgg-title');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postID` int(10) UNSIGNED NOT NULL,
  `postTitle` varchar(600) NOT NULL,
  `postDescription` varchar(1000) NOT NULL,
  `postCreated_at` int(10) DEFAULT NULL,
  `postUpdated_at` int(10) UNSIGNED DEFAULT NULL,
  `postSlug` varchar(600) NOT NULL,
  `postAuthor` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `postTitle`, `postDescription`, `postCreated_at`, `postUpdated_at`, `postSlug`, `postAuthor`) VALUES
(1, 'first post', 'testing the post ', 1610809476, 1610809476, 'first-post', 20),
(2, 'admin post', 'testing post', 1610810185, 1610810185, 'admin-post', 17),
(3, 'I hate php I hate it with a passion Why I m living what is life ', '[Open to Morty’s room]\r\nRick: (stumbles in drunkenly, and turns on the lights) Morty! You gotta come on. You got--... you gotta come with me.\r\nMorty: (rubs his eyes) What, Rick? What’s going on?\r\nRick: I got a surprise for you, Morty.\r\nMorty: It\'s the middle of the night. What are you talking about?\r\nRick: (spills alcohol on Morty\'s bed) Come on, I got a surprise for you. (drags Morty by the ankle) Come on, hurry up. (pulls Morty out of his bed and into the hall)\r\nMorty: Ow! Ow! You\'re tugging me too hard!\r\nRick: We gotta go, gotta get outta here, come on. Got a surprise for you Morty.\r\n[Cut to Rick\'s ship]', 1610814002, 1610814002, 'I-hate-php-I-hate-it-with-a-passion-Why-I-m-living-what-is-life', 17),
(4, 'Part 2 Of me Hating php and hating my life why I\'m living what is love baby don\'t hurt me don\'t hurt me no more', 'Malta Story is a 1953 British war film, directed by Brian Desmond Hurst, which is set during the air defence of Malta during the Siege of Malta in the Second World War.[2] The film uses real and unique footage of the locations at which the battles were fought and includes a love story between a RAF reconnaissance pilot and a Maltese woman, as well as the anticipated execution of her brother, caught as an Italian spy. The pilot is loosely based on Adrian Warburton; the Maltese woman\'s brother is based on Carmelo Borg Pisani, who was executed in 1942.', 1610814226, 1610814226, 'Part-2-Of-me-Hating-php-and-hating-my-life-why-Im-living-what-is-love-baby-dont-hurt-me-dont-hurt-me-no-more', 17);

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
  ADD PRIMARY KEY (`newsID`),
  ADD KEY `FK_newsAuthor` (`newsAuthor`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `FK_postAuthor` (`postAuthor`);

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
  MODIFY `newsID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `FK_newsAuthor` FOREIGN KEY (`newsAuthor`) REFERENCES `users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `FK_postAuthor` FOREIGN KEY (`postAuthor`) REFERENCES `users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
