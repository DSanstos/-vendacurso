create database postpremium character set=utf8;

use postpremium;

create table usuarios(
	id bigint auto_increment,
	email varchar(75) unique,
	nome varchar(30),
	sobrenome varchar(100),
	active boolean default false,
	passwd_snh text,
	primary key(id)
)engine=innodb charset=utf8;

create table usuarios_info(
	id bigint auto_increment,
	usuario bigint unique not null,
	estado varchar(2),
	cidade varchar(150),
	bairro varchar(100),
	logradouro varchar(200),
	numero varchar(15),
	complemento varchar(150),
	cep varchar(8),
	primary key(id),
	foreign key(usuario) references usuarios(id)
)engine=innodb charset=utf8;

create table vagasCurso(
	id int auto_increment primary key,
	inscrito bigint,
	foreign key(inscrito) references (usuarios_info)
)engine=innodb charset=utf8;

