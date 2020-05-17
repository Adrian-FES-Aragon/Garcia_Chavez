DROP SCHEMA IF EXISTS `fes_aragon`;
CREATE SCHEMA IF NOT EXISTS `fes_aragon` DEFAULT CHARACTER SET utf8 collate utf8_spanish2_ci;
USE `fes_aragon`;
CREATE TABLE `ALUMNO`
(
    `user_name` TEXT NOT NULL,
    `career` TEXT NOT NULL,
    `code` INT(10) NOT NULL,
    `address` TEXT NOT NULL,
    `number` INT(10) NOT NULL,
    `email` TEXT NOT NULL,
    `password` VARCHAR(8) NOT NULL,
    `registration_date` DATETIME NOT NULL,
    `permissions` INT (1) NOT NULL DEFAULT '2'
) ENGINE=INNODB DEFAULT CHARSET=utf8;
INSERT INTO `ALUMNO`(`user_name`, `career`, `code`, `address`,`number`, `email`, `password`, `registration_date`, `permissions`) 
VALUES ('Pepe', 'ico', 123456, 'tijuana ajua12', 510258792,'pussydestroyerx99x@hotmail.com','123456x', '2020-05-12 14:11:00', 1);
ALTER TABLE `ALUMNO`
    ADD PRIMARY KEY(`code`);
COMMIT;
