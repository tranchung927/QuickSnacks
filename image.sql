USE quicksnack;
CREATE TABLE image (
	`id` INT NOT NULL AUTO_INCREMENT,
	`image_data` VARCHAR(1000),
	`description` VARCHAR(1000),
	`created_date` DATETIME,
	`modified_date` DATETIME,
	`flag` INT,
	CONSTRAINT `pk_image` PRIMARY KEY(`id`)
)