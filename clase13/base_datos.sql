create database googlemaps;
use googlemaps;
create table Pokemon(
	id_pokemon int auto_increment primary key,
    nombre varchar(50),
    descripcion varchar(100),
    coordenadas varchar(100));
    
insert into Pokemon(nombre, descripcion, coordenadas) values('Pikachu', 'Pokemon tipo eléctrico', '{ lat: 41.3879, lng: 2.16992 }');
insert into Pokemon(nombre, descripcion, coordenadas) values('Charmander', 'Pokemon tipo fuego', '{ lat: 41.3869, lng: 2.16992 }');
insert into Pokemon(nombre, descripcion, coordenadas) values('Metapod', 'Pokemon tipo bicho', '{ lat: 41.3859, lng: 2.16992 }');