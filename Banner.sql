-- USE quicksnacks
CREATE TABLE Banner(
	banner_id INT AUTO_INCREMENT NOT NULL,
	banner_name VARCHAR(100) NOT NULL,
	image_id INT,
	product_id INT,
	category_id INT,
	promotion_id INT,
	flag VARCHAR(20),
    CONSTRAINT pk_banner_id PRIMARY KEY (banner_id)
   -- CONSTRAINT fk_image_id FOREIGN KEY () REFERENCES (),
   -- CONSTRAINT fk_product_id FOREIGN KEY () REFERENCES (),
   -- CONSTRAINT fk_category_id FOREIGN KEY () REFERENCES (),
   -- CONSTRAINT fk_promotion_id FOREIGN KEY () REFERENCES (),
)