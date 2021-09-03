-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 03, 2021 at 04:39 PM
-- Server version: 10.4.13-MariaDB
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
(1, 2, 2, 'Celebrating 1 Year of DEATH STRANDING on PC', 'KEEP ON KEEPING ON', 'Dafina Veseli', 'src/assets/images/avatar-2.jpg', '2021-07-14', 'DEATH STRANDING revolves heavily around establishing connections, something we\'ve tried to do more than ever with our players during these challenging times over the past year. The level of connectivity and positivity demonstrated in response to our social media activity has been overwhelming and it\'s really motivated us to keep connecting with our PC Porters in whatever ways we can!\r\nToday, we invite everyone to reflect on the past year with us in the form of an interactive events timeline, which can be viewed on the DEATH STRANDING PC website. We wanted to stop and take a moment to celebrate the positive events from the past year, those moments where we established a connection with our Porters, celebrated success and just had some fun.', 'Let\'s wrap this up by once again saying how grateful we all are, here at 505\r\n                    Games and KOJIMA PRODUCTIONS, for the support you\'ve shown us ever since we announced DEATH STRANDING was coming to PC back in 2019.\r\n                    Your kind messages, contribution to events, fan art and photo mode shots brighten our day, so please, keep that content coming!\r\n                    It really does put the biggest smiles on our faces.\r\n                    One final thing before we sign off. To celebrate our 1-year anniversary, we\'re offering Steam users the opportunity to get a\r\n                    massive -60% OFF DEATH STRANDING until July 16th.', 'src/assets/images/post-6-mid.jpg', 'Action', 'blog-article-1.php'),
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
(2, 3, 5, 'adriangaming@hotmail.com', 'adDriAnN', 'src/assets/images/gallery-9-thumb', '2021-08-01', '2021-08-28', 'Half-Life 2', 'The Biggest Half-Life 2 Event 14 August!!!\r\nOn August 14th I would ask all people to play half life 2 to break the record of most people in the game which is 6882 I think we can beat it. For new players I think it is the best opportunity to try the game. Together we succeed!\r\nDoes not include Garry\'s Mod, Half Life 2 Update, Half Life 2 MMod, Cinematic Mod, Half-Life 2 Deathmatch. these will not play, play only the vanilla game! if you want to participate.', 'src/assets/images/half-life.jpg', 'forum-topic-1.php'),
(3, 3, 4, 'user123@gmail.com', 'SkyLerR12', 'src/assets/images/gallery-group-4', '2021-08-10', '2021-08-15', 'Resident Evil 2 Release', 'Worth it at this price?\r\nI thoroughly enjoyed RE2 Remake and finished it 100%. The only thing I wanted more out of that game was to see more of Raccoon City itself. Now, from what I hear, this game shows even more of the city. But I also hear it\'s not on the same level of quality as the other game...', 'src/assets/images/resident-evil.jpg', 'forum-topic-2.php');

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
-- Table structure for table `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `foto` varchar(50) NOT NULL,
  `titulli` varchar(50) NOT NULL,
  `permbajtja` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

DROP TABLE IF EXISTS `kontakt`;
CREATE TABLE IF NOT EXISTS `kontakt` (
  `id` int(11) NOT NULL,
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
  PRIMARY KEY (`id`),
  KEY `roli` (`roli`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lajmet`
--

INSERT INTO `lajmet` (`id`, `roli`, `titulli`, `autori`, `data`, `permbajtja`, `foto`, `kategoria`) VALUES
(1, 1, 'BLACK OPS COLD WAR', 'Arda Mazreku', '2021-08-01', 'As the Zombie Outbreak grows, only the most fearless Operators will answer the call.\r\nA mountain of new Zombies content is coming to #BlackOpsColdWar this week. Get ready to climb!', 'src/assets/images/slide-1.jpg', 'FPS'),
(2, 1, 'Assasin\'s Creed VALHALLA ', 'Arda Mazreku', '2021-08-03', 'The wait is over! 0 days left until kings and rats and castles alike. The Siege of Paris launched on August 12th! ', 'src/assets/images/slide-2.jpg', 'Single'),
(3, 1, 'Forza Horizon 5\'s map is here!', 'Arda Mazreku', '2021-08-08', 'La Gran Caldera dominates the northwest quadrant of the map, and will probably loom large no matter where you are. It\'s going to be the jungle gym of the map, where freeroam players zip around to catch major air off of its rim & bumpy sides.', 'src/assets/images/slide-4.jpg', 'Race'),
(4, 2, 'Four Of The Best PC Games Ever Are Free Right Now', 'Festa Mazreku', '2021-08-10', 'Ultima Underworlds 1 & 2, Syndicate, and Syndicate Wars are back and until September 3, they\'re free!', 'src/assets/images/slide-5.jpg', 'Single');

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
  `password` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `data_regj` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roli_id` (`roli_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perdoruesi`
--

INSERT INTO `perdoruesi` (`id`, `roli_id`, `email`, `emri`, `mbiemri`, `nickname`, `password`, `foto`, `data_regj`) VALUES
(1, 1, 'ardamazreku99@gmail.com', 'Arda', 'Mazreku', '', 'Arda123!', 'src/assets/images/avatar-3.jpg', '2021-07-01'),
(2, 2, 'dafinaveseli@gmail.com', 'Dafina ', 'Veseli', '', 'Dafina123!', 'src/assets/images/avatar-2.jpg', '2021-08-01'),
(3, 2, 'festamazreku@gmail.com', 'Festa', 'Mazreku', '', 'Festa99!', '', '2021-08-01'),
(4, 3, 'user123@gmail.com', 'Skyler', 'Johnson', 'SkyLerR12', 'skyLeR24!', 'src/assets/images/gallery-group-4', '2021-08-15'),
(5, 3, 'adriangaming@hotmail.com', 'Adrian', 'Gaming', 'adDriAnN', 'adDriAnN123', 'src/assets/images/gallery-9-thumb', '2021-08-24'),
(6, 3, 'bernardnekk@gmail.com', 'Bernard', 'Nekken', 'BernyBoi99', 'BernardNekk1999', 'src/assets/images/gallery-group-5.jpg', '2021-08-05'),
(7, 2, 'universalplayer@hotmail.com', 'Jack', 'Sparrow', 'UniversalGamer', 'universe19293', 'src/assets/images/post-7-mid-square.jpg', '2021-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `roli`
--

DROP TABLE IF EXISTS `roli`;
CREATE TABLE IF NOT EXISTS `roli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roli` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roli`
--

INSERT INTO `roli` (`id`, `roli`) VALUES
(1, 'admin'),
(2, 'mirembajtese'),
(3, 'perdorues');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
