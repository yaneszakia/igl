-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 24 Avril 2019 à 21:18
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projectdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `cause`
--

CREATE TABLE `cause` (
  `ID` int(11) NOT NULL COMMENT 'identifiant de la cause',
  `Cause` text NOT NULL COMMENT 'contenu de la cause'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `IDLIVRABLE` int(11) NOT NULL,
  `IDENCADRANT` bigint(20) UNSIGNED NOT NULL,
  `FICHIER` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`IDLIVRABLE`, `IDENCADRANT`, `FICHIER`, `created_at`, `updated_at`) VALUES
(5, 2, 'uploads/download.jpg', '2019-04-10 21:41:30', '2019-04-10 21:41:30'),
(5, 10, 'uploads/512x512bb.jpg', '2019-04-10 21:41:54', '2019-04-10 21:41:54'),
(6, 2, 'uploads/main.png', '2019-04-11 13:45:39', '2019-04-11 13:45:39'),
(6, 10, 'uploads/cute-chick-adorable-character-vector-illustration-design-PRYGGY.jpg', '2019-04-11 13:48:55', '2019-04-11 13:48:55'),
(6, 20, 'uploads/COURS OPTIQUE GEOMETRIQUE_2018_DIOPTRES PLANS_ ASSOCIATION_FIBRE _etudfiants.pdf', '2019-04-18 06:51:07', '2019-04-18 06:51:07'),
(1, 20, 'uploads/projectdb (3).sql', '2019-04-18 08:42:20', '2019-04-18 08:42:20'),
(15, 30, 'uploads/Koala.jpg', '2019-04-23 15:43:32', '2019-04-23 15:43:32'),
(15, 30, 'uploads/Koala.jpg', '2019-04-23 16:31:15', '2019-04-23 16:31:15'),
(15, 30, 'uploads/Koala.jpg', '2019-04-23 16:32:21', '2019-04-23 16:32:21'),
(15, 30, 'uploads/Koala.jpg', '2019-04-23 16:35:47', '2019-04-23 16:35:47'),
(15, 30, 'uploads/Koala.jpg', '2019-04-23 16:36:26', '2019-04-23 16:36:26'),
(15, 30, 'uploads/Koala.jpg', '2019-04-23 16:37:04', '2019-04-23 16:37:04'),
(16, 30, 'uploads/Tulips.jpg', '2019-04-23 17:00:33', '2019-04-23 17:00:33');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `ID` bigint(20) UNSIGNED NOT NULL COMMENT 'identifiant du prof',
  `URLimg` varchar(255) DEFAULT 'defaultprof.png',
  `DESCRIPTION` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `enseignant`
--

INSERT INTO `enseignant` (`ID`, `URLimg`, `DESCRIPTION`) VALUES
(2, '1.PNG', 'hahaha'),
(4, 'sticker,375x360-bg,ffffff.u5.png', NULL),
(10, 'sticker,375x360-bg,ffffff.u5.png', NULL),
(12, 'sticker,375x360-bg,ffffff.u5.png', NULL),
(14, 'sticker,375x360-bg,ffffff.u5.png', NULL),
(15, 'sticker,375x360-bg,ffffff.u5.png', NULL),
(16, 'sticker,375x360-bg,ffffff.u5.png', NULL),
(17, 'sticker,375x360-bg,ffffff.u5.png', NULL),
(20, 'png-cute-sticker.png', 'bbbbb'),
(22, 'defaultprof.png', NULL),
(24, 'defaultprof.png', NULL),
(25, 'defaultprof.png', NULL),
(26, 'defaultprof.png', NULL),
(27, 'Tulips.jpg', NULL),
(30, 'Lighthouse.jpg', NULL),
(33, 'defaultprof.png', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `ID` bigint(20) UNSIGNED NOT NULL COMMENT 'identifiant de l''etudiant',
  `ANNEEetude` varchar(255) NOT NULL,
  `PIF` tinyint(1) DEFAULT NULL COMMENT 'est ce que l''etudiant a un pif ou pas',
  `URLimg` varchar(255) DEFAULT 'defaultetd.png',
  `DESCRIPTION` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`ID`, `ANNEEetude`, `PIF`, `URLimg`, `DESCRIPTION`) VALUES
