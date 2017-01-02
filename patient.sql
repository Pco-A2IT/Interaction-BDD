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
  `ID_patient` int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `civilite` enum('Mr','Mme') NOT NULL,
  `date_naissance` date NOT NULL,  
  `num_telephone` INT NOT NULL ,    
  `ville` varchar(255) NOT NULL,
  `code_postal` varchar(255) NOT NULL ,       
  `adresse` varchar(255) NOT NULL ,  
  `date_creation_dossier` date NOT NULL, 
    `num_medecin_traitant` INT,
    `num_urgentiste` INT NOT NULL,
  /*`scan_cerebral` boolean not null default 0 , 
  `angioscan` boolean not null default 0 ,  
  `bilan_biologique` boolean not null default 0 ,
    `irmp` boolean not null default 0 ,
    `irmr` boolean not null default 0 ,  
  `bilan_cardiaquep` boolean not null default 0 ,
    `bilan_cardiaquer` boolean not null default 0 ,
    `neurop` boolean not null default 0 ,
    `neuror` boolean not null default 0 ,
  `recap_mt` boolean not null default 0 ,
    `recap_mu` boolean not null default 0 ,  */    
  ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patient`
--



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
