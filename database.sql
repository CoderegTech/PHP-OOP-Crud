-- create database phpcrud
CREATE DATABASE phpcrud;
-- use database
USE phpcrud;
-- create users table
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    age TINYINT(2) NOT NULL,
    contactNumber BIGINT(255) NOT NULL
);