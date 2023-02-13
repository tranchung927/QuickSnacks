-- CREATE DATABASE quicksnack;
USE quicksnack;
CREATE TABLE image_table (
	image_table_id INT NOT NULL AUTO_INCREMENT,
	image_data VARCHAR(1000),
	image_description VARCHAR(200),
	created_date DATETIME,
	modified_date DATETIME,
	flag INT,
	CONSTRAINT pk_image PRIMARY KEY(image_table_id)
)