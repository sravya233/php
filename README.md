# PHP Login System

Simple login system using PHP and MySQL.

## Setup

1. Install XAMPP
2. Place folder in:
   C:\xampp\htdocs\phplogin
3. Start Apache & MySQL
4. Open:
   http://localhost/phplogin/

## Database

Create database and table:

CREATE DATABASE database1;

USE database1;

CREATE TABLE login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(255)
);

INSERT INTO login (username, password)
VALUES ('admin', '1234');

## Login Details

Username: admin  
Password: 1234
