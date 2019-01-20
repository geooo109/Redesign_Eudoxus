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
  `uni` varchar(128) NOT NULL,
  `school` varchar(128) NOT NULL,
  `dep` varchar(128) NOT NULL,
  `user_type` char(1) NOT NULL, -- 0:Student, 1:Secretary | Another approach is to create a `secretary` TABLE.

  `register_num` varchar(45), -- Arithmos Mhtrwou (Neccessary only for students)
  `phone` varchar(10),
  `semesters` int,
  `zipcode` varchar(45),
  `state` varchar(45),
  `city` varchar(45),
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;


--
-- Δομή πίνακα για τον πίνακα `book`
--
DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `sdi1400109`.`book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `author_id` int NOT NULL,
  `publisher_id` int NOT NULL,
  `course_id` int NOT NULL,
  `eudoxus_code` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (course_id) REFERENCES course(id),
  FOREIGN KEY (author_id) REFERENCES author(id),
  FOREIGN KEY (publisher_id) REFERENCES publisher(id)
) ENGINE = InnoDB;

--
-- Δομή πίνακα για τον πίνακα `course`
--
DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `sdi1400109`.`course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `semester` int NOT NULL,
  `professor` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

--
-- Δομή πίνακα για τον πίνακα `author`
--
DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `sdi1400109`.`author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

--
-- Δομή πίνακα για τον πίνακα `publisher`
--
DROP TABLE IF EXISTS `publisher`;
CREATE TABLE IF NOT EXISTS `sdi1400109`.`publisher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;
--
-- δομή πίνακα για τον πίνακα `point` (σημείο διανομής)
--
DROP TABLE IF EXISTS `point`;
CREATE TABLE IF NOT EXISTS `sdi1400109`.`point` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `zipcode` varchar(45) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(45) NOT NULL,
  `num` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB;

--
-- δομή πίνακα για τον πίνακα `book_point` (Junction table between `book` and `point`)
--
DROP TABLE IF EXISTS `book_point`;
CREATE TABLE IF NOT EXISTS `sdi1400109`.`book_point` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int NOT NULL,
  `point_id` int NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`point_id`) REFERENCES point(`id`) ON DELETE CASCADE,
  FOREIGN KEY (`book_id`) REFERENCES book(`id`) ON DELETE CASCADE
) ENGINE = InnoDB;


