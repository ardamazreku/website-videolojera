-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 15, 2021 at 07:00 PM
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
  `id` int(11) NOT NULL,
  `roli` int(11) NOT NULL,
  `titulli` varchar(50) NOT NULL,
  `autori` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `permbajtja` longtext NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roli` (`roli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `emri` varchar(30) NOT NULL,
  `data_regjistrim` date NOT NULL,
  `data_postim` date NOT NULL,
  `permbajtja` longtext NOT NULL,
  `attachment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lajmet`
--

INSERT INTO `lajmet` (`id`, `roli`, `titulli`, `autori`, `data`, `permbajtja`, `foto`, `kategoria`) VALUES
(1, 1, 'BLACK OPS COLD WAR', 'Arda Mazreku', '2021-08-01', 'As the Zombie Outbreak grows, only the most fearless Operators will answer the call.\r\nA mountain of new Zombies content is coming to #BlackOpsColdWar this week. Get ready to climb!', 'src/assets/images/slide-1.jpg', 'FPS'),
(2, 1, 'Assasin\'s Creed VALHALLA ', 'Arda Mazreku', '2021-08-03', 'The wait is over! 0 days left until kings and rats and castles alike. The Siege of Paris launched on August 12th! ', 'src/assets/images/slide-2.jpg', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `roli`
--

DROP TABLE IF EXISTS `roli`;
CREATE TABLE IF NOT EXISTS `roli` (
  `id` int(11) NOT NULL,
  `roli` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
