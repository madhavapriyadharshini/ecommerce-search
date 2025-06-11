CREATE DATABASE IF NOT EXISTS ecommerce;
USE ecommerce;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT,
    price DECIMAL(10,2)
);

INSERT INTO products (name, description, price) VALUES
('iPhone 14', 'Apple smartphone with A16 chip', 999.99),
('Galaxy S22', 'Samsung flagship phone', 899.99),
('Sony Headphones', 'Noise cancelling wireless headphones', 199.99);
