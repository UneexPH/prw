-- drop database projetoAgenda;

create database prova2;

use prova2;

drop table if exists fluxo_caixa;
create table fluxo_caixa(
    id int not null auto_increment,
    data_op date not null,
    tipo varchar(10) not null,
    valor decimal(10,2) not null,
    historico varchar(150) not null,
    cheque varchar(3) not null,
    PRIMARY KEY (id)
);