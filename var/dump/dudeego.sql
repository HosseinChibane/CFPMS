-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 29 Avril 2017 à 08:42
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
  `physique_id` int(11) NOT NULL,
  `typeinscription_id` int(11) DEFAULT NULL,
  `documentinscription_id` int(11) NOT NULL,
  `etat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation` datetime NOT NULL,
  `miseajour` datetime NOT NULL,
  `verifier` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `e_a__document`
--

CREATE TABLE `e_a__document` (
  `id` int(11) NOT NULL,
  `physique_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creation` datetime NOT NULL,
  `miseajour` datetime NOT NULL,
  `verifier` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `e_a__document__inscription`
--

CREATE TABLE `e_a__document__inscription` (
  `id` int(11) NOT NULL,
  `physique_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `e_a__morale`
--

CREATE TABLE `e_a__morale` (
  `id` int(11) NOT NULL,
  `personne_id` int(11) DEFAULT NULL,
  `raisonsocial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siret` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `naf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datecreation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
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

-- --------------------------------------------------------

--
-- Structure de la table `e_a__physique`
--

CREATE TABLE `e_a__physique` (
  `id` int(11) NOT NULL,
  `personne_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datenaissance` datetime NOT NULL,
  `numerocarteid` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `t__adresse__universite`
--

CREATE TABLE `t__adresse__universite` (
  `id` int(11) NOT NULL,
  `ville_id` int(11) NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `rue` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__adresse__universite`
--

INSERT INTO `t__adresse__universite` (`id`, `ville_id`, `numero`, `rue`) VALUES
(1, 1, NULL, 'Calle Tajo, ');

-- --------------------------------------------------------

--
-- Structure de la table `t__formation__universite`
--

CREATE TABLE `t__formation__universite` (
  `id` int(11) NOT NULL,
  `formation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `universite_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__formation__universite`
--

INSERT INTO `t__formation__universite` (`id`, `formation`, `universite_id`) VALUES
(1, 'Kinésithérapeute', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t__image__universite`
--

CREATE TABLE `t__image__universite` (
  `id` int(11) NOT NULL,
  `universite_id` int(11) DEFAULT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__image__universite`
--

INSERT INTO `t__image__universite` (`id`, `universite_id`, `libelle`, `url`, `alt`) VALUES
(1, 1, 'université de Madrid', 'http://madrid.universidadeuropea.es/assets/ue-site-logo-940b3da891a9162213c239cd8ccbc092.png', 'logo');

-- --------------------------------------------------------

--
-- Structure de la table `t__langue__universite`
--

CREATE TABLE `t__langue__universite` (
  `id` int(11) NOT NULL,
  `langue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `formation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__langue__universite`
--

INSERT INTO `t__langue__universite` (`id`, `langue`, `formation_id`) VALUES
(1, 'Francais', 1),
(2, 'Espagnol', 1);

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
(1, 'Espagne');

-- --------------------------------------------------------

--
-- Structure de la table `t__universite`
--

CREATE TABLE `t__universite` (
  `id` int(11) NOT NULL,
  `nometablissement` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siteinternet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `adresse_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__universite`
--

INSERT INTO `t__universite` (`id`, `nometablissement`, `siteinternet`, `description`, `adresse_id`, `image_id`) VALUES
(1, 'Université européenne de Madrid', 'http://madrid.universidadeuropea.es/', 'Somos una universidad que crece con sus estudiantes. Eliminamos fronteras y creamos ciudadanos globales con enfoque multidisciplinario y visión a futuro que les señala el camino al éxito.', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `t__ville__universite`
--

CREATE TABLE `t__ville__universite` (
  `id` int(11) NOT NULL,
  `pays_id` int(11) NOT NULL,
  `codepostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commune` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `t__ville__universite`
--

INSERT INTO `t__ville__universite` (`id`, `pays_id`, `codepostal`, `commune`, `region`) VALUES
(1, 1, '28670', 'Madrid', '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `e_a__demande__inscription`
--
ALTER TABLE `e_a__demande__inscription`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8E069C488211AE88` (`typeinscription_id`),
  ADD KEY `IDX_8E069C4853D0E798` (`physique_id`),
  ADD KEY `IDX_8E069C48D553BD36` (`documentinscription_id`);

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
-- Index pour la table `t__adresse__universite`
--
ALTER TABLE `t__adresse__universite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_86296BDFA73F0036` (`ville_id`);

--
-- Index pour la table `t__formation__universite`
--
ALTER TABLE `t__formation__universite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_69F4D6342A52F05F` (`universite_id`);

--
-- Index pour la table `t__image__universite`
--
ALTER TABLE `t__image__universite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_207771F82A52F05F` (`universite_id`);

--
-- Index pour la table `t__langue__universite`
--
ALTER TABLE `t__langue__universite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8F8174E65200282E` (`formation_id`);

--
-- Index pour la table `t__pays__universite`
--
ALTER TABLE `t__pays__universite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `t__universite`
--
ALTER TABLE `t__universite`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_87610DDA4DE7DC5C` (`adresse_id`),
  ADD UNIQUE KEY `UNIQ_87610DDA3DA5256D` (`image_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `e_a__physique`
--
ALTER TABLE `e_a__physique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `e_a__type__inscription`
--
ALTER TABLE `e_a__type__inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `t__adresse__universite`
--
ALTER TABLE `t__adresse__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__formation__universite`
--
ALTER TABLE `t__formation__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__image__universite`
--
ALTER TABLE `t__image__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__langue__universite`
--
ALTER TABLE `t__langue__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `t__pays__universite`
--
ALTER TABLE `t__pays__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__universite`
--
ALTER TABLE `t__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `t__ville__universite`
--
ALTER TABLE `t__ville__universite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- Contraintes pour la table `t__adresse__universite`
--
ALTER TABLE `t__adresse__universite`
  ADD CONSTRAINT `FK_86296BDFA73F0036` FOREIGN KEY (`ville_id`) REFERENCES `t__ville__universite` (`id`);

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
  ADD CONSTRAINT `FK_87610DDA3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `t__image__universite` (`id`),
  ADD CONSTRAINT `FK_87610DDA4DE7DC5C` FOREIGN KEY (`adresse_id`) REFERENCES `t__adresse__universite` (`id`);

--
-- Contraintes pour la table `t__ville__universite`
--
ALTER TABLE `t__ville__universite`
  ADD CONSTRAINT `FK_96A3DE36A6E44244` FOREIGN KEY (`pays_id`) REFERENCES `t__pays__universite` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
