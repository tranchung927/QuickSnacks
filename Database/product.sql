USE quicksnack;
CREATE TABLE product(
		product_id INT NOT NULL AUTO_INCREMENT,
	   product_name VARCHAR(200),
	   product_description VARCHAR(200),
	   product_price FLOAT,
	   product_status VARCHAR(20), -- (active, inactive)
	   product_calorie VARCHAR(30),
	   estimate_time DATETIME,
		category_id INT,
		created_date DATETIME,
		modified_date DATETIME,
		flag INT,
		CONSTRAINT pk_product PRIMARY KEY(product_id)
	)
ALTER TABLE product 
ADD FOREIGN KEY (category_id) REFERENCES category(category_id)