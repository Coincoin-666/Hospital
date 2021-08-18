#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `PlurimaMortisImago` CHARACTER SET 'utf8';
USE `PlurimaMortisImago`;

#------------------------------------------------------------
# Table: patients
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `patients`(
        `id`        INT (11) AUTO_INCREMENT  NOT NULL ,
        `lastname`  VARCHAR (25) NOT NULL ,
        `firstname` VARCHAR (25) NOT NULL ,
        `birthdate` DATE NOT NULL ,
        `phone`     VARCHAR (25) ,
        `mail`      VARCHAR (100) NOT NULL ,
        PRIMARY KEY (`id`)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: appointments
#------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `appointments`(
        `id`         INT (11) AUTO_INCREMENT  NOT NULL ,
        `dateHour`   DATETIME NOT NULL ,
        `idPatients` INT (11) NOT NULL ,
        PRIMARY KEY (`id`)
)ENGINE=InnoDB;

ALTER TABLE `appointments` ADD CONSTRAINT FK_appointments_id_patients FOREIGN KEY (`idPatients`) REFERENCES `patients`(`id`);


-- Requête fonctionnelle, attention, il n'y avait pas la colonne death.
-- Ajout d'un patient -> requête à intégrer dans une fonction qui se déclenchera après l'envoi des données.
INSERT INTO `patients` (`lastname`, `firstname`, `birthdate`, `phone`, `mail`)
VALUES ('Jojo', 'Juju', '25/01/14', '09867675879', 'ajhjfe@fjfldj.fr');