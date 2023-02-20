-- CREATE DATABASE quicksnack;
USE quickSnack;
CREATE TABLE category(
	`id` INT NOT NULL AUTO_INCREMENT,
   `name` VARCHAR(200),
   `code` VARCHAR(300),
   `description` VARCHAR(500),
   `status` VARCHAR(20), -- (active,inactive)
   `parent_id` INT,
	`created_date` DATETIME,
	`modified_date` DATETIME,
	`flag` INT,
	CONSTRAINT `pk_category` PRIMARY KEY (`id`)
)