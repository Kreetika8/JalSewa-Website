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

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL
);

