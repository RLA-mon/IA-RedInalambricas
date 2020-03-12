create table registrospro(
	id int AUTO_INCREMENT PRIMARY KEY,
	numeroid int not null,
	pertenece varchar(100) not null,
	date timestamp 
	)

create table usuarios(
	id int AUTO_INCREMENT PRIMARY KEY,
	usuarios-us varchar(100) not null,
	password_us varchar(100) not null,
	nombre varchar(100) not null,
	apellido varchar(100) not null,
	date timestamp 
	)