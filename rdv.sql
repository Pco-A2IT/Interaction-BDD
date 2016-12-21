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
-- Structure de la table `Rdv`
--

CREATE TABLE IF NOT EXISTS `Rdv` (
    
  
 
    
  `id_rdv` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_patient` int(10) NOT NULL,
  `siret_centre` int(10) NOT NULL,
  `date_heure_rdv` DATETIME NOT NULL,
  `examen` ENUM('scan_cerebral','angioscan','bilan_biologique','bilan_cardiaque') NOT NULL,
  `planifie` ENUM('YES','NO') NOT NULL DEFAULT 'NO',  
  `effectue` ENUM('YES','NO') NOT NULL DEFAULT 'NO', 
   KEY `id_rdv` (`id_rdv`))
   ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `Rdv`
--





 
 