(1, 'SIQ', 0, 'cute-chick-adorable-character-vector-illustration-design-PRYGGY.jpg', 'blablablabla'),
(4, 'siQ', 1, 'sticker,375x360-bg,ffffff.u5.png', 'hhhhhhhhhhhhhhhhhhhh'),
(11, '2cp', NULL, 'sticker,375x360-bg,ffffff.u5.png', NULL),
(13, 'SIQ', NULL, 'sticker,375x360-bg,ffffff.u5.png', NULL),
(19, '2cp', NULL, 'sticker,375x360-bg,ffffff.u5.png', NULL),
(21, 'SIQ', 0, 'download.jpg', 'hhhhhhh'),
(23, 'SIT', NULL, 'defaultetd.png', NULL),
(28, 'SIT', NULL, 'Koala.jpg', NULL),
(29, 'SIQ', NULL, 'defaultetd.png', NULL),
(31, 'SIT', NULL, 'defaultetd.png', NULL),
(32, 'SIQ', NULL, 'defaultetd.png', NULL),
(34, 'SIL', NULL, 'Chrysanthemum.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `listeencadrant`
--

CREATE TABLE `listeencadrant` (
  `IDPROJET` int(11) NOT NULL,
  `NBencadrant` int(11) NOT NULL,
  `IDENCADRANT1` bigint(20) UNSIGNED NOT NULL,
  `IDENCADRANT2` bigint(20) UNSIGNED DEFAULT NULL,
  `IDENCADRANT3` bigint(20) UNSIGNED DEFAULT NULL,
  `IDENCADRANT4` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `listeencadrant`
--

INSERT INTO `listeencadrant` (`IDPROJET`, `NBencadrant`, `IDENCADRANT1`, `IDENCADRANT2`, `IDENCADRANT3`, `IDENCADRANT4`) VALUES
(1, 1, 17, NULL, NULL, NULL),
(54, 2, 2, 12, NULL, NULL),
(56, 2, 2, 2, NULL, NULL),
(60, 2, 20, 2, NULL, NULL),
(62, 2, 22, 2, NULL, NULL),
(63, 3, 27, 14, 15, NULL),
(64, 3, 27, 26, 25, NULL),
(65, 3, 27, 26, 25, NULL),
(67, 3, 27, 25, 26, NULL),
(68, 3, 27, 26, 25, NULL),
(69, 3, 27, 25, 26, NULL),
(70, 3, 27, 25, 26, NULL),
(71, 3, 27, 26, 25, NULL),
(72, 3, 27, 26, 25, NULL),
(73, 3, 27, 26, 25, NULL),
(74, 3, 27, 26, 25, NULL),
(75, 4, 27, 26, 25, 20),
(76, 3, 27, 25, 26, NULL),
(77, 4, 26, 27, 24, 25),
(78, 4, 26, 27, 20, 22),
(80, 3, 26, 27, 25, NULL),
(82, 3, 26, 27, 25, NULL),
(84, 3, 26, 27, 25, NULL),
(86, 3, 26, 27, 25, NULL),
(87, 4, 27, 24, 26, 22),
(88, 4, 30, 26, 27, 25),
(89, 4, 30, 26, 25, 27),
(90, 4, 30, 12, 27, 26),
(91, 4, 33, 25, 30, 26),
(92, 3, 33, 30, 26, NULL),
(93, 4, 30, 26, 33, 25),
(94, 3, 30, 26, 20, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `livrable`
--

CREATE TABLE `livrable` (
  `ID` int(11) NOT NULL COMMENT 'identifiant du livrable',
  `TITRE` varchar(255) NOT NULL,
  `CORRIGE` tinyint(1) NOT NULL DEFAULT '0',
  `FICHIER` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `livrable`
--

INSERT INTO `livrable` (`ID`, `TITRE`, `CORRIGE`, `FICHIER`, `created_at`, `updated_at`) VALUES
(1, 'ifferoudjen1.pdf', 1, 'public/1eo8KXDjld1LwFNjJZ24a7kg6WeRNCuaQJBhKTBX.pdf', NULL, NULL),
(4, 'main.png', 0, 'uploads/main.png', NULL, NULL),
(5, 'Systèmes optiques_partie 1_2019.pdf', 0, 'uploads/Systèmes optiques_partie 1_2019.pdf', NULL, NULL),
(6, 'slides3.pdf', 0, 'uploads/slides3.pdf', '2019-03-30 18:51:50', '2019-03-30 18:51:50'),
(8, 'sticker-chick-cute-kawaii-258815845019212.htm', 0, 'uploads/sticker-chick-cute-kawaii-258815845019212.htm', '2019-04-12 16:13:40', '2019-04-12 16:13:40'),
(9, 'cute-chick-adorable-character-vector-illustration-design-PRYGGY.jpg', 0, 'uploads/cute-chick-adorable-character-vector-illustration-design-PRYGGY.jpg', '2019-04-13 07:20:58', '2019-04-13 07:20:58'),
(10, 'Lighthouse.jpg', 0, 'uploads/Lighthouse.jpg', '2019-04-23 15:34:54', '2019-04-23 15:34:54'),
(11, 'Lighthouse.jpg', 0, 'uploads/Lighthouse.jpg', '2019-04-23 15:36:19', '2019-04-23 15:36:19'),
(12, 'Lighthouse.jpg', 0, 'uploads/Lighthouse.jpg', '2019-04-23 15:37:54', '2019-04-23 15:37:54'),
(13, 'Lighthouse.jpg', 0, 'uploads/Lighthouse.jpg', '2019-04-23 15:38:46', '2019-04-23 15:38:46'),
(14, 'Lighthouse.jpg', 0, 'uploads/Lighthouse.jpg', '2019-04-23 15:39:36', '2019-04-23 15:39:36'),
(15, 'Lighthouse.jpg', 1, 'uploads/Lighthouse.jpg', '2019-04-23 15:40:28', '2019-04-23 15:40:28'),
(16, 'Desert.jpg', 1, 'uploads/Desert.jpg', '2019-04-23 16:59:34', '2019-04-23 16:59:34'),
(17, 'Tulips.jpg', 0, 'uploads/Tulips.jpg', '2019-04-23 17:27:07', '2019-04-23 17:27:07');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `migrations`
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
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `IDUSER` bigint(20) UNSIGNED NOT NULL,
  `IDCause` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `TYPE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('bea6eb0d-e8c4-4c50-93cb-cf8f61dbae38', 'App\\Notifications\\nevprojetprof', 30, 'App\\User', '{\"prof_id\":33,\"prof_name\":\"nihal\",\"prof_surname\":\"nihal\",\"titre\":\"pour\",\"idprojet\":\"92\"}', '2019-04-23 17:17:45', '2019-04-23 14:36:22', '2019-04-23 17:17:45'),
('f7d0eb49-742c-4127-90a6-dc64aede50c2', 'App\\Notifications\\nevprojetprof', 26, 'App\\User', '{\"prof_id\":33,\"prof_name\":\"nihal\",\"prof_surname\":\"nihal\",\"titre\":\"pour\",\"idprojet\":\"92\"}', NULL, '2019-04-23 14:36:23', '2019-04-23 14:36:23'),
('1d254439-852d-41f9-9431-fc45f08db966', 'App\\Notifications\\nevprojet', 21, 'App\\User', '{\"prof_id\":33,\"prof_name\":\"nihal\",\"prof_surname\":\"nihal\",\"titre\":\"pour\",\"idprojet\":\"92\"}', NULL, '2019-04-23 14:36:24', '2019-04-23 14:36:24'),
('27046fb7-6ff6-419b-a452-d86d0cbb24e5', 'App\\Notifications\\annreunion', 30, 'App\\User', '{\"prof_id\":33,\"prof_name\":\"nihal\",\"prof_surname\":\"nihal\",\"titre\":\"rarara\",\"date\":\"2019-04-25\",\"lieu\":\"batna\"}', NULL, '2019-04-23 14:59:06', '2019-04-23 14:59:06'),
('699e9d37-0632-4b44-be06-86107f33a1e0', 'App\\Notifications\\annreunion', 30, 'App\\User', '{\"prof_id\":33,\"prof_name\":\"nihal\",\"prof_surname\":\"nihal\",\"titre\":\"rarara\",\"date\":\"2019-04-25\",\"lieu\":\"batna\"}', NULL, '2019-04-23 15:00:13', '2019-04-23 15:00:13'),
('ebdf592c-2af8-499f-b889-d21c46eb51ee', 'App\\Notifications\\annreunion', 26, 'App\\User', '{\"prof_id\":33,\"prof_name\":\"nihal\",\"prof_surname\":\"nihal\",\"titre\":\"rarara\",\"date\":\"2019-04-25\",\"lieu\":\"batna\"}', NULL, '2019-04-23 15:00:13', '2019-04-23 15:00:13'),
('d001dc10-7364-4d5c-a57b-b7e46da09b80', 'App\\Notifications\\annreunion', 21, 'App\\User', '{\"prof_id\":33,\"prof_name\":\"nihal\",\"prof_surname\":\"nihal\",\"titre\":\"rarara\",\"date\":\"2019-04-25\",\"lieu\":\"batna\"}', NULL, '2019-04-23 15:00:14', '2019-04-23 15:00:14'),
('d6d856c0-9f80-4e8c-b1be-2abfcc5a88f7', 'App\\Notifications\\deposerlivr', 30, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:36:19', '2019-04-23 15:36:19'),
('24d4f12f-ca1e-42ca-9930-5265724aa1a7', 'App\\Notifications\\deposerlivr', 30, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:37:54', '2019-04-23 15:37:54'),
('82ea6d90-f196-4a8e-9885-ae56bc6c67b0', 'App\\Notifications\\deposerlivr', 12, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:37:57', '2019-04-23 15:37:57'),
('e191ea88-f829-4bd4-bde5-cfedf792f48f', 'App\\Notifications\\deposerlivr', 27, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:37:58', '2019-04-23 15:37:58'),
('8772a490-e914-4b40-97ac-4c00da4068ab', 'App\\Notifications\\deposerlivr', 30, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:38:47', '2019-04-23 15:38:47'),
('9f2c76b8-4507-4647-9cd0-6fcb5671f4fe', 'App\\Notifications\\deposerlivr', 12, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:38:48', '2019-04-23 15:38:48'),
('202cea8c-7d80-45f8-9c25-2f0b16d7780a', 'App\\Notifications\\deposerlivr', 27, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:38:48', '2019-04-23 15:38:48'),
('76d60225-442e-4417-b248-b85cd27faa5f', 'App\\Notifications\\deposerlivr', 26, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:38:49', '2019-04-23 15:38:49'),
('db6372e4-b621-4e5f-bc6b-ba7718ba5429', 'App\\Notifications\\deposerlivr', 30, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:39:36', '2019-04-23 15:39:36'),
('812dcc4b-ab4d-4e20-9563-e3714b4bf117', 'App\\Notifications\\deposerlivr', 12, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:39:44', '2019-04-23 15:39:44'),
('57d41a01-7047-42c0-b71e-e6eb708d8ade', 'App\\Notifications\\deposerlivr', 27, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:39:48', '2019-04-23 15:39:48'),
('6992ed40-b06a-4877-956f-56c985710fb2', 'App\\Notifications\\deposerlivr', 30, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', '2019-04-23 15:43:06', '2019-04-23 15:40:28', '2019-04-23 15:43:06'),
('8c2509eb-a87e-4f31-bb16-d3993c4df0f8', 'App\\Notifications\\deposerlivr', 12, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:40:30', '2019-04-23 15:40:30'),
('7eb69180-7bba-4759-ae51-593edd96475a', 'App\\Notifications\\deposerlivr', 27, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:40:31', '2019-04-23 15:40:31'),
('161926c7-6863-464a-bd92-3d7d048741c6', 'App\\Notifications\\deposerlivr', 26, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:40:31', '2019-04-23 15:40:31'),
('c8f74920-a2fc-4db0-887c-3b8320d716a6', 'App\\Notifications\\deposerlivretud', 4, 'App\\User', '{\"etud_id\":32,\"etud_name\":\"jija\",\"etud_surname\":\"joujou\",\"titreproj\":\"tourisme3\",\"titrephase\":\"nana\",\"idprojet\":90}', NULL, '2019-04-23 15:40:32', '2019-04-23 15:40:32'),
('c1691272-fa0b-4607-9a3b-edd0e7093ade', 'App\\Notifications\\deposercomm', 12, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titreproj\":\"tourisme3\",\"idprojet\":\"90\"}', NULL, '2019-04-23 16:36:26', '2019-04-23 16:36:26'),
('79df1ee2-b517-4d83-8b31-aeb67ffa576e', 'App\\Notifications\\deposercomm', 27, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titreproj\":\"tourisme3\",\"idprojet\":\"90\"}', NULL, '2019-04-23 16:36:29', '2019-04-23 16:36:29'),
('52b52a79-52d5-4840-ac8e-294c8f21483d', 'App\\Notifications\\deposercomm', 26, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titreproj\":\"tourisme3\",\"idprojet\":\"90\"}', NULL, '2019-04-23 16:36:31', '2019-04-23 16:36:31'),
('8f7b934c-863d-4c25-9e45-0c4e2998d4c6', 'App\\Notifications\\deposercomm', 12, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titreproj\":\"tourisme3\",\"idprojet\":\"90\"}', NULL, '2019-04-23 16:37:04', '2019-04-23 16:37:04'),
('0cea40d3-1a0c-44b6-a2ac-00cdbbad1b67', 'App\\Notifications\\deposercomm', 27, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titreproj\":\"tourisme3\",\"idprojet\":\"90\"}', NULL, '2019-04-23 16:37:06', '2019-04-23 16:37:06'),
('987d861e-fcd6-4cb9-bc0b-a65c013d54c3', 'App\\Notifications\\deposercomm', 26, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titreproj\":\"tourisme3\",\"idprojet\":\"90\"}', NULL, '2019-04-23 16:37:07', '2019-04-23 16:37:07'),
('f6dfca7e-9d9c-4dcf-8fb6-da3f18764d8c', 'App\\Notifications\\deposercommetud', 4, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titreproj\":\"tourisme3\",\"idprojet\":\"90\"}', NULL, '2019-04-23 16:37:07', '2019-04-23 16:37:07'),
('bc137d23-5e1f-49b4-a921-523daad9b743', 'App\\Notifications\\deposercommetud', 32, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titreproj\":\"tourisme3\",\"idprojet\":\"90\"}', NULL, '2019-04-23 16:37:08', '2019-04-23 16:37:08'),
('9442f55a-8c4b-4504-b5c5-782c8307b353', 'App\\Notifications\\nevprojetprof', 26, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"caramele\",\"idprojet\":\"93\"}', '2019-04-23 17:29:19', '2019-04-23 16:54:00', '2019-04-23 17:29:19'),
('670f37ff-00b6-408a-8c8f-91cf41391d96', 'App\\Notifications\\nevprojetprof', 33, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"caramele\",\"idprojet\":\"93\"}', NULL, '2019-04-23 16:54:03', '2019-04-23 16:54:03'),
('39bf363a-3a66-47fe-bf01-d1f78d061733', 'App\\Notifications\\nevprojetprof', 25, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"caramele\",\"idprojet\":\"93\"}', NULL, '2019-04-23 16:54:04', '2019-04-23 16:54:04'),
('003c30a4-bda5-400e-b7eb-d9977024097a', 'App\\Notifications\\nevprojet', 34, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"caramele\",\"idprojet\":\"93\"}', '2019-04-23 16:59:05', '2019-04-23 16:54:04', '2019-04-23 16:59:05'),
('dc72d832-2ad7-4db3-b034-cbff280aebba', 'App\\Notifications\\deposerlivr', 30, 'App\\User', '{\"etud_id\":34,\"etud_name\":\"souma\",\"etud_surname\":\"souma\",\"titreproj\":\"caramele\",\"titrephase\":\"grande phase\",\"idprojet\":93}', '2019-04-23 17:00:15', '2019-04-23 16:59:35', '2019-04-23 17:00:15'),
('e6774c2c-8ac4-4ee9-9bfe-b521ef2311e3', 'App\\Notifications\\deposerlivr', 26, 'App\\User', '{\"etud_id\":34,\"etud_name\":\"souma\",\"etud_surname\":\"souma\",\"titreproj\":\"caramele\",\"titrephase\":\"grande phase\",\"idprojet\":93}', '2019-04-23 17:28:35', '2019-04-23 16:59:35', '2019-04-23 17:28:35'),
('d6e2cdae-ee0c-4287-a84d-e1860c717ce5', 'App\\Notifications\\deposerlivr', 33, 'App\\User', '{\"etud_id\":34,\"etud_name\":\"souma\",\"etud_surname\":\"souma\",\"titreproj\":\"caramele\",\"titrephase\":\"grande phase\",\"idprojet\":93}', NULL, '2019-04-23 16:59:35', '2019-04-23 16:59:35'),
('d3e809b5-a516-4164-adc9-af6f9dc4346b', 'App\\Notifications\\deposerlivr', 25, 'App\\User', '{\"etud_id\":34,\"etud_name\":\"souma\",\"etud_surname\":\"souma\",\"titreproj\":\"caramele\",\"titrephase\":\"grande phase\",\"idprojet\":93}', NULL, '2019-04-23 16:59:36', '2019-04-23 16:59:36'),
('2c266377-ec15-48fa-95be-7c6842bf7e6d', 'App\\Notifications\\deposercomm', 26, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titreproj\":\"caramele\",\"idprojet\":\"93\"}', NULL, '2019-04-23 17:00:33', '2019-04-23 17:00:33'),
('34dc1ff6-595c-4054-a186-bcfe909117a3', 'App\\Notifications\\deposercomm', 33, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titreproj\":\"caramele\",\"idprojet\":\"93\"}', NULL, '2019-04-23 17:00:34', '2019-04-23 17:00:34'),
('db1a4c67-19c3-4907-935f-aab6bba7c4e3', 'App\\Notifications\\deposercomm', 25, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titreproj\":\"caramele\",\"idprojet\":\"93\"}', NULL, '2019-04-23 17:00:34', '2019-04-23 17:00:34'),
('e597833f-89b6-4ab5-ac83-59a0900f5658', 'App\\Notifications\\deposercommetud', 34, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titreproj\":\"caramele\",\"idprojet\":\"93\"}', '2019-04-23 18:40:54', '2019-04-23 17:00:34', '2019-04-23 18:40:54'),
('fdff3101-62ac-4a54-b5c6-411c477161e7', 'App\\Notifications\\deposerlivr', 30, 'App\\User', '{\"etud_id\":34,\"etud_name\":\"souma\",\"etud_surname\":\"souma\",\"titreproj\":\"caramele\",\"titrephase\":\"petite phase\",\"idprojet\":93}', NULL, '2019-04-23 17:27:07', '2019-04-23 17:27:07'),
('bdbb551b-2680-428c-901c-be4d35afdb2e', 'App\\Notifications\\deposerlivr', 26, 'App\\User', '{\"etud_id\":34,\"etud_name\":\"souma\",\"etud_surname\":\"souma\",\"titreproj\":\"caramele\",\"titrephase\":\"petite phase\",\"idprojet\":93}', '2019-04-23 17:28:05', '2019-04-23 17:27:08', '2019-04-23 17:28:05'),
('9f732987-f0e3-4be3-92f6-b4b5a6272102', 'App\\Notifications\\deposerlivr', 33, 'App\\User', '{\"etud_id\":34,\"etud_name\":\"souma\",\"etud_surname\":\"souma\",\"titreproj\":\"caramele\",\"titrephase\":\"petite phase\",\"idprojet\":93}', NULL, '2019-04-23 17:27:08', '2019-04-23 17:27:08'),
('64dd6ddc-2b4a-4c76-a8b7-e5a61e0cc4df', 'App\\Notifications\\deposerlivr', 25, 'App\\User', '{\"etud_id\":34,\"etud_name\":\"souma\",\"etud_surname\":\"souma\",\"titreproj\":\"caramele\",\"titrephase\":\"petite phase\",\"idprojet\":93}', NULL, '2019-04-23 17:27:09', '2019-04-23 17:27:09'),
('efcb9309-9863-4a8c-ad45-828bdf0d3593', 'App\\Notifications\\nevreunion', 30, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"bonne reunion\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', NULL, '2019-04-23 18:14:05', '2019-04-23 18:14:05'),
('cd5db6ac-92ec-45ba-9f6c-2857dbb28ba3', 'App\\Notifications\\nevreunion', 30, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"bonne ]\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', NULL, '2019-04-23 18:19:29', '2019-04-23 18:19:29'),
('0be93dfd-5d31-466a-80a5-d5b523c21ceb', 'App\\Notifications\\nevreunion', 30, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', NULL, '2019-04-23 18:30:06', '2019-04-23 18:30:06'),
('d8caf4de-697e-40be-a5af-ccfa9b427527', 'App\\Notifications\\nevreunion', 30, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen2\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', NULL, '2019-04-23 18:36:26', '2019-04-23 18:36:26'),
('da7d02a0-8a94-4b0d-a717-f082bcfd2d89', 'App\\Notifications\\nevreunion', 30, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen3\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', NULL, '2019-04-23 18:40:01', '2019-04-23 18:40:01'),
('385f7e72-d7b3-46b3-97e2-d3949aad8fe7', 'App\\Notifications\\nevreunion', 33, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen3\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', NULL, '2019-04-23 18:40:04', '2019-04-23 18:40:04'),
('2906c533-ffd9-4fc3-8c4d-bf0c25658d71', 'App\\Notifications\\nevreunion', 25, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen3\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', NULL, '2019-04-23 18:40:04', '2019-04-23 18:40:04'),
('70621220-f116-455b-827a-4386e9ca9be9', 'App\\Notifications\\nevreunionetud', 34, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen3\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', '2019-04-23 19:00:41', '2019-04-23 18:40:05', '2019-04-23 19:00:41'),
('50cd2dae-6378-41f6-8fbd-c418ee043411', 'App\\Notifications\\annreunion', 30, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen3\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', NULL, '2019-04-23 19:11:45', '2019-04-23 19:11:45'),
('db6a4491-3f12-4971-a6fe-74df1d54049d', 'App\\Notifications\\annreunion', 33, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen3\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', NULL, '2019-04-23 19:11:46', '2019-04-23 19:11:46'),
('29be5288-b0ab-4c94-a9af-ee22705e7dc3', 'App\\Notifications\\annreunion', 25, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen3\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', NULL, '2019-04-23 19:11:46', '2019-04-23 19:11:46'),
('61a0df15-fc41-43ec-97ae-6e1456a1cde1', 'App\\Notifications\\annreunion', 34, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen3\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', '2019-04-23 19:21:59', '2019-04-23 19:11:47', '2019-04-23 19:21:59'),
('7d302a89-1456-4384-a308-b6c1f9b94ef0', 'App\\Notifications\\annreunion', 30, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', NULL, '2019-04-23 19:15:20', '2019-04-23 19:15:20'),
('6270a087-ec0b-490f-9d5e-97c016a7581f', 'App\\Notifications\\annreunion', 33, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', NULL, '2019-04-23 19:15:21', '2019-04-23 19:15:21'),
('35c09bf8-a07e-44d1-b862-a45f49899688', 'App\\Notifications\\annreunion', 25, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', NULL, '2019-04-23 19:15:21', '2019-04-23 19:15:21'),
('aeeba779-0301-4c51-8e57-2cf5a8a0734c', 'App\\Notifications\\annreunion', 34, 'App\\User', '{\"prof_id\":26,\"prof_name\":\"yaya\",\"prof_surname\":\"touri\",\"titre\":\"imen\",\"date\":\"2019-06-10\",\"lieu\":\"batna\"}', '2019-04-23 19:21:46', '2019-04-23 19:15:22', '2019-04-23 19:21:46'),
('b871297a-1005-495b-853e-0318f677f1e5', 'App\\Notifications\\nevreunion', 26, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"3yiiiiiiiiit\",\"date\":\"2019-04-25\",\"lieu\":\"win jat\",\"reun_id\":55}', NULL, '2019-04-23 23:14:41', '2019-04-23 23:14:41'),
('699a8de5-228e-4f2a-920c-145d91ebb512', 'App\\Notifications\\nevreunion', 33, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"3yiiiiiiiiit\",\"date\":\"2019-04-25\",\"lieu\":\"win jat\",\"reun_id\":55}', NULL, '2019-04-23 23:14:41', '2019-04-23 23:14:41'),
('32f9bb2e-31d7-4dd3-8ccf-e93be612916e', 'App\\Notifications\\nevreunion', 25, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"3yiiiiiiiiit\",\"date\":\"2019-04-25\",\"lieu\":\"win jat\",\"reun_id\":55}', NULL, '2019-04-23 23:14:42', '2019-04-23 23:14:42'),
('6de57228-0e44-43f0-93c2-dd6a804ec744', 'App\\Notifications\\nevreunion', 26, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"3yiiiiiiiiit bzf\",\"date\":\"2019-04-26\",\"lieu\":\"win jat\",\"reun_id\":57}', NULL, '2019-04-23 23:15:55', '2019-04-23 23:15:55'),
('88363549-efc2-48c9-91f1-4fc8da6baf83', 'App\\Notifications\\nevreunion', 33, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"3yiiiiiiiiit bzf\",\"date\":\"2019-04-26\",\"lieu\":\"win jat\",\"reun_id\":57}', NULL, '2019-04-23 23:15:56', '2019-04-23 23:15:56'),
('b6db05b5-8d94-4db2-922b-a1ea5b4c6b44', 'App\\Notifications\\nevreunion', 25, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"3yiiiiiiiiit bzf\",\"date\":\"2019-04-26\",\"lieu\":\"win jat\",\"reun_id\":57}', NULL, '2019-04-23 23:15:56', '2019-04-23 23:15:56'),
('805f2ef7-2162-4301-8931-66dc8a684e16', 'App\\Notifications\\nevreunionetud', 34, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"3yiiiiiiiiit bzf\",\"date\":\"2019-04-26\",\"lieu\":\"win jat\",\"reun_id\":57}', NULL, '2019-04-23 23:15:56', '2019-04-23 23:15:56'),
('25b4e533-689f-4ab1-a8f7-599708d71f06', 'App\\Notifications\\nevreunion', 26, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"ma3lich\",\"date\":\"2019-04-27\",\"lieu\":\"hna\",\"reun_id\":58}', NULL, '2019-04-24 00:07:47', '2019-04-24 00:07:47'),
('2ddb78ee-863b-4448-af7a-c8dbc2740b46', 'App\\Notifications\\nevreunion', 33, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"ma3lich\",\"date\":\"2019-04-27\",\"lieu\":\"hna\",\"reun_id\":58}', NULL, '2019-04-24 00:07:47', '2019-04-24 00:07:47'),
('e30b9556-39fe-47be-ad1d-dc2bef1c0027', 'App\\Notifications\\nevreunion', 25, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"ma3lich\",\"date\":\"2019-04-27\",\"lieu\":\"hna\",\"reun_id\":58}', NULL, '2019-04-24 00:07:48', '2019-04-24 00:07:48'),
('29bc7442-5bff-4b22-a76e-31a32f2e9fa7', 'App\\Notifications\\nevreunionetud', 34, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"ma3lich\",\"date\":\"2019-04-27\",\"lieu\":\"hna\",\"reun_id\":58}', '2019-04-24 10:42:50', '2019-04-24 00:07:48', '2019-04-24 10:42:50'),
('70d31ef4-3818-416a-9db6-1fe244faf291', 'App\\Notifications\\nevprojetprof', 26, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"just one\",\"idprojet\":\"94\"}', NULL, '2019-04-24 13:47:59', '2019-04-24 13:47:59'),
('59955d64-c403-4240-8f53-c4f7ed3c3e75', 'App\\Notifications\\nevprojetprof', 20, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"just one\",\"idprojet\":\"94\"}', NULL, '2019-04-24 13:48:05', '2019-04-24 13:48:05'),
('1214e1c2-cc9c-4e2d-ac42-ceef7a80a89f', 'App\\Notifications\\nevprojet', 34, 'App\\User', '{\"prof_id\":30,\"prof_name\":\"amel\",\"prof_surname\":\"amoula\",\"titre\":\"just one\",\"idprojet\":\"94\"}', NULL, '2019-04-24 13:48:06', '2019-04-24 13:48:06'),
('000e65c7-f12a-4869-88d6-0cc27593bb5a', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 13:59:26', '2019-04-24 13:59:26'),
('65e34c05-89de-4fd5-94eb-a145b895b282', 'App\\Notifications\\phaseretard', 26, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 13:59:30', '2019-04-24 13:59:30'),
('c1952917-be9e-4906-a21f-fddfee53fd0b', 'App\\Notifications\\phaseretard', 20, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 13:59:30', '2019-04-24 13:59:30'),
('a7437676-bfff-42f7-8e01-7c1d52dff54b', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:02:52', '2019-04-24 14:02:52'),
('4edd2c93-a753-422b-bf73-5ffd4d4b2a92', 'App\\Notifications\\phaseretard', 26, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:03:04', '2019-04-24 14:03:04'),
('9e700509-3da5-449a-aee5-23be2fbc76fa', 'App\\Notifications\\phaseretard', 20, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:03:04', '2019-04-24 14:03:04'),
('9c38c509-7a75-49aa-8a14-6414c27d22fe', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:03:55', '2019-04-24 14:03:55'),
('07643c8b-6f2c-4f09-8ca2-0d2a0a7977ea', 'App\\Notifications\\phaseretard', 26, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:03:59', '2019-04-24 14:03:59'),
('5643f787-a488-4d85-8108-8f65becb7ba0', 'App\\Notifications\\phaseretard', 20, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:03:59', '2019-04-24 14:03:59'),
('d375e839-a76f-4897-aac0-3bea68d0e03e', 'App\\Notifications\\phaseretardetud', 34, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:04:01', '2019-04-24 14:04:01'),
('9a995e51-0254-4f1b-8087-01f395fdaa53', 'App\\Notifications\\phaseretardetud', 34, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:04:02', '2019-04-24 14:04:02'),
('c23e2fd0-16dd-4763-b55c-e33c07e49e62', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:04:51', '2019-04-24 14:04:51'),
('0702fb55-3c35-4414-be7a-37cc71e56588', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:05:30', '2019-04-24 14:05:30'),
('cf1f825e-60ae-41db-b7fb-18c75a481d90', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:05:46', '2019-04-24 14:05:46'),
('7d5bef7f-1548-435e-ba70-f55ebf740f22', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:06:02', '2019-04-24 14:06:02'),
('8d85a509-e774-4115-92c3-e7f384608d23', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:06:51', '2019-04-24 14:06:51'),
('8386ad30-ee5e-42d8-ac7c-38d411dee86c', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:08:18', '2019-04-24 14:08:18'),
('c7f88aa0-3253-4699-915d-24ddc0ba9f02', 'App\\Notifications\\phaseretard', 26, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:08:19', '2019-04-24 14:08:19'),
('06b69ebc-e7f4-4679-856b-312810cc0237', 'App\\Notifications\\phaseretard', 20, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:08:20', '2019-04-24 14:08:20'),
('96a12012-4f6e-40f6-9ea0-de0e438ed9e3', 'App\\Notifications\\phaseretardetud', 34, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:08:20', '2019-04-24 14:08:20'),
('d89e5f8c-5784-48ea-92f1-4a1db9cc3be9', 'App\\Notifications\\phaseretardetud', 34, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:08:20', '2019-04-24 14:08:20'),
('67f83619-1298-4703-95cf-4167f8ef86c1', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:26:12', '2019-04-24 14:26:12'),
('2eb61844-c2fb-4664-a4a2-3ccdd2d3e0c3', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:27:54', '2019-04-24 14:27:54'),
('3a49b9cd-65fc-4ae7-8519-be9018f0c3b9', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:29:12', '2019-04-24 14:29:12'),
('2aacc42e-d1b6-4af9-ae6e-3d6e3979610d', 'App\\Notifications\\phaseretard', 26, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:29:14', '2019-04-24 14:29:14'),
('1b040770-b9eb-4933-943f-ad895735c275', 'App\\Notifications\\phaseretard', 20, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:29:15', '2019-04-24 14:29:15'),
('ef5e7ac0-457a-48a9-81a4-5b7f1536f5de', 'App\\Notifications\\phaseretardetud', 34, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:29:15', '2019-04-24 14:29:15'),
('8656db9c-e0fa-475a-9585-39ccf3ed0c87', 'App\\Notifications\\phaseretardetud', 34, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:29:15', '2019-04-24 14:29:15'),
('3ed4d3f0-90e3-4a96-8043-589095388020', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:29:47', '2019-04-24 14:29:47'),
('41a0e2d3-9084-4c41-a0a6-d7c18dd03f98', 'App\\Notifications\\phaseretard', 26, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:29:47', '2019-04-24 14:29:47'),
('faddaad2-acbc-4190-86c1-6e914afdf0d3', 'App\\Notifications\\phaseretard', 20, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:29:48', '2019-04-24 14:29:48'),
('030466a9-c4bd-489b-b344-33ecb5e1f2ba', 'App\\Notifications\\phaseretardetud', 34, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:29:48', '2019-04-24 14:29:48'),
('df1bd2f2-5481-49d5-8197-8660075101f0', 'App\\Notifications\\phaseretardetud', 34, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:29:48', '2019-04-24 14:29:48'),
('44a65679-5441-4574-852f-caec9c54638a', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:35:08', '2019-04-24 14:35:08'),
('580ec984-45ef-4d38-a63c-4fbddbfba65e', 'App\\Notifications\\phaseretard', 26, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:35:10', '2019-04-24 14:35:10'),
('3d5f9b70-6fde-475b-80dd-45966222774d', 'App\\Notifications\\phaseretard', 20, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:35:10', '2019-04-24 14:35:10'),
('24141aa4-422e-4a5d-88fb-7381b3deb250', 'App\\Notifications\\phaseretardetud', 34, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:35:11', '2019-04-24 14:35:11'),
('acd0644e-79a9-4b3e-9000-cf32d8ffe617', 'App\\Notifications\\phaseretardetud', 34, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:35:12', '2019-04-24 14:35:12'),
('2e8d3600-c77a-4202-835a-1e40d93043af', 'App\\Notifications\\phaseretard', 30, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:36:00', '2019-04-24 14:36:00'),
('0724d254-2956-44e6-bd93-56e48e5775b8', 'App\\Notifications\\phaseretard', 26, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:36:02', '2019-04-24 14:36:02'),
('093bca7d-44e0-4e05-bae3-9a43997f1072', 'App\\Notifications\\phaseretard', 20, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:36:02', '2019-04-24 14:36:02'),
('dca3a380-4414-4014-849d-b5baeffe08ff', 'App\\Notifications\\phaseretardetud', 34, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', '2019-04-24 14:37:03', '2019-04-24 14:36:04', '2019-04-24 14:37:03'),
('b39f7966-0fa2-4751-a079-eab71c88d522', 'App\\Notifications\\phaseretardetud', 34, 'App\\User', '{\"titreprojet\":\"just one\",\"titrephase\":\"bonne\",\"idprojet\":94}', NULL, '2019-04-24 14:36:04', '2019-04-24 14:36:04');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `phase`
--

CREATE TABLE `phase` (
  `ID` int(11) NOT NULL COMMENT 'identifiant de la phase',
  `IDPROJET` int(11) NOT NULL,
  `TITRE` varchar(255) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `TERMINE` tinyint(1) NOT NULL DEFAULT '0',
  `IDLIVRABLE` int(11) DEFAULT NULL,
  `DESCRIPTION` text NOT NULL,
  `AVANCEMENT` int(11) DEFAULT NULL,
  `notifier` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `phase`
--

INSERT INTO `phase` (`ID`, `IDPROJET`, `TITRE`, `DateDebut`, `DateFin`, `TERMINE`, `IDLIVRABLE`, `DESCRIPTION`, `AVANCEMENT`, `notifier`) VALUES
(1, 1, 'phase1', '2019-04-11', '2019-04-18', 0, NULL, 'phase1', NULL, 0),
(2, 1, 'phase2', '2019-04-02', '2019-04-18', 0, NULL, 'phase2', NULL, 0),
(16, 60, 'hahahahhhh', '2019-04-01', '2019-04-11', 0, 1, 'jjj', NULL, 0),
(17, 62, 'brbr', '2019-04-02', '2019-04-08', 0, NULL, 'nn', NULL, 0),
(18, 63, 'phase 1', '2019-05-01', '2019-05-05', 0, NULL, 'phase importante', NULL, 0),
(20, 64, 'phase 2', '2019-05-16', '2019-05-18', 0, NULL, 'dsvsvgb', NULL, 0),
(21, 89, 'bonne idee', '2019-04-01', '2019-04-17', 0, NULL, 'phase de bla bla', NULL, 0),
(22, 90, 'nana', '2019-05-10', '2019-06-12', 0, 15, 'toooooop', 80, 0),
(23, 92, 'tres trop', '2019-04-25', '2019-04-26', 0, NULL, 'phase de lala la', NULL, 0),
(24, 93, 'grande phase', '2019-04-02', '2019-05-10', 0, 16, 'phase phase phase', 80, 0),
(25, 93, 'petite phase', '2019-04-06', '2019-06-10', 0, 17, 'battata battata', NULL, 0),
(26, 94, 'bonne', '2019-04-20', '2019-04-23', 0, NULL, 'nmptq', NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `presence`
--

CREATE TABLE `presence` (
  `IDReunion` int(11) UNSIGNED NOT NULL,
  `NBPresent` int(11) NOT NULL,
  `IDPresent1` bigint(20) UNSIGNED DEFAULT NULL,
  `IDPresent2` bigint(20) UNSIGNED DEFAULT NULL,
  `IDPresent3` bigint(20) UNSIGNED DEFAULT NULL,
  `IDPresent4` bigint(20) UNSIGNED DEFAULT NULL,
  `IDPresent5` bigint(20) UNSIGNED DEFAULT NULL,
  `IDPresent6` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `presence`
--

INSERT INTO `presence` (`IDReunion`, `NBPresent`, `IDPresent1`, `IDPresent2`, `IDPresent3`, `IDPresent4`, `IDPresent5`, `IDPresent6`) VALUES
(1, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(34, -1, NULL, NULL, NULL, NULL, NULL, 13),
(35, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(39, -1, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 1, 27, NULL, NULL, NULL, NULL, NULL),
(42, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 1, 33, NULL, NULL, NULL, NULL, NULL),
(45, 1, 33, NULL, NULL, NULL, NULL, NULL),
(46, 1, 26, NULL, NULL, NULL, NULL, NULL),
(48, 1, 26, NULL, NULL, NULL, NULL, NULL),
(50, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 1, 26, NULL, NULL, NULL, NULL, NULL),
(53, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 1, 30, NULL, NULL, NULL, NULL, NULL),
(57, 1, 30, NULL, NULL, NULL, NULL, NULL),
(58, 1, 30, NULL, NULL, NULL, 34, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `ID` int(11) NOT NULL COMMENT 'identifiant du projet',
  `TITRE` varchar(255) NOT NULL,
  `TYPE` enum('PFE','MASTER') NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `AVANCEMENT` double DEFAULT NULL,
  `DESCRIPTIONprjt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`ID`, `TITRE`, `TYPE`, `DateDebut`, `DateFin`, `AVANCEMENT`, `DESCRIPTIONprjt`) VALUES
(1, 'projet1', 'PFE', '2019-04-04', '2019-04-27', 0, 'projet1'),
(54, 'projet5', 'MASTER', '2019-04-11', '2019-04-27', NULL, 'rr'),
(56, 'projet6', 'MASTER', '2019-04-11', '2019-04-27', NULL, 'r'),
(57, 'projeettt', 'PFE', '2019-04-03', '2019-04-26', NULL, 'nnnn'),
(59, 'projeettttt', 'PFE', '2019-04-03', '2019-04-26', NULL, 'nn'),
(60, 'rpp', 'PFE', '2019-04-04', '2019-04-26', NULL, 'hh'),
(62, 'hii', 'PFE', '2019-04-04', '2019-04-26', NULL, ',,,'),
(63, 'gestion memoire', 'PFE', '2019-04-16', '2019-06-15', NULL, 'asvc nvcshgcv'),
(64, 'prj', 'MASTER', '2019-04-09', '2019-05-21', NULL, 'jfjshfgeuh'),
(65, 'dfbhjb', 'MASTER', '2019-04-09', '2019-05-21', NULL, 'dsbfjhdgbh'),
(67, 'nnn', 'MASTER', '2019-04-09', '2019-05-21', NULL, 'dvsbsbbbb vgggg'),
(68, 'MMMM', 'MASTER', '2019-04-09', '2019-05-21', NULL, 'SDHBBH SDBADWWAG'),
(69, 'lllll', 'MASTER', '2019-04-09', '2019-05-21', NULL, 'nsagva hsvcgvsc'),
(70, 'lsacbasgs', 'MASTER', '2019-04-09', '2019-05-21', NULL, 'xnf vrfg'),
(71, 'laps', 'MASTER', '2019-04-09', '2019-05-21', NULL, 'nbbasf aadava'),
(72, 'joumana', 'MASTER', '2019-04-09', '2019-05-21', NULL, 'nbddy bdgehe'),
(73, 'mnjb', 'MASTER', '2019-04-09', '2019-05-21', NULL, 'dvgdsg gfrrr'),
(74, 'chouchou', 'MASTER', '2019-04-09', '2019-05-21', NULL, 'bcgdhdn dbdfdhjs'),
(75, 'ncfgc', 'MASTER', '2019-04-09', '2019-05-21', NULL, 'vcxfxfxfx'),
(76, 'hello', 'PFE', '2019-04-05', '2019-10-30', NULL, 'sa dQDVQGDV'),
(77, 'xvsdddddf', 'PFE', '2019-10-05', '2019-10-13', NULL, 'fewfwf'),
(78, 'cvbnnm', 'MASTER', '2019-04-10', '2019-12-13', NULL, 'mnj'),
(80, 'lahdsgrfe', 'MASTER', '2019-04-10', '2019-12-13', NULL, 'csdv bxcx vfsdr'),
(82, 'test', 'PFE', '2019-02-13', '2019-07-05', NULL, 'snbxsvsgs'),
(84, 'kakaka', 'PFE', '2019-02-13', '2019-07-05', NULL, 'xsfdsf ffb 12r55r'),
(86, 'lololololo', 'PFE', '2019-02-13', '2019-07-05', NULL, 'bghyt 14589632'),
(87, 'bac bac bac', 'MASTER', '2019-12-10', '2020-01-01', NULL, 'cnvhfggdbdbcbc bcgd'),
(88, 'tourisme', 'MASTER', '2019-01-12', '2020-04-10', NULL, 'bfgf bcgdhd'),
(89, 'tourisme2', 'PFE', '2019-04-10', '2019-08-12', NULL, 'cbfgdey bfgdhe'),
(90, 'tourisme3', 'MASTER', '2019-12-10', '2020-12-10', NULL, 'tooooop'),
(91, 'gggg', 'PFE', '2019-06-12', '2020-06-12', NULL, 'toooooooooooooooooooooooooop'),
(92, 'pour', 'PFE', '2019-04-17', '2019-04-28', NULL, 'gaj mashs'),
(93, 'caramele', 'PFE', '2019-03-19', '2019-09-17', NULL, 'un projet magnifique'),
(94, 'just one', 'MASTER', '2019-04-20', '2019-04-23', NULL, 'bonjours');

-- --------------------------------------------------------

--
-- Structure de la table `projetetudiant`
--

CREATE TABLE `projetetudiant` (
  `IDETUDIANT` bigint(20) UNSIGNED NOT NULL,
  `IDPROJET1` int(11) NOT NULL,
  `IDPROJET2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `projetetudiant`
--

INSERT INTO `projetetudiant` (`IDETUDIANT`, `IDPROJET1`, `IDPROJET2`) VALUES
(19, 1, 54),
(13, 54, 86),
(1, 56, 60),
(23, 62, 87),
(28, 63, 75),
(29, 76, 80),
(4, 77, 90),
(21, 87, 92),
(31, 88, 89),
(11, 89, NULL),
(32, 90, 91),
(34, 93, 94);

-- --------------------------------------------------------

--
-- Structure de la table `reunion`
--

CREATE TABLE `reunion` (
  `id` int(10) UNSIGNED NOT NULL,
  `IDPHASE` int(11) NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PV` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `TERMINEE` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `reunion`
--

INSERT INTO `reunion` (`id`, `IDPHASE`, `titre`, `PV`, `lieu`, `date`, `TERMINEE`, `created_at`, `updated_at`) VALUES
(1, 1, 'Reunion1', NULL, 'setif', '2019-04-18', 0, NULL, NULL),
(34, 1, 'Reunion2', NULL, 'alger', '2019-04-13', 0, '2019-04-17 13:09:34', '2019-04-17 13:09:34'),
(35, 1, 'omg', NULL, 'zz', '2019-04-20', 0, '2019-04-17 13:20:37', '2019-04-17 13:20:37'),
(38, 1, 'omgl', NULL, 'zz', '2019-04-20', 0, '2019-04-17 13:22:49', '2019-04-17 13:22:49'),
(39, 1, 'sara', NULL, 'setif', '2019-04-06', 0, '2019-04-17 13:53:37', '2019-04-17 13:53:37'),
(40, 2, 'lol', NULL, 'setif', '2019-04-07', 0, '2019-04-17 14:47:12', '2019-04-17 14:47:12'),
(41, 18, 'reunion 1', NULL, 'bib', '2019-05-05', 0, '2019-04-21 21:30:56', '2019-04-21 21:30:56'),
(42, 23, 'rarara', NULL, 'batna', '2019-04-25', 0, '2019-04-23 14:38:41', '2019-04-23 14:38:41'),
(44, 23, 'bilou', NULL, 'batna', '2019-04-25', 0, '2019-04-23 14:41:24', '2019-04-23 14:41:24'),
(45, 23, 'ninou', NULL, 'batna', '2019-04-25', 0, '2019-04-23 14:41:58', '2019-04-23 14:41:58'),
(46, 24, 'bonne reunion', NULL, 'batna', '2019-06-10', 0, '2019-04-23 18:14:04', '2019-04-23 18:14:04'),
(48, 24, 'bonne ]', NULL, 'batna', '2019-06-10', 0, '2019-04-23 18:19:29', '2019-04-23 18:19:29'),
(50, 24, 'imen', NULL, 'batna', '2019-06-10', 0, '2019-04-23 18:30:06', '2019-04-23 18:30:06'),
(52, 24, 'imen2', NULL, 'batna', '2019-06-10', 0, '2019-04-23 18:36:26', '2019-04-23 18:36:26'),
(53, 24, 'imen3', NULL, 'batna', '2019-06-10', 0, '2019-04-23 18:40:00', '2019-04-23 18:40:00'),
(54, 24, '3yiiiit', NULL, 'win jat', '2019-05-10', 0, '2019-04-23 23:01:29', '2019-04-23 23:01:29'),
(55, 24, '3yiiiiiiiiit', NULL, 'win jat', '2019-04-25', 0, '2019-04-23 23:14:40', '2019-04-23 23:14:40'),
(57, 24, '3yiiiiiiiiit bzf', NULL, 'win jat', '2019-04-26', 0, '2019-04-23 23:15:54', '2019-04-23 23:15:54'),
(58, 25, 'ma3lich', NULL, 'hna', '2019-04-27', 0, '2019-04-24 00:07:46', '2019-04-24 00:07:46');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prof` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Boolean',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'moumou',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `prof`, `name`, `surname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 'sarah', 'belaoura', 'tttt@gmail.com', NULL, ';lskalndklnlzjdm', NULL, NULL, NULL),
(2, 1, 'kaka', 'koko', 'yuuta@gmail.com', NULL, 'k,lkjdjhzejhdze', NULL, NULL, NULL),
(4, 0, 'nani', 'nanak', 'hih@gmail.com', NULL, 'nnnnnnnnnn', NULL, NULL, NULL),
(10, 1, 'kh', 'sar', 'hs@esi.dz', NULL, '$2y$10$IZ.DfHPekHxzQGxRsWQ7X.OvJIfHBbsbW1QeSlUHqdJ.EchwZZUaq', NULL, '2019-03-29 19:22:01', '2019-03-29 19:22:01'),
(11, 0, 'sisi', 'mimi', 'hm@esi.dz', NULL, '$2y$10$ZsaxmbQdfbSitV3zmQyXCuM3xAppxJAjQVqzPSONjiWNFwBSDjaa.', NULL, '2019-03-29 19:23:08', '2019-03-29 19:23:08'),
(12, 1, 'qsdf', 'fghj', 'eee@esi.dz', NULL, '$2y$10$2GA5.cWR8kWwq9fUYSlFZeIsA7/XvSpwNIbjT7O9f0sHHqjQYjn/W', 'ZaEIMM8C1BwRzfWB2umC71XmQTfkbJWe1xkcHLE3YBhog0z89t5KLPC6sj8V', '2019-04-14 15:28:24', '2019-04-14 15:28:24'),
(13, 0, 'uuuuu', 'mmmmmmm', 'jj@gmail.com', NULL, '$2y$10$C5zQpFkjAnorA./sQqNsVu1w3tHh4nlMAEVupadkqUmMt6X8GCmNe', NULL, '2019-04-14 16:19:01', '2019-04-14 16:19:01'),
(14, 1, 'khaber', 'Sarah', 'hs_kh@esi.dz', NULL, '$2y$10$sI3LqGeXv2TNINLNQtaL4eHRMj4WNpfTOuzTFQ6sbWY9ke/D2LR3m', NULL, '2019-04-14 19:37:34', '2019-04-14 19:37:34'),
(15, 1, 'please', 'mp', 'kh@esi.dz', NULL, '$2y$10$fGYg4QgAZm7vJdR3CwUwsOGTm7cgGyRauu/Gxdn7jvazF/siE7hBW', NULL, '2019-04-16 17:08:22', '2019-04-16 17:08:22'),
(16, 1, 'mm1', 'zzzz', 'hml@esi.dz', NULL, '$2y$10$UWKXa5a1s35ed.nok1ZLZOPwJxKO3B6G9ksYGV4Zu3SRAVEH9y3ny', NULL, '2019-04-16 17:26:17', '2019-04-16 17:26:17'),
(17, 1, 'emchi', 'trach', 'oo@esi.dz', NULL, '$2y$10$A2D0Ticp2RlG7RBu19xNdupA6n8gdn8ZdxLa6KTDpNo/gD8Q7Y30i', NULL, '2019-04-16 17:28:41', '2019-04-16 17:28:41'),
(19, 0, 'sara', 'ss', 'hsmm@esi.dz', NULL, '$2y$10$bwy1hGaAr5ylneumE48gs.9P8HCfAe6DkBbNiWptF9h5uoZ4T8eZa', NULL, '2019-04-16 17:47:36', '2019-04-16 17:47:36'),
(20, 1, 'sara', 'belaouraa', 'hp@esi.dzz', NULL, '$2y$10$whM9eA0D2/mu03xcT6UUS.PArArrrJWTlFBlnHwMiLlwjGsGOWvcy', NULL, '2019-04-17 20:32:17', '2019-04-17 20:32:17'),
(21, 0, 'Sarah', 'fghj', 'sarah@gmail.com', NULL, '$2y$10$z/gSwbdM63/Ay0pLBIt2xuZt5kwk9lt3LwS0YuMqt64NcL3FWNlFC', NULL, '2019-04-18 05:57:41', '2019-04-18 05:57:41'),
(22, 1, 'bla', 'blabla', 'mm@esi.dz', NULL, '$2y$10$J9jq17u0EfNmyhUP/s5Ty.GEkUk95gvpZe91.iAZ3YQWNNcA92vdS', NULL, '2019-04-18 15:08:01', '2019-04-18 15:08:01'),
(23, 0, 'blbla', 'blaba', 'mmm@esi.dz', NULL, '$2y$10$ZGR0IyaDjGE00hpd8NLMsertpC0miK6MaHYHc3Su/UE0mPvcQ4aE6', NULL, '2019-04-18 15:09:43', '2019-04-18 15:09:43'),
(24, 1, 'lala', 'cha', 'nh@esi.dz', NULL, '$2y$10$l/E6FYP2KzKwFdU4H5gguOlWoSEqWiN16q2H2U28vyc9roZBYIqae', 'iqGXFbi2OhN2eppV5k7RtdAN9oPBWKDzmQG0rKLpY92SkLWYjnQZYfXBvn6y', '2019-04-20 13:53:39', '2019-04-20 13:53:39'),
(25, 1, 'chacha', 'nsvg', 'nr@esi.dz', NULL, '$2y$10$4OcxLaz9QQ8JyRvQyzDfL.uQJKs3GUX71XeLaiKqxGV1PB.2zxSrm', NULL, '2019-04-20 14:29:20', '2019-04-20 14:29:20'),
(26, 1, 'yaya', 'touri', 'hb@esi.dz', NULL, '$2y$10$m/MwTFEkNLGU78mAcGZCmuodVhWrFv0oRQa5OBQOsGN45o/PugILG', 'rGF2u3wpwPbw0jtwkM3CHWfqxwidqL0TtY1aRS2V9aK2tQ6ZVpxBzInIzJ2r', '2019-04-20 18:18:25', '2019-04-20 18:18:25'),
(27, 1, 'nana', 'dada', 'll@esi.dz', NULL, '$2y$10$DX2jRvjkfcEelaHaPH2/OuTsGqT4QkepBTqNcKK/zqAxQDGRI9Mgm', 'HcDO9zw0DJtkLNZK0M1Uak4UW7UfyOiyv6PnQaBZ82jkDjHLu4S7fsTF4eTs', '2019-04-21 19:52:04', '2019-04-21 19:52:04'),
(28, 0, 'maroua', 'koukou', 'bb@esi.dz', NULL, '$2y$10$tw7W5TnaQvBUDHiW/UFKkeRUo3hx0COPNo1WH40Kk4wgEW1C3bwZW', 'zK7wqpkQcgQocOr1mg0H8j5flZtzh0txqNimDCc1dH6qB2xvUpz8onycmern', '2019-04-21 20:52:51', '2019-04-21 20:52:51'),
(29, 0, 'loula', 'doudou', 'gg@esi.dz', NULL, '$2y$10$INn4vdheX/1mo10vXnXM7uj/n3HaYGqhS1kHfzJrMMLo1P.MUjeE.', 'QIAu0f9ljHKewkF5xXWK0Cwa2i9yN2lEHdmvW89cSLo1iekAEfgizgfE87Nb', '2019-04-22 14:18:54', '2019-04-22 14:18:54'),
(30, 1, 'amel', 'amoula', 'aa@esi.dz', NULL, '$2y$10$DW6LNXy3jZ6CHysY/dyOZe6RGQwrrL55oXkQu1.jLYbsP9gcks3NG', 'konhd5mL2MIERkJiP6J0RuB0r7y1gLbQT8w1JUiGywP6afcbu9WDBsedWyQp', '2019-04-23 09:42:22', '2019-04-23 09:42:22'),
(31, 0, 'souha', 'lali', 'ss@esi.dz', NULL, '$2y$10$tlZptj4w1oQueGkQlvDrkuvkE/13kdyZToJO0HMInQDHeRwx9GIqC', 'o2NNVkLyuqrBKyQ60MiXvPGjSYwaGkdPzytavM56pa0UryryENOivmBqv6NU', '2019-04-23 09:45:57', '2019-04-23 09:45:57'),
(32, 0, 'jija', 'joujou', 'jj@esi.dz', NULL, '$2y$10$js29wiJESznnXQS5UA0Y9OTjUyBIHlP5kX/zdrkGermZhnpA8hxtu', 'HlUrkOoMRgNiU9kn997jlXjT2y8cXefKIGysYigXPdrOAu9H1frCG1qBKmqS', '2019-04-23 10:08:50', '2019-04-23 10:08:50'),
(33, 1, 'nihal', 'nihal', 'nn@esi.dz', NULL, '$2y$10$aWh8gyaXE56inHZnul.NIeE2bcwx29VmwAmsDO1Kgyo3s4GLWMdva', 'Rmbtjlpq0ekHfAIYu8Zhld55AvISxFRcu6abHIrKq4rAevLCFHbqK9VRRCFd', '2019-04-23 10:24:14', '2019-04-23 10:24:14'),
(34, 0, 'souma', 'souma', 'sc@esi.dz', NULL, '$2y$10$pJ.ciE1K3Obb76xhV2/YYOlhJk3yj1U2hzHjv9u6ACJVhSw2ELY2u', 'F2brCziQV2TnFFnrR7cBUPQmv5zndYoj3266pWWui49U3znReYhfh6ktvkV8', '2019-04-23 16:52:25', '2019-04-23 16:52:25');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cause`
--
ALTER TABLE `cause`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD KEY `IDLIVRABLE` (`IDLIVRABLE`),
  ADD KEY `IDLIVRABLE_2` (`IDLIVRABLE`),
  ADD KEY `IDENCADRANT` (`IDENCADRANT`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD UNIQUE KEY `ID1_2` (`ID`),
  ADD KEY `ID1` (`ID`),
  ADD KEY `ID1_3` (`ID`);

--
-- Index pour la table `listeencadrant`
--
ALTER TABLE `listeencadrant`
  ADD PRIMARY KEY (`IDPROJET`),
  ADD UNIQUE KEY `IDPROJET` (`IDPROJET`),
  ADD KEY `IDPROJET_2` (`IDPROJET`,`IDENCADRANT1`,`IDENCADRANT2`,`IDENCADRANT3`,`IDENCADRANT4`),
  ADD KEY `IDENCADRANT1` (`IDENCADRANT1`),
  ADD KEY `IDENCADRANT2` (`IDENCADRANT2`),
  ADD KEY `IDENCADRANT4` (`IDENCADRANT4`),
  ADD KEY `IDENCADRANT3` (`IDENCADRANT3`);

--
-- Index pour la table `livrable`
--
ALTER TABLE `livrable`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD KEY `IDUSER` (`IDUSER`),
  ADD KEY `IDCause` (`IDCause`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `phase`
--
ALTER TABLE `phase`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `titre` (`TITRE`),
  ADD KEY `IDLIVRABLE` (`IDLIVRABLE`),
  ADD KEY `IDPROJET1` (`IDPROJET`);

--
-- Index pour la table `presence`
--
ALTER TABLE `presence`
  ADD UNIQUE KEY `reun` (`IDReunion`),
  ADD UNIQUE KEY `IDReunion` (`IDReunion`,`IDPresent1`,`IDPresent2`,`IDPresent3`,`IDPresent4`,`IDPresent5`,`IDPresent6`) USING BTREE,
  ADD KEY `IDPresent1` (`IDPresent1`),
  ADD KEY `IDPresent2` (`IDPresent2`),
  ADD KEY `IDPresent3` (`IDPresent3`),
  ADD KEY `IDPresent4` (`IDPresent4`),
  ADD KEY `IDPresent6` (`IDPresent6`),
  ADD KEY `IDPresent5` (`IDPresent5`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `titre` (`TITRE`);

--
-- Index pour la table `projetetudiant`
--
ALTER TABLE `projetetudiant`
  ADD PRIMARY KEY (`IDETUDIANT`),
  ADD UNIQUE KEY `IDETUDIANT` (`IDETUDIANT`),
  ADD KEY `IDPROJET1` (`IDPROJET1`,`IDPROJET2`),
  ADD KEY `IDPROJET2` (`IDPROJET2`);

--
-- Index pour la table `reunion`
--
ALTER TABLE `reunion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titre` (`titre`),
  ADD KEY `IDPHASE` (`IDPHASE`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cause`
--
ALTER TABLE `cause`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de la cause';
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `IDLIVRABLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `livrable`
--
ALTER TABLE `livrable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant du livrable', AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `phase`
--
ALTER TABLE `phase`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de la phase', AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant du projet', AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT pour la table `reunion`
--
ALTER TABLE `reunion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`IDLIVRABLE`) REFERENCES `livrable` (`ID`),
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`IDENCADRANT`) REFERENCES `enseignant` (`ID`);

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `listeencadrant`
--
ALTER TABLE `listeencadrant`
  ADD CONSTRAINT `listeencadrant_ibfk_1` FOREIGN KEY (`IDPROJET`) REFERENCES `projet` (`ID`),
  ADD CONSTRAINT `listeencadrant_ibfk_2` FOREIGN KEY (`IDENCADRANT1`) REFERENCES `enseignant` (`ID`),
  ADD CONSTRAINT `listeencadrant_ibfk_3` FOREIGN KEY (`IDENCADRANT2`) REFERENCES `enseignant` (`ID`),
  ADD CONSTRAINT `listeencadrant_ibfk_4` FOREIGN KEY (`IDENCADRANT3`) REFERENCES `enseignant` (`ID`),
  ADD CONSTRAINT `listeencadrant_ibfk_5` FOREIGN KEY (`IDENCADRANT4`) REFERENCES `enseignant` (`ID`);

--
-- Contraintes pour la table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`IDUSER`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `phase`
--
ALTER TABLE `phase`
  ADD CONSTRAINT `phase_ibfk_1` FOREIGN KEY (`IDPROJET`) REFERENCES `projet` (`ID`),
  ADD CONSTRAINT `phase_ibfk_2` FOREIGN KEY (`IDLIVRABLE`) REFERENCES `livrable` (`ID`);

--
-- Contraintes pour la table `presence`
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
-- Contraintes pour la table `projetetudiant`
--
ALTER TABLE `projetetudiant`
  ADD CONSTRAINT `projetetudiant_ibfk_1` FOREIGN KEY (`IDETUDIANT`) REFERENCES `etudiant` (`ID`),
  ADD CONSTRAINT `projetetudiant_ibfk_2` FOREIGN KEY (`IDPROJET1`) REFERENCES `projet` (`ID`),
  ADD CONSTRAINT `projetetudiant_ibfk_3` FOREIGN KEY (`IDPROJET2`) REFERENCES `projet` (`ID`);

--
-- Contraintes pour la table `reunion`
--
ALTER TABLE `reunion`
  ADD CONSTRAINT `reunion_ibfk_1` FOREIGN KEY (`IDPHASE`) REFERENCES `phase` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
