
CREATE TABLE products (
   id int(11) NOT NULL AUTO_INCREMENT,
   product_code varchar(60) NOT NULL,
   product_name varchar(60) NOT NULL,
   product_desc tinytext NOT NULL,
   product_img_name varchar(60) NOT NULL,
   price decimal(10,2) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY product_code (product_code)
) AUTO_INCREMENT=1 ;

--
-- Dumping data for table `products`
--

INSERT INTO products (id, product_code, product_name, product_desc, product_img_name, price) VALUES
(1, 'PD1001', 'Opis', 'ewdewdw', 'android-phone.jpg', 200.50),
(2, 'PD1002', 'Opis', 'ededwedwdewd', 'lcd-tv.jpg', 500.85),
(3, 'PD1003', 'opis', 'edewdewdwedwe', 'external-hard-disk.jpg', 100.00),
(4, 'PD1004', 'Opis', 'dewfvsdcd' , 'wrist-watch.jpg', 400.30);

INSERT INTO grupy VALUES('ZMZm2001'),('ZMIe2001'),('DMIe1001'),('DMZm1003'); 