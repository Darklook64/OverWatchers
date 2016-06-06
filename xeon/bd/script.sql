create database db_overwatchers
	default character set utf8
    default collate utf8_general_ci;
    
use db_overwatchers;

SET NAMES 'utf8';


create table permiso(
	id int,
    permiso varchar(30),
    primary key(id)
)default charset=utf8 ;

insert into permiso values (1, 'Administrador');
insert into permiso values (2, 'Estándar');

create table usuario(
	id int auto_increment,
    correo varchar(50),
    clave varchar(20),
    nombre varchar(30),
    permiso int,
    foreign key(permiso) references permiso(id),
    primary key(id)
)default charset = utf8;


insert into usuario values (null, 'germinze@gmail.com','ilovedibujo','Germán Muñóz',1);
insert into usuario values (null, 'jrcortest1@gmail.com','undertalefan1','José Cortés',1);
insert into usuario values (null, 'byron@gmail.com','byronmalote','Bryan Bravo',1);
insert into usuario values (null, 'visitante@gmail.com','visiman','Señor Visita',2);


create table rol(
	id int auto_increment,
    rol varchar(15),
    primary key(id)
)default charset = utf8;

insert into rol values(null,'Ofensa');
insert into rol values(null,'Defensa');
insert into rol values(null,'Tanque');
insert into rol values(null,'Soporte');

create table dificultad(
	id int auto_increment,
    dificultad varchar(15),
    primary key(id)
)default charset = utf8;


insert into dificultad values(null, 'Fácil');
insert into dificultad values(null, 'Moderado');
insert into dificultad values(null, 'Difícil');


create table heroes(
	id int auto_increment,
    nombre varchar(15),
    rol int,
    dificultad int,
    imagen varchar(15),
    foreign key(rol) references rol(id),
    foreign key(dificultad) references dificultad(id),
    primary key(id)
)default charset = utf8;

insert into heroes values(null, 'Bastion',2, 1,'bastion.png');
insert into heroes values(null, 'D.Va',2,2,'d.va.png');
insert into heroes values(null, 'Genji',1,3,'genji.png');
insert into heroes values(null, 'Hanzo',2,2,'hanzo.png');
insert into heroes values(null, 'Junkrat',2,3,'junkrat.png');
insert into heroes values(null, 'Lucio',4,2,'lucio.png');
insert into heroes values(null, 'McRee',1,1,'mcree.png');
insert into heroes values(null, 'Mei',2,3,'mei.png');
insert into heroes values(null, 'Mercy',4,2,'mercy.png');
insert into heroes values(null, 'Pharah',1,2,'pharah.png');
insert into heroes values(null, 'Reaper',1,3,'reaper.png');
insert into heroes values(null, 'Reindhart',3,1,'reindhart.png');
insert into heroes values(null, 'Roadhog',3,2,'roadhog.png');
insert into heroes values(null, 'Soldier: 76',1,1,'soldier: 76.png');
insert into heroes values(null, 'Symmetra',4,2,'symmetra.png');
insert into heroes values(null, 'Torbjorn',2,1,'torbjorn.png');
insert into heroes values(null, 'Tracer',1,2,'tracer.png');
insert into heroes values(null, 'Widowmaker',2,3,'widowmaker.png');
insert into heroes values(null, 'Winston',3,2,'winston.png');
insert into heroes values(null, 'Zarya',3,2,'zarya.png');
insert into heroes values(null, 'Zenyatta',4,3,'zenyatta.png');
