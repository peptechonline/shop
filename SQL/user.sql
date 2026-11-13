CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    shop_name VARCHAR(255) NOT NULL,
    contact_no VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    shop_address TEXT,
    password VARCHAR(255) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(20)
);

CREATE TABLE customer_data (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    contact VARCHAR(20) NOT NULL,
    customer_address VARCHAR(255),
    model VARCHAR(255),
    problem_device VARCHAR(255),
    repairing_cost INT,
    advancement_payment INT,
    issue_data VARCHAR(255),
    delivery_date VARCHAR(255),   -- Using VARCHAR instead of DATE
    received_by VARCHAR(255),
    assigned_technician VARCHAR(255),
    imei VARCHAR(20),
    password VARCHAR(255),
    note VARCHAR(255),
    sim VARCHAR(5),                -- Store if SIM is checked as "yes" or "no"
    sim_tray VARCHAR(5),          -- Store if SIM Tray is checked as "yes" or "no"
    back_panel VARCHAR(5),         -- Store if Back Panel is checked as "yes" or "no"
    admin_id INT,
    status VARCHAR(255)
);

-- CREATE TABLE customer_info (
--     customer_id INT AUTO_INCREMENT PRIMARY KEY,
--     customer_name VARCHAR(255) NOT NULL,
--     contact VARCHAR(20) NOT NULL UNIQUE,
--     customer_address VARCHAR(255),
    
-- );

-- CREATE TABLE product_info (
--     product_id INT AUTO_INCREMENT PRIMARY KEY,
--     customer_id INT,   -- Foreign key
--     model VARCHAR(255),
--     problem_device VARCHAR(255),
--     repairing_cost INT,
--     advancement_payment INT,
--     received_by VARCHAR(255),
--     assigned_technician VARCHAR(255),
--     note VARCHAR(255)
--     delivery_date VARCHAR(255),
--     imei VARCHAR(20),
--     password VARCHAR(255),
--     sim VARCHAR(5),   -- Store if SIM is checked as "yes" or "no"
--     sim_tray VARCHAR(5),   -- Store if SIM Tray is checked as "yes" or "no"
--     back_panel VARCHAR(5),  -- Store if Back Panel is checked as "yes" or "no"
--     FOREIGN KEY (customer_id) REFERENCES customer_info(customer_id)
-- );