--
-- δομή πίνακα για τον πίνακα `statement` (Junction table between `user` and `book`)
--
DROP TABLE IF EXISTS `statement`;
CREATE TABLE IF NOT EXISTS `sdi1400109`.`statement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `book_id` int NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES user(`id`)  ON DELETE CASCADE,
  FOREIGN KEY (`book_id`) REFERENCES book(`id`) ON DELETE CASCADE
) ENGINE = InnoDB;


LOCK TABLES user WRITE;
INSERT INTO user (username,password,email,name,surname,uni,school,dep,register_num,user_type)
VALUES ('Mantas','salamandra','skrabas@smiggol.gr','Anastasios','Mantas','NKUA','Science','Informatics & Telecommunications','1115201500087','0');

INSERT INTO user (username,password,email,name,surname,semesters,uni,school,dep,zipcode,state,city,user_type)
VALUES ('Nancy','111','nancykas@di.uoa.gr','Nancy','Kasimati',8,'NKUA','Science','Informatics & Telecommunications','10631','Attikis','Athina','1');
UNLOCK TABLES;

LOCK TABLES author WRITE;
INSERT INTO author (name) VALUES
('TSELIKIS TSELIKAS'),('Nikolaos Misirlis'),('BRIAN W. KERNIGHAN, DENNIS M. RITCHIE'),('N.Hatzigiannakis'),('Mano Morris - Ciletti Michael'),
('Kalouptsidis'),('FINNEY R.L., WEIR M.D., GIORDANO F.R.'),('Thomas H. Cormen'),('Alfred Aho'),('JOHN F. WAKERLY'),('Tan Pang - Ning'),('David A. Patterson'),
('Dimitrios Varsos');
UNLOCK TABLES;


LOCK TABLES publisher WRITE;
INSERT INTO publisher (name) VALUES
('TSELIKIS TSELIKAS'),('KLEIDARITHMOS'),('NKUA'),('PAPASOTIRIOU'),('KRITIS'),('Diaulos'),('PAPASOTIRIOU'),('Themelio'),('TZIOLA'),('Sofia');
UNLOCK TABLES;

LOCK TABLES course WRITE;
INSERT INTO course (title,semester,professor) VALUES
('Introduction to Programming',1,'P.Stamatopoulos'),
('Logic Design',1,'Antonis Paschalis'),
('Calculus I',2,'Kotta-Athanasiadou'),
('Signals and Systems',3,'A.Karampogias'),
('Computer Architecture I',2,'D.Gkizopoulos'),
('Linear Algebra',1,'P.Raptis');
UNLOCK TABLES;


LOCK TABLES book WRITE;
INSERT INTO book (title,author_id,publisher_id,course_id,eudoxus_code) VALUES
('C From theory to Practice',1,1,1,68383623),
('C in depth',4,2,1,68384925),
('Programming with C',2,3,1,68403081),
('C Programming Language',3,8,1,13956),
('Digital Design',5,7,2,68406394),
('Logic Design Principles',10,2,2,13946),
('Calculus',7,5,3,22689021),
('Signals and Algorithms',6,6,4,13946),
('Computer Architecture 5th Edition',12,2,5,12561945),
('Introduction to Linear Algebra',13,10,6,22768417);
UNLOCK TABLES;

LOCK TABLES point WRITE;
INSERT INTO point (name,zipcode,state,city,street,num,email,phone) VALUES
('EKDOSEIS TZIOLA','10681','Attikis','Athina','Xarilaou Trikoupi',16,'Athina@tziola.gr','2103632600'),
('EKDOSEIS KLEIDARITHMOS','10672','Attikis','Athina','Akadimias',42,'shop@klidarithmos.gr','2103642887'),
('EKDOSEIS KRITIKI','11855','Attikis','Keramikos','Neurokopiou',8,'venianakis@kritiki.gr','2108211487'),
('M.GKIOURDAS','11472','Attikis','Peristeri','Sergiou Patriarxou',4,'n.karakasis@mgiurdas.gr','2103624947'),
('EKDOSEIS DIAULOS','10680','Attikis','Athina','Mauromixali',72,'info@diavlos-books.gr','2103631169'),
('EKDOSEIS THEMELIO','10680','Attikis','Athina','Solonos',84,'info@themelio-ekdoseis.gr','2103608180'),
('A.Prokopis Book Store','15772','Attikis','Zwgrafou','Hrwwn Polytechneiou',80,'ypokatastima@hotmail.com','2107774160'),
('Bookstore Kalimeris','12132','Attikis','Peristeri','El.Venizelou',120,'kalimeris@hotmail.com','2105745156'),
('Pothitos Peristeriou','12132','Attikis','Peristeri','B.Alexandrou',88,'pothitos@gmail.com','2105725177'),
('EKDOSEIS KRITIS','10556','Attikis','Athina','Thoukididou',4,'kritispress@otenet.gr','2103849020');
UNLOCK TABLES;

LOCK TABLES book_point WRITE;
INSERT INTO book_point (book_id,point_id) VALUES
(1,7),(1,8),(1,9),(2,2),(3,9),(4,8),(5,6),(6,2),(7,10),(7,7),(8,1),(8,8),(9,5),(10,2),(10,7);
UNLOCK TABLES;


---- Testing,debugging ----
-- SELECT book.title,author.name,publisher.name
-- FROM book JOIN author ON book.author_id = author.id  JOIN publisher ON book.publisher_id = publisher.id;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
