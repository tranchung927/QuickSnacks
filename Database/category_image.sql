CREATE TABLE category_image(
	category_image_id INT NOT NULL AUTO_INCREMENT,
	category_id INT,
	image_id INT,
	CONSTRAINT fk_cate FOREIGN KEY (category_id) REFERENCES category(category_id),
   CONSTRAINT fk_image_cate FOREIGN KEY (image_id) REFERENCES image_table(image_table_id),
   CONSTRAINT pk_category_image PRIMARY KEY(category_image_id)
)