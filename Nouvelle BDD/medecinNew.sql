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
-- Structure de la table `Medecin`
--

CREATE TABLE IF NOT EXISTS `Medecin` (
    
 
    
  `id_medecin` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom_m` varchar(255) NOT NULL,
  `prenom_m` varchar(255) NOT NULL,
  `mail_m` varchar(255) NOT NULL,
  `telephone_m` varchar(255) NOT NULL DEFAULT '-',
   KEY `id_medecin` (`id_medecin`)) 
   ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `Medecin`
--





 
 

