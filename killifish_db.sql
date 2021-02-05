-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2021 at 04:06 PM
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
(14, 'nice', 1612018151, 1612018151, 9, 24),
(15, 'show me the money\r\n', 1612022552, 1612022552, 12, 24),
(16, 'where the money', 1612022563, 1612022563, 12, 24),
(17, 'how rude ^ can you imagine YOUR best friend dying in such a cruel fashion??? SHAME!!!', 1612022595, 1612022595, 9, 23),
(18, 'hi sucker ', 1612022613, 1612022613, 12, 23),
(19, 'Welcome to our Endemic community! I\'m sure you\'ll pick up making friends quick here - just make sure to avoid notorious trolls like MalliaXD!! ::ANGRYFACE::', 1612045558, 1612045558, 12, 20),
(20, 'Welcome to Endemic!', 1612527744, 1612527744, 12, 17),
(21, 'nice fish brawhhh', 1612536631, 1612536631, 6, 20),
(22, 'I agree! What a STINKY fish!', 1612537021, 1612537021, 18, 28),
(23, 'Forward it to the Endemic developer squad and I\'m sure they\'ll sort it out ASAP! ::eyesroll::', 1612537110, 1612537110, 17, 28),
(24, 'Ban that c*** he\'s a disgrace to the community', 1612537125, 1612537125, 18, 23),
(25, 'I got more killifish KNOWLEDGE then everyone here so ARE YOU DUMB STUPID OR \r\nDUMB ', 1612537129, 1612537129, 18, 24),
(26, 'That\'s some tasty nosh! #nomnom', 1612537206, 1612537206, 14, 29),
(27, 'HUH?\r\n', 1612537262, 1612537262, 18, 24),
(28, 'im 12 and what is this', 1612537274, 1612537274, 18, 29);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsID` int(10) UNSIGNED NOT NULL,
  `newsTitle` varchar(600) NOT NULL,
  `newsDescription` varchar(3000) NOT NULL,
  `newsAuthor` int(10) UNSIGNED NOT NULL,
  `newsCreated_at` int(10) DEFAULT NULL,
  `newsUpdated_at` int(10) UNSIGNED DEFAULT NULL,
  `newsSlug` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsID`, `newsTitle`, `newsDescription`, `newsAuthor`, `newsCreated_at`, `newsUpdated_at`, `newsSlug`) VALUES
