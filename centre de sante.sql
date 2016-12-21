-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Sam 06 Mars 2010 à 16:26
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bdd_plateforme`
--

-- --------------------------------------------------------

--
-- Structure de la table `Centre`
--

CREATE TABLE IF NOT EXISTS `Centre` (
    
    
  
    
  `num_siret` int(10) NOT NULL,
  `num_telephone` varchar(255) NOT NULL DEFAULT '-', 
  `heure_ouverture` TIME NOT NULL,
  `heure_fermeture` TIME NOT NULL,
  `adresse` varchar(255) NOT NULL DEFAULT '-', 
  `hcl` ENUM('YES','NO') NOT NULL DEFAULT 'NO', 
  
   KEY `num_siret` (`num_siret`)) 
   ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

--
-- Contenu de la table `Centre`
--







 
 

