create DATABASE jalsewa;
use jalsewa;

CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(15) NOT NULL,
    address TEXT NOT NULL,
    password VARCHAR(255) NOT NULL
);


CREATE TABLE suppliers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    factory_name VARCHAR(255) NOT NULL,
    business_number VARCHAR(255) UNIQUE NOT NULL,
    factory_address TEXT NOT NULL,
    contact_person VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    capacity INT NOT NULL,
    water_type VARCHAR(255) NOT NULL,
    business_certificate VARCHAR(255) NOT NULL,
    utility_bill VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

ALTER TABLE suppliers
ADD COLUMN water_bottle INT DEFAULT 0,
ADD COLUMN water_jar INT DEFAULT 0,
ADD COLUMN water_tanker INT DEFAULT 0;


CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,  
    customer_id VARCHAR(255),                       
    supplier_id VARCHAR(255),                        
    water_type VARCHAR(255),                         
    quantity INT,                                    
    delivery_address VARCHAR(255),                
    payment_method VARCHAR(255),                    
    status VARCHAR(255),                            
    created_date DATE DEFAULT CURRENT_DATE,        
    created_time TIME DEFAULT CURRENT_TIME          
);

ALTER TABLE orders
ADD COLUMN total_price DECIMAL(10, 2) DEFAULT 0;