(29, 'First group of Killifish released at Marsaskala', 'The first group of Killifish (bużaqq) were released at sea in the il-Magħluq area in Marsaskala as part of a conservation project on this endemic species for Malta. Their release was carried out after the place was cleaned which permitted the experiment so that the Killifish population will be increased again in the natural environment. 25 Killifish, Malta’s national fish, which hatched in the aquaculture centre have been place in a protected cage at il-Magħluq so that they will be monitored in the natural habitat. Nature Trust President, Vince Attard, said that the conservation project of this endemic species in the Mediterranean started after it was noticed that the Killifish population at il-Magħluq was endangered. Five pairs of the fish were caught in the wild and reared at the San Luċjan fort’s aquaculture centre. He said that their population has increased to 500. “We will release the first 25; during these few weeks we will release 125 to monitor their life in the wild and how to further increase the population”. Mr Attard said that the conservation process is long term and complicated. “You do not only have to rear the fish itself but also to increase its food as if it is kept in the wild and then the fish has to eat other creatures that it finds in the natural environment”. The Killifish is a small endemic fish in the Mediterranean, found mostly in coastal areas in the central and eastern parts of the Mediterranean. Mr Attard said that gender tests showed variations and therefore the Maltese population of Killifish is unique. Environment Minister, Jose’ Herrera, praised the work of Nature Trust on the conservation of Malta’s flora and fauna. He said that measures are underway on the preservhation of the 5,000 square metres il-Magħluq area, including the installation of security cameras. Talks are also being held so that the site is included in tourists excursions.', 17, 1611663592, 1611663592, 'First-group-of-Killifish-released-at-Marsaskala'),
(30, 'Il-Magħluq’s fish fauna – The killifish', 'In our first installment about the Magħluq’s fish fauna, we had talked about the common eel. In this second episode, we will be talking about 2 fish. One is the killifish; probably the fish that is most commonly associated with the Magħluq area. The other is the seabass; another fish that habitates the area. The information is again brought to our portal by Mr. Rio Sammut, who we thank for his valuable input. Max. length: 6.5cm Max. weight: 10g Characteristics: Rounded body covered in big scales: large eyes; short mouth deflected upwards; single dorsal fin set at mid-point of the back; anal fin bigger than pectorals; fan tail, truncated and slightly convex; the male is smaller and yellow or greyish-green with blue areas and about twelve dark vertical bands across the sides; the female is 10% larger and more greyish, with alternating narrower and shorter black stripes. Habits: The Maltese Killifish is an endemic sub-species. It used to be extremely abundant in brackish water, occasionally penetrating into the seawater inside bays, especially following torrential rainfall and consequent flooding. It feeds on small organic scraps, mosquito larvae, and minute crustaceans and copepods. Being a carnivorous predator it must not be kept in a community aquarium, but only with others of its own kind. Its numbers have declined alarmingly in the last two decades and it is now an endangered species. If any specimens are collected for a period of study in a suitable fish tank, they should be released exactly where they had been found within the week.', 17, 1611663650, 1611663650, 'Il-Magħluq’s-fish-fauna-–-The-killifish'),
(33, 'Killifish around the world', 'Killifish are found mainly in fresh or brackish waters in the Americas, as far south as Argentina and as far north as southern Ontario. There are also species in southern Europe, in much of Africa as far south as KwaZulu-Natal, South Africa, in the Middle East and Asia (as far east as Vietnam), and on several Indian Ocean islands. The majority of killifish are found in permanent streams, rivers, and lakes, and live between two and three years. Such killifish are common in the Americas (Cyprinodon, Fundulus and Rivulus) as well as in Africa and Asia (including Aphyosemion, Aplocheilus, Epiplatys, Fundulopanchax and Lacustricola) and southern Europe (Aphanius). Some of these habitats can be rather extreme; the only natural habitat of the Devils Hole pupfish (Cyprinodon diabolis) is Devils Hole: a cavern at least 91 metres (299 ft) deep, branching out from a small opening at the surface, approximately 1.8 metres (5.9 ft) by 5.5 metres (18 ft) wide. Some specialized forms live in temporary ponds and flood plains, and typically have a much shorter lifespan. Such species, known as \"annuals\", live no longer than nine months, and are used as models for studies on aging. Examples include the African genus Nothobranchius and South American genera ranging from the cold water Austrolebias of Argentina and Uruguay to the more tropical Gnatholebias, Pterolebias, Simpsonichthys and Terranatos. A small number of species will shoal while most are territorial to varying degrees. Populations can be dense and territories can shift quickly, especially for species of the extreme shallows (a few centimetres of water). Many species exist as passive tribes in small streams where dominant males will defend a territory while allowing females and immature males to pass through the area. In the aquarium, territorial behaviour is different for every grouping, and will even vary by individuals. In a large enough aquarium, most species can live in groups as long as there are more than three males.', 17, 1612013799, 1612013799, 'Killifish-around-the-world'),
(34, 'RED EGGER\'S KILLIFISH', 'The Blue Egger\'s Killifish (Nothobranchius eggersi) is an extremely colorful, peaceful fish whose small size makes it absolutely perfect for the nano or planted aquarium. Native to stagnant swamps and slow-moving waterways in Tanzania, this colorful fish is excellent for aquariums with very low water flow or, under the correct strict maintenance schedule, no water flow at all. It is an \"annual killifish,\" meaning that it lives a rather short lifespan of roughly a year in the wild (although this is sometimes longer in the aquarium). It is easy to breed, however, and an ongoing colony can be established for more long-term keeping.\r\n', 17, 1612013956, 1612013956, 'RED-EGGERS-KILLIFISH'),
(35, 'Why don\'t more people keep killies?', 'John Robertson is baffled as to why killifish are not universally popular. His reasoning seems pretty strong...\r\n\r\nThere are hundreds of species of small, bold killifish displaying brilliant colours and flamboyant fins. Most are peaceful and many easy to keep and breed.\r\n\r\nKillifish are egg-layers of Cyprinodontidae and distantly related to common livebearers such as platies and swordtails. They are widely distributed in shallow waters of tropical and sub-tropical regions on every continent except Australasia.\r\n\r\nYet they are rarely found in your average dealer’s tank. Maybe it\'s because most don’t carry a recognised common name.', 17, 1612014406, 1612014406, 'Why-dont-more-people-keep-killies'),
(37, 'Killifish: Species, Tank Conditions, Diet and Breeding', 'Tank Setup A 20 gallon tank is perfect for a regular pair of Killifish; if you are opting for one of the larger species you adjust your tank size accordingly. Most Killies should be in a long shallow tank with very little, or no water movement. Your tank should have plenty of live plants, mainly floating plants. Plants that are suitable include the cryptocorynes. This is because they do well with low levels of lighting. The tank can be bare on the floor, but most people like to cover it with dark gravel. If you do choose to use gravel, you should choose a type that will not harden the water. Diet for Killifish A varied and well-balanced diet is particularly important if you are breeding Killifish. For this reason, a lot of experienced aquarists choose to make their own food so they can meet the exact nutritional requirements of their fish. The best foods for Adult Killifish include: Brine Shrimp – easily taken by most Killies, good nutritional source. You can also try frozen brine shrimp. Daphnia – most aquarists use this live food. It can be cultured or collected from ponds (care must be taken not to collect other organisms or fish). It should not be used as an exclusive food source as too many can act as a laxative. Mosquito Larvae – only available seasonally, can be collected from ponds. Killifish are actually very easy to breed, and this is perhaps the top reason that they are so popular with Aquarists and have such a huge fan base. If you want to breed Killifish, it’s important to know that there are two different reproductive types. One is the annual Killifish; the other is the non-annual Killifish.', 17, 1612014979, 1612014979, 'Killifish:-Species,-Tank Conditions,-Diet and Breeding'),
(41, 'Learn through the game', 'Things that you will learn through the game: Characteristics: Rounded body covered in big scales: large eyes; short mouth deflected upwards; single dorsal fin set at mid-point of the back; anal fin bigger than pectorals; fan tail, truncated and slightly convex; the male is smaller and yellow or greyish-green with blue areas and about twelve dark vertical bands across the sides; the female is 10% larger and more greyish, with alternating narrower and shorter black stripes. Habits: The Maltese Killifish is an endemic sub-species. It used to be extremely abundant in brackish water, occasionally penetrating into the seawater inside bays, especially following torrential rainfall and consequent flooding. It feeds on small organic scraps, mosquito larvae, and minute crustaceans and copepods. Being a carnivorous predator it must not be kept in a community aquarium, but only with others of its own kind. Its numbers have declined alarmingly in the last two decades and it is now an endangered species. If any specimens are collected for a period of study in a suitable fish tank, they should be released exactly where they had been found within the week.', 17, 1612527327, 1612527327, 'Learn-through-the-game'),
(43, 'The Team for the game', 'The team is comprised of six MCAST students from two classes, in their final year of their Bachelor’s course - Luca Bruno, Aaron Sammut and Ian Mallia from Interactive Media; Mark Joseph Busuttil, Miguel Saliba and Kane Magri from Game Art. For the course of this project, our team will be split into various departments in order to increase efficiency in workflow and increase ease of communication between team members, as well as allowing each member to work in their strongest field. Luca, Aaron and Ian, due to their experience handling C# code, will make up the code department, meanwhile Mark, Miguel and Kane, with their experience in game illustration will handle the visual and aesthetical direction of the game. The sound department shall be divided between Mark and Ian, due to their past experience in audio software. Other departments, such as those regarding documentation and testing, will be a joint undertaking between all members. ', 25, 1612534238, 1612534238, 'The-Team-for-the-game'),
(44, 'The game', ' \r\n\r\nThe player will be playing as a killifish and may be categorised as a 2D survival side-scroller, in which they must survive different obstacles and challenges in various levels, until it completes an end objective. The game will consist of five different levels, each introducing a new obstacle/enemy, with each level building on the last. This includes finding food like prawns to increase their health bar, avoiding obstacles like unrecyclable plastic water bottles in order to not deplete their health bar, escorting another fellow killifish to safety and escaping a ‘boss’ enemy. Each level is designed with the audience’s connection with the killifish in mind, in order for players to unknowingly discover more about this species of fish and its characteristics like diet, behaviours and predators. ', 25, 1612534373, 1612534373, 'The-game');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postID` int(10) UNSIGNED NOT NULL,
  `postTitle` varchar(600) NOT NULL,
  `postDescription` varchar(2000) NOT NULL,
  `postCreated_at` int(10) DEFAULT NULL,
  `postUpdated_at` int(10) UNSIGNED DEFAULT NULL,
  `postSlug` varchar(600) NOT NULL,
  `postAuthor` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postID`, `postTitle`, `postDescription`, `postCreated_at`, `postUpdated_at`, `postSlug`, `postAuthor`) VALUES
