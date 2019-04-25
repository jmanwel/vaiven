create database if not exists vaivendb;

use vaivendb;

create table if not exists rol(
id_rol int auto_increment primary key not null,
description_rol varchar(50) not null);

create table if not exists user(
id_user int auto_increment primary key not null,
name_user varchar(50) not null,
lastname_user varchar(50) not null,
email_user varchar(100) not null,
pass_user varchar(40) not null,
rol_id int not null,
constraint user_id_rol foreign key (rol_id) references rol (id_rol)
);



