-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 18 Mai 2017 à 15:23
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dudeego`
--
CREATE DATABASE IF NOT EXISTS `dudeego` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dudeego`;

-- --------------------------------------------------------

--
-- Structure de la table `e_a__demande__inscription`
--

DROP TABLE IF EXISTS `e_a__demande__inscription`;
CREATE TABLE IF NOT EXISTS `e_a__demande__inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `physique_id` int(11) NOT NULL,
  `documentinscription_id` int(11) DEFAULT NULL,
  `etat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8E069C48D553BD36` (`documentinscription_id`),
  KEY `IDX_8E069C4853D0E798` (`physique_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `e_a__demande__inscription`
--

TRUNCATE TABLE `e_a__demande__inscription`;
--
-- Contenu de la table `e_a__demande__inscription`
--

INSERT INTO `e_a__demande__inscription` (`id`, `physique_id`, `documentinscription_id`, `etat`, `type`) VALUES
(1, 2, 3, 'creation', 'universite'),
(2, 2, 4, 'creation', 'langue'),
(3, 2, 5, 'creation', 'universite'),
(4, 2, 6, 'creation', 'universite'),
(5, 2, 7, 'creation', 'logement'),
(6, 2, 8, 'en cours de validation', 'universite'),
(7, 2, 9, 'creation', 'universite'),
(8, 2, 10, 'creation', 'universite'),
(9, 2, 11, 'creation', 'preparation'),
(10, 2, 12, 'creation', 'universite'),
(11, 2, 13, 'creation', 'universite'),
(12, 2, 14, 'creation', 'universite'),
(13, 2, 15, 'creation', 'universite'),
(14, 2, 16, 'creation', 'universite'),
(15, 2, 17, 'creation', 'universite'),
(16, 2, 18, 'creation', 'universite'),
(17, 2, 19, 'creation', 'universite'),
(18, 2, 20, 'creation', 'universite'),
(19, 2, 21, 'creation', 'universite'),
(20, 2, 22, 'creation', 'universite'),
(21, 2, 23, 'creation', 'universite'),
(22, 2, 24, 'creation', 'universite'),
(23, 2, 25, 'creation', 'universite'),
(24, 2, 26, 'creation', 'universite'),
(25, 2, 27, 'creation', 'universite'),
(26, 2, 28, 'creation', 'universite'),
(27, 2, 29, 'creation', 'universite'),
(28, 2, 30, 'creation', 'universite'),
(29, 2, 31, 'creation', 'universite');

-- --------------------------------------------------------

--
-- Structure de la table `e_a__document`
--