(6, 'Look at the size of this fish!', 'Look at my friend Gary - the absolute unit of a killifish!', 1611834995, 1611834995, 'Look-at-the-size-of-this-fish', 17),
(9, 'RIP to my best friend Joshua', 'Was the biggest baddest bass I knew, RIP bud', 1612017829, 1612017829, 'RIP-to-my-best-friend-Joshua', 23),
(10, 'smol killifish (warning cute content ahead)', 'look at his cute lil face!', 1612017859, 1612017859, 'smol-killifish-(warning-cute-content-ahead)', 25),
(12, 'Hello, I\'m new!', 'Hi, I\'m Norman, and I\'m new to the world of killifish! Ever since my dog died, I have filled the void with new killifish facts!', 1612021732, 1612021732, 'Hello,-I\'m-new!', 26),
(14, 'Out dining at the Krusty Krab!', 'Epic dinner tonight w the fam #krust', 1612527802, 1612527802, 'Out-dining-at-the-Krusty-Krab', 28),
(17, 'Issue with the game', 'Found this issue', 1612535825, 1612535825, 'Issue-with-the-game', 20),
(18, 'can we ban MalliaXD', 'MalliaXD is being soo rude can we ban him from this community ', 1612536991, 1612536991, 'can-we-ban-MalliaXD', 20);

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
(19, 'Adam', 'Sammut', 'Sasasa', 'saaaahdude@gmail.com', '$2y$10$hCS/7SKEsioN3LX.FBWlIeWGZ7S1OJkgAZ4aKw8P6c5kG.Dr6xe4u', 1608650605, 1608650605, 0),
(20, 'Eve', 'Cardenas', 'test2', 'tohak@mailinator.com', '$2y$10$WvV1y6kVfMZZ4KMasC450OkwOF4Yo0WNBlBiEWCENlvPqKIg/XWUG', 1610198677, 1610198677, 0),
(21, 'Rina', 'Stanton', 'zivym', 'rotupi@mailinator.com', '$2y$10$ywcaDNXY9CcjbZFRTNwwtOsUfMAuW5PuKMLm3HQeH9Mw8ug8AY5MG', 1612017610, 1612017610, 0),
(22, 'Dahlia', 'Sanders', 'kejucyn', 'jawowuw@mailinator.com', '$2y$10$ddMPpXRrJvCbQ0RJW5eJGOX1FkuOZ/ax7W/5x/fl00S6/Xk06An1y', 1612017677, 1612017677, 0),
(23, 'Brian', 'Sammut', 'BigBrain', 'brianhere@gmail.com', '$2y$10$jc91I/QoyQ1/RL4i7YerMuF/BJYs/7bxhm1IoXtSfQJgPCXYy3PIO', 1612017704, 1612017704, 0),
(24, 'John', 'Mallia', 'MalliaXD', 'johnmallia@hotmail.com', '$2y$10$CxQousbJtK7GDKmdDbxtVuzD7SPcII5KULQ54pKUbjT4K0XOMRgHi', 1612017721, 1612017721, 0),
(25, 'Theodore', 'Price', 'test1', 'test1@mailinator.com', '$2y$10$vHGblMvkStyKxZx5dC4ptuXdJFOJZYx.mFnJNIWqlRLtYt2Aud9.e', 1612017838, 1612017838, 1),
(26, 'Norman', 'Becker', 'BlackWidow2', 'xomugefiv@mailinator.com', '$2y$10$xW8WIno54IWgnc5yO5tDM.ECLfPD5GnDCcq5LwNGRARjl6eSYmb6i', 1612021703, 1612021703, 0),
(27, 'Jin', 'Goff', 'ryfihuf', 'suzyvure@mailinator.com', '$2y$10$NelfnO4ah2jwZD8wFtZ5eeLLPFBGlIHjClXbbtbX4YkRXBDf3tIry', 1612527513, 1612527513, 0),
(28, 'Pedro', 'Borg', 'test3', 'tester3@gmail.com', '$2y$10$QNkphEFSmv2/JGF5Qlle/.0KRu2tydTwrMOWqCtJHAwoi9RqUYEtm', 1612527653, 1612527653, 0),
(29, 'Miranda', 'Lancaster', 'lumodeb', 'cexexaryha@mailinator.com', '$2y$10$rbdRdoHke28Q1iT9bFXSeeDFmOtpMo40I/ktcvbNQpsvNfB6gZDTC', 1612537181, 1612537181, 0);

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
  MODIFY `commentID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
