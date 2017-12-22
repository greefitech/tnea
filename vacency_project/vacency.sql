-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `AVS1`;
CREATE TABLE `AVS1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `AVS2`;
CREATE TABLE `AVS2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Dhirajlal`;
CREATE TABLE `Dhirajlal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `ERODE_SENGUNTHAR`;
CREATE TABLE `ERODE_SENGUNTHAR` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_department` varchar(255) DEFAULT NULL,
  `chemical_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `eandi_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `EXCEL1`;
CREATE TABLE `EXCEL1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `petro_chemical_department` varchar(255) DEFAULT NULL,
  `petroleum_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `EXCEL2`;
CREATE TABLE `EXCEL2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aero_department` varchar(255) DEFAULT NULL,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `it_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `IRTT`;
CREATE TABLE `IRTT` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `automobile_ex_department` varchar(255) DEFAULT NULL,
  `automobile_department` varchar(255) DEFAULT NULL,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `it_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `KAVERY`;
CREATE TABLE `KAVERY` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `KIOT`;
CREATE TABLE `KIOT` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `KSR1`;
CREATE TABLE `KSR1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bio_tech_department` varchar(255) NOT NULL,
  `civil_ex_department` varchar(255) NOT NULL,
  `civil_department` varchar(255) NOT NULL,
  `cse_department` varchar(255) NOT NULL,
  `ece_department` varchar(255) NOT NULL,
  `eee_department` varchar(255) NOT NULL,
  `eandi_department` varchar(255) NOT NULL,
  `food_department` varchar(255) NOT NULL,
  `it_department` varchar(255) NOT NULL,
  `mechatronics_department` varchar(255) NOT NULL,
  `mech_department` varchar(255) NOT NULL,
  `nano_department` varchar(255) NOT NULL,
  `textile_department` varchar(255) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `KSR2`;
CREATE TABLE `KSR2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `automobile_department` varchar(255) DEFAULT NULL,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `it_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `KSR3`;
CREATE TABLE `KSR3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `it_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Mahendra`;
CREATE TABLE `Mahendra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aero_department` varchar(255) DEFAULT NULL,
  `agri_department` varchar(255) DEFAULT NULL,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `eandi_department` varchar(255) DEFAULT NULL,
  `it_department` varchar(255) DEFAULT NULL,
  `mechatronics_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `mechandauto_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Mahendra1`;
CREATE TABLE `Mahendra1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aero_department` varchar(255) DEFAULT NULL,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `petrochemical_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `MAHENDRA2`;
CREATE TABLE `MAHENDRA2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `automobile_department` varchar(255) DEFAULT NULL,
  `bio_medical_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `it_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Mahendra3`;
CREATE TABLE `Mahendra3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bio_medical_department` varchar(255) DEFAULT NULL,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `mechatronics_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Mahendra4`;
CREATE TABLE `Mahendra4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `et_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `muthayammal1`;
CREATE TABLE `muthayammal1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_ex_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Muthayammal2`;
CREATE TABLE `Muthayammal2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `it_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Narasu`;
CREATE TABLE `Narasu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `it_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `PAAVAI`;
CREATE TABLE `PAAVAI` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aero_department` varchar(255) DEFAULT NULL,
  `agri_department` varchar(255) DEFAULT NULL,
  `civil_ex_department` varchar(255) DEFAULT NULL,
  `civil_department` varchar(255) DEFAULT NULL,
  `chemical_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `it_department` varchar(255) DEFAULT NULL,
  `mechatronics_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `paavai1`;
CREATE TABLE `paavai1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `automobile_department` varchar(255) DEFAULT NULL,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `PAAVAI2`;
CREATE TABLE `PAAVAI2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `mechatronics_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Sengunthar1`;
CREATE TABLE `Sengunthar1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_ex_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `it_department` varchar(255) DEFAULT NULL,
  `medical_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `sengunthar2`;
CREATE TABLE `sengunthar2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `SHANMUGHA`;
CREATE TABLE `SHANMUGHA` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agri_department` varchar(255) DEFAULT NULL,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `SONA`;
CREATE TABLE `SONA` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_ex_department` varchar(255) DEFAULT NULL,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `fashion_department` varchar(255) DEFAULT NULL,
  `it_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `vidyaavikaas`;
CREATE TABLE `vidyaavikaas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_ex_department` varchar(255) DEFAULT NULL,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `mech_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Vivekanandha1`;
CREATE TABLE `Vivekanandha1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bio_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `it_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `Vivekanandha2`;
CREATE TABLE `Vivekanandha2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `civil_department` varchar(255) DEFAULT NULL,
  `cse_department` varchar(255) DEFAULT NULL,
  `ece_department` varchar(255) DEFAULT NULL,
  `eee_department` varchar(255) DEFAULT NULL,
  `it_department` varchar(255) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2017-07-26 20:00:08