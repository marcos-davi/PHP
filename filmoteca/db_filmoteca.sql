create DATABASE filmoteca;
use filmoteca;

create table director(
	id_director int PRIMARY key AUTO_INCREMENT,
    nombre VARCHAR(100)
    );
    
    CREATE table pelicula(
    id_pelicula INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(100),
    sinopsis VARCHAR(255),
    director int,
    FOREIGN KEY(director) REFERENCES director(id_director));
    
    INSERT INTO director(nombre)  VALUES('Quentin Tarantino');
	INSERT INTO director(nombre)  VALUES('Pedro Almodovar');
	INSERT INTO director(nombre)  VALUES('Martin Scorsese');
    INSERT INTO director(nombre)  VALUES('Michael Bay');
    INSERT INTO director(nombre)  VALUES('Guillermo del Toro');
    INSERT INTO director(nombre)  VALUES('Georrge Clooney');

