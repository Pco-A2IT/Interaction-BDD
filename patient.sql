-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 18 Décembre 2016 à 13:33
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_plateforme`
--

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `id_patient` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `civilite` enum('Mr','Mme') NOT NULL,
  `date_naissance` date NOT NULL,  
  `num_telephone` varchar(255) NOT NULL ,    
  `ville` varchar(255) NOT NULL,
  `code_postal` varchar(255) NOT NULL ,       
  `adresse` varchar(255) NOT NULL ,  
  `date_creation_dossier` date NOT NULL, 
  `scan_cerebral` enum('YES','NO') NOT NULL, 
  `angioscan` ENUM('YES','NO') NOT NULL ,  
  `bilan_biologique` ENUM('YES','NO') NOT NULL , 
  `bilan_cardiaque` ENUM('YES','NO') NOT NULL , 
  `traitement_termine` ENUM('YES','NO') NOT NULL , 
  KEY `id_patient` (`id_patient`))     
  ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patient`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
