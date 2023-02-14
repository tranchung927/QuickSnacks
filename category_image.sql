USE quickSnack;
CREATE TABLE category_image(
	`id` INT NOT NULL AUTO_INCREMENT,
	`category_id` INT,
	`image_id` INT,
	CONSTRAINT `fk_cate` FOREIGN KEY (`category_id`) REFERENCES `category`(`id`),
   CONSTRAINT `fk_image_cate` FOREIGN KEY (`image_id`) REFERENCES `image`(`id`),
   CONSTRAINT `pk_category_image` PRIMARY KEY(`id`)
)