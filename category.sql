CREATE TABLE category(
	category_id INT NOT NULL AUTO_INCREMENT,
   category_name VARCHAR(200),
   category_code VARCHAR(300),
   category_description VARCHAR(500),
   category_status VARCHAR(20), -- (active,inactive)
   category_parent_id INT,
	category_created_date DATETIME,
	category_modified_date DATETIME,
	flag INT,
	CONSTRAINT pk_category PRIMARY KEY (category_id)
)