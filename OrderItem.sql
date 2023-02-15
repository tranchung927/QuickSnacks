-- CREATE DATABASE quicksnacks
-- USE quicksnacks
CREATE TABLE OrderItem(
	orderitem_id INT AUTO_INCREMENT NOT NULL,
    product_id INT NOT NULL,
    order_id INT NOT NULL,
    quantity INT,
    orginal_price INT NOT NULL,
    price INT,
    created_date DATETIME,
    modified_date DATETIME,
    CONSTRAINT pk_orderitem_id PRIMARY KEY (orderitem_id)
   -- CONSTRAINT fk_product_id FOREIGN KEY () REFERENCES (),
   -- CONSTRAINT fk_order_id FOREIGN KEY () REFERENCES (),
)