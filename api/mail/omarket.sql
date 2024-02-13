-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 13 fév. 2024 à 13:58
-- Version du serveur : 8.0.31
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `omarket`
--

-- --------------------------------------------------------

--
-- Structure de la table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `createdAt`) VALUES
(1, '*zaezaeza*', '2024-02-13 13:27:16'),
(2, '*zaezaeza*', '2024-02-13 13:35:02'),
(3, '*ezae*', '2024-02-13 13:35:11'),
(4, '*ezae*', '2024-02-13 13:35:13'),
(5, '*zaeaz*', '2024-02-13 13:35:22'),
(6, '*ezaa*', '2024-02-13 13:35:31'),
(7, '*aze*', '2024-02-13 13:35:57'),
(8, '*aze*', '2024-02-13 13:36:51'),
(9, '*zeaaz*', '2024-02-13 13:36:55'),
(10, '*zaeaz*', '2024-02-13 13:45:34'),
(11, '*test*', '2024-02-13 13:46:06'),
(12, '*zaeaz*', '2024-02-13 13:46:26'),
(13, '*test*', '2024-02-13 13:48:12'),
(14, '*test*', '2024-02-13 13:48:18'),
(15, '*testJeverifladb*', '2024-02-13 13:49:16'),
(16, '*test*', '2024-02-13 13:52:59'),
(17, '*test*', '2024-02-13 13:53:55'),
(18, '*test*', '2024-02-13 13:56:38'),
(19, '*test*', '2024-02-13 13:56:42'),
(20, '*test*', '2024-02-13 13:57:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
