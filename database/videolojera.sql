-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 11, 2021 at 04:17 PM
-- Server version: 10.5.4-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videolojera`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roli` int(11) NOT NULL,
  `perdoruesi_id` int(11) NOT NULL,
  `titulli` varchar(200) NOT NULL,
  `titulli2` varchar(100) NOT NULL,
  `autori` varchar(30) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `permbajtja` longtext NOT NULL,
  `permbajtja2` longtext NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kategoria` varchar(20) NOT NULL,
  `blog_file` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roli` (`roli`),
  KEY `perdoruesi_id` (`perdoruesi_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `roli`, `perdoruesi_id`, `titulli`, `titulli2`, `autori`, `profile_pic`, `data`, `permbajtja`, `permbajtja2`, `foto`, `kategoria`, `blog_file`) VALUES
(1, 1, 2, 'Celebrating 1 Year of DEATH STRANDING on PC', 'KEEP ON KEEPING ON', 'Dafina Veseli', 'src/assets/images/avatar-2.jpg', '2021-07-14', 'DEATH STRANDING revolves heavily around establishing connections, something we\'ve tried to do more than ever with our players during these challenging times over the past year. The level of connectivity and positivity demonstrated in response to our social media activity has been overwhelming and it\'s really motivated us to keep connecting with our PC Porters in whatever ways we can!\r\nToday, we invite everyone to reflect on the past year with us in the form of an interactive events timeline, which can be viewed on the DEATH STRANDING PC website. We wanted to stop and take a moment to celebrate the positive events from the past year, those moments where we established a connection with our Porters, celebrated success and just had some fun.', 'Let\'s wrap this up by once again saying how grateful we all are, here at 505\r\n                    Games and KOJIMA PRODUCTIONS, for the support you\'ve shown us ever since we announced DEATH STRANDING was coming to PC back in 2019.\r\n                    Your kind messages, contribution to events, fan art and photo mode shots brighten our day, so please, keep that content coming!\r\n                    It really does put the biggest smiles on our faces.\r\n                    One final thing before we sign off. To celebrate our 1-year anniversary, we\'re offering Steam users the opportunity to get a\r\n                    massive -60% OFF DEATH STRANDING until July 16th.', 'src/assets/images/post-6-mid.jpg', 'Action', 'blog-article-1.php'),
(2, 1, 1, 'The biggest trailers and announcements from Gamescom Opening Night Live', 'Xbox kicked off Gamescom a little early', 'Arda Mazreku', 'src/assets/images/avatar-3.jpg', '2021-08-23', 'Xbox kicked off Gamescom a little early, but the show got its proper start with Opening Night Live hosted - as always - by Geoff Keighley. It was a lengthy event clocking in at a hefty two hours, but there was a lot on show, from surprising crossovers to big names like Halo, Horizon Forbidden West, and Death Stranding.\r\nOne of the biggest surprises was news that XCOM developer Firaxis is dabbling in the Marvel universe with Midnight Suns. It\'s described as a tactical RPG - surprise, surprise - and will include a brand-new customizable superhero designed specifically for the game. The studio showed off a gameplay trailer on September 1st, and the game itself is expected to launch next March.', '... but the show got its proper start with Opening Night Live hosted - as always - by Geoff Keighley. It was a lengthy event clocking in at a hefty two hours, but there was a lot on show, from surprising crossovers to big names like Halo, Horizon Forbidden West, and Death Stranding.\r\n\r\nIf you weren\'t able catch the event, here\'s all the biggest announcements and best trailers.', 'src/assets/images/lego.jpg', 'All', 'blog-article-2.php');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

DROP TABLE IF EXISTS `blog_comments`;
CREATE TABLE IF NOT EXISTS `blog_comments` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `perdoruesi_id` int(11) NOT NULL,
  `perdoruesi_emri` varchar(50) NOT NULL,
  `perdoruesi_foto` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `permbajtja` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_id` (`blog_id`),
  KEY `perdoruesi_id` (`perdoruesi_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `blog_id`, `perdoruesi_id`, `perdoruesi_emri`, `perdoruesi_foto`, `data`, `permbajtja`) VALUES
(1, 1, 4, 'SkyLerR12', 'src/assets/images/gallery-group-4', '2021-08-15', 'The PC community supported this game so much(even more so than Playstation community) and yet we don\'t get the Director\'s Cut which actually looks cool? At least tell us if its a stupid time exclusive deal like the original game or not.'),
(2, 1, 5, 'adDriAnN', 'src/assets/images/gallery-9-thumb', '2021-08-20', 'If u have atleast an ounce of appreciation for us PC gamers\' community, give us the director\'s cut. It\'s not like ur giving it away for free'),
(3, 2, 6, 'BernyBoi99', 'src/assets/images/gallery-group-5.jpg', '2021-08-23', 'it looks like the pokemon game of my dreams. WOW'),
(4, 2, 7, 'UniversalGamer', 'src/assets/images/post-7-mid-square.jpg', '2021-08-25', 'Wow really DokeV is looking fabulous. The ambiance, the details to the environment and the animation are really impressive. And that music !\r\n\r\nThat new marvel game seems also promising but while I love the cover song giving it a fresh touch, I\'m skeptical after reading it will be a tactical RPG with an exclusive new hero that surpasses the roster of powerhouses shown here.');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roli_id` int(11) NOT NULL,
  `perdoruesi_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `data_regjistrim` date NOT NULL,
  `data_postim` date NOT NULL,
  `titulli` varchar(80) NOT NULL,
  `permbajtja` longtext NOT NULL,
  `attachment` varchar(50) NOT NULL,
  `file` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `perdoruesi_id` (`perdoruesi_id`),
  KEY `roli_id` (`roli_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `roli_id`, `perdoruesi_id`, `email`, `emri`, `profile_pic`, `data_regjistrim`, `data_postim`, `titulli`, `permbajtja`, `attachment`, `file`) VALUES
(1, 1, 1, 'ardamazreku99@gmail.com', 'Arda Mazreku', 'src/assets/images/avatar-3.jpg', '2021-07-01', '2021-08-05', 'Suggestions', 'Hey guys! \r\nThis is the \"Suggestions\" Forum Topic, so feel free to reply with any suggestion that you have for us! All of them are appreciated!\r\n<br><br>\r\nYours truly, <br>\r\nArda - Administrator', '', 'forum-topic.php'),
(2, 2, 5, 'adriangaming@hotmail.com', 'adDriAnN', 'src/assets/images/gallery-9-thumb', '2021-08-01', '2021-08-28', 'Half-Life 2', 'The Biggest Half-Life 2 Event 14 August!!!\r\nOn August 14th I would ask all people to play half life 2 to break the record of most people in the game which is 6882 I think we can beat it. For new players I think it is the best opportunity to try the game. Together we succeed!\r\nDoes not include Garry\'s Mod, Half Life 2 Update, Half Life 2 MMod, Cinematic Mod, Half-Life 2 Deathmatch. these will not play, play only the vanilla game! if you want to participate.', 'src/assets/images/half-life.jpg', 'forum-topic-1.php'),
(3, 2, 4, 'user123@gmail.com', 'SkyLerR12', 'src/assets/images/gallery-group-4', '2021-08-10', '2021-08-15', 'Resident Evil 2 Release', 'Worth it at this price?\r\nI thoroughly enjoyed RE2 Remake and finished it 100%. The only thing I wanted more out of that game was to see more of Raccoon City itself. Now, from what I hear, this game shows even more of the city. But I also hear it\'s not on the same level of quality as the other game...', 'src/assets/images/resident-evil.jpg', 'forum-topic-2.php');

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

DROP TABLE IF EXISTS `forum_comments`;
CREATE TABLE IF NOT EXISTS `forum_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `perdoruesi_id` int(11) NOT NULL,
  `perdoruesi_emri` varchar(50) NOT NULL,
  `perdoruesi_foto` varchar(50) NOT NULL,
  `data_regj` date NOT NULL,
  `data` date NOT NULL,
  `permbajtja` longtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `forum_id` (`forum_id`),
  KEY `perdoruesi_id` (`perdoruesi_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`id`, `forum_id`, `perdoruesi_id`, `perdoruesi_emri`, `perdoruesi_foto`, `data_regj`, `data`, `permbajtja`) VALUES