DROP TABLE IF EXISTS `e_a__document`;
CREATE TABLE IF NOT EXISTS `e_a__document` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `physique_id` int(11) NOT NULL,
  `passeport_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `carte_identite_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bulletin_note_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bac_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `credential_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lettre_recommendation_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lettre_motivation_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9BA2A53753D0E798` (`physique_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `e_a__document`
--

TRUNCATE TABLE `e_a__document`;
--
-- Contenu de la table `e_a__document`
--

INSERT INTO `e_a__document` (`id`, `physique_id`, `passeport_name`, `updated_at`, `carte_identite_name`, `bulletin_note_name`, `bac_name`, `credential_name`, `lettre_recommendation_name`, `lettre_motivation_name`) VALUES
(1, 1, '5911df79c0a7b_Modelo do Pré-requisito.pdf', '2017-05-10 08:05:58', 'default.png', 'default.png', '5912c9e62329a_3729.png', 'default.png', 'default.png', 'default.png');

-- --------------------------------------------------------

--
-- Structure de la table `e_a__document__inscription`
--

DROP TABLE IF EXISTS `e_a__document__inscription`;
CREATE TABLE IF NOT EXISTS `e_a__document__inscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pdf_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `e_a__document__inscription`
--

TRUNCATE TABLE `e_a__document__inscription`;
--
-- Contenu de la table `e_a__document__inscription`
--

INSERT INTO `e_a__document__inscription` (`id`, `nom`, `pdf_name`, `updated_at`) VALUES
(3, 'doc', '59197893c1be1_3729.png', '2017-05-15 09:44:51'),
(4, 'nope', NULL, NULL),
(5, 'mademande', NULL, NULL),
(6, 'nope', NULL, NULL),
(7, 'nope', NULL, NULL),
(8, 'pasencorefait', NULL, NULL),
(9, 'prepa', NULL, NULL),
(10, 'test', NULL, NULL),
(11, 'test', NULL, NULL),
(12, 'null', 'null', NULL),
(13, 'null', 'null', NULL),
(14, 'null', 'null', NULL),
(15, 'null', 'null', NULL),
(16, 'null', 'null', NULL),
(17, 'null', 'null', NULL),
(18, 'null', 'null', NULL),
(19, 'null', 'null', NULL),
(20, 'null', 'null', NULL),
(21, 'null', 'null', NULL),
(22, 'null', 'null', NULL),
(23, 'null', 'null', NULL),
(24, 'null', 'null', NULL),
(25, 'null', 'null', NULL),
(26, 'null', 'null', NULL),
(27, 'null', 'null', NULL),
(28, 'null', 'null', NULL),
(29, 'null', 'null', NULL),
(30, 'null', 'null', NULL),
(31, 'null', 'null', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `e_a__f_a_q`
--

DROP TABLE IF EXISTS `e_a__f_a_q`;
CREATE TABLE IF NOT EXISTS `e_a__f_a_q` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reponse` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `e_a__f_a_q`
--

TRUNCATE TABLE `e_a__f_a_q`;
--
-- Contenu de la table `e_a__f_a_q`
--

INSERT INTO `e_a__f_a_q` (`id`, `question`, `reponse`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.'),
(2, 'Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.'),
(4, 'Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.'),
(6, 'Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.'),
(8, 'Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus?', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.');

-- --------------------------------------------------------

--
-- Structure de la table `e_a__image`
--

DROP TABLE IF EXISTS `e_a__image`;
CREATE TABLE IF NOT EXISTS `e_a__image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_size` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `e_a__image`
--

TRUNCATE TABLE `e_a__image`;
--
-- Contenu de la table `e_a__image`
--

INSERT INTO `e_a__image` (`id`, `image_name`, `image_size`, `updated_at`) VALUES
(1, '591209690ab2f_0021e128dofl2r6t.jpg', NULL, '2017-05-09 18:24:41'),
(5, '591b286030b5d_3729.png', NULL, '2017-05-16 16:27:12');

-- --------------------------------------------------------

--
-- Structure de la table `e_a__langue`
--

DROP TABLE IF EXISTS `e_a__langue`;
CREATE TABLE IF NOT EXISTS `e_a__langue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `morale_id` int(11) NOT NULL,
  `langue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_320D6FAD338B5CE8` (`morale_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `e_a__langue`
--

TRUNCATE TABLE `e_a__langue`;
--
-- Contenu de la table `e_a__langue`
--

INSERT INTO `e_a__langue` (`id`, `morale_id`, `langue`) VALUES
(1, 1, 'Francais');

-- --------------------------------------------------------

--
-- Structure de la table `e_a__morale`
--

DROP TABLE IF EXISTS `e_a__morale`;
CREATE TABLE IF NOT EXISTS `e_a__morale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personne_id` int(11) DEFAULT NULL,
  `raisonsocial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siret` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `naf` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C3233FE4A21BD112` (`personne_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `e_a__morale`
--

TRUNCATE TABLE `e_a__morale`;
--
-- Contenu de la table `e_a__morale`
--

INSERT INTO `e_a__morale` (`id`, `personne_id`, `raisonsocial`, `siret`, `fax`, `naf`, `url`, `alt`) VALUES
(1, 5, 'Alten SIR', NULL, NULL, 'Alten SIR', NULL, 'Alten SIR');

-- --------------------------------------------------------

--
-- Structure de la table `e_a__personne`
--

DROP TABLE IF EXISTS `e_a__personne`;
CREATE TABLE IF NOT EXISTS `e_a__personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) DEFAULT NULL,
  `rue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codepostal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pays` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gsm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `courriel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `e_a__personne`
--

TRUNCATE TABLE `e_a__personne`;
--
-- Contenu de la table `e_a__personne`
--

INSERT INTO `e_a__personne` (`id`, `numero`, `rue`, `codepostal`, `ville`, `pays`, `gsm`, `telephone`, `courriel`) VALUES
(1, 2, 'Rue des tisserands', '76770', '(Le) Houlme', 'France', '0616353468', '0616353468', 'chibanehossein@gmail.com'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dudeego.contact@gmail.com'),
(5, 221, 'Boulevard Jean Jaures', '92100', 'Boulogne Bilancourt', 'France', NULL, '01 46 08 70 00', 'contact@altensir.fr');

-- --------------------------------------------------------

--
-- Structure de la table `e_a__physique`
--

DROP TABLE IF EXISTS `e_a__physique`;
CREATE TABLE IF NOT EXISTS `e_a__physique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personne_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datenaissance` datetime DEFAULT NULL,
  `numerocarteid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_DC3207A6A21BD112` (`personne_id`),
  UNIQUE KEY `UNIQ_DC3207A63DA5256D` (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `e_a__physique`
--

TRUNCATE TABLE `e_a__physique`;
--
-- Contenu de la table `e_a__physique`
--

INSERT INTO `e_a__physique` (`id`, `personne_id`, `nom`, `prenom`, `datenaissance`, `numerocarteid`, `image_id`) VALUES
(1, 1, 'CHIBANE', 'Hossein', '2017-01-01 00:00:00', 'test', 1),
(2, 4, 'Admin', 'Admin', '2017-05-16 00:00:00', '123', 5);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `physique_id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`),
  KEY `IDX_957A647953D0E798` (`physique_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `fos_user`
--

TRUNCATE TABLE `fos_user`;
--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `physique_id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 1, 'test1', 'test1', 'chibanehossein@gmail.com', 'chibanehossein@gmail.com', 1, NULL, '$2y$13$idfasSO01.guFrA1m65ET.7D1FxSgvUAqR/0cWo.pHv9heqQ7D/hC', '2017-05-12 10:35:13', NULL, NULL, 'a:1:{i:0;s:9:"ROLE_USER";}'),
(2, 2, 'adminuser', 'adminuser', 'dudeego.contact@gmail.com', 'dudeego.contact@gmail.com', 1, NULL, '$2y$13$.CI2VEAJKLnwT/E3/nIn.e.TmZATByOJhjspxj/iKnquHIoCyZnQO', '2017-05-18 12:59:12', NULL, NULL, 'a:2:{i:0;s:9:"ROLE_USER";i:1;s:10:"ROLE_ADMIN";}');

-- --------------------------------------------------------

--
-- Structure de la table `t__adresse__universite`
--

DROP TABLE IF EXISTS `t__adresse__universite`;
CREATE TABLE IF NOT EXISTS `t__adresse__universite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ville_id` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `rue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_86296BDFA73F0036` (`ville_id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `t__adresse__universite`
--

TRUNCATE TABLE `t__adresse__universite`;
--
-- Contenu de la table `t__adresse__universite`
--

INSERT INTO `t__adresse__universite` (`id`, `ville_id`, `numero`, `rue`) VALUES
(1, 1, NULL, 'Calle Tajo, '),
(2, 2, 30, 'Avda. Aragón, '),
(3, 3, 1, 'Calle Inocencio García,'),
(4, 4, 135, 'Av. de los Jerónimos, '),
(5, 5, NULL, 'Carretera Pozuelo a Majadahonda, '),
(15, 6, 49, 'Urb. Villafranca del Castillo, Calle Castillo de Alarcón,'),
(16, 7, NULL, 'Passeig de Sant Gervasi,'),
(17, 8, NULL, 'Autovía Mudéjar,'),
(18, 9, NULL, ' Calle de los Canteros,'),
(19, 10, 4, 'Av. Universitària, '),
(20, 11, 22, 'Carrer de la Immaculada, '),
(21, 12, 18, 'Campus de Moncloa, Calle Julián Romea,'),
(22, 13, 1, 'Calle de Irunlarrea,'),
(23, 14, 14, 'Paseo Miguel Unamuno,'),
(39, 15, 6, 'Diogenous'),
(40, 16, NULL, 'Bethlen Gábor tér'),
(41, 17, NULL, 'Műegyetem rakpart. 3-9. Bldg 116'),
(42, 18, NULL, 'Dohány u. 1-3'),
(43, 19, 2, 'Dugonics tér'),
(44, 20, 1, 'Páter Károly u.'),
(45, 21, NULL, 'L-, 50 Avenue du Parc des Sports, 4671 '),
(46, 22, NULL, 'ROUTE PROVINCIALE'),
(47, 23, NULL, 'Marii Skłodowskiej-Curie 3A'),
(48, 24, 24, 'Gołębia'),
(49, 25, 68, 'ul. Prez. Gabriela Narutowicza'),
(50, 26, 1, 'Aleje Racławickie'),
(51, 27, 41, 'JACKOWSKIEGO ST'),
(52, 28, 26, 'Krakowskie Przedmieście '),
(53, 29, 1, 'plac Uniwersytecki'),
(74, 30, NULL, 'Fábrica da Pólvora de Barcarena'),
(75, 31, NULL, 'Avenida Jorge Peixinho,'),
(76, 32, 37, 'Strada Dionisie Lupu'),
(77, 33, NULL, 'Bulevardul Mamaia'),
(78, 34, 16, 'Strada Universității'),
(79, 35, 2, 'Piața Eftimie Murgu'),
(80, 36, 38, 'Strada Gheorghe Marinescu '),
(81, 37, 94, 'Bulevardul Revoluției'),
(82, 38, NULL, 'Cluj-Napoca'),
(83, 39, NULL, 'Campus Universita');

-- --------------------------------------------------------

--
-- Structure de la table `t__document__universite`
--

DROP TABLE IF EXISTS `t__document__universite`;
CREATE TABLE IF NOT EXISTS `t__document__universite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `universite_id` int(11) NOT NULL,
  `pdf_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_62DE32FA2A52F05F` (`universite_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `t__document__universite`
--

TRUNCATE TABLE `t__document__universite`;
--
-- Contenu de la table `t__document__universite`
--

INSERT INTO `t__document__universite` (`id`, `universite_id`, `pdf_name`, `updated_at`) VALUES
(1, 2, 'Valencia solicitud admission', '2017-05-10 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `t__formation__universite`
--

DROP TABLE IF EXISTS `t__formation__universite`;
CREATE TABLE IF NOT EXISTS `t__formation__universite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `universite_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_69F4D6342A52F05F` (`universite_id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `t__formation__universite`
--

TRUNCATE TABLE `t__formation__universite`;
--
-- Contenu de la table `t__formation__universite`
--

INSERT INTO `t__formation__universite` (`id`, `formation`, `universite_id`) VALUES
(1, 'Kinésithérapeute', 1),
(2, 'Kinésithérapeute', 2),
(3, 'Kinésithérapeute', 3),
(4, 'Kinésithérapeute', 4),
(5, 'Kinésithérapeute', 14),
(6, 'Kinésithérapeute', 6),
(7, 'Kinésithérapeute', 8),
(8, 'Kinésithérapeute', 9),
(9, 'Kinésithérapeute', 10),
(10, 'Kinésithérapeute', 11),
(11, 'Kinésithérapeute', 12),
(12, 'Kinésithérapeute', 13),
(13, 'Kinésithérapeute', 17),
(14, 'Kinésithérapeute', 23),
(15, 'Kinésithérapeute', 52),
(16, 'Kinésithérapeute', 53),
(17, 'Kinésithérapeute', 24),
(18, 'Dentiste', 1),
(19, 'Dentiste', 2),
(20, 'Dentiste', 4),
(21, 'Dentiste', 13),
(22, 'Dentiste', 14),
(23, 'Dentiste', 20),
(24, 'Dentiste', 21),
(25, 'Dentiste', 29),
(26, 'Dentiste', 28),
(27, 'Dentiste', 31),
(28, 'Dentiste', 60),
(29, 'Dentiste', 55),
(30, 'Dentiste', 56),
(31, 'Dentiste', 62),
(32, 'Dentiste', 58),
(33, 'Dentiste', 59),
(34, 'Dentiste', 61),
(35, 'Dentiste', 54),
(36, 'Psycologue', 1),
(37, 'Psycologue', 2),
(38, 'Psycologue', 4),
(39, 'Psycologue', 12),
(40, 'Psycologue', 14),
(41, 'Psycologue', 6),
(42, 'Psycologue', 8),
(43, 'Psycologue', 9),
(44, 'Psycologue', 12),
(45, 'Psycologue', 18),
(46, 'Psycologue', 20),
(47, 'Psycologue', 27),
(48, 'Psycologue', 55),
(49, 'Audioprothésiste', 1),
(50, 'Audioprothésiste', 14),
(51, 'Audioprothésiste', 16),
(52, 'Biotechnologue', 1),
(53, 'Biotechnologue', 2),
(54, 'Biotechnologue', 14),
(55, 'Biotechnologue', 6),
(56, 'Biotechnologue', 19),
(57, 'Biotechnologue', 27),
(58, 'Biotechnologue', 26),
(59, 'Biotechnologue', 25),
(60, 'Pharmacien', 1),
(61, 'Pharmacien', 2),
(62, 'Pharmacien', 4),
(63, 'Pharmacien', 6),
(64, 'Pharmacien', 14),
(65, 'Pharmacien', 15),
(66, 'Pharmacien', 20),
(67, 'Pharmacien', 21),
(68, 'Pharmacien', 29),
(69, 'Pharmacien', 26),
(70, 'Pharmacien', 28),
(71, 'Pharmacien', 25),
(72, 'Pharmacien', 31),
(73, 'Pharmacien', 60),
(74, 'Pharmacien', 55),
(75, 'Pharmacien', 56),
(76, 'Pharmacien', 62),
(77, 'Pharmacien', 58),
(78, 'Pharmacien', 59),
(79, 'Pharmacien', 61),
(80, 'Pharmacien', 54),
(119, 'Médecin', 1),
(120, 'Médecin', 15),
(121, 'Médecin', 17),
(122, 'Médecin', 29),
(123, 'Médecin', 26),
(124, 'Médecin', 31),
(125, 'Médecin', 28),
(126, 'Médecin', 25),
(127, 'Médecin', 60),
(128, 'Médecin', 55),
(129, 'Médecin', 56),
(130, 'Médecin', 62),
(131, 'Médecin', 58),
(132, 'Médecin', 59),
(133, 'Médecin', 61),
(134, 'Médecin', 54),
(135, 'Médecin', 20),
(136, 'Médecin', 21),
(139, 'Vétérinaire', 22),
(140, 'Infirmier', 10),
(141, 'Infirmier', 11),
(142, 'Infirmier', 15),
(143, 'Sciences et techniques des activités physiques et sportives', 10),
(144, 'Podologie', 12),
(145, 'Orthopédiste', 12),
(146, 'Science de la santé', 25),
(147, 'Science de la santé', 31),
(148, 'Science de la santé', 15),
(149, 'Physiothérapie', 29),
(150, 'Nutrition', 15),
(151, 'Prothésiste dentaire', 16);

-- --------------------------------------------------------

--
-- Structure de la table `t__image__universite`
--

DROP TABLE IF EXISTS `t__image__universite`;
CREATE TABLE IF NOT EXISTS `t__image__universite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `universite_id` int(11) DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_207771F82A52F05F` (`universite_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `t__image__universite`
--

TRUNCATE TABLE `t__image__universite`;
--
-- Contenu de la table `t__image__universite`
--

INSERT INTO `t__image__universite` (`id`, `universite_id`, `libelle`, `url`, `alt`) VALUES
(1, 1, 'université de Madrid', 'http://madrid.universidadeuropea.es/assets/ue-site-logo-940b3da891a9162213c239cd8ccbc092.png', 'logo'),
(2, 2, 'Université européenne de Valence\r\n', 'http://madrid.universidadeuropea.es/assets/ue-site-logo-940b3da891a9162213c239cd8ccbc092.png', 'logo'),
(3, 3, 'Universidad Europea de Canarias', 'http://madrid.universidadeuropea.es/assets/ue-site-logo-940b3da891a9162213c239cd8ccbc092.png', 'logo');

-- --------------------------------------------------------

--
-- Structure de la table `t__langue__universite`
--

DROP TABLE IF EXISTS `t__langue__universite`;
CREATE TABLE IF NOT EXISTS `t__langue__universite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `langue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `formation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8F8174E65200282E` (`formation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `t__langue__universite`
--

TRUNCATE TABLE `t__langue__universite`;
--
-- Contenu de la table `t__langue__universite`
--

INSERT INTO `t__langue__universite` (`id`, `langue`, `formation_id`) VALUES
(1, 'Francais', 1),
(2, 'Espagnol', 1),
(3, 'Anglais', 1),
(4, 'Anglais', 2),
(5, 'Espagnol', 2),
(6, 'Anglais', 3),
(7, 'Espagnol', 3),
(8, 'Espagnol', 4),
(9, 'Anglais', 5),
(10, 'Espagnol', 5),
(11, 'Anglais', 6),
(12, 'Espagnol', 6),
(13, 'Anglais', 7),
(14, 'Espagnol', 7),
(15, 'Anglais', 8),
(16, 'Espagnol', 8),
(17, 'Anglais', 9),
(18, 'Espagnol', 9),
(19, 'Espagnol', 10),
(20, 'Espagnol', 11),
(21, 'Espagnol', 12),
(22, 'Anglais', 13),
(23, 'Anglais', 14),
(24, 'Anglais', 15),
(25, 'Espagnol', 16),
(26, 'Espagnol', 17);

-- --------------------------------------------------------

--
-- Structure de la table `t__pays__universite`
--

DROP TABLE IF EXISTS `t__pays__universite`;
CREATE TABLE IF NOT EXISTS `t__pays__universite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pays` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `t__pays__universite`
--

TRUNCATE TABLE `t__pays__universite`;
--
-- Contenu de la table `t__pays__universite`
--

INSERT INTO `t__pays__universite` (`id`, `pays`) VALUES
(1, 'Espagne'),
(2, 'Chypre'),
(3, 'Hongrie'),
(4, 'Luxembourg'),
(5, 'Maroc'),
(6, 'Pologne'),
(7, 'Portugal'),
(8, 'Roumanie');

-- --------------------------------------------------------

--
-- Structure de la table `t__search__universite`
--

DROP TABLE IF EXISTS `t__search__universite`;
CREATE TABLE IF NOT EXISTS `t__search__universite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formations` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `langues` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `villes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomuniversite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `t__search__universite`
--

TRUNCATE TABLE `t__search__universite`;
-- --------------------------------------------------------

--
-- Structure de la table `t__universite`
--

DROP TABLE IF EXISTS `t__universite`;
CREATE TABLE IF NOT EXISTS `t__universite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nometablissement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siteinternet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `adresse_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_87610DDA4DE7DC5C` (`adresse_id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `t__universite`
--

TRUNCATE TABLE `t__universite`;
--
-- Contenu de la table `t__universite`
--

INSERT INTO `t__universite` (`id`, `nometablissement`, `siteinternet`, `description`, `adresse_id`) VALUES
(1, 'Université européenne de Madrid', 'http://internacional.universidadeuropea.es/notre-emplacement/madrid', 'À Madrid, nous disposons de 2 campus dotés d\'installations modernes et de ressources de formation d\'avant-garde.\r\n\r\nNotre Campus de Villaviciosa de Odón est composé de cinq bâtiments d\'enseignement, de deux résidences universitaires d\'une capacité d\'accueil de plus de 550 étudiants et d\'un vaste complexe sportif équipé de piscines, d\'une salle de sport, d\'une piste d\'athlétisme, de courts de tennis, de terrains de football, de courts de padel, d\'un terrain de beach-volley et d\'une salle omnisports. \r\n\r\nNotre Campus d\'Alcobendas est un endroit unique où l\'université se trouve en contact permanent avec le monde des entreprises ; il est idéal afin d\'encourager l\'esprit d\'entreprise des élèves et est doté d\'espaces consacrés à l\'apprentissage, au travail et à la créativité.', 1),
(2, 'Université européenne de Valence\r\n', 'http://internacional.universidadeuropea.es/notre-emplacement/valencia', 'À Valence, nous disposons d\'installations modernes pour le développement académique et professionnel des étudiants ainsi que de leurs compétences. Notre Campus urbain, au centre de Valence et en contact avec l\'activité professionnelle de la ville, est facilement accessible en transport public.', 2),
(3, 'Universidad Europea de Canarias', 'http://internacional.universidadeuropea.es/notre-emplacement/canarias', 'Aux Îles Canaries, nous sommes la première université internationale des Îles. Sur notre Campus de La Orotava (Tenerife), nous offrons un modèle académique unique et avant-gardiste dans tout l\'archipel, visant principalement à faire de nos étudiants des professionnels ayant une employabilité élevée', 3),
(4, 'Universidad Católica San Antonio de Murcia', 'http://international.ucam.edu/', 'The Catholic University of Saint Anthony (UCAM), is characterized by offering students an integral education based on the combination of in-depth theoretical and practical knowledge, in addition to a values-based education rooted in the principles of Christian humanism. Renowned professors and a team of personal tutors keep track of their students from the beginning of their studies until the end, always with the aim of providing tools to improve their student\'s performance, while strengthening their education.\r\n\r\nOur goal is to train professionals capable of transforming society, creating equality and promoting improvements that enable the shaping of a fairer world, respecting the dignity of man from conception to natural death.\r\n\r\nSince its inception UCAM has been committed to quality throughout its education and research endeavors, hereby developing and implementing interactive methods of teaching and learning: small groups, tutorial support sessions, teamwork, internship programs across all degrees, end-of-degree projects, new technologies, a WIFI network throughout the campus, a virtual platform, as well as numerous computer stations. Hence, it is not surprising that UCAM has successfully adapted to the European Higher Education Area.\r\n\r\nUCAM is accredited by ANECA (National Agency for Quality Assessment and Accreditation of Spain) as well as by the Ministry of Education with regards to 17 of its undergraduate degrees. The University also offers more than thirty official Master Degrees and Doctoral Studies. Currently, the implementation process of the undergraduate degrees is effective; eight degrees are in the process with favorable results. This is the result of the work, effort, and responsibility of our highly qualified professors, specialized in both academic and research tasks. This is attested by the high number of Doctors and the wide range of research lines. Another one of UCAM\'s distinguishing features is its focus on internationalization - a key aspect in our globalized world. UCAM has cooperation agreements with prestigious universities around the world such as Berkeley, Chicago, Bologna, etc.\r\n\r\nThe Catholic University San Antonio puts significant effort into increasing the employability of recent graduates. Currently, the percentage of students finding a job after graduation lies at 86% in total.\r\n\r\nUCAM works for its students. They are individuals, with a name and a history. Our purpose is to contribute to the personal and professional success of everyone involved by emphasizing the University\'s principles.', 4),
(6, 'Universidad Francisco de Vitoria de Madrid', 'http://www.ufv.es/inicio', 'Estimados amigos,\r\n\r\nAntes de nada, permíteme darte la enhorabuena. Termina ahora una etapa en la que seguramente muchas de las decisiones importantes sobre tu vida no las has tomado tú mismo. Sin embargo, se abre ante ti una nueva, más decisiva si cabe, en la que, si quieres, vas a tener todo el protagonismo.\r\n\r\nLas decisiones que vayas a tomar a partir de hoy mismo son las que conformarán tu futuro: qué estudiar, dónde hacerlo, qué profesión elegir, con quién vas a compartir tu vida... en resumen, quién quieres ser y cuál va a ser tu papel en el mundo.\r\n\r\nNuestra invitación es clara, atrévete a cambiarlo, haz que tu paso por el mundo lo haga mejor, sé el protagonista de tu vida.\r\n\r\nEn unos meses vas a comenzar la que puede ser, la mejor etapa de tu vida. Espero que la aproveches, que la exprimas, que aprendas de tus profesores, de tus compañeros, de ti mismo y de aquéllos que más te necesitan. Que consideres este proyecto como tuyo, que te sientas parte de él, que te sientas responsable de lo que aquí sucede, que participes en la construcción de la Universidad.\r\n\r\nLa Universidad no es un producto, no es un servicio que te ofrecemos. La Universidad es una experiencia vital y por eso, como tantas cosas importantes, es muy difícil explicarla con palabras. Si de verdad quieres conocernos, ven a vernos, piérdete en nuestros pasillos, cuélate en nuestras aulas, charla con profesores y alumnos en la cafetería y vive, por un día la Universidad con mayúsculas.\r\n\r\nSi después de hacerlo, quieres unirte a esta comunidad, sé bienvenido, nuestras puertas están siempre abiertas a quienes quieren crecer en todos los sentidos.', 5),
(8, 'Université Camilo José Cela\r\n', 'http://www.ucjc.edu/', 'En la Universidad Camilo José Cela te ofrecemos una educación diferente. Una formación activa que te brinda la posibilidad de experimentar al máximo los años universitarios dentro y fuera de las aulas para convertirte en el profesional que quieres ser.', 15),
(9, 'Blanquerna - Universitat Ramon Llull\r\n', 'http://www.blanquerna.edu/en/', 'A university and professional community of a very special kind, a non-profit maker and cofounder of the Universitat Ramon Llull, Catalonia’s first private university of which ESADE, IQS, La Salle, Pere Tarrés, Facultat de Filosofia, Observatori de l\'Ebre, Vidal i Barraquer, Institut Borja, Turisme Sant Ignasi and ESDI are all part.\r\n\r\nStarting with the teaching school, founded during the dictatorship in order to contribute to pedagogical progress in our country, other schools belonging to our university have gradually become established, all of them located in emblematic parts of Barcelona and all creating a new concept of urban campus: The Faculty of Psychology, Sciences of Education and Sport, the School of Health Science and the School of Communication and International Relations.\r\n\r\nIn Blanquerna, students, teachers, services and companies become one in order to Be and Know, deeply rooted in the humanistic tradition inspired by the scholar Ramon Llull and a desire to educate the top-level professionals that society needs.\r\nI hope our website provides you with all the help you need, and that it will lead to a future full of academic, professional and personal successes.', 16),
(10, 'San Jorge University\r\n', 'https://www.usj.es/', 'Alumni es la unidad de la Universidad San Jorge que se ocupa de atender las necesidades de todos sus egresados.\r\n\r\nSus fines primordiales son ayudar a nuestros antiguos alumnos a seguir creciendo a lo largo de su carrera profesional y generar espacios de encuentro que sirvan para fortalecer la comunidad USJ.\r\n\r\nAdemás de mantener el contacto y fomentar las oportunidades de encuentro entre antiguos estudiantes, la USJ organiza workshops, charlas y talleres con profesionales de diferentes áreas para abordar temáticas que puedan ser de interés para el futuro profesional de los alumni.\r\n\r\nEn este sentido, la Universidad San Jorge imparte formación destinada a egresados relacionada con la marca personal en LinkedIn, el mindfulness como herramienta de desarrollo profesional y personal, indicaciones de cómo crear un videocurrículum, qué pasos hay que seguir para ser emprendedor y cómo utilizar twitter como herramienta de posicionamiento profesional, entre otros talleres.\r\n\r\nSi eres antiguo alumno de la Universidad San Jorge, queremos que acudas a nosotros cuando tengas un problema. Asimismo, si quieres plantearnos alguna sugerencia, no dudes en contactar con nosotros.\r\n\r\n¡Os esperamos!', 17),
(11, 'Catholic University of Ávila\r\n', 'https://www.ucavila.es/estudiaconnosotros.php', '', 18),
(12, 'L’Université de Manresa\r\n', '', '', 19),
(13, 'International University of Catalonia\r\n', '', '', 20),
(14, 'CEU San Pablo University\r\n', '', '', 21),
(15, 'Université de Navarre\r\n', '', '', 22),
(16, 'El Centro Antonio de Solis Sevilla\r\n', '', '', 23),
(17, 'Université européenne de Chypre\r\n', '', '', 39),
(18, 'McDaniel College Budapest\r\n', '', '', 40),
(19, 'Université de Budapest\r\n', '', '', 41),
(20, 'Université de Pécs\r\n', '', '', 42),
(21, 'Université de Szeged\r\n', '', '', 43),
(22, 'Szent István University\r\n', '', '', 44),
(23, 'Lunex University\r\n', '', '', 45),
(24, 'Université internationale de Casablanca\r\n', '', '', 46),
(25, 'Gdańsk Medical University\r\n', '', '', 47),
(26, 'Université Jagellon\r\n', '', '', 48),
(27, 'Université de Łódź\r\n', '', '', 49),
(28, 'Université de Lublin\r\n', '', '', 50),
(29, 'Université de Poznań\r\n', '', '', 51),
(30, 'Université de Varsovie\r\n', '', '', 52),
(31, 'Université de Wrocław  \r\n', '', '', 53),
(52, 'Universidade Atlântica\r\n', '', '', 74),
(53, 'Instituto Piaget de Almada\r\n', '', '', 75),
(54, 'Université Carol Davila de Bucarest\r\n', '', '', 76),
(55, 'Université Ovidius de Constanta\r\n', '', '', 77),
(56, 'Université de médecine et pharmacie Grigore T. Popa\n', '', '', 78),
(58, 'Université Victor Babes de Timisoara\r\n', '', '', 79),
(59, 'Université de Târgu Mures \r\n', '', '', 80),
(60, 'Université Vasile Goldis d’Arad\r\n', '', '', 81),
(61, 'Université  Iuliu Hațieganu\r\n', '', '', 82),
(62, 'Université de Oradea', '', '', 83);

-- --------------------------------------------------------

--
-- Structure de la table `t__ville__universite`
--

DROP TABLE IF EXISTS `t__ville__universite`;
CREATE TABLE IF NOT EXISTS `t__ville__universite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pays_id` int(11) NOT NULL,
  `codepostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commune` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_96A3DE36A6E44244` (`pays_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Vider la table avant d'insérer `t__ville__universite`
--

TRUNCATE TABLE `t__ville__universite`;
--
-- Contenu de la table `t__ville__universite`
--

INSERT INTO `t__ville__universite` (`id`, `pays_id`, `codepostal`, `commune`, `region`) VALUES
(1, 1, '28670', 'Madrid', ''),
(2, 1, '46021', 'Valencia', ''),
(3, 1, '38300', 'Santa Cruz de Tenerife', ''),
(4, 1, '30107', 'Murcia', ''),
(5, 1, '28223', 'Madrid', ''),
(6, 1, '28692', 'Madrid', ''),
(7, 1, '8022', 'Barcelone', ''),
(8, 1, '50830', 'Zaragoza', ''),
(9, 1, '5005\r\n', ' Ávila\r\n\r\n', ''),
(10, 1, '8242\r\n\r\n', 'Barcelona\r\n', ''),
(11, 1, '8017\r\n', 'Barcelone\r\n', ''),
(12, 1, '28003\r\n', 'Madrid\r\n', ''),
(13, 1, '31008\r\n', 'Navarra\r\n', ''),
(14, 1, '41020', 'Sevilla', ''),
(15, 2, '1516', 'Egkomi', ''),
(16, 3, '1071', 'Budapest\r\n', ''),
(17, 3, 'H-1111\r\n\r\n', 'Budapest\r\n\r\n', ''),
(18, 3, '7622\r\n', 'Pécs\r\n ', ''),
(19, 3, 'H-6720\r\n', 'Szeged\r\n', ''),
(20, 3, '2100', 'Gödöllő', ''),
(21, 4, '4671', 'Differdange', ''),
(22, 5, '3020', 'CASABLANCA', ''),
(23, 6, '80-001\r\n', 'Gdańsk\r\n', ''),
(24, 6, '31-007\r\n', 'KraKow\r\n', ''),
(25, 6, '90-136\r\n\r\n', 'Łódź\r\n', ''),
(26, 6, '20-001\r\n', 'Lublin\r\n', ''),
(27, 6, '60-512\r\n', 'Poznan\r\n', ''),
(28, 6, '00-927\r\n', 'Varsovie\r\n', ''),
(29, 6, '50-137', 'Wroclaw\r\n', ''),
(30, 7, '2730-036', 'Barcarena', ''),
(31, 7, '2805-059', 'Almada', ''),
(32, 8, '30167\r\n', 'București\r\n\r\n', ''),
(33, 8, '900001\r\n', 'Constanta\r\n', ''),
(34, 8, '700115\r\n', 'lasi\r\n', ''),
(35, 8, '300041\r\n\r\n', 'Timisoara\r\n', ''),
(36, 8, '5401389', 'Targu Mures\r\n', ''),
(37, 8, 'Arad\r\n', '', ''),
(38, 8, '400xxx', 'Cluj-Napoca', 'la vallée du Someșul Mic'),
(39, 8, '410100', 'Oradea', 'Transylvanie');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `e_a__demande__inscription`
--
ALTER TABLE `e_a__demande__inscription`
  ADD CONSTRAINT `FK_8E069C4853D0E798` FOREIGN KEY (`physique_id`) REFERENCES `e_a__physique` (`id`),
  ADD CONSTRAINT `FK_8E069C48D553BD36` FOREIGN KEY (`documentinscription_id`) REFERENCES `e_a__document__inscription` (`id`);

--
-- Contraintes pour la table `e_a__document`
--
ALTER TABLE `e_a__document`
  ADD CONSTRAINT `FK_9BA2A53753D0E798` FOREIGN KEY (`physique_id`) REFERENCES `e_a__physique` (`id`);

--
-- Contraintes pour la table `e_a__langue`
--
ALTER TABLE `e_a__langue`
  ADD CONSTRAINT `FK_320D6FAD338B5CE8` FOREIGN KEY (`morale_id`) REFERENCES `e_a__morale` (`id`);

--
-- Contraintes pour la table `e_a__morale`
--
ALTER TABLE `e_a__morale`
  ADD CONSTRAINT `FK_C3233FE4A21BD112` FOREIGN KEY (`personne_id`) REFERENCES `e_a__personne` (`id`);

--
-- Contraintes pour la table `e_a__physique`
--
ALTER TABLE `e_a__physique`
  ADD CONSTRAINT `FK_DC3207A63DA5256D` FOREIGN KEY (`image_id`) REFERENCES `e_a__image` (`id`),
  ADD CONSTRAINT `FK_DC3207A6A21BD112` FOREIGN KEY (`personne_id`) REFERENCES `e_a__personne` (`id`);

--
-- Contraintes pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD CONSTRAINT `FK_957A647953D0E798` FOREIGN KEY (`physique_id`) REFERENCES `e_a__physique` (`id`);

--
-- Contraintes pour la table `t__adresse__universite`
--
ALTER TABLE `t__adresse__universite`
  ADD CONSTRAINT `FK_86296BDFA73F0036` FOREIGN KEY (`ville_id`) REFERENCES `t__ville__universite` (`id`);

--
-- Contraintes pour la table `t__document__universite`
--
ALTER TABLE `t__document__universite`
  ADD CONSTRAINT `FK_62DE32FA2A52F05F` FOREIGN KEY (`universite_id`) REFERENCES `t__universite` (`id`);

--
-- Contraintes pour la table `t__formation__universite`
--
ALTER TABLE `t__formation__universite`
  ADD CONSTRAINT `FK_69F4D6342A52F05F` FOREIGN KEY (`universite_id`) REFERENCES `t__universite` (`id`);

--
-- Contraintes pour la table `t__image__universite`
--
ALTER TABLE `t__image__universite`
  ADD CONSTRAINT `FK_207771F82A52F05F` FOREIGN KEY (`universite_id`) REFERENCES `t__universite` (`id`);

--
-- Contraintes pour la table `t__langue__universite`
--
ALTER TABLE `t__langue__universite`
  ADD CONSTRAINT `FK_8F8174E65200282E` FOREIGN KEY (`formation_id`) REFERENCES `t__formation__universite` (`id`);

--
-- Contraintes pour la table `t__universite`
--
ALTER TABLE `t__universite`
  ADD CONSTRAINT `FK_87610DDA4DE7DC5C` FOREIGN KEY (`adresse_id`) REFERENCES `t__adresse__universite` (`id`);

--
-- Contraintes pour la table `t__ville__universite`
--
ALTER TABLE `t__ville__universite`
  ADD CONSTRAINT `FK_96A3DE36A6E44244` FOREIGN KEY (`pays_id`) REFERENCES `t__pays__universite` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
