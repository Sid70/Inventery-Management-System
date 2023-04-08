-- CREATE DATABASE IF NOT EXISiphone_store;

-- ( Seller Registered ) Seller Details Table

CREATE TABLE IF NOT EXISTS seller_details(
    seller_store_id VARCHAR(8) NOT NULL PRIMARY KEY,
    seller_name VARCHAR(40) DEFAULT NULL,
    seller_email VARCHAR(50) UNIQUE DEFAULT NULL,
    seller_image VARCHAR(255),
    seller_phone_number VARCHAR(14) DEFAULT NULL,
    seller_proof VARCHAR(255),
    seller_password VARCHAR(20)
);

-- ( Admin Registered ) Admin Details Table

CREATE TABLE IF NOT EXISTS admin_details(
    employee_id VARCHAR(8) NOT NULL PRIMARY KEY,
    admin_name VARCHAR(40) DEFAULT NULL,
    admin_email VARCHAR(50) UNIQUE DEFAULT NULL,
    admin_image VARCHAR(255),
    admin_phone_number VARCHAR(14) DEFAULT NULL,
    admin_proof VARCHAR(255),
    admin_password VARCHAR(20)
);

-- Those product are available from a seller (price and images of those product) (total phone available at our inventoary)

-- iPhone 12 Pro
-- iPhone 12 Pro Max
-- iPhone 13 mini
-- iPhone 13
-- iPhone 13 Pro
-- iPhone 13 Pro Max
-- iPhone SE (3rd generation)
-- iPhone 14
-- iPhone 14 Plus
-- iPhone 14 Pro
-- iPhone 14 Pro Max

-- This table will be Filled by Admin (Table : phone_available_in_our_inventoary_record )

CREATE TABLE IF NOT EXISTS  phone_available_in_our_inventoary_record(
    model_number VARCHAR(8) NOT NULL PRIMARY KEY,
    model_name VARCHAR(30),
    iphone_image VARCHAR(255),
    total_price FLOAT(10,2)
);

-- This table will be filled by seller (store_id and iphone_model will added automatically after creating his account)

CREATE TABLE IF NOT EXISTS seller_store_record(
    store_id VARCHAR(8) NOT NULL,
    model_number VARCHAR(8),
    number_of_same_model_available INT(8),    
    FOREIGN KEY (store_id) REFERENCES seller_details(seller_store_id),
    FOREIGN KEY (model_number) REFERENCES phone_available_in_our_inventoary_record(model_number)
);

-- seller sales report ( Daily Report Submitted by the seller )


-- ( x-axis = today_date and y-axis = total_number_of_product_sell_per_day ) ( Make a Graph of this data )

CREATE TABLE IF NOT EXISTS seller_sales_report(
    today_date DATE,
    store_id VARCHAR(8) NOT NULL,
    model_number VARCHAR(8),
    number_of_same_model_sales_today INT(8),
    total_price FLOAT(10,2),
    FOREIGN KEY (store_id) REFERENCES seller_details(seller_store_id),
    FOREIGN KEY (model_number) REFERENCES phone_available_in_our_inventoary_record(model_number)
);

-- Contact Us details ( Only Visible By Admin )

CREATE TABLE IF NOT EXISTS contact_us(
    sl_no INT(8) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40),
    phone_number VARCHAR(15),
    email VARCHAR(50),
    your_query VARCHAR(255)
);