
CREATE DATABASE typing_exam;
USE typing_exam;

CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(100),
 username VARCHAR(100) UNIQUE,
 password VARCHAR(255),
 expiry_date DATE,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE admin (
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(100),
 password VARCHAR(255)
);

INSERT INTO admin(username,password) VALUES('admin', MD5('admin123'));

CREATE TABLE results (
 id INT AUTO_INCREMENT PRIMARY KEY,
 user_id INT,
 wpm FLOAT,
 accuracy INT,
 correct INT,
 wrong INT,
 result VARCHAR(10),
 exam_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
