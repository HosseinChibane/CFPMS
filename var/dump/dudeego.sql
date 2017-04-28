-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 28 Avril 2017 à 18:57
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

CREATE TABLE `e_a__demande__inscription` (
  `id` int(11) NOT NULL,
  `etat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation` datetime NOT NULL,
  `miseajour` datetime NOT NULL,
  `verifier` tinyint(1) NOT NULL,
  `typeinscription_id` int(11) DEFAULT NULL,
  `documentinscription_id` int(11) NOT NULL,
  `physique_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `e_a__document`
--

CREATE TABLE `e_a__document` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation` datetime NOT NULL,
  `miseajour` datetime NOT NULL,
  `verifier` tinyint(1) NOT NULL,
  `physique_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `e_a__document__inscription`
--

CREATE TABLE `e_a__document__inscription` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `physique_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `e_a__morale`
--

CREATE TABLE `e_a__morale` (
  `id` int(11) NOT NULL,
  `raisonsocial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siret` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datecreation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `personne_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `e_a__personne`
--

CREATE TABLE `e_a__personne` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `rue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codepostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gsm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `courriel` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `e_a__personne`
--

INSERT INTO `e_a__personne` (`id`, `numero`, `rue`, `codepostal`, `ville`, `pays`, `gsm`, `telephone`, `courriel`) VALUES
(1, 2, 'Rue des tisserands', '76770', '(Le) Houlme', 'France', '0616353468', '0616353468', 'chibanehossein@gmail.com'),
(2, 2, 'Rue des tisserands', '76770', 'Houlme', 'France', '0616353468', '0616353468', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `e_a__physique`
--

CREATE TABLE `e_a__physique` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datenaissance` datetime NOT NULL,
  `numerocarteid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `personne_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `e_a__physique`
--

INSERT INTO `e_a__physique` (`id`, `nom`, `prenom`, `datenaissance`, `numerocarteid`, `personne_id`) VALUES
(1, 'CHIBANE', 'Hossein', '2017-12-31 00:00:00', 'id', 1),
(2, 'truc', 'Hossein', '2017-04-11 00:00:00', 'test', 2);

-- --------------------------------------------------------

--
-- Structure de la table `e_a__type__inscription`
--

CREATE TABLE `e_a__type__inscription` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
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
  `physique_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `physique_id`) VALUES
(1, 'hosseinchibane', 'hosseinchibane', 'chibanehossein@gmail.com', 'chibanehossein@gmail.com', 1, NULL, '$2y$13$2X.GAdq.PGHv.NYns0DFfu07SGSno.QKzTMref74h8/2aelMUu/A6', '2017-04-27 15:48:43', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 1),
(2, 'user', 'user', 'test@gmail.com', 'test@gmail.com', 1, NULL, '$2y$13$/j3RH1Oh41WlsSQ3gLgI9uc.azZoJFvRrw7ZpIQbMxYhY1vdp020a', '2017-04-28 14:55:31', NULL, NULL, 'a:0:{}', 2);

-- --------------------------------------------------------

--
-- Structure de la table `f_form_campus`
--

CREATE TABLE `f_form_campus` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `f_form_formation`
--

CREATE TABLE `f_form_formation` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `f_form_formation`
--

INSERT INTO `f_form_formation` (`id`, `libelle`) VALUES
(1, 'Kinésithérapeute'),
(2, 'Dentiste'),
(3, 'Psychologue'),
(4, 'Audioprothésiste'),
(5, 'Biotechnologue'),
(6, 'Pharmacien'),
(7, 'Médecin'),
(8, 'Vétérinaire'),
(9, 'Infirmier'),
(10, 'Sciences et techniques'),
(11, 'Podologie'),
(12, 'Orthopédiste'),
(13, 'Science de la santé'),
(14, 'Physiothérapie'),
(15, 'Nutrition'),
(16, 'Prothésiste dentaire');

-- --------------------------------------------------------

--
-- Structure de la table `f_form_langue`
--

CREATE TABLE `f_form_langue` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `f_form_langue`
--

INSERT INTO `f_form_langue` (`id`, `libelle`) VALUES
(1, 'Français'),
(2, 'Espagnol'),
(3, 'Anglais');

-- --------------------------------------------------------

--
-- Structure de la table `f_form_partenaire`
--

CREATE TABLE `f_form_partenaire` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `f_form_pays`
--

CREATE TABLE `f_form_pays` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `f_form_pays`
--

INSERT INTO `f_form_pays` (`id`, `libelle`) VALUES
(1, 'Espagne'),
(2, 'Chypre'),
(3, 'Luxembourg'),
(4, 'Portugal'),
(5, 'Maroc'),
(6, 'Hongrie'),
(7, 'Pologne'),
(8, 'Roumanie');

-- --------------------------------------------------------

--
-- Structure de la table `f_form_preparation`
--

CREATE TABLE `f_form_preparation` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `f_form_universite`
--

CREATE TABLE `f_form_universite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `f_form_universite`
--

INSERT INTO `f_form_universite` (`id`, `libelle`) VALUES
(1, 'Université européenne de Madrid'),
(2, 'Université européenne de Valence'),
(3, 'Universidad Europea de Canarias'),
(4, 'Universidad Católica San Antonio de Murcia'),
(5, 'Universidad Francisco de Vitoria de Madrid'),
(6, 'Université Camilo José Cela'),
(7, 'Blanquerna - Universitat Ramon Llull'),
(8, 'San Jorge University'),
(9, 'Catholic University of Ávila'),
(10, 'L’Université de Manresa'),
(11, 'International University of Catalonia'),
(12, 'CEU San Pablo University'),
(13, 'Université de Navarre'),
(14, 'El Centro Antonio de Solis Sevilla'),
(15, 'Université européenne de Chypre'),
(16, 'McDaniel College Budapest'),
(17, 'Université de Budapest'),
(18, 'Université de Pécs'),
(19, 'Université de Szeged'),
(20, 'Szent István University'),
(21, 'Lunex University'),
(22, 'Université internationale de Casablanca'),
(23, 'Gdańsk Medical University'),
(24, 'Université Jagellon'),
(25, 'Université de Łódź'),
(26, 'Université de Lublin'),
(27, 'Université de Poznań'),
(28, 'Université de Varsovie'),
(29, 'Université de Wrocław  '),
(30, 'Universidade Atlântica'),
(31, 'Instituto Piaget de Almada'),
(32, 'Université Carol Davila de Bucarest'),
(33, 'Université Ovidius de Constanta'),
(34, 'Université de médecine et pharmacie Grigore T. Popa'),
(35, 'Université Victor Babes de Timisoara'),
(36, 'Université de Târgu Mures '),
(37, 'Université Vasile Goldis d’Arad'),
(38, 'Université  Iuliu Hațieganu'),
(39, 'Université de Oradea');

-- --------------------------------------------------------

--
-- Structure de la table `t__admission__universite`
--

CREATE TABLE `t__admission__universite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `retentionadmission_id` int(11) NOT NULL,
  `requisadmission_id` int(11) NOT NULL,
  `documentadmission_id` int(11) NOT NULL,
  `testadmission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__admission__universite`
--

INSERT INTO `t__admission__universite` (`id`, `libelle`, `retentionadmission_id`, `requisadmission_id`, `documentadmission_id`, `testadmission_id`) VALUES
(1, 'blablabla', 3, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t__adresse__universite`
--

CREATE TABLE `t__adresse__universite` (
  `id` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `rue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ville_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__adresse__universite`
--

INSERT INTO `t__adresse__universite` (`id`, `numero`, `rue`, `ville_id`) VALUES
(1, 2, 'rue des tisserands', NULL),
(2, NULL, 'Calle Tajo, s/n\r\n\r\n', 35),
(3, 30, 'Avda. Aragón, \r\n', 36),
(4, 1, 'Calle Inocencio García,\r\n', 47),
(5, 135, 'Av. de los Jerónimos,\r\n', 48),
(6, NULL, 'Carretera Pozuelo a Majadahonda, \r\n', 49),
(7, NULL, 'Urb. Villafranca del Castillo, Calle ', 50),
(8, 49, 'Castillo de Alarcón\r\n', 51),
(9, 47, 'Passeig de Sant Gervasi,', 52),
(10, NULL, 'Autovía Mudéjar,\r\n', 53),
(11, NULL, 'S/N, Calle de los Canteros\r\n', 54),
(12, 4, 'Av. Universitària,\r\n', 55),
(13, 22, 'Carrer de la Immaculada, ', 56),
(14, 18, 'Campus de Moncloa, Calle Julián Romea, \r\n', 57),
(15, 1, 'Calle de Irunlarrea,', 58),
(17, 14, 'Paseo Miguel Unamuno,', 59);

-- --------------------------------------------------------

--
-- Structure de la table `t__aide__financiere__universite`
--

CREATE TABLE `t__aide__financiere__universite` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `tauxacception` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__aide__financiere__universite`
--

INSERT INTO `t__aide__financiere__universite` (`id`, `type`, `montant`, `tauxacception`) VALUES
(1, 'test', '5000.00', '70');

-- --------------------------------------------------------

--
-- Structure de la table `t__calendrier__universite`
--

CREATE TABLE `t__calendrier__universite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__calendrier__universite`
--

INSERT INTO `t__calendrier__universite` (`id`, `libelle`) VALUES
(1, 'Semestre'),
(2, 'Continue'),
(3, 'Diffèrent selon programme'),
(4, 'Quadrimestre'),
(5, 'Autre année académique'),
(6, 'Trimestre'),
(7, 'Quatre-Un-Quatre-Plan'),
(8, 'Non applicable'),
(9, 'Nul');

-- --------------------------------------------------------

--
-- Structure de la table `t__categorie__institution__universite`
--

CREATE TABLE `t__categorie__institution__universite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__categorie__institution__universite`
--

INSERT INTO `t__categorie__institution__universite` (`id`, `libelle`) VALUES
(1, 'Public Institution'),
(2, 'Institut privé à but lucratif'),
(3, 'Institut privé à but non lucratif');

-- --------------------------------------------------------

--
-- Structure de la table `t__categorie__universite`
--

CREATE TABLE `t__categorie__universite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__categorie__universite`
--

INSERT INTO `t__categorie__universite` (`id`, `libelle`) VALUES
(1, 'Instituts de recherche'),
(2, 'Établissements d\'Art Libéral'),
(3, 'Master\'s Colleges'),
(4, 'Associate\'s Colleges'),
(5, 'Établissements spéciaux');

-- --------------------------------------------------------

--
-- Structure de la table `t__date__universite`
--

CREATE TABLE `t__date__universite` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `universite_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `t__diplome__universite`
--

CREATE TABLE `t__diplome__universite` (
  `id` int(11) NOT NULL,
  `niveau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intitule` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__diplome__universite`
--

INSERT INTO `t__diplome__universite` (`id`, `niveau`, `intitule`) VALUES
(1, 'Master', 'Politique');

-- --------------------------------------------------------

--
-- Structure de la table `t__document__admission__universite`
--

CREATE TABLE `t__document__admission__universite` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__document__admission__universite`
--

INSERT INTO `t__document__admission__universite` (`id`, `nom`, `description`, `contenu`, `url`, `alt`) VALUES
(1, 'PDF universite', 'blaglbblalba', 'dossier inscription', 'url ici', 'alt logo');

-- --------------------------------------------------------

--
-- Structure de la table `t__frais__inscription__universite`
--

CREATE TABLE `t__frais__inscription__universite` (
  `id` int(11) NOT NULL,
  `coutscolariteinterne` decimal(10,2) NOT NULL,
  `coutscolariteexterne` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__frais__inscription__universite`
--

INSERT INTO `t__frais__inscription__universite` (`id`, `coutscolariteinterne`, `coutscolariteexterne`) VALUES
(1, '10000.00', '20000.00');

-- --------------------------------------------------------

--
-- Structure de la table `t__image__universite`
--

CREATE TABLE `t__image__universite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `universite_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__image__universite`
--

INSERT INTO `t__image__universite` (`id`, `libelle`, `url`, `alt`, `universite_id`) VALUES
(2, 'Universidad Europea ', 'https://lh4.googleusercontent.com/-JDYCauk06Lw/AAAAAAAAAAI/AAAAAAAAARw/HE1LHb3v7Qs/photo.jpg', 'Universidad Europea ', 5),
(3, 'Universidad Europea ', 'https://lh4.googleusercontent.com/-JDYCauk06Lw/AAAAAAAAAAI/AAAAAAAAARw/HE1LHb3v7Qs/photo.jpg', 'Universidad Europea ', 6),
(4, 'Universidad Europea ', 'https://lh4.googleusercontent.com/-JDYCauk06Lw/AAAAAAAAAAI/AAAAAAAAARw/HE1LHb3v7Qs/photo.jpg', 'Universidad Europea ', 7);

-- --------------------------------------------------------

--
-- Structure de la table `t__information__universite`
--

CREATE TABLE `t__information__universite` (
  `id` int(11) NOT NULL,
  `programme` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appprentissage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orientation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emploi` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__information__universite`
--

INSERT INTO `t__information__universite` (`id`, `programme`, `appprentissage`, `orientation`, `emploi`) VALUES
(1, 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `t__lieu__universite`
--

CREATE TABLE `t__lieu__universite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__lieu__universite`
--

INSERT INTO `t__lieu__universite` (`id`, `libelle`) VALUES
(1, 'Ville : Grande'),
(2, 'Banlieue : Grande'),
(3, 'Ville : Petite'),
(4, 'Ville : Moyenne'),
(5, 'Rural : Périphérie'),
(6, 'Commune : Isolée'),
(7, 'Commune : Isolée'),
(8, 'Commune : Loin'),
(9, 'Autre');

-- --------------------------------------------------------

--
-- Structure de la table `t__logement__universite`
--

CREATE TABLE `t__logement__universite` (
  `id` int(11) NOT NULL,
  `capacitedortoir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__logement__universite`
--

INSERT INTO `t__logement__universite` (`id`, `capacitedortoir`) VALUES
(1, 50);

-- --------------------------------------------------------

--
-- Structure de la table `t__pays__universite`
--

CREATE TABLE `t__pays__universite` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__pays__universite`
--

INSERT INTO `t__pays__universite` (`id`, `nom`) VALUES
(1, 'France'),
(2, 'Espage'),
(3, 'Chypre'),
(4, 'Hongrie'),
(5, 'Luxembourg'),
(6, 'Maroc'),
(7, 'Pologne'),
(8, 'Portugal'),
(9, 'Roumanie');

-- --------------------------------------------------------

--
-- Structure de la table `t__profil__inscription__universite`
--

CREATE TABLE `t__profil__inscription__universite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__profil__inscription__universite`
--

INSERT INTO `t__profil__inscription__universite` (`id`, `libelle`) VALUES
(1, 'Non applicable'),
(2, 'Exclusivement de premier cycle en 2 ans'),
(3, 'Exclusivement de premier cycle 4 ans'),
(4, 'Très haut premier cycle'),
(5, 'Haut premier cycle'),
(6, 'Majoritairement de premier cycle'),
(7, 'Exclusivement diplôme de Maitrise');

-- --------------------------------------------------------

--
-- Structure de la table `t__relation__formation__langue__universite`
--

CREATE TABLE `t__relation__formation__langue__universite` (
  `id` int(11) NOT NULL,
  `universite_id` int(11) NOT NULL,
  `formation_id` int(11) NOT NULL,
  `langue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__relation__formation__langue__universite`
--

INSERT INTO `t__relation__formation__langue__universite` (`id`, `universite_id`, `formation_id`, `langue_id`) VALUES
(3, 5, 1, 1),
(5, 5, 1, 2),
(6, 6, 1, 2),
(7, 7, 1, 2),
(8, 5, 2, 2),
(9, 5, 2, 3),
(10, 6, 2, 2),
(11, 6, 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `t__relation__universite`
--

CREATE TABLE `t__relation__universite` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `calendrier_id` int(11) NOT NULL,
  `secteur_id` int(11) NOT NULL,
  `lieu_id` int(11) NOT NULL,
  `profilinscription_id` int(11) NOT NULL,
  `categorieinstitution_id` int(11) NOT NULL,
  `taille_id` int(11) NOT NULL,
  `adresse_id` int(11) NOT NULL,
  `admission_id` int(11) NOT NULL,
  `fraisinscription_id` int(11) NOT NULL,
  `logement_id` int(11) NOT NULL,
  `aidefinanciere_id` int(11) NOT NULL,
  `diplome_id` int(11) NOT NULL,
  `information_id` int(11) NOT NULL,
  `date_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `t__requis__admission__universite`
--

CREATE TABLE `t__requis__admission__universite` (
  `id` int(11) NOT NULL,
  `ACT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scoreACT` decimal(10,2) NOT NULL,
  `SAT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scoreSAT` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__requis__admission__universite`
--

INSERT INTO `t__requis__admission__universite` (`id`, `ACT`, `scoreACT`, `SAT`, `scoreSAT`) VALUES
(1, 'blabllab', '70.00', 'blablaba', '50.00');

-- --------------------------------------------------------

--
-- Structure de la table `t__retention__admission__universite`
--

CREATE TABLE `t__retention__admission__universite` (
  `id` int(11) NOT NULL,
  `tempsplein` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scoretempsplein` decimal(10,2) NOT NULL,
  `tempspartiel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scoretempspartiel` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__retention__admission__universite`
--

INSERT INTO `t__retention__admission__universite` (`id`, `tempsplein`, `scoretempsplein`, `tempspartiel`, `scoretempspartiel`) VALUES
(3, 'blabla', '70.00', 'blabla', '97.00');

-- --------------------------------------------------------

--
-- Structure de la table `t__secteur__universite`
--

CREATE TABLE `t__secteur__universite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__secteur__universite`
--

INSERT INTO `t__secteur__universite` (`id`, `libelle`) VALUES
(1, 'Privé sans but lucratif'),
(2, 'Privé à but lucratif'),
(3, 'Public');

-- --------------------------------------------------------

--
-- Structure de la table `t__taille__universite`
--

CREATE TABLE `t__taille__universite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__taille__universite`
--

INSERT INTO `t__taille__universite` (`id`, `libelle`) VALUES
(1, 'Moins de 1 000'),
(2, '1 000 - 4 900'),
(3, '5 000 - 9 999'),
(4, '10 000 - 19 999'),
(5, '20 000 et plus');

-- --------------------------------------------------------

--
-- Structure de la table `t__test__admission__universite`
--

CREATE TABLE `t__test__admission__universite` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__test__admission__universite`
--

INSERT INTO `t__test__admission__universite` (`id`, `type`, `score`) VALUES
(1, 'mini', '50.00');

-- --------------------------------------------------------

--
-- Structure de la table `t__universite`
--

CREATE TABLE `t__universite` (
  `id` int(11) NOT NULL,
  `nometablissement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siteinternet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__universite`
--

INSERT INTO `t__universite` (`id`, `nometablissement`, `siteinternet`, `description`) VALUES
(5, 'Université européenne de Madrid', 'http://internacional.universidadeuropea.es', 'L\'objectif prioritaire de l\'Universidad Europea consiste à augmenter les capacités de ses étudiants et à les transformer en possibilités de réussite personnelle et professionnelle.\r\nActuellement, l\'Université européenne compte en son sein plus de 16 000 étudiants en provenance des cinq continents et répartis sur trois institutions: l\'Université européenne de Madrid, l\'Université européenne de Valence et l\'Université européenne des Canaries.\r\nDepuis nos débuts en 1995, nous avons fait le pari d\'une formation novatrice, intégrale et de qualité. Nous occupons aujourd\'hui une place de leader dans le secteur espagnol de l\'enseignement supérieur privé, ce qui nous convertit en votre meilleur choix pour étudier en Espagne.'),
(6, 'Université européenne de Valence', 'http://internacional.universidadeuropea.es', 'À Valence, nous disposons d\'installations modernes pour le développement académique et professionnel des étudiants ainsi que de leurs compétences. Notre Campus urbain, au centre de Valence et en contact avec l\'activité professionnelle de la ville, est facilement accessible en transport public.'),
(7, 'Universidad Europea de Canarias', 'http://canarias.universidadeuropea.es/', 'Universidad Europea de Canarias est une institution qui vise à apporter de la valeur à la société dynamique et contribuer activement à ses progrès. Fidèle à sa vocation innovante, elle favorise la recherche appliquée et utile à la société et soutient son activité sur l\'autonomisation de l\'individu, avec un modèle éducatif international, connecté avec le monde académique professionnel et de qualité.\r\n\r\nCette philosophie est devenue la première université privée en Espagne par nombre d\'étudiants. Depuis 1999 , fait partie du réseau Laureate International Universities , un leader de l\' enseignement supérieur qui offre plus de 1.000.000 étudiants dans le monde entier dans un établissement de formation de 28 pays.');

-- --------------------------------------------------------

--
-- Structure de la table `t__ville__universite`
--

CREATE TABLE `t__ville__universite` (
  `id` int(11) NOT NULL,
  `codepostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commune` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pays_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__ville__universite`
--

INSERT INTO `t__ville__universite` (`id`, `codepostal`, `commune`, `region`, `pays_id`) VALUES
(35, '28670', 'Madrid', '', 2),
(36, '46021', 'Valencia', '', 2),
(47, '38300', 'Santa Cruz de Tenerife', '', 2),
(48, '30107', 'Murcia', '', 2),
(49, '28223', 'Madrid', '', 2),
(50, '28692', 'Madrid', '', 2),
(51, '8022', 'Barcelone', '', 2),
(52, '50830', 'Zaragoza', '', 2),
(53, '5005', 'Ávila', '', 2),
(54, '8242', 'Barcelona', '', 2),
(55, '8017', 'Barcelone', '', 2),
(56, '28003', 'Madrid', '', 2),
(57, '31008', 'Navarra', '', 2),
(58, '41020', 'Sevilla', '', 2),
(59, '1516', 'Egkomi', '', 3),
(60, '1071', 'Budapest', '', 4),
(61, 'H-1111', 'Budapest', '', 4),
(62, '7622', 'Pécs', '', 4),
(63, 'H-6720', ' Szeged', '', 4),
(64, '2100', 'Gödöllő', '', 4),
(65, '4671', 'Differdange', '', 5),
(66, '3020', 'CASABLANCA', '', 6),
(67, '80-001', 'Gdańsk', '', 7),
(68, '31-007', 'KraKow', '', 7),
(69, '90-136', 'Łódź', '', 7),
(70, '20-001', 'Lublin', '', 7),
(71, '60-512', 'Poznan', '', 7),
(72, '00-927', 'Varsovie', '', 7),
(73, '50-137', 'Wroclaw', '', 7),
(75, '2730-036', 'Barcarena', '', 8),
(76, '2805-059', 'Almada', '', 8),
(77, '30167', 'București', '', 9),
(78, '900001', 'Constanta', '', 9),
(79, '700115', 'lasi', '', 9),
(80, '300041', 'Timisoara', '', 9),
(83, '5401389', 'Targu Mures', '', 9),
(84, '', 'Arad', '', 9),
(85, '', 'Cluj-Napoca', '', 9),
(86, '', 'Oradea', '', 9);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `e_a__demande__inscription`
--
ALTER TABLE `e_a__demande__inscription`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8E069C488211AE88` (`typeinscription_id`),
  ADD KEY `IDX_8E069C48D553BD36` (`documentinscription_id`),
  ADD KEY `IDX_8E069C4853D0E798` (`physique_id`);

--
-- Index pour la table `e_a__document`
--
ALTER TABLE `e_a__document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9BA2A53753D0E798` (`physique_id`);

--
-- Index pour la table `e_a__document__inscription`
--
ALTER TABLE `e_a__document__inscription`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_50737E6953D0E798` (`physique_id`);

--
-- Index pour la table `e_a__morale`
--
ALTER TABLE `e_a__morale`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C3233FE4A21BD112` (`personne_id`);

--
-- Index pour la table `e_a__personne`
--
ALTER TABLE `e_a__personne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `e_a__physique`
--
ALTER TABLE `e_a__physique`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_DC3207A6A21BD112` (`personne_id`);

--
-- Index pour la table `e_a__type__inscription`
--
ALTER TABLE `e_a__type__inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`),
  ADD KEY `IDX_957A647953D0E798` (`physique_id`);

--
-- Index pour la table `f_form_campus`
--
ALTER TABLE `f_form_campus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_form_formation`
--
ALTER TABLE `f_form_formation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_form_langue`
--
ALTER TABLE `f_form_langue`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_form_partenaire`
--
ALTER TABLE `f_form_partenaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_form_pays`
--
ALTER TABLE `f_form_pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_form_preparation`
--
ALTER TABLE `f_form_preparation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `f_form_universite`
--
ALTER TABLE `f_form_universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__admission__universite`
--
ALTER TABLE `t__admission__universite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_57804019368E77D2` (`retentionadmission_id`),
  ADD KEY `IDX_578040194390AEB3` (`requisadmission_id`),
  ADD KEY `IDX_57804019A9DD40C0` (`documentadmission_id`),
  ADD KEY `IDX_57804019740ACC14` (`testadmission_id`);

--
-- Index pour la table `t__adresse__universite`
--
ALTER TABLE `t__adresse__universite`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_86296BDFA73F0036` (`ville_id`);

--
-- Index pour la table `t__aide__financiere__universite`
--
ALTER TABLE `t__aide__financiere__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__calendrier__universite`
--
ALTER TABLE `t__calendrier__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__categorie__institution__universite`
--
ALTER TABLE `t__categorie__institution__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__categorie__universite`
--
ALTER TABLE `t__categorie__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__date__universite`
--
ALTER TABLE `t__date__universite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_A19875A52A52F05F` (`universite_id`);

--
-- Index pour la table `t__diplome__universite`
--
ALTER TABLE `t__diplome__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__document__admission__universite`
--
ALTER TABLE `t__document__admission__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__frais__inscription__universite`
--
ALTER TABLE `t__frais__inscription__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__image__universite`
--
ALTER TABLE `t__image__universite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_207771F82A52F05F` (`universite_id`);

--
-- Index pour la table `t__information__universite`
--
ALTER TABLE `t__information__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__lieu__universite`
--
ALTER TABLE `t__lieu__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__logement__universite`
--
ALTER TABLE `t__logement__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__pays__universite`
--
ALTER TABLE `t__pays__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__profil__inscription__universite`
--
ALTER TABLE `t__profil__inscription__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__relation__formation__langue__universite`
--
ALTER TABLE `t__relation__formation__langue__universite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4D13A5E32A52F05F` (`universite_id`),
  ADD KEY `IDX_4D13A5E32AADBACD` (`langue_id`),
  ADD KEY `IDX_4D13A5E35200282E` (`formation_id`);

--
-- Index pour la table `t__relation__universite`
--
ALTER TABLE `t__relation__universite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_84F6BD8ABCF5E72D` (`categorie_id`),
  ADD KEY `IDX_84F6BD8AFF52FC51` (`calendrier_id`),
  ADD KEY `IDX_84F6BD8A9F7E4405` (`secteur_id`),
  ADD KEY `IDX_84F6BD8A6AB213CC` (`lieu_id`),
  ADD KEY `IDX_84F6BD8A66EEA446` (`profilinscription_id`),
  ADD KEY `IDX_84F6BD8ABCDFF8E2` (`categorieinstitution_id`),
  ADD KEY `IDX_84F6BD8AFF25611A` (`taille_id`),
  ADD KEY `IDX_84F6BD8A4DE7DC5C` (`adresse_id`),
  ADD KEY `IDX_84F6BD8A75C9C554` (`admission_id`),
  ADD KEY `IDX_84F6BD8A6BAB281E` (`fraisinscription_id`),
  ADD KEY `IDX_84F6BD8A58ABF955` (`logement_id`),
  ADD KEY `IDX_84F6BD8AA4F86C0A` (`aidefinanciere_id`),
  ADD KEY `IDX_84F6BD8A26F859E2` (`diplome_id`),
  ADD KEY `IDX_84F6BD8A2EF03101` (`information_id`),
  ADD KEY `IDX_84F6BD8AB897366B` (`date_id`);

--
-- Index pour la table `t__requis__admission__universite`
--
ALTER TABLE `t__requis__admission__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__retention__admission__universite`
--
ALTER TABLE `t__retention__admission__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__secteur__universite`
--
ALTER TABLE `t__secteur__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__taille__universite`
--
ALTER TABLE `t__taille__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__test__admission__universite`
--
ALTER TABLE `t__test__admission__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__universite`
--
ALTER TABLE `t__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__ville__universite`
--
ALTER TABLE `t__ville__universite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_96A3DE36A6E44244` (`pays_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `e_a__demande__inscription`
--
ALTER TABLE `e_a__demande__inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `e_a__document`
--
ALTER TABLE `e_a__document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `e_a__document__inscription`
--
ALTER TABLE `e_a__document__inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `e_a__morale`
--
ALTER TABLE `e_a__morale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `e_a__personne`
--
ALTER TABLE `e_a__personne`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `e_a__physique`
--
ALTER TABLE `e_a__physique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `e_a__type__inscription`
--
ALTER TABLE `e_a__type__inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `f_form_campus`
--
ALTER TABLE `f_form_campus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `f_form_formation`
--
ALTER TABLE `f_form_formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `f_form_langue`
--
ALTER TABLE `f_form_langue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `f_form_partenaire`
--
ALTER TABLE `f_form_partenaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `f_form_pays`
--
ALTER TABLE `f_form_pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `f_form_preparation`
--
ALTER TABLE `f_form_preparation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `f_form_universite`
--
ALTER TABLE `f_form_universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `t__admission__universite`
--
ALTER TABLE `t__admission__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__adresse__universite`
--
ALTER TABLE `t__adresse__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `t__aide__financiere__universite`
--
ALTER TABLE `t__aide__financiere__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__calendrier__universite`
--
ALTER TABLE `t__calendrier__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `t__categorie__institution__universite`
--
ALTER TABLE `t__categorie__institution__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `t__categorie__universite`
--
ALTER TABLE `t__categorie__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `t__date__universite`
--
ALTER TABLE `t__date__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `t__diplome__universite`
--
ALTER TABLE `t__diplome__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__document__admission__universite`
--
ALTER TABLE `t__document__admission__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__frais__inscription__universite`
--
ALTER TABLE `t__frais__inscription__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__image__universite`
--
ALTER TABLE `t__image__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `t__information__universite`
--
ALTER TABLE `t__information__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__lieu__universite`
--
ALTER TABLE `t__lieu__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `t__logement__universite`
--
ALTER TABLE `t__logement__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__pays__universite`
--
ALTER TABLE `t__pays__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `t__profil__inscription__universite`
--
ALTER TABLE `t__profil__inscription__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `t__relation__formation__langue__universite`
--
ALTER TABLE `t__relation__formation__langue__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `t__relation__universite`
--
ALTER TABLE `t__relation__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t__requis__admission__universite`
--
ALTER TABLE `t__requis__admission__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__retention__admission__universite`
--
ALTER TABLE `t__retention__admission__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `t__secteur__universite`
--
ALTER TABLE `t__secteur__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `t__taille__universite`
--
ALTER TABLE `t__taille__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `t__test__admission__universite`
--
ALTER TABLE `t__test__admission__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__universite`
--
ALTER TABLE `t__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `t__ville__universite`
--
ALTER TABLE `t__ville__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `e_a__demande__inscription`
--
ALTER TABLE `e_a__demande__inscription`
  ADD CONSTRAINT `FK_8E069C4853D0E798` FOREIGN KEY (`physique_id`) REFERENCES `e_a__physique` (`id`),
  ADD CONSTRAINT `FK_8E069C488211AE88` FOREIGN KEY (`typeinscription_id`) REFERENCES `e_a__type__inscription` (`id`),
  ADD CONSTRAINT `FK_8E069C48D553BD36` FOREIGN KEY (`documentinscription_id`) REFERENCES `e_a__document__inscription` (`id`);

--
-- Contraintes pour la table `e_a__document`
--
ALTER TABLE `e_a__document`
  ADD CONSTRAINT `FK_9BA2A53753D0E798` FOREIGN KEY (`physique_id`) REFERENCES `e_a__physique` (`id`);

--
-- Contraintes pour la table `e_a__document__inscription`
--
ALTER TABLE `e_a__document__inscription`
  ADD CONSTRAINT `FK_50737E6953D0E798` FOREIGN KEY (`physique_id`) REFERENCES `e_a__physique` (`id`);

--
-- Contraintes pour la table `e_a__morale`
--
ALTER TABLE `e_a__morale`
  ADD CONSTRAINT `FK_C3233FE4A21BD112` FOREIGN KEY (`personne_id`) REFERENCES `e_a__personne` (`id`);

--
-- Contraintes pour la table `e_a__physique`
--
ALTER TABLE `e_a__physique`
  ADD CONSTRAINT `FK_DC3207A6A21BD112` FOREIGN KEY (`personne_id`) REFERENCES `e_a__personne` (`id`);

--
-- Contraintes pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD CONSTRAINT `FK_957A647953D0E798` FOREIGN KEY (`physique_id`) REFERENCES `e_a__physique` (`id`);

--
-- Contraintes pour la table `t__admission__universite`
--
ALTER TABLE `t__admission__universite`
  ADD CONSTRAINT `FK_57804019368E77D2` FOREIGN KEY (`retentionadmission_id`) REFERENCES `t__retention__admission__universite` (`id`),
  ADD CONSTRAINT `FK_578040194390AEB3` FOREIGN KEY (`requisadmission_id`) REFERENCES `t__requis__admission__universite` (`id`),
  ADD CONSTRAINT `FK_57804019740ACC14` FOREIGN KEY (`testadmission_id`) REFERENCES `t__test__admission__universite` (`id`),
  ADD CONSTRAINT `FK_57804019A9DD40C0` FOREIGN KEY (`documentadmission_id`) REFERENCES `t__document__admission__universite` (`id`);

--
-- Contraintes pour la table `t__adresse__universite`
--
ALTER TABLE `t__adresse__universite`
  ADD CONSTRAINT `FK_86296BDFA73F0036` FOREIGN KEY (`ville_id`) REFERENCES `t__ville__universite` (`id`);

--
-- Contraintes pour la table `t__date__universite`
--
ALTER TABLE `t__date__universite`
  ADD CONSTRAINT `FK_A19875A52A52F05F` FOREIGN KEY (`universite_id`) REFERENCES `t__universite` (`id`);

--
-- Contraintes pour la table `t__image__universite`
--
ALTER TABLE `t__image__universite`
  ADD CONSTRAINT `FK_207771F82A52F05F` FOREIGN KEY (`universite_id`) REFERENCES `t__universite` (`id`);

--
-- Contraintes pour la table `t__relation__formation__langue__universite`
--
ALTER TABLE `t__relation__formation__langue__universite`
  ADD CONSTRAINT `FK_4D13A5E32A52F05F` FOREIGN KEY (`universite_id`) REFERENCES `t__universite` (`id`),
  ADD CONSTRAINT `FK_4D13A5E32AADBACD` FOREIGN KEY (`langue_id`) REFERENCES `f_form_langue` (`id`),
  ADD CONSTRAINT `FK_4D13A5E35200282E` FOREIGN KEY (`formation_id`) REFERENCES `f_form_formation` (`id`);

--
-- Contraintes pour la table `t__relation__universite`
--
ALTER TABLE `t__relation__universite`
  ADD CONSTRAINT `FK_84F6BD8A26F859E2` FOREIGN KEY (`diplome_id`) REFERENCES `t__diplome__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8A2EF03101` FOREIGN KEY (`information_id`) REFERENCES `t__information__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8A4DE7DC5C` FOREIGN KEY (`adresse_id`) REFERENCES `t__adresse__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8A58ABF955` FOREIGN KEY (`logement_id`) REFERENCES `t__logement__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8A66EEA446` FOREIGN KEY (`profilinscription_id`) REFERENCES `t__profil__inscription__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8A6AB213CC` FOREIGN KEY (`lieu_id`) REFERENCES `t__lieu__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8A6BAB281E` FOREIGN KEY (`fraisinscription_id`) REFERENCES `t__frais__inscription__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8A75C9C554` FOREIGN KEY (`admission_id`) REFERENCES `t__admission__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8A9F7E4405` FOREIGN KEY (`secteur_id`) REFERENCES `t__secteur__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8AA4F86C0A` FOREIGN KEY (`aidefinanciere_id`) REFERENCES `t__aide__financiere__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8AB897366B` FOREIGN KEY (`date_id`) REFERENCES `t__date__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8ABCDFF8E2` FOREIGN KEY (`categorieinstitution_id`) REFERENCES `t__categorie__institution__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8ABCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `t__categorie__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8AFF25611A` FOREIGN KEY (`taille_id`) REFERENCES `t__taille__universite` (`id`),
  ADD CONSTRAINT `FK_84F6BD8AFF52FC51` FOREIGN KEY (`calendrier_id`) REFERENCES `t__calendrier__universite` (`id`);

--
-- Contraintes pour la table `t__ville__universite`
--
ALTER TABLE `t__ville__universite`
  ADD CONSTRAINT `FK_96A3DE36A6E44244` FOREIGN KEY (`pays_id`) REFERENCES `t__pays__universite` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
