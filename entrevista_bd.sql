create database entrevista;
use entrevista;

create table questionario(
id int auto_increment not null primary key,
v1 int,
v2 int,
v3 int,
v4 int,
v5 int,
v6 int,
v7 int,
v8 int,
v9 int,
v10 int,
v11 int,
v12 int,
v13 int,
v14 int,
v15 int,
v16 int
)engine=innodb;

select * from questionario where id = 501;
-- drop table questionario;
