create database catsdb;
use catsdb;

CREATE TABLE usuario (
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(255) NOT NULL UNIQUE,
senha VARCHAR(255) NOT NULL
);

select * from usuario;