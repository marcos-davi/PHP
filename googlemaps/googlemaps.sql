create database googlemaps;

use googlemaps;

create table lugar(
id int primary key auto_increment,
nombre varchar(100),
coordenadas varchar(100)
);

insert into lugar(nombre, coordenadas) values('Colegio', '{lat: 41.385775, lng: 2,165547}');
insert into lugar(nombre, coordenadas) values('Casa de Juan', '{lat: 41.386273, lng: 2,159388}');
insert into lugar(nombre, coordenadas) values('Tienda de comics', '{lat: 41.386901, lng: 2,170525}');