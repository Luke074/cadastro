create database db_cadastro;

use db_cadastro;

create table usuario(
	id int not null auto_increment primary key,
    nome varchar(20) not null,
    cpf varchar(14) not null,
    email varchar(50) not null,
    senha varchar(35) not null
);
insert into usuario(nome, cpf, email, senha) value("Lucas", "123.123.123-22", "teste@testando.com", "1234567");

select * from usuario;