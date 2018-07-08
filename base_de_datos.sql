CREATE DATABASE IF NOT EXISTS ComforceProyecto;
USE ComforceProyecto;

CREATE TABLE usuarios(
idusuario INT(255) auto_increment not null,
apellido1 VARCHAR(255) NOT NULL, 
apellido2 VARCHAR(255) NOT NULL , 
nombre VARCHAR(255) NOT NULL , 
usuario VARCHAR(255) NOT NULL , 
clave VARCHAR(255) NOT NULL , 
tipo INT(1) NOT NULL , 
estado INT(1) NOT NULL , 
fecharegistro DATETIME NOT NULL ,
CONSTRAINT pk_usuarios PRIMARY KEY(idusuario)
)ENGINE=InnoDb;

INSERT INTO usuarios (`idusuario`, `apellido1`, `apellido2`, `nombre`, `usuario`, `clave`, `tipo`, `estado`, `fecharegistro`) VALUES
(1, 'Garcia', 'Forero', 'Daniel', 'admin', '123456', 1, 1, '2018-07-08 10:02:42');