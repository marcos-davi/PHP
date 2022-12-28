create database google_maps;
use google_maps;

create table locales(
id int auto_increment primary key,
nombre varchar(50),
coordenadas varchar(100),
poblacion varchar(50),
tipo varchar(50)
);

insert into locales (nombre, coordenadas, poblacion, tipo) values('Bacoa Burger Barceloneta', '{ lat: 41.376752, lng: 2.190342 }', 'Barcelona', 'Restaurantes');
insert into locales (nombre, coordenadas, poblacion, tipo) values('Konig 2', '{ lat: 41.985645, lng: 2.823308 }', 'Girona', 'Restaurantes');
insert into locales (nombre, coordenadas, poblacion, tipo) values('Sala Apolo', '{ lat: 41.374399, lng: 2.169566 }', 'Barcelona', 'Discotecas');
insert into locales (nombre, coordenadas, poblacion, tipo) values('Antiquari', '{ lat: 41.38393, lng: 2.17747 }', 'Barcelona', 'Bares');

select distinct poblacion from locales;
select distinct poblacion 
from locales
where poblacion = 'barcelona';

SELECT distinct * FROM locales order by tipo;
SELECT * FROM locales where tipo ='Restaurantes';
SELECT * FROM locales where poblacion = 'Girona';