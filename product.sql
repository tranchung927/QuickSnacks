USE quicksnack;
CREATE TABLE product(
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`description` VARCHAR(100),
	`price` FLOAT,
	`status` VARCHAR(255), -- (active, inactive)
	`calorie` VARCHAR(255),
	`estimate_time` DATETIME,
	`category_id` INT,
	`created_date` DATETIME,
	`modified_date` DATETIME,
	`flag` INT,
	CONSTRAINT `fk_category`  FOREIGN KEY (`category_id`) REFERENCES `category`(`id`),
	CONSTRAINT `pk_product` PRIMARY KEY(`id`)
	)
 