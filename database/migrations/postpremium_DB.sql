drop database cursolaravel;
create database cursolaravel character set=utf8;

use cursolaravel;

create table usuarios(
	id bigint auto_increment,
	email varchar(75) unique,
	nome varchar(100),
	active boolean default false,
	passwd_snh text,
	mostrar enum("email", "nome"),
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
	foreign key(inscrito) references usuarios_info (id)
)engine=innodb charset=utf8;

delimiter //
create procedure addUsuario (
	strEmail varchar(75), strNome varchar(30), strEstado varchar(2),
	strCidade varchar(150), strBairro varchar(100), strLogradouro varchar(200),
	strNumero varchar(15), strComplemento varchar(150), strCep varchar(8))
	begin
		insert into usuarios (email, nome) values (strEmail, strNome);
		insert into usuarios_info (
			usuario, estado, cidade, bairro, logradouro, numero, complemento, cep
		) values (
			last_insert_id(), strEstado, strCidade, strBairro, strLogradouro,
			strNumero, strComplemento, strCep
		);
	end //
delimiter ;

create table linksPagamento(
	id int auto_increment primary key,
	link text,
	ident varchar(30) unique,
	pago boolean default false,
	aluno bigint,
	foreign key (aluno) references usuarios(id)
)engine=innodb charset=utf8;

delimiter //
create procedure addLink (strLink text, strIdent varchar(30))
	begin
		insert into link (link, ident) values (strLink, strIdent);
	end //
delimiter ;