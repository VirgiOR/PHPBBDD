-- Active: 1750671267468@@127.0.0.1@3306@seneca
drop user if exists 'seneca@%';



create database  seneca
character set latin1
collate  latin1_spanish_ci;

use seneca;

create user 'seneca'@'%' identified by '1234'; 
grant all PRIVILEGES on seneca.* to 'seneca'@'%';

create table alumnos (
    id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) not null,
    apellido1 varchar(30) not null ,
    apellido2 varchar(30),
    fecha_nac DATE,
    email VARCHAR(100)
);
