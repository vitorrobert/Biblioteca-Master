create database web;
use web;
drop database web;

create table pessoa(
idpessoa int auto_increment primary key,
nome varchar(120),
idade varchar (3)
);

create table funcionario(
idfuncionario int auto_increment primary key,
nome varchar(120),
idade varchar (3)
);

create table livro(
idlivro int auto_increment primary key,
nome varchar(100),
data date,
autor varchar(100),
editora varchar(100),
);

create table usuario(
idusuario int auto_increment primary key,
usuario varchar(100),
senha varchar(100)
);