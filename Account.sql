-- USE quicksnacks
CREATE TABLE Account(
	account_id INT AUTO_INCREMENT NOT NULL,
	first_name VARCHAR(100) NOT NULL,
	last_name VARCHAR(100) NOT NULL,
	email VARCHAR(255),
	phone VARCHAR(50) NOT NULL,
	image_id INT,
	flag VARCHAR(20),
    CONSTRAINT pk_account_id PRIMARY KEY (account_id)
   -- CONSTRAINT fk_image_id FOREIGN KEY () REFERENCES (),
)