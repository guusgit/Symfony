-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 10 Avril 2014 à 12:15
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `evrything`
--
CREATE DATABASE IF NOT EXISTS `evrything` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `evrything`;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `taille` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `publication` tinyint(1) NOT NULL,
  `nbCommentaire` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `date`, `titre`, `taille`, `image`, `auteur`, `contenu`, `publication`, `nbCommentaire`) VALUES
(1, '2014-03-06 15:36:50', 'Coucou les enfants!!!!', 'grand', 'bundles/evrythingblog/images/wei2013.jpg', 'Bibi', 'C''était vraiment super et on s''est bien amusé.', 1, 3),
(2, '2014-02-04 20:05:21', 'actualités', 'grand', 'bundles/evrythingblog/images/wei2013.jpg', 'Bibi', 'C''était vraiment super et on s''est bien amusé.', 1, 0),
(3, '2014-02-04 20:11:27', 'actualités', 'grand', 'bundles/evrythingblog/images/wei2013.jpg', 'Bibi', 'C''était vraiment super et on s''est bien amusé.', 1, 0),
(4, '2014-02-04 20:13:37', 'actualités', 'grand', 'bundles/evrythingblog/images/wei2013.jpg', 'Bibi', 'C''était vraiment super et on s''est bien amusé.', 1, 0),
(5, '2014-02-04 20:15:25', 'actualités', 'grand', 'bundles/evrythingblog/images/wei2013.jpg', 'Bibi', 'C''était vraiment super et on s''est bien amusé.', 1, 0),
(6, '2014-02-04 20:45:03', 'actualités', 'grand', 'bundles/evrythingblog/images/wei2013.jpg', 'Bibi', 'C''était vraiment super et on s''est bien amusé.', 1, 0),
(7, '2014-02-07 16:45:31', 'actualités', 'grand', 'bundles/evrythingblog/images/wei2013.jpg', 'Bibi', 'C''était vraiment super et on s''est bien amusé.', 1, 0),
(8, '2014-02-07 16:55:55', 'actualités', 'petitG', 'bundles/evrythingblog/images/wei2013.jpg', 'Bibi', 'swaaaaaaaaaaaggggggggggg!!!!!!', 1, 0),
(9, '2014-02-07 16:56:30', 'actualités', 'petitD', 'bundles/evrythingblog/images/wei2013.jpg', 'Bibi', 'swaaaaaaaaaaaggggggggggg!!!!!!', 1, 0),
(11, '2014-02-13 15:19:45', 'actualités', 'petitD', 'bundles/evrythingblog/images/wei2013.jpg', 'Bibi', 'swaaaaaaaaaaaggggggggggg!!!!!!', 1, 0),
(12, '2014-02-14 08:39:07', 'actualités', 'petitD', 'bundles/evrythingblog/images/wei2013.jpg', 'Bibi', 'swaaaaaaaaaaaggggggggggg!!!!!!', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `article_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E16CE76B7294869C` (`article_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `auteur`, `contenu`, `date`, `article_id`) VALUES
(1, 'Bobo', 'On veut les photos !', '2014-02-13 15:19:45', 11),
(2, 'Daminou', 'Les photos arrivent !', '2014-02-13 15:19:45', 11),
(3, 'Bobo', 'On veut les photos !', '2014-02-14 08:39:07', 12),
(4, 'Daminou', 'Les photos arrivent !', '2014-02-14 08:39:07', 12),
(5, 'Damien', 'Hello Gentleman!!!!!', '2014-02-25 21:07:49', 1),
(6, 'Damien', 'Hello Gentleman 2!!!!!', '2014-02-25 21:10:00', 1),
(7, 'Damien', 'Hello Gentleman 3!!!!!', '2014-02-25 21:16:22', 1),
(8, 'Damien', 'Hello Gentleman 3!!!!!', '2014-03-06 15:36:49', 1);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_E16CE76B7294869C` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
