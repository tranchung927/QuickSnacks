USE quicksnack;
CREATE TABLE product_image(
	product_image_id INT NOT NULL AUTO_INCREMENT,
	product_id INT,
   image_id INT,
   CONSTRAINT fk_pro FOREIGN KEY (product_id) REFERENCES product(product_id),
   CONSTRAINT fk_image FOREIGN KEY (image_id) REFERENCES image_table(image_table_id),
   CONSTRAINT pk_product_image PRIMARY KEY(product_image_id)
)