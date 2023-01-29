-- CREATE DATABASE IN MYSQL
CREATE DATABASE grammar;

-- CREATE TABLE
CREATE TABLE `grammar`.`wh_question` (`id` INT(10) NOT NULL AUTO_INCREMENT , `question_type` VARCHAR(50) NOT NULL , `name_in_english` VARCHAR(200) NOT NULL , `name_in_spanish` VARCHAR(200) NOT NULL , `success` INT(10) NOT NULL , `failures` INT(10) NOT NULL , `average` FLOAT(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

-- INSERT INTO `wh_question`(`question_type`, `name_in_english`, `name_in_spanish`, `success`, `failures`, `average`) VALUES ('What', 'What is he/she looking for?',	'¿Qué está buscando él/ella?', 10,3, 70 );
