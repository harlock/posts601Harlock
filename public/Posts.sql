create database Posts;
use Posts;
create table Categorias_preguntas(id_catpreg int primary key auto_increment,nom_cat varchar(100)unique);
create table Nacionalidades(id_nacionalidad int primary key auto_increment,nom_na varchar(100)unique);
create table Personas(id_persona int primary key auto_increment,nom_p varchar(100),
						ap_p varchar(100),am_p varchar(100),id_nacionalidad int);
create table Usuarios(id_usuario int primary key auto_increment,nom_usu varchar(100)unique,
						correo varchar(100)unique, passwd varchar(100),id_persona int);
create table Respuestas(id_respuesta int primary key auto_increment,respuesta varchar(100),id_usuario int);
create table Preguntas(id_pregunta int primary key auto_increment,pregunta varchar(100),id_usuario int,
						id_catpreg int);
create table Posts(id_post int primary key auto_increment,id_pregunta int,id_respuesta int);

alter table Personas add constraint t1 foreign key(id_nacionalidad)references Nacionalidades(id_nacionalidad);
alter table Usuarios add constraint t2 foreign key(id_persona)references Personas(id_persona);
alter table Respuestas add constraint t3 foreign key(id_usuario)references Usuarios(id_usuario);
alter table Posts add constraint t4 foreign key(id_respuesta)references Respuestas(id_respuesta);
alter table Posts add constraint t5 foreign key(id_pregunta)references Preguntas(id_pregunta);
alter table Preguntas add constraint t6 foreign key(id_catpreg)references Categorias_preguntas(id_catpreg);
alter table Preguntas add constraint t7 foreign key(id_usuario)references Usuarios(id_usuario);
