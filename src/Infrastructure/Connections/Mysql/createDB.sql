-- CREATE DATABASE IN MYSQL
CREATE DATABASE grammar;

-- CREATE TABLE
CREATE TABLE `grammar`.`wh_question` (`id` INT(10) NOT NULL AUTO_INCREMENT , `question_type` VARCHAR(50) NOT NULL , `name_in_english` VARCHAR(200) NOT NULL , `name_in_spanish` VARCHAR(200) NOT NULL , `success` INT(10) NOT NULL , `failures` INT(10) NOT NULL , `average` FLOAT(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `grammar`.`common_questions` (`id` INT(10) NOT NULL AUTO_INCREMENT , `common_questions_in_spanish` VARCHAR(200) NOT NULL , `common_questions` VARCHAR(200) NOT NULL , `response` VARCHAR(200) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
