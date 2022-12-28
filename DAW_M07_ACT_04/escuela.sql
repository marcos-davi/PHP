create database escuela;
use escuela;

create table USUARIO(
	dni varchar(9) PRIMARY KEY not null,
    apellido varchar(50),
	tipo_usuario tinyint(1)
	);

create table ASIGNATURA(
	identificador int PRIMARY KEY AUTO_INCREMENT,
	nombre varchar(30)
	);

create table NOTA(
	alumno varchar(9),
	asignatura int,
	nota int,
	FOREIGN KEY(alumno) REFERENCES USUARIO(dni),
	FOREIGN KEY(asignatura) REFERENCES ASIGNATURA(identificador),
	PRIMARY KEY(alumno, asignatura)
);

SELECT * from usuario;
SELECT * from asignatura;
SELECT * from nota;