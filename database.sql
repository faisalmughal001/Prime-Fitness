CREATE DATABASE product_db;
USE product_db;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    status ENUM('tested', 'untested') NOT NULL DEFAULT 'untested'
);

INSERT INTO products (name, status) VALUES
('Product 1', 'untested'),
('Product 2', 'untested'),
('Product 3', 'tested'),
('Product 4', 'untested');
