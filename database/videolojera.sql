-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 30, 2021 at 05:05 PM
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
  `titulli` varchar(200) NOT NULL,
  `autori` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `permbajtja` longtext NOT NULL,
  `foto` varchar(50) NOT NULL,
  `kategoria` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roli` (`roli`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `roli`, `titulli`, `autori`, `data`, `permbajtja`, `foto`, `kategoria`) VALUES
(1, 2, 'Celebrating 1 Year of DEATH STRANDING on PC', 'Dafina Veseli', '2021-07-14', 'DEATH STRANDING revolves heavily around establishing connections, something we\'ve tried to do more than ever with our players during these challenging times over the past year. The level of connectivity and positivity demonstrated in response to our social media activity has been overwhelming and it\'s really motivated us to keep connecting with our PC Porters in whatever ways we can!\r\nToday, we invite everyone to reflect on the past year with us in the form of an interactive events timeline, which can be viewed on the DEATH STRANDING PC website. We wanted to stop and take a moment to celebrate the positive events from the past year, those moments where we established a connection with our Porters, celebrated success and just had some fun.', 'src/assets/images/post-6-mid.jpg', 'Action'),
(2, 1, 'The biggest trailers and announcements from Gamescom Opening Night Live', 'Arda Mazreku', '2021-08-23', 'Xbox kicked off Gamescom a little early, but the show got its proper start with Opening Night Live hosted - as always - by Geoff Keighley. It was a lengthy event clocking in at a hefty two hours, but there was a lot on show, from surprising crossovers to big names like Halo, Horizon Forbidden West, and Death Stranding.\r\nOne of the biggest surprises was news that XCOM developer Firaxis is dabbling in the Marvel universe with Midnight Suns. It\'s described as a tactical RPG - surprise, surprise - and will include a brand-new customizable superhero designed specifically for the game. The studio showed off a gameplay trailer on September 1st, and the game itself is expected to launch next March.', 'src/assets/images/lego.jpg', 'All');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `data_regjistrim` date NOT NULL,
  `data_postim` date NOT NULL,
  `permbajtja` longtext NOT NULL,
  `attachment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `email`, `emri`, `profile_pic`, `data_regjistrim`, `data_postim`, `permbajtja`, `attachment`) VALUES
(1, 'user123@gmail.com', 'SkyLerR12', 'src/assets/images/gallery-group-4', '2021-08-15', '2021-08-22', 'Worth it at this price?\r\nI thoroughly enjoyed RE2 Remake and finished it 100%. The only thing I wanted more out of that game was to see more of Raccoon City itself. Now, from what I hear, this game shows even more of the city. But I also hear it\'s not on the same level of quality as the other game...', 'src/assets/images/resident-evil.jpg'),
(2, 'adriangaming@hotmail.com', 'adDriAnN', 'src/assets/images/gallery-9-thumb', '2021-08-01', '2021-08-28', 'The Biggest Half-Life 2 Event 14 August!!!\r\nOn August 14th I would ask all people to play half life 2 to break the record of most people in the game which is 6882 I think we can beat it. For new players I think it is the best opportunity to try the game. Together we succeed!\r\nDoes not include Garry\'s Mod, Half Life 2 Update, Half Life 2 MMod, Cinematic Mod, Half-Life 2 Deathmatch. these will not play, play only the vanilla game! if you want to participate.', 'src/assets/images/half-life.jpg');

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
-- Table structure for table `komenti`
--

DROP TABLE IF EXISTS `komenti`;
CREATE TABLE IF NOT EXISTS `komenti` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `perdoruesi_id` int(11) NOT NULL,
  `data` date NOT NULL,
  `permbajtja` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
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
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roli_id` (`roli_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perdoruesi`
--

INSERT INTO `perdoruesi` (`id`, `roli_id`, `email`, `emri`, `mbiemri`, `password`) VALUES
(1, 1, 'ardamazreku99@gmail.com', 'Arda', 'Mazreku', 'Arda123!');

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
