-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2019 at 07:54 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cause`
--

DROP TABLE IF EXISTS `cause`;
CREATE TABLE IF NOT EXISTS `cause` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de la cause',
  `Cause` text NOT NULL COMMENT 'contenu de la cause',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `IDLIVRABLE` int(11) NOT NULL AUTO_INCREMENT,
  `IDENCADRANT` bigint(20) UNSIGNED NOT NULL,
  `FICHIER` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `IDLIVRABLE` (`IDLIVRABLE`),
  KEY `IDLIVRABLE_2` (`IDLIVRABLE`),
  KEY `IDENCADRANT` (`IDENCADRANT`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`IDLIVRABLE`, `IDENCADRANT`, `FICHIER`, `created_at`, `updated_at`) VALUES
(5, 2, 'uploads/download.jpg', '2019-04-10 21:41:30', '2019-04-10 21:41:30'),
(5, 10, 'uploads/512x512bb.jpg', '2019-04-10 21:41:54', '2019-04-10 21:41:54'),
(6, 2, 'uploads/main.png', '2019-04-11 13:45:39', '2019-04-11 13:45:39'),
(6, 10, 'uploads/cute-chick-adorable-character-vector-illustration-design-PRYGGY.jpg', '2019-04-11 13:48:55', '2019-04-11 13:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `ID` bigint(20) UNSIGNED NOT NULL COMMENT 'identifiant du prof',
  `URLimg` varchar(255) DEFAULT 'sticker,375x360-bg,ffffff.u5.png',
  `DESCRIPTION` text,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enseignant`
--

INSERT INTO `enseignant` (`ID`, `URLimg`, `DESCRIPTION`) VALUES
(2, '1.PNG', 'hahaha'),
(4, 'sticker,375x360-bg,ffffff.u5.png', NULL),
(10, 'sticker,375x360-bg,ffffff.u5.png', NULL),
(12, 'sticker,375x360-bg,ffffff.u5.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `ID` bigint(20) UNSIGNED NOT NULL COMMENT 'identifiant de l''etudiant',
  `ANNEEetude` varchar(255) NOT NULL,
  `PIF` tinyint(1) DEFAULT NULL COMMENT 'est ce que l''etudiant a un pif ou pas',
  `URLimg` varchar(255) DEFAULT 'sticker,375x360-bg,ffffff.u5.png',
  `DESCRIPTION` text,
  UNIQUE KEY `ID1_2` (`ID`),
  KEY `ID1` (`ID`),
  KEY `ID1_3` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`ID`, `ANNEEetude`, `PIF`, `URLimg`, `DESCRIPTION`) VALUES
