/*
SQLyog Trial v13.1.5  (32 bit)
MySQL - 10.4.25-MariaDB : Database - poly_cinema
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`poly_cinema` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `poly_cinema`;

/*Table structure for table `administrator` */

DROP TABLE IF EXISTS `administrator`;

CREATE TABLE `administrator` (
  `employee_id` int(20) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(255) NOT NULL,
  `employee_email` varchar(255) NOT NULL,
  `employee_password` varchar(255) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `administrator` */

insert  into `administrator`(`employee_id`,`employee_name`,`employee_email`,`employee_password`) values 
(2,'123123123','admin123','123123123'),
(3,'1111111111111111111111','admin','111111111111111111'),
(4,'1111111111111111111111','admin','111111111111111111'),
(5,'sssssss','admin','kcg0303@gmail.com'),
(6,'asdfasdf','admin','kcg0303@gmail.com');

/*Table structure for table `cinemas` */

DROP TABLE IF EXISTS `cinemas`;

CREATE TABLE `cinemas` (
  `cinema_id` int(20) NOT NULL AUTO_INCREMENT,
  `cinema_location` varchar(255) NOT NULL,
  `screen_number` varchar(255) NOT NULL,
  `cinema_type` varchar(255) NOT NULL,
  PRIMARY KEY (`cinema_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `cinemas` */

insert  into `cinemas`(`cinema_id`,`cinema_location`,`screen_number`,`cinema_type`) values 
(3,'aaaa','aaaaaaaaaaaaaaaa ','Theater'),
(4,'aaaaaaaaaa','aaaaaaaaaaaaa ','standard');

/*Table structure for table `movies` */

DROP TABLE IF EXISTS `movies`;

CREATE TABLE `movies` (
  `movie_id` int(20) NOT NULL AUTO_INCREMENT,
  `movie_name` varchar(255) NOT NULL,
  `director_name` varchar(255) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `classification_age` varchar(255) NOT NULL,
  `movie_language` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `rate` decimal(10,0) NOT NULL,
  `cinema_id` int(20) NOT NULL,
  `std_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`movie_id`),
  KEY `cinema_id_forigin` (`cinema_id`),
  CONSTRAINT `cinema_id_forigin` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`cinema_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `movies` */

insert  into `movies`(`movie_id`,`movie_name`,`director_name`,`cast`,`discription`,`duration`,`classification_age`,`movie_language`,`genre`,`rate`,`cinema_id`,`std_image`) values 
(3,'asdf','asdf','123','123','123','123','123','132',123,3,'images/istockphoto-1182451034-612x612.jpg');

/*Table structure for table `shows` */

DROP TABLE IF EXISTS `shows`;

CREATE TABLE `shows` (
  `show_id` int(20) NOT NULL AUTO_INCREMENT,
  `show_time` time NOT NULL,
  `show_date` date NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`show_id`),
  KEY `movie_id_forigin` (`movie_id`),
  CONSTRAINT `movie_id_forigin` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `shows` */

insert  into `shows`(`show_id`,`show_time`,`show_date`,`movie_id`) values 
(1,'00:12:00','2022-12-20',3),
(2,'00:12:00','2022-12-18',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
