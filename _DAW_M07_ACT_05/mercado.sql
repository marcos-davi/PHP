CREATE DATABASE mercado;
USE mercado;

create table CATEGORIA(
	id_categoria int PRIMARY KEY AUTO_INCREMENT,
	nombre_categoria varchar(50)
	);

create table PRODUCTO(
	id_producto int PRIMARY KEY AUTO_INCREMENT,
	nombre_producto varchar(50),
    categoria int,
    FOREIGN KEY(categoria) REFERENCES CATEGORIA(id_categoria)    
	);
    
    INSERT INTO CATEGORIA (nombre_categoria) VALUES ('lacteos');
    INSERT INTO CATEGORIA (nombre_categoria) VALUES ('carnicos');
    INSERT INTO CATEGORIA (nombre_categoria) VALUES ('congelados');
    INSERT INTO CATEGORIA (nombre_categoria) VALUES ('zumos');
    INSERT INTO CATEGORIA (nombre_categoria) VALUES ('Aperitivos');
    
     INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Leche',1);
	 INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('yogur',1);
     INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Mantequilla',1);
	 INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Costillas de cerdo',2);
     INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Alitas de pollo',2);
     INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Filet de ternera',2);
     INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Lasaña a la boloñesa',3);
     INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Canelones de atún',3);
     INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Arroz tres delicias',3);
     INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Piña',4);
     INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Melocotón',4);
     INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Naranja',4);
     
     INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Aceitunas',5);
     INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Patatas fritas',5);
     INSERT INTO PRODUCTO (nombre_producto, categoria) VALUES ('Anacardos',5);
    
    
    
    SELECT nombre_producto, nombre_categoria from PRODUCTO
    INNER JOIN CATEGORIA ON PRODUCTO.categoria= id_categoria
    WHERE nombre_categoria = 'lacteos';
    
	SELECT nombre_producto as producto, nombre_categoria as categoria from PRODUCTO, CATEGORIA    
    WHERE categoria= id_categoria;
    
    select * from producto;
   
   
   use mercado;
   select nombre_categoria from CATEGORIA; 
    