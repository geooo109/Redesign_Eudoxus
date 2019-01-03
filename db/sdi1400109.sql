-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: localhost:3306
-- Χρόνος δημιουργίας: 31 Δεκ 2018 στις 02:26:05
-- Έκδοση διακομιστή: 5.7.24-0ubuntu0.18.04.1
-- Έκδοση PHP: 7.2.10-0ubuntu0.18.04.1


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `sdi1400109`
--
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `sdi1400109` DEFAULT CHARACTER SET utf8 ;
USE `sdi1400109` ;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user`
--
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `sdi1400109`.`user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `postal_address` varchar(45) NOT NULL,
  `county` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- Εισαγωγή εγγραφών αυτόματα
LOCK TABLES user WRITE;
INSERT INTO user (id,username,password,email,postal_address,county,city) VALUES (1,'Mantas','salamandra','skrabas@smiggol.gr','17456','EL dorado', 'Buenors Aires');
UNLOCK TABLES;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
