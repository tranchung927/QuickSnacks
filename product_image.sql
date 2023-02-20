USE quickSnack;
CREATE TABLE product_image(
	`id` INT NOT NULL AUTO_INCREMENT,
	`product_id` INT,
   `image_id` INT,
   CONSTRAINT `fk_pro` FOREIGN KEY (`product_id`) REFERENCES `product`(`id`),
   CONSTRAINT `fk_image` FOREIGN KEY (image_id) REFERENCES `image`(`id`),
   CONSTRAINT `pk_product_image` PRIMARY KEY(`id`)
)