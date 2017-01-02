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
    
    
  
    
  `num_siret` INT(10) PRIMARY KEY NOT NULL,
  `num_telephone` INT NOT NULL, 
  `heure_ouverture` TIME NOT NULL,
  `heure_fermeture` TIME NOT NULL,
  `adresse` TEXT, 
  `hcl` ENUM('YES','NO') NOT NULL DEFAULT 'NO', 
    `presence_scan_cerebral` ENUM('YES','NO') NOT NULL DEFAULT 'NO',
    `presence_angioscan` ENUM('YES','NO') NOT NULL DEFAULT 'NO',
    `presence_scan_bilan_biologique` ENUM('YES','NO') NOT NULL DEFAULT 'NO',
    `presence_scan_bilan_cardiaque` ENUM('YES','NO') NOT NULL DEFAULT 'NO',
    `presence_neurologue` ENUM('YES','NO') NOT NULL DEFAULT 'NO',

   ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

--
-- Contenu de la table `Centre`
--







 
 

