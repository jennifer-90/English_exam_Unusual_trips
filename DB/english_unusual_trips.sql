-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 23 avr. 2023 à 16:22
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `english_unusual_trips`
--
CREATE DATABASE IF NOT EXISTS `english_unusual_trips` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `english_unusual_trips`;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `login`, `pwd`, `email`, `country`, `lastlogin`, `created`) VALUES
(2, 'Jennifer', '$2y$10$nGPtuhBvkWwXUsJXVPiSqO00PSwLsn4SIaY2HDmTrB9QPyU857qPm', 'Jennifer@gmail.com', NULL, NULL, '2023-04-22 00:34:05'),
(3, 'Mary', '$2y$10$GNT4cMS6XwLIoKKIJwTgteHtdUAdwXg0y8V0peCsyrM28ICnzOnU2', 'Mary@gmail.com', NULL, NULL, '2023-04-22 16:34:58'),
(4, 'François', '$2y$10$EpeiG516CFmw1eYgDlJVme9Vzk8fN4rEHAL5B3HSuNotuDOXc1ewO', 'Francois@gmail.com', NULL, NULL, '2023-04-22 16:36:09'),
(5, 'Benoit', '$2y$10$chvl59F6vnCdLBbzLPDFGuYuNMH72dftddeaXkKz0NCnVBq0xnlku', 'Benoit@gmail.com', NULL, NULL, '2023-04-22 16:42:09'),
(6, 'Julie', '$2y$10$p3.uTE6uEkvhn/SqlxnCkOW8uNylzBst3lm1EWietYMY5h8kBLuhS', 'Julie@gmail.com', NULL, NULL, '2023-04-22 18:37:45'),
(7, 'cecile', '$2y$10$RLjvtEvg6uPPBi.XfHjBvu4Fhfy85hG.8FRFbkdy206k/kJ/Mq0aq', 'cecile@gmail.com', NULL, NULL, '2023-04-23 16:23:27'),
(8, 'Olivier', '$2y$10$pHGKc9.czuZthynpMRFlO.Gc7Utio4jHjHZAuKCbq8bTPclaqYFWu', 'Olivier@gmail.com', NULL, NULL, '2023-04-23 17:55:32'),
(9, 'Jen', '$2y$10$eml3.5uL5TPeNiSUMno6VuNQjqqjiWjUs1BLk5zAR/lym0dtTYYK2', 'Jen@gmail.com', NULL, NULL, '2023-04-23 17:57:20'),
(10, 'Claire', '$2y$10$V6WdTx2nArOYvE0R1y1k/eozOns8hfu/QTWjIHUNIER0O7Lw/ru1.', 'Claire@gmail.com', NULL, NULL, '2023-04-23 17:57:43');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