(1, 'SIQ', 0, 'cute-chick-adorable-character-vector-illustration-design-PRYGGY.jpg', 'blablablabla'),
(4, 'siQ', 1, 'sticker,375x360-bg,ffffff.u5.png', 'hhhhhhhhhhhhhhhhhhhh'),
(11, '2cp', NULL, 'sticker,375x360-bg,ffffff.u5.png', NULL),
(13, 'SIQ', NULL, 'sticker,375x360-bg,ffffff.u5.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `listeencadrant`
--

DROP TABLE IF EXISTS `listeencadrant`;
CREATE TABLE IF NOT EXISTS `listeencadrant` (
  `IDPROJET` int(11) NOT NULL,
  `NBencadrant` int(11) NOT NULL,
  `IDENCADRANT1` bigint(20) UNSIGNED NOT NULL,
  `IDENCADRANT2` bigint(20) UNSIGNED DEFAULT NULL,
  `IDENCADRANT3` bigint(20) UNSIGNED DEFAULT NULL,
  `IDENCADRANT4` bigint(20) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`IDPROJET`),
  UNIQUE KEY `IDPROJET` (`IDPROJET`),
  KEY `IDPROJET_2` (`IDPROJET`,`IDENCADRANT1`,`IDENCADRANT2`,`IDENCADRANT3`,`IDENCADRANT4`),
  KEY `IDENCADRANT1` (`IDENCADRANT1`),
  KEY `IDENCADRANT2` (`IDENCADRANT2`),
  KEY `IDENCADRANT4` (`IDENCADRANT4`),
  KEY `IDENCADRANT3` (`IDENCADRANT3`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listeencadrant`
--

INSERT INTO `listeencadrant` (`IDPROJET`, `NBencadrant`, `IDENCADRANT1`, `IDENCADRANT2`, `IDENCADRANT3`, `IDENCADRANT4`) VALUES
(5, 3, 2, 2, 10, NULL),
(6, 3, 2, 2, 10, NULL),
(7, 3, 2, 2, 10, NULL),
(8, 3, 2, 2, 10, NULL),
(9, 3, 2, 2, 10, NULL),
(10, 3, 2, 2, 10, NULL),
(12, 3, 2, 10, NULL, 2),
(13, 3, 2, 10, NULL, 2),
(14, 3, 2, 10, NULL, 2),
(15, 3, 2, 10, NULL, 2),
(16, 3, 2, 10, NULL, 2),
(17, 3, 2, 10, NULL, 2),
(18, 3, 2, 10, NULL, 2),
(19, 3, 2, 10, NULL, 2),
(20, 3, 2, 10, NULL, 2),
(21, 3, 2, 10, NULL, 2),
(22, 3, 2, 10, NULL, 2),
(23, 3, 2, 10, NULL, 2),
(24, 3, 2, 10, NULL, 2),
(25, 3, 2, 10, NULL, 2),
(26, 3, 2, 10, NULL, 2),
(27, 3, 2, 10, NULL, 2),
(28, 3, 2, 10, NULL, 2),
(29, 3, 2, 10, NULL, 2),
(30, 3, 2, 10, NULL, 2),
(31, 3, 2, 10, NULL, 2),
(32, 3, 2, 10, NULL, 2),
(33, 3, 2, 10, NULL, 2),
(34, 3, 2, 10, NULL, 2),
(35, 3, 2, 10, NULL, 2),
(36, 3, 2, 10, NULL, 2),
(37, 3, 2, 10, NULL, 2),
(38, 3, 2, 10, NULL, 2),
(39, 3, 2, 10, 2, NULL),
(40, 2, 2, 2, NULL, NULL),
(41, 2, 2, 2, NULL, NULL),
(42, 2, 2, 2, NULL, NULL),
(43, 3, 2, 12, 10, NULL),
(44, 3, 2, 12, 10, NULL),
(45, 3, 2, 12, 10, NULL),
(46, 3, 2, 12, 10, NULL),
(47, 3, 2, 12, 10, NULL),
(48, 3, 2, 12, 10, NULL),
(49, 2, 2, 10, NULL, NULL),
(50, 2, 2, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `livrable`
--

DROP TABLE IF EXISTS `livrable`;
CREATE TABLE IF NOT EXISTS `livrable` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant du livrable',
  `TITRE` varchar(255) NOT NULL,
  `CORRIGE` tinyint(1) NOT NULL DEFAULT '0',
  `FICHIER` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livrable`
--

INSERT INTO `livrable` (`ID`, `TITRE`, `CORRIGE`, `FICHIER`, `created_at`, `updated_at`) VALUES
(1, 'ifferoudjen1.pdf', 0, 'public/1eo8KXDjld1LwFNjJZ24a7kg6WeRNCuaQJBhKTBX.pdf', NULL, NULL),
(2, 'ifferoudjen1.pdf', 0, 'uploads/ifferoudjen1.pdf', NULL, NULL),
(3, 'main.png', 0, 'uploads/main.png', NULL, NULL),
(4, 'main.png', 0, 'uploads/main.png', NULL, NULL),
(5, 'Systèmes optiques_partie 1_2019.pdf', 0, 'uploads/Systèmes optiques_partie 1_2019.pdf', NULL, NULL),
(6, 'slides3.pdf', 0, 'uploads/slides3.pdf', '2019-03-30 18:51:50', '2019-03-30 18:51:50'),
(7, 'main.png', 0, 'uploads/main.png', '2019-04-12 16:12:37', '2019-04-12 16:12:37'),
(8, 'sticker-chick-cute-kawaii-258815845019212.htm', 0, 'uploads/sticker-chick-cute-kawaii-258815845019212.htm', '2019-04-12 16:13:40', '2019-04-12 16:13:40'),
(9, 'cute-chick-adorable-character-vector-illustration-design-PRYGGY.jpg', 0, 'uploads/cute-chick-adorable-character-vector-illustration-design-PRYGGY.jpg', '2019-04-13 07:20:58', '2019-04-13 07:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_03_24_105200_add_username_to_users', 2),
(9, '2014_10_12_000000_create_users_table', 3),
(10, '2014_10_12_100000_create_password_resets_table', 3),
(11, '2019_03_24_105729_add_surname_to_users', 3),
(12, '2019_03_25_123652_add_prof_to_users', 3),
(15, '2019_03_04_175356_create_events_table', 4),
(16, '2019_03_01_193924_ajouter_colonne_created_at', 5),
(17, '2019_03_01_211132_ajouter_colonne_created_at_cmt', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `IDUSER` bigint(20) UNSIGNED NOT NULL,
  `IDCause` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `TYPE` varchar(255) NOT NULL,
  KEY `IDUSER` (`IDUSER`),
  KEY `IDCause` (`IDCause`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phase`
--

DROP TABLE IF EXISTS `phase`;
CREATE TABLE IF NOT EXISTS `phase` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de la phase',
  `IDPROJET` int(11) NOT NULL,
  `TITRE` varchar(255) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `TERMINE` tinyint(1) NOT NULL DEFAULT '0',
  `IDLIVRABLE` int(11) DEFAULT NULL,
  `DESCRIPTION` text NOT NULL,
  `AVANCEMENT` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`),
  KEY `IDLIVRABLE` (`IDLIVRABLE`),
  KEY `IDPROJET1` (`IDPROJET`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phase`
--

INSERT INTO `phase` (`ID`, `IDPROJET`, `TITRE`, `DateDebut`, `DateFin`, `TERMINE`, `IDLIVRABLE`, `DESCRIPTION`, `AVANCEMENT`) VALUES
(1, 1, 'qlqchose', '2019-03-02', '2019-03-10', 0, 3, 'idk', NULL),
(2, 40, 'hhhhhh', '2019-04-08', '2019-04-24', 1, 8, 'nnnnnnnnn', NULL),
(3, 38, 'nnnn', '2019-04-10', '2019-04-03', 1, 9, 'nnnnnnnnnn', NULL),
(4, 38, 'hihihi', '2019-04-02', '2019-04-02', 0, 6, 'dddddddd', 50),
(5, 40, '111', '2019-04-02', '2019-04-24', 0, NULL, '333', NULL),
(6, 40, '777', '2019-04-11', '2019-04-18', 0, NULL, '666', NULL),
(7, 48, '4444444', '2019-04-04', '2019-04-02', 0, NULL, 'nnnnnnnnnnnn', NULL),
(8, 48, '4444444', '2019-04-04', '2019-04-02', 0, NULL, 'nnnnnnnnnnnn', NULL),
(9, 49, 'nnnn', '2019-04-02', '2019-04-25', 0, NULL, 'lllllllllll', NULL),
(10, 50, 'hahaha', '2019-04-05', '2019-04-26', 0, NULL, 'nnnnnnnnnnn', NULL),
(11, 50, 'mmmmmmm', '2019-04-04', '2019-04-25', 0, NULL, 'hhh', NULL),
(12, 50, 'hahaha', '2019-04-02', '2019-04-26', 0, NULL, 'kkkk', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `presence`
--

DROP TABLE IF EXISTS `presence`;
CREATE TABLE IF NOT EXISTS `presence` (
  `IDReunion` int(11) UNSIGNED NOT NULL,
  `NBPresent` int(11) NOT NULL,
  `IDPresent1` bigint(20) UNSIGNED DEFAULT NULL,
  `IDPresent2` bigint(20) UNSIGNED DEFAULT NULL,
  `IDPresent3` bigint(20) UNSIGNED DEFAULT NULL,
  `IDPresent4` bigint(20) UNSIGNED DEFAULT NULL,
  `IDPresent5` bigint(20) UNSIGNED DEFAULT NULL,
  `IDPresent6` bigint(20) UNSIGNED DEFAULT NULL,
  KEY `IDReunion` (`IDReunion`,`IDPresent1`,`IDPresent2`,`IDPresent3`,`IDPresent4`,`IDPresent5`,`IDPresent6`),
  KEY `IDPresent1` (`IDPresent1`),
  KEY `IDPresent2` (`IDPresent2`),
  KEY `IDPresent3` (`IDPresent3`),
  KEY `IDPresent4` (`IDPresent4`),
  KEY `IDPresent6` (`IDPresent6`),
  KEY `IDPresent5` (`IDPresent5`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant du projet',
  `TITRE` varchar(255) NOT NULL,
  `TYPE` enum('PFE','MASTER') NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `AVANCEMENT` double DEFAULT NULL,
  `DESCRIPTIONprjt` text NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `projet`
--

INSERT INTO `projet` (`ID`, `TITRE`, `TYPE`, `DateDebut`, `DateFin`, `AVANCEMENT`, `DESCRIPTIONprjt`) VALUES
(1, 'projet6', 'PFE', '2019-03-13', '2019-03-21', 33, 'whattheeff'),
(2, 'projet5', 'PFE', '2019-03-05', '2019-03-21', NULL, 'hahaha'),
(3, 'projet5', 'PFE', '2019-03-05', '2019-03-21', NULL, 'hahaha'),
(4, 'projet5', 'PFE', '2019-03-05', '2019-03-21', NULL, 'hahaha'),
(5, 'projet5', 'PFE', '2019-03-05', '2019-03-21', NULL, 'hahaha'),
(6, 'projet5', 'PFE', '2019-03-05', '2019-03-21', NULL, 'hahaha'),
(7, 'projet5', 'PFE', '2019-03-05', '2019-03-21', NULL, 'hahaha'),
(8, 'projet5', 'PFE', '2019-03-05', '2019-03-21', NULL, 'hahaha'),
(9, 'projet5', 'PFE', '2019-03-05', '2019-03-21', NULL, 'hahaha'),
(10, 'projet5', 'PFE', '2019-03-05', '2019-03-21', NULL, 'hahaha'),
(12, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(13, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(14, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(15, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(16, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(17, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(18, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(19, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(20, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(21, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(22, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(23, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(24, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(25, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(26, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(27, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(28, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(29, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(30, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(31, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(32, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(33, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(34, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(35, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(36, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(37, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(38, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(39, 'projet7', 'MASTER', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(40, 'projet10', 'PFE', '2019-03-06', '2019-03-27', NULL, 'hahaha'),
(41, 'projet2cpp', 'PFE', '2019-04-06', '2019-04-20', NULL, 'nnnnnnnnnnnnnn'),
(42, 'projet2cpp', 'PFE', '2019-04-06', '2019-04-20', NULL, 'nnnnnnnnnnnnnn'),
(43, 'mmmmmmm', 'MASTER', '2019-04-16', '2019-04-27', NULL, 'hhhhhhhhhhhhhhhhhhhhh'),
(44, 'mmmmmmm', 'MASTER', '2019-04-16', '2019-04-27', NULL, 'hhhhhhhhhhhhhhhhhhhhh'),
(45, 'mmmmmmm', 'MASTER', '2019-04-16', '2019-04-27', NULL, 'hhhhhhhhhhhhhhhhhhhhh'),
(46, 'mmmmmmm', 'MASTER', '2019-04-16', '2019-04-27', NULL, 'hhhhhhhhhhhhhhhhhhhhh'),
(47, 'mmmmmmm', 'MASTER', '2019-04-16', '2019-04-27', NULL, 'hhhhhhhhhhhhhhhhhhhhh'),
(48, 'mmmmmmm', 'MASTER', '2019-04-16', '2019-04-27', NULL, 'hhhhhhhhhhhhhhhhhhhhh'),
(49, 'hiiiiiiioooooooooooo', 'MASTER', '2019-04-19', '2019-04-06', NULL, 'hhhhhhhhhhhh'),
(50, 'hiiiiiiioooooooooooo', 'MASTER', '2019-04-19', '2019-04-06', NULL, 'hhhhhhhhhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `projetetudiant`
--

DROP TABLE IF EXISTS `projetetudiant`;
CREATE TABLE IF NOT EXISTS `projetetudiant` (
  `IDETUDIANT` bigint(20) UNSIGNED NOT NULL,
  `IDPROJET1` int(11) NOT NULL,
  `IDPROJET2` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDETUDIANT`),
  UNIQUE KEY `IDETUDIANT` (`IDETUDIANT`),
  KEY `IDPROJET1` (`IDPROJET1`,`IDPROJET2`),
  KEY `IDPROJET2` (`IDPROJET2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projetetudiant`
--

INSERT INTO `projetetudiant` (`IDETUDIANT`, `IDPROJET1`, `IDPROJET2`) VALUES
(11, 38, 40),
(1, 38, 41),
(4, 45, 46);

-- --------------------------------------------------------

--
-- Table structure for table `reunion`
--

DROP TABLE IF EXISTS `reunion`;
CREATE TABLE IF NOT EXISTS `reunion` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `IDPHASE` int(11) NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PV` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `TERMINEE` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDPHASE` (`IDPHASE`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reunion`
--

INSERT INTO `reunion` (`id`, `IDPHASE`, `titre`, `PV`, `lieu`, `date`, `TERMINEE`, `created_at`, `updated_at`) VALUES
(1, 1, 'nnnnnnnnn', 'uploads/differentiabilité.pdf', 'taher', '2019-03-04', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prof` tinyint(1) NOT NULL COMMENT 'Boolean',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `prof`, `name`, `surname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'sarah', 'belaoura', 'tttt@gmail.com', NULL, ';lskalndklnlzjdm', NULL, NULL, NULL),
(2, 1, 'kaka', 'koko', 'yuuta@gmail.com', NULL, 'k,lkjdjhzejhdze', NULL, NULL, NULL),
(4, 0, 'nani', 'nanak', 'hih@gmail.com', NULL, 'nnnnnnnnnn', NULL, NULL, NULL),
(10, 1, 'kh', 'sar', 'hs@esi.dz', NULL, '$2y$10$IZ.DfHPekHxzQGxRsWQ7X.OvJIfHBbsbW1QeSlUHqdJ.EchwZZUaq', NULL, '2019-03-29 19:22:01', '2019-03-29 19:22:01'),
(11, 0, 'sisi', 'mimi', 'hm@esi.dz', NULL, '$2y$10$ZsaxmbQdfbSitV3zmQyXCuM3xAppxJAjQVqzPSONjiWNFwBSDjaa.', NULL, '2019-03-29 19:23:08', '2019-03-29 19:23:08'),
(12, 1, 'qsdf', 'fghj', 'eee@esi.dz', NULL, '$2y$10$2GA5.cWR8kWwq9fUYSlFZeIsA7/XvSpwNIbjT7O9f0sHHqjQYjn/W', 'ZaEIMM8C1BwRzfWB2umC71XmQTfkbJWe1xkcHLE3YBhog0z89t5KLPC6sj8V', '2019-04-14 15:28:24', '2019-04-14 15:28:24'),
(13, 0, 'uuuuu', 'mmmmmmm', 'jj@gmail.com', NULL, '$2y$10$C5zQpFkjAnorA./sQqNsVu1w3tHh4nlMAEVupadkqUmMt6X8GCmNe', NULL, '2019-04-14 16:19:01', '2019-04-14 16:19:01');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`IDLIVRABLE`) REFERENCES `livrable` (`ID`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`IDENCADRANT`) REFERENCES `enseignant` (`ID`);

--
-- Constraints for table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`id`);

--
-- Constraints for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`id`);

--
-- Constraints for table `listeencadrant`
--
ALTER TABLE `listeencadrant`
  ADD CONSTRAINT `listeencadrant_ibfk_1` FOREIGN KEY (`IDPROJET`) REFERENCES `projet` (`ID`),
  ADD CONSTRAINT `listeencadrant_ibfk_2` FOREIGN KEY (`IDENCADRANT1`) REFERENCES `enseignant` (`ID`),
  ADD CONSTRAINT `listeencadrant_ibfk_3` FOREIGN KEY (`IDENCADRANT2`) REFERENCES `enseignant` (`ID`),
  ADD CONSTRAINT `listeencadrant_ibfk_4` FOREIGN KEY (`IDENCADRANT3`) REFERENCES `enseignant` (`ID`),
  ADD CONSTRAINT `listeencadrant_ibfk_5` FOREIGN KEY (`IDENCADRANT4`) REFERENCES `enseignant` (`ID`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`IDUSER`) REFERENCES `users` (`id`);

--
-- Constraints for table `phase`
--
ALTER TABLE `phase`
  ADD CONSTRAINT `phase_ibfk_1` FOREIGN KEY (`IDPROJET`) REFERENCES `projet` (`ID`),
  ADD CONSTRAINT `phase_ibfk_2` FOREIGN KEY (`IDLIVRABLE`) REFERENCES `livrable` (`ID`);

--
-- Constraints for table `presence`
--
ALTER TABLE `presence`
  ADD CONSTRAINT `presence_ibfk_10` FOREIGN KEY (`IDPresent1`) REFERENCES `enseignant` (`ID`),
  ADD CONSTRAINT `presence_ibfk_11` FOREIGN KEY (`IDPresent2`) REFERENCES `enseignant` (`ID`),
  ADD CONSTRAINT `presence_ibfk_12` FOREIGN KEY (`IDPresent3`) REFERENCES `enseignant` (`ID`),
  ADD CONSTRAINT `presence_ibfk_13` FOREIGN KEY (`IDPresent4`) REFERENCES `enseignant` (`ID`),
  ADD CONSTRAINT `presence_ibfk_7` FOREIGN KEY (`IDReunion`) REFERENCES `reunion` (`id`),
  ADD CONSTRAINT `presence_ibfk_8` FOREIGN KEY (`IDPresent5`) REFERENCES `etudiant` (`ID`),
  ADD CONSTRAINT `presence_ibfk_9` FOREIGN KEY (`IDPresent6`) REFERENCES `etudiant` (`ID`);

--
-- Constraints for table `projetetudiant`
--
ALTER TABLE `projetetudiant`
  ADD CONSTRAINT `projetetudiant_ibfk_1` FOREIGN KEY (`IDETUDIANT`) REFERENCES `etudiant` (`ID`),
  ADD CONSTRAINT `projetetudiant_ibfk_2` FOREIGN KEY (`IDPROJET1`) REFERENCES `projet` (`ID`),
  ADD CONSTRAINT `projetetudiant_ibfk_3` FOREIGN KEY (`IDPROJET2`) REFERENCES `projet` (`ID`);

--
-- Constraints for table `reunion`
--
ALTER TABLE `reunion`
  ADD CONSTRAINT `reunion_ibfk_1` FOREIGN KEY (`IDPHASE`) REFERENCES `phase` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
