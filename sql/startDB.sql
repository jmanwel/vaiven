CREATE DATABASE IF NOT EXISTS vaivendb;

USE vaivendb;

CREATE TABLE IF NOT EXISTS rol(
id_rol INT auto_increment PRIMARY KEY NOT NULL,
description_rol VARCHAR(50) NOT NULL);

CREATE TABLE IF NOT EXISTS user(
id_user INT auto_increment PRIMARY KEY NOT NULL,
nick_user VARCHAR(50),
name_user VARCHAR(50) NOT NULL,
lastname_user VARCHAR(50) NOT NULL,
email_user VARCHAR(100) NOT NULL,
pass_user VARCHAR(40) NOT NULL,
rol_id INT NOT NULL,
CONSTRAINT user_id_rol FOREIGN KEY (rol_id) REFERENCES rol (id_rol));