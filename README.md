

while using this website your user data and shipping data will be store in phpXampp sever.... 
You can create database in phpXampp server....

 1: dbname   shipping_db
 
I: CREATE TABLE  shipping_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address TEXT NOT NULL,
    grand_total DECIMAL(10, 2) NOT NULL
);


II: CREATE TABLE  shipping_products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    shipping_id INT,
    image VARCHAR(255),
    name VARCHAR(100),
    price DECIMAL(10, 2),
    FOREIGN KEY (shipping_id) REFERENCES shipping_info(id)
);


2: dbname   shopping 

import shopping.sql they are located in login_system > shopping.sql


3: for Run: http://localhost/glam/glam/login.php



about website
this E-commerce website glam skincare & cosmetics provides our customers various types of cosmetices 
like, lipstick, blust, maskara, kajal etc.

