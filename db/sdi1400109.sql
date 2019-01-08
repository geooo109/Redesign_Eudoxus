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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `uni` varchar(45) NOT NULL,
  `school` varchar(45) NOT NULL,
  `dep` varchar(45) NOT NULL,
  `user_type` char(1) NOT NULL, -- 0:Student, 1:Secretary | Another approach is to create a `secretary` TABLE.

  `register_num` varchar(45), -- Arithmos Mhtrwou (Neccessary only for students)
  `phone` varchar(10),
  `semesters` int,
  `postal_address` varchar(45),
  `state` varchar(45),
  `city` varchar(45),
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- Εισαγωγή εγγραφών αυτόματα
LOCK TABLES user WRITE;
INSERT INTO user (username,password,email,name,surname,uni,school,dep,register_num,user_type)
VALUES ('Mantas','salamandra','skrabas@smiggol.gr','Anastasios','Mantas','NKUA','Science','Informatics & Telecommunications','1115201500087','0');

INSERT INTO user (username,password,email,name,surname,uni,school,dep,postal_address,state,city,user_type)
VALUES ('Nancy','111','nancykas@di.uoa.gr','Nancy','Kasimati','NKUA','Science','Informatics & Telecommunications','10631','Attikis','Athens','1');
UNLOCK TABLES;

--
-- Δομή πίνακα για τον πίνακα `book`
--
DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `sdi1400109`.`book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `course` varchar(45) NOT NULL,
  `professor` varchar(45) NOT NULL,
  `semester` int NOT NULL,
  `eudoxus_code` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- Εισαγωγή εγγραφών αυτόματα
LOCK TABLES book WRITE;
INSERT INTO book (title,author,publisher,course,professor,semester,eudoxus_code) VALUES
('C From theory to Practice','TSELIKIS TSELIKAS','TSELIKIS TSELIKAS','Introduction to Programming','P.Stamatopoulos',1,68383623),
('C in depth','Hatzigiannakis','KLEIDARITHMOS','Introduction to Programming','P.Stamatopoulos',1,68384925),
('Programming with C','N.Misirlis','NKUA','Introduction to Programming','P.Stamatopoulos',1,68403081),
('C Programming Language','BRIAN W. KERNIGHAN, DENNIS M. RITCHIE',' Pearson Education (US)','Introduction to Programming','P.Stamatopoulos',1,13956),
('Digital Design','Mano Morris Ciletti Michael','PAPASOTIRIOU','Logic Design','Antonis Paschalis',1,68406394),
('Logic Design Principles','JOHN F. WAKERLY','KLEIDARITHMOS','Logic Design','Antonis Paschalis',1,13946),

('Calculus','FINNEY R.L., WEIR M.D., GIORDANO F.R.','KRITIS','Calculus I','Kotta-Athanasiadou',2,22689021),

('Signals and Algorithms','Kalouptsidis','Diaulos','Signals and Systems','A.Karampogias',3,13946);
UNLOCK TABLES;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
