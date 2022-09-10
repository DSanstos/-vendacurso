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
		insert into linksPagamento (link, ident) values (strLink, strIdent);
	end //
delimiter ;
insert into linksPagamento (link) values 
("https://userede.com.br/pagamentos/pt/bkjecgj8"),
("https://userede.com.br/pagamentos/pt/oq1q6k4f"),
("https://userede.com.br/pagamentos/pt/gk6k0gpg"),
("https://userede.com.br/pagamentos/pt/jk3ql54j"),
("https://userede.com.br/pagamentos/pt/lz2p33lt"),
("https://userede.com.br/pagamentos/pt/bbjecgk5"),
("https://userede.com.br/pagamentos/pt/gg6k0h02"),
("https://userede.com.br/pagamentos/pt/esa2ajc9"),
("https://userede.com.br/pagamentos/pt/gk6k0h06"),
("https://userede.com.br/pagamentos/pt/aw152ei3h");
insert into linksPagamento (link) values 
("https://userede.com.br/pagamentos/pt/dhcbcd0h"),
("https://userede.com.br/pagamentos/pt/je3qm9f4"),
("https://userede.com.br/pagamentos/pt/cnfdb0je"),
("https://userede.com.br/pagamentos/pt/btjefhgk"),
("https://userede.com.br/pagamentos/pt/oi1q7aih"),
("https://userede.com.br/pagamentos/pt/jk3qm9me"),
("https://userede.com.br/pagamentos/pt/ln2p4263"),
("https://userede.com.br/pagamentos/pt/ns21s4c2"),
("https://userede.com.br/pagamentos/pt/or1q7ar3"),
("https://userede.com.br/pagamentos/pt/hd5gb52h");
insert into linksPagamento (link) values 
("https://userede.com.br/pagamentos/pt/pk1im03p"),
("https://userede.com.br/pagamentos/pt/pk1im03p"),
("https://userede.com.br/pagamentos/pt/lk2p4bei"),
("https://userede.com.br/pagamentos/pt/kk39aian"),
("https://userede.com.br/pagamentos/pt/os1q7icl");