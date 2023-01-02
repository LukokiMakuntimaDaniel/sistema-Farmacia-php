create database farmacia;
use farmacia;
create table usuario(
id int not null primary key auto_increment,
nomeUsuario varchar(50) not null,
numero varchar(50) not null,
senha varchar(50) not null,
dataCadastro varchar(50) not null,
categoria varchar(50) not null,
imagem varchar(50) not null
);

create table farmaco(
id int not null auto_increment primary key,
nomeFarmaco varchar(50) not null,
preco double not null,
quantidade int not null,
dataCadastro varchar(50) not null,
imagem varchar(50) not null
);


create table vendas(
id int not null auto_increment primary key,
nomeFarmaco varchar(50) not null,
preco double not null,
valorPago double not null,
troco double not null,
dataVenda varchar(50) not null,
quantidade varchar(50) not null,
nomeCliente varchar(50) not null,
responsavel varchar(50) not null

)
insert into usuario(nomeUsuario,numero,senha,dataCadastro,categoria,imagem) values('Dena Freitas','926601581','Freitas','30/11/2022','Administrador','');
