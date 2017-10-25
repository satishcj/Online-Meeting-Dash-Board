# Online-Meeting-Dash-Board

XAMPP Version 7.1.9

phpMyAdmin Database: onlinemeeting
--------------------------------------------------------------------------

Table 1: users
SQL Query Structure: (Just Copy the following and Paste to Execute)

CREATE TABLE users
(
    user_id int(5) AUTO_INCREMENT PRIMARY KEY,
    user_firstname varchar(256) NOT NULL,
    user_lastname varchar(256) NOT NULL,
    user_phone varchar(15) NOT NULL UNIQUE,
    user_email varchar(256) NOT NULL UNIQUE,
    user_pwd varchar(256) NOT NULL
);
--------------------------------------------------------------------------
