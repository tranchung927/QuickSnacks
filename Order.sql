-- USE quicksnacks
-- nay la bang order nhma no k cho dat ten la order nen e de thanh Ordertable
CREATE TABLE Ordertable(
	order_id INT AUTO_INCREMENT NOT NULL,
    order_name VARCHAR(255) NOT NULL,
    order_code VARCHAR(255) NOT NULL,
    status_ VARCHAR(100) NOT NULL, 
    note VARCHAR(300),
    account_id INT,
	location_id INT,
	address_id INT,
    promotion_id INT,
	created_date DATETIME NOT NULL,
	modified_date DATETIME NOT NULL,
	flag VARCHAR(20),
    CONSTRAINT pk_order_id PRIMARY KEY (order_id)
   -- CONSTRAINT fk_account_id FOREIGN KEY () REFERENCES (),
   -- CONSTRAINT fk_location_id FOREIGN KEY () REFERENCES (),
   -- CONSTRAINT fk_address_id FOREIGN KEY () REFERENCES (),
   -- CONSTRAINT fk_promotion_id FOREIGN KEY () REFERENCES (),
)