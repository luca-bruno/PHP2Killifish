-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 05:19 PM
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
  `commentUpdated_at` int(10) UNSIGNED DEFAULT NULL,
  `commentParent` int(10) UNSIGNED NOT NULL,
  `commentAuthor` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `commentDescription`, `commentCreated_at`, `commentUpdated_at`, `commentParent`, `commentAuthor`) VALUES
(4, 'dasdadsadasdadas', 1611840852, 1611840852, 7, 17),
(5, 'dasda', 1611840867, 1611840867, 7, 17),
(6, 'dfgdfg', 1611840919, 1611840919, 6, 17),
(7, 'sdf', 1611840950, 1611840950, 7, 17),
(8, 'lllllllll', 1611846980, 1611846980, 7, 17),
(9, 'aaaa', 1611853526, 1611853526, 7, 17),
(10, '3131', 1611854375, 1611854375, 7, 17),
(11, 'dghdhdg', 1611854379, 1611854379, 7, 17),
(12, 'ija\r\n', 1611854380, 1611854380, 6, 17),
(13, 'hiii', 1612018117, 1612018117, 8, 24),
(14, 'nice', 1612018151, 1612018151, 9, 24),
(15, 'show me the money\r\n', 1612022552, 1612022552, 12, 24),
(16, 'where the money', 1612022563, 1612022563, 12, 24),
(17, 'sdfgdsfgfg', 1612022595, 1612022595, 9, 23),
(18, 'hi sucker ', 1612022613, 1612022613, 12, 23);

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
  `newsSlug` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsID`, `newsTitle`, `newsDescription`, `newsAuthor`, `newsCreated_at`, `newsUpdated_at`, `newsSlug`) VALUES
(4, 'Elvis sighted in Malta!', 'Hello Elvis', 19, NULL, NULL, 'elvis-sighted-in-malta'),
(5, 'Elvis is sighted in Malta', 'Hello Elvis', 17, 1610463741, 1610463741, 'Elvis-is-sighted-in-Malta'),
(6, 'newupdate', 'newupdate', 17, 1610463773, 1610463773, 'newupdate'),
(7, 'Story', 'Il huta killiefish jisimha Jhon. Jhion kien jejx fil midrag fMarsascala, l-iktar post ikrah fmalta, issek ijjad maimi beach imma lost hope. Dan Jhon one fine morning mar dawra helwa fil bahar fejn kellu naqa aventuri sbieh. l ewwel mar passigata mal costa inehi il hmieg tan nies. Waqt din il mixja intaqa ma hafna ostacli fostom il hara li waqa dak il liba Ganni il papra. meta kien mixi intaqa ma Ross, kella koolox issikat u ippupat, kif raha Jhon mal ewwel qabez fuqa u qala \"Hawn irridek wara dan il haxix twil, mhux ha nkun lest sakem jibda johrog trab\". Dik kienet il mawra helwa ta Jhon, u lunika wahda li ha jkollu ghax miskin kielu Guzi il bass. But his legacy will live on ', 17, 1610813437, 1610813437, 'Story'),
(8, 'Story Califronia', 'Kont għaddej mill-Imsida\r\nIlma dieħel mil-bibien\r\nRajt ħabib fuq il-bus stop\r\nGħidtlu inwaslek x\'imkien\r\nMinnu fieh daħal ġewwa\r\nMela t-twapet bit-tajn\r\nTfajtha first u għaqqadtomla ftit\r\nQisni ħriġt bid-disgħin\r\nQalli stenna ħa nqabbad\r\nU xammejt rieħa tfuħ\r\nHa ftit nifsijiet u newwiluli\r\nU dlonk jien ħadt ir-ruħ\r\nRħejnilha għal tas-Sliema\r\nMill-istrand għaddejin\r\nHares lejja b\'ħalqu miftuħ daqsiex\r\nU għajnejh imbexqin\r\nKif jien imġandar u imħassar\r\n- Xi smoke tajba din - Tinżillek fin fin - Zgur ta\'barra din\r\nKemm ili ma nkun daqshekk imċaflas\r\nWiċċi aħmar nar\r\nKull ma nara ċpar\r\nKif se mmur d-dar?\r\nSaqsieni jekk inhiex mgħaggel?\r\nGħidtlu no problem Joe\r\nQalli ninżlu sa l-Exiles\r\nForsi insiru coco\r\nU minn ġol-but ħareg borża\r\nKollha pirmli u x\'naf jien\r\nHareġ żewġ pesisi vjola\r\nU blajinhom flimkien', 17, 1610814239, 1610814239, 'Story-Califronia'),
(9, 'habfhbadksdjlfI really have a long long long longggg longgg title', 'dsklfnSNFJNfnjd', 17, 1610819316, 1610819316, 'habfhbadksdjlf'),
(10, 'I really have a long long long longggg longgg title', 'Batman, Batman, Batman, Batman!\r\n\r\nBatman, Batman, Batman!\r\n\r\nBatman, Batman, Batman, Batman!\r\n\r\nBatman, Batman, Batman!\r\n\r\nBatman, Batman, Batman!\r\n\r\nBatman, Batman, Batman!\r\n\r\nBatman, Batman, Batman!\r\n\r\nNa, na, na, na, na, na, na, na, na, na, na, na, na\r\n\r\nBatman!\r\n\r\n', 17, 1610819358, 1610819358, 'I-really-have-a-long-long-long-longggg-longgg-title'),
(11, 'My name Jeff', 'My name jeff please image work', 17, 1611397188, 1611397188, 'My-name-Jeff'),
(12, 'My name Jeff', 'My name jeff please image work', 17, 1611397419, 1611397419, 'My-name-Jeff'),
(13, 'My name Jeff', 'gsd', 17, 1611401137, 1611401137, 'My-name-Jeff'),
(14, 'dsfsdf', 'sdfggsdg', 17, 1611401165, 1611401165, 'dsfsdf'),
(15, 'dsfsdf', 'sdfggsdg', 17, 1611401190, 1611401190, 'dsfsdf'),
(16, 'dsfsdf', 'sdfggsdg', 17, 1611401215, 1611401215, 'dsfsdf'),
(17, 'dsfsdf', 'sdfggsdg', 17, 1611401267, 1611401267, 'dsfsdf'),
(18, 'dsfsdf', 'sdfggsdg', 17, 1611401299, 1611401299, 'dsfsdf'),
(19, 'dsfsdf', 'dfgdfgdfgd', 17, 1611401314, 1611401314, 'dsfsdf'),
(20, '312313131', '31321321313', 17, 1611401329, 1611401329, '312313131'),
(21, '312313', '123131241215214', 17, 1611401405, 1611401405, '312313'),
(22, 'again', '1254215236433412', 17, 1611401499, 1611401499, 'again'),
(23, '312313', '1313133', 17, 1611401607, 1611401607, '312313'),
(24, 'Work me ', 'rffffffffffffff', 17, 1611663461, 1611663461, 'Work-me'),
(25, 'My name Jeff', 'My name JeffMy name Jeff', 17, 1611663468, 1611663468, 'My-name-Jeff'),
(26, 'My name Jeff', 'mynamejeffffff', 17, 1611663567, 1611663567, 'My-name-Jeff'),
(27, 'Hello Group', 'This is a therapy session', 17, 1611663567, 1611663567, 'Hello-Group'),
(28, 'Hello Group', 'This is a therapy session', 17, 1611663580, 1611663580, 'Hello-Group'),
(29, 'Hello Group', 'Intro 2', 17, 1611663592, 1611663592, 'Hello-Group'),
(30, 'My name Jeff', 'myname jeffffff', 17, 1611663650, 1611663650, 'My-name-Jeff'),
(31, 'testing', 'pug life', 17, 1611663674, 1611663674, 'testing'),
(32, 'Part 4 of hating my life and everything in between', '[Verse 1]\r\nSomebody once told me the world is gonna roll me\r\nI ain\'t the sharpest tool in the shed\r\nShe was looking kind of dumb with her finger and her thumb\r\nIn the shape of an \"L\" on her forehead\r\n\r\n[Pre-Chorus]\r\nWell, the years start coming and they don\'t stop coming\r\nFed to the rules and I hit the ground running\r\nDidn\'t make sense not to live for fun\r\nYour brain gets smart but your head gets dumb\r\nSo much to do, so much to see\r\nSo what\'s wrong with taking the backstreets?\r\nYou\'ll never know if you don\'t go\r\nYou\'ll never shine if you don\'t glow', 17, 1611837719, 1611837719, 'Part-4-of-hating-my-life-and-everything-in-between'),
(33, 'new post today', 'my name jeff', 17, 1612013799, 1612013799, 'new-post-today'),
(34, 'RED EGGER\'S KILLIFISH', 'The Blue Egger\'s Killifish (Nothobranchius eggersi) is an extremely colorful, peaceful fish whose small size makes it absolutely perfect for the nano or planted aquarium. Native to stagnant swamps and slow-moving waterways in Tanzania, this colorful fish is excellent for aquariums with very low water flow or, under the correct strict maintenance schedule, no water flow at all. It is an \"annual killifish,\" meaning that it lives a rather short lifespan of roughly a year in the wild (although this is sometimes longer in the aquarium). It is easy to breed, however, and an ongoing colony can be established for more long-term keeping.\r\n', 17, 1612013956, 1612013956, 'RED-EGGERS-KILLIFISH'),
(35, 'Why don\'t more people keep killies?', 'John Robertson is baffled as to why killifish are not universally popular. His reasoning seems pretty strong...\r\n\r\nThere are hundreds of species of small, bold killifish displaying brilliant colours and flamboyant fins. Most are peaceful and many easy to keep and breed.\r\n\r\nKillifish are egg-layers of Cyprinodontidae and distantly related to common livebearers such as platies and swordtails. They are widely distributed in shallow waters of tropical and sub-tropical regions on every continent except Australasia.\r\n\r\nYet they are rarely found in your average dealer’s tank. Maybe it\'s because most don’t carry a recognised common name.', 17, 1612014406, 1612014406, 'Why-dont-more-people-keep-killies'),
(36, 'pug is for life', 'pug is love pug is life - Shrek', 17, 1612014871, 1612014871, 'pug-is-for-life'),
(37, 'pug is for life', 'pugpugpugpugpugpugpugpug', 17, 1612014979, 1612014979, 'pug-is-for-life'),
(38, 'My name Jeff TODAY', 'otday today', 17, 1612014995, 1612014995, 'My-name-Jeff-TODAY'),
(39, 'png test', 'png testttt', 17, 1612015115, 1612015115, 'png-test'),
(40, 'patrick', 'dddd', 17, 1612015230, 1612015230, 'patrick');

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
(4, 'Part 2 Of me Hating php and hating my life why I\'m living what is love baby don\'t hurt me don\'t hurt me no more', 'Malta Story is a 1953 British war film, directed by Brian Desmond Hurst, which is set during the air defence of Malta during the Siege of Malta in the Second World War.[2] The film uses real and unique footage of the locations at which the battles were fought and includes a love story between a RAF reconnaissance pilot and a Maltese woman, as well as the anticipated execution of her brother, caught as an Italian spy. The pilot is loosely based on Adrian Warburton; the Maltese woman\'s brother is based on Carmelo Borg Pisani, who was executed in 1942.', 1610814226, 1610814226, 'Part-2-Of-me-Hating-php-and-hating-my-life-why-Im-living-what-is-love-baby-dont-hurt-me-dont-hurt-me-no-more', 17),
(5, 'dsada', 'dasdadacaswaa', 1611829959, 1611829959, 'dsada', 17),
(6, 'Part 3 hating my life and everything in between', '\r\n                                     SHREK\r\n                         Once upon a time there was a lovely \r\n                         princess. But she had an enchantment \r\n                         upon her of a fearful sort which could \r\n                         only be broken by love\'s first kiss. \r\n                         She was locked away in a castle guarded \r\n                         by a terrible fire-breathing dragon. \r\n                         Many brave knights had attempted to \r\n                         free her from this dreadful prison, \r\n                         but non prevailed. She waited in the \r\n                         dragon\'s keep in the highest room of \r\n                         the tallest tower for her true love \r\n                         and true love\'s first kiss. (laughs) \r\n                         Like that\'s ever gonna happen. What \r\n                         a load of - ', 1611834995, 1611834995, 'Part-3-hating-my-life-and-everything-in-between', 17),
(7, 'Part 54 of hating my life and everything in between ', 'Nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan\r\nNyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan\r\nNyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan\r\nNyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan\r\nNyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan nyan', 1611837775, 1611837775, 'Part-54-of-hating-my-life-and-everything-in-between', 17),
(8, 'hello', 'hellllllooo', 1611858997, 1611858997, 'hello', 17),
(9, 'testuser', 'testing user image', 1612017829, 1612017829, 'testuser', 23),
(10, 'hello i m newwwww', 'hiiiiiiiiiiii', 1612017859, 1612017859, 'hello-i-m-newwwww', 25),
(11, 'killi', 'killi killi ', 1612018612, 1612018612, 'killi', 24),
(12, 'blalalallalalalasalcfcsaasv', 'cvaxvsgbsdbbdsvsdfb', 1612021732, 1612021732, 'blalalallalalalasalcfcsaasv', 26);

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
(20, 'Eve', 'Cardenas', 'test2', 'tohak@mailinator.com', '$2y$10$WvV1y6kVfMZZ4KMasC450OkwOF4Yo0WNBlBiEWCENlvPqKIg/XWUG', 1610198677, 1610198677, 0),
(21, 'Rina', 'Stanton', 'zivym', 'rotupi@mailinator.com', '$2y$10$ywcaDNXY9CcjbZFRTNwwtOsUfMAuW5PuKMLm3HQeH9Mw8ug8AY5MG', 1612017610, 1612017610, 0),
(22, 'Dahlia', 'Sanders', 'kejucyn', 'jawowuw@mailinator.com', '$2y$10$ddMPpXRrJvCbQ0RJW5eJGOX1FkuOZ/ax7W/5x/fl00S6/Xk06An1y', 1612017677, 1612017677, 0),
(23, 'aaron', 'sammut', 'testaaron', 'aaronsammut6@gmail.com', '$2y$10$jc91I/QoyQ1/RL4i7YerMuF/BJYs/7bxhm1IoXtSfQJgPCXYy3PIO', 1612017704, 1612017704, 0),
(24, 'Ian', 'Mallia', 'MalliaXD', 'ian.mallia@hotmail.com', '$2y$10$CxQousbJtK7GDKmdDbxtVuzD7SPcII5KULQ54pKUbjT4K0XOMRgHi', 1612017721, 1612017721, 0),
(25, 'Theodore', 'Price', 'testo', 'bipoc@mailinator.com', '$2y$10$vHGblMvkStyKxZx5dC4ptuXdJFOJZYx.mFnJNIWqlRLtYt2Aud9.e', 1612017838, 1612017838, 0),
(26, 'Norman', 'Becker', 'testaaa', 'xomugefiv@mailinator.com', '$2y$10$xW8WIno54IWgnc5yO5tDM.ECLfPD5GnDCcq5LwNGRARjl6eSYmb6i', 1612021703, 1612021703, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `FK_commentAuthor` (`commentAuthor`),
  ADD KEY `FK_commentParent` (`commentParent`);

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
  MODIFY `commentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_commentAuthor` FOREIGN KEY (`commentAuthor`) REFERENCES `users` (`userID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_commentParent` FOREIGN KEY (`commentParent`) REFERENCES `posts` (`postID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
