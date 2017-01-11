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
-- Structure de la table `Examen`
--

CREATE TABLE IF NOT EXISTS `Examen` (
    
    
  
  `typeExamen` varchar(255) NOT NULL DEFAULT '-', 
  `planifie` enum('YES','NO') NOT NULL, 
  `effectue` enum('YES','NO') NOT NULL, 
  `details` varchar(255) NOT NULL DEFAULT '-',

   KEY `typeExamen` (`typeExamen`)) 
   ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

--
-- Contenu de la table `Examen`
--







 
 