(1, 1, 4, 'SkyLerR12', 'src/assets/images/gallery-group-4', '2021-08-15', '2021-08-16', 'Hey Arda! <br> Firstly, I wanted to really appreciate the work here on this website! It\'s absolutely incredible! I am a gamer and this website is everything!!! I LOVE IT SO MUCH! <br>\r\nAs about suggestions, don\'t really think we have much to say? I love everything about the web! <br>\r\nCHEERS!');

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

DROP TABLE IF EXISTS `kontakt`;
CREATE TABLE IF NOT EXISTS `kontakt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `mesazhi` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lajmet`
--

DROP TABLE IF EXISTS `lajmet`;
CREATE TABLE IF NOT EXISTS `lajmet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roli` int(11) NOT NULL,
  `titulli` varchar(50) NOT NULL,
  `autori` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `permbajtja` longtext NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kategoria` varchar(10) NOT NULL,
  `file` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roli` (`roli`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lajmet`
--

INSERT INTO `lajmet` (`id`, `roli`, `titulli`, `autori`, `data`, `permbajtja`, `foto`, `kategoria`, `file`) VALUES
(1, 1, 'BLACK OPS COLD WAR', 'Arda Mazreku', '2021-08-01', 'As the Zombie Outbreak grows, only the most fearless Operators will answer the call.\r\nA mountain of new Zombies content is coming to #BlackOpsColdWar this week. Get ready to climb!', 'src/assets/images/slide-1.jpg', 'FPS', 'news-1.php'),
(2, 1, 'Assasin\'s Creed VALHALLA ', 'Arda Mazreku', '2021-08-03', 'The wait is over! 0 days left until kings and rats and castles alike. The Siege of Paris launched on August 12th! ', 'src/assets/images/slide-2.jpg', 'Single', 'news-2.php'),
(3, 1, 'Forza Horizon 5\'s map is here!', 'Arda Mazreku', '2021-08-08', 'La Gran Caldera dominates the northwest quadrant of the map, and will probably loom large no matter where you are. It\'s going to be the jungle gym of the map, where freeroam players zip around to catch major air off of its rim & bumpy sides.', 'src/assets/images/slide-4.jpg', 'Racing', 'news-3.php'),
(4, 1, 'Four Of The Best PC Games Ever Are Free Right Now', 'Festa Mazreku', '2021-08-10', 'Ultima Underworlds 1 & 2, Syndicate, and Syndicate Wars are back and until September 3, they\'re free!', 'src/assets/images/slide-5.jpg', 'Single', 'news-4.php');

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesi`
--

DROP TABLE IF EXISTS `perdoruesi`;
CREATE TABLE IF NOT EXISTS `perdoruesi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roli_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `emri` varchar(20) NOT NULL,
  `mbiemri` varchar(30) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `data_regj` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roli_id` (`roli_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perdoruesi`
--

INSERT INTO `perdoruesi` (`id`, `roli_id`, `email`, `emri`, `mbiemri`, `nickname`, `password`, `foto`, `data_regj`) VALUES
(1, 1, 'ardamazreku99@gmail.com', 'Arda', 'Mazreku', 'Arda Mazreku', 'Arda99!', 'src/assets/images/avatar-3.jpg', '2021-07-01'),
(2, 1, 'dafinaveseli@gmail.com', 'Dafina ', 'Veseli', 'Dafina Veseli', 'Dafina99!', 'src/assets/images/avatar-2.jpg', '2021-08-01'),
(3, 1, 'festamazreku@gmail.com', 'Festa', 'Mazreku', 'Festa Mazreku', 'Festa99!', '', '2021-08-01'),
(4, 2, 'user123@gmail.com', 'Skyler', 'Johnson', 'SkyLerR12', 'skyLeR24!', 'src/assets/images/gallery-group-4', '2021-08-15'),
(5, 2, 'adriangaming@hotmail.com', 'Adrian', 'Gaming', 'adDriAnN', 'adDriAnN123', 'src/assets/images/gallery-9-thumb', '2021-08-24'),
(6, 2, 'bernardnekk@gmail.com', 'Bernard', 'Nekken', 'BernyBoi99', 'BernardNekk1999', 'src/assets/images/gallery-group-5.jpg', '2021-08-05'),
(7, 2, 'universalplayer@hotmail.com', 'Jack', 'Sparrow', 'UniversalGamer', 'universe19293', 'src/assets/images/post-7-mid-square.jpg', '2021-08-10'),
(8, 2, 'angelamartins@gmail.com', 'Angela', 'Martins', 'angela_m', 'Angela12', 'src/assets/images/avatar-2.jpg', '2021-09-10'),
(9, 2, 'gerardplayer@gmail.com', 'Gerard', 'Michael', 'gmichael99', 'Gerard99', 'src/assets/images/avatar-1.jpg', '2021-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `roli`
--

DROP TABLE IF EXISTS `roli`;
CREATE TABLE IF NOT EXISTS `roli` (
  `id` int(11) NOT NULL,
  `roli` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roli`
--

INSERT INTO `roli` (`id`, `roli`) VALUES
(1, 'admin'),
(2, 'perdorues');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS `store`;
CREATE TABLE IF NOT EXISTS `store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emri` varchar(50) NOT NULL,
  `permbajtja` longtext NOT NULL,
  `cmimi` varchar(30) NOT NULL,
  `kategoria` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kategoriaelojes` varchar(30) NOT NULL,
  `link` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `emri`, `permbajtja`, `cmimi`, `kategoria`, `data`, `foto`, `kategoriaelojes`, `link`) VALUES
(1, 'Tales of Arise', 'Explore a world that feels alive:\r\nExplore the world of Dahna, where a mix of unique, natural environments change in appearance based on the time of day. Climb over the rocky terrain, swim in rivers, gather around the campfire, cook food, head to the next town, defeat the master of an alien planet, and liberate the people!', '59,99', 'Anime', '2021-09-10', 'src/assets/images/talesofarise.jpg', 'best_selling', 'https://store.steampowered.com/app/740130/Tales_of_Arise/'),
(2, 'NBA 2K22', 'NBA 2K22 puts the entire basketball universe in your hands. PLAY NOW in real NBA and WNBA environments against authentic teams and players. Build your own dream team in MyTEAM with today\'s stars and yesterday\'s legends. Live out your own pro journey in MyCAREER and experience your personal rise to the NBA. Flex your management skills as a powerful Executive in MyGM and MyLEAGUE. Anyone, anywhere can hoop in NBA 2K22.', '59,99', 'Sports', '2021-09-10', 'src/assets/images/nba.jpg', 'featured_games', 'https://store.steampowered.com/app/1644960/NBA_2K22/'),
(3, 'Red Dead Redemption 2', 'Now featuring additional Story Mode content and a fully-featured Photo Mode, Red Dead Redemption 2 also includes free access to the shared living world of Red Dead Online, where players take on an array of roles to carve their own unique path on the frontier as they track wanted criminals as a Bounty Hunter, create a business as a Trader, unearth exotic treasures as a Collector or run an underground distillery as a Moonshiner and much more.', '40,19', 'Action', '2019-12-05', 'src/assets/images/redemption.jpg', 'featured_games', 'https://store.steampowered.com/app/1174180/Red_Dead_Redemption_2/'),
(4, 'Counter-Strike: Global Offensive', '\"Counter-Strike took the gaming industry by surprise when the unlikely MOD became the most played online PC action game in the world almost immediately after its release in August 1999,\" said Doug Lombardi at Valve. \"For the past 12 years, it has continued to be one of the most-played games in the world, headline competitive gaming tournaments and selling over 25 million units worldwide across the franchise. CS: GO promises to expand on CS\' award-winning gameplay and deliver it to gamers on the PC as well as the next gen consoles and the Mac.\"', 'Free', 'FPS', '2012-08-21', 'src/assets/images/csgo.jpg', 'free_games', 'https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/');

-- --------------------------------------------------------

--
-- Table structure for table `webapp`
--

DROP TABLE IF EXISTS `webapp`;
CREATE TABLE IF NOT EXISTS `webapp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulli` varchar(30) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webapp`
--

INSERT INTO `webapp` (`id`, `titulli`, `logo`, `favicon`) VALUES
(1, 'SteCord', 'src/assets/images/newlogo.png', 'public/favicon.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
