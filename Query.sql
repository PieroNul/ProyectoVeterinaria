CREATE DATABASE FINAL_VETERINARIA;
USE FINAL_VETERINARIA;

CREATE TABLE Login (
ID_Login int primary key auto_increment,
usuario varchar(100),
contrasena varchar(100)
);

CREATE TABLE Cliente(
ID_Cliente int primary key auto_increment,
Nombres varchar(100),
Apellidos varchar(100),
Direccion varchar(100),
Ciudad varchar(100),
CodigoPostal varchar(100),
Telefono varchar(50)
);

CREATE TABLE TipoMascota(
ID_TipoMacota int primary key auto_increment,
Tipo varchar(100)
);

CREATE TABLE Mascota_Cliente(
ID_MascotaCliente int primary key auto_increment,
ID_Cliente int,
NombreMascota varchar(100),
ID_TipoMacota int,
ID_Raza int,
FechaNacimiento date,
Sexo varchar(50),
Color varchar(50),
Esterilizado varchar(50),
Longitud varchar(50),
peso varchar(50),
Vacunas varchar(100)
);

CREATE TABLE Tratamiento(
ID_Tratamiento Int primary key auto_increment,
ID_Medicacion int,
Tratamiento varchar(200),
Precio double(5,2)
);

CREATE TABLE Medicacion(
ID_Medicacion Int primary key auto_increment,
Medicacion varchar(200),
decripcion varchar(200),
Precio double(5,2)
);

CREATE TABLE Visitas(
ID_Visita int primary key auto_increment,
ID_MascotaCliente int,
ID_Doctor int,
ID_Tratamiento int,
TipoDeVisita varchar(100),
FechaVisita date,
Total double(5,2),
FormaDePago varchar(100),
Estado int default(1)
);

CREATE TABLE Doctor(
ID_Doctor int primary key auto_increment,
nombre varchar(200),
apellido varchar(200),
telefono varchar(50),
direccion varchar(200),
correo varchar(100)
);

create table Raza
(
ID_Raza int primary key auto_increment,
raza varchar(100),
ID_TipoMacota INT 
);

-- ALTER
ALTER TABLE Raza
ADD CONSTRAINT FK_ID_TipoMacota
FOREIGN KEY (ID_TipoMacota) REFERENCES TipoMascota(ID_TipoMacota);

ALTER TABLE Mascota_Cliente
ADD CONSTRAINT FK_ID_Raza
FOREIGN KEY (ID_Raza) REFERENCES Raza(ID_Raza);

ALTER TABLE Mascota_Cliente
ADD CONSTRAINT FK_ID_Clientes
FOREIGN KEY (ID_Cliente) REFERENCES Cliente(ID_Cliente);

ALTER TABLE Visitas
ADD CONSTRAINT FK_ID_Doctor
FOREIGN KEY (ID_Doctor) REFERENCES Doctor(ID_Doctor);

ALTER TABLE Mascota_Cliente
ADD CONSTRAINT FK_ID_TipoMacotas
FOREIGN KEY (ID_TipoMacota) REFERENCES TipoMascota(ID_TipoMacota);

ALTER TABLE Tratamiento
ADD CONSTRAINT FK_ID_Medicacion
FOREIGN KEY (ID_Medicacion) REFERENCES Medicacion(ID_Medicacion);

ALTER TABLE Visitas
ADD CONSTRAINT FK_ID_MascotaCliente
FOREIGN KEY (ID_MascotaCliente) REFERENCES Mascota_Cliente(ID_MascotaCliente);

ALTER TABLE Visitas
ADD CONSTRAINT FK_ID_Tratamiento
FOREIGN KEY (ID_Tratamiento) REFERENCES Tratamiento(ID_Tratamiento);

-- insert
insert into login(usuario,contrasena) values ('Piero','12345');
insert into login(usuario,contrasena) values ('Christian','12345');

insert into Cliente(Nombres,Apellidos,Direccion,Ciudad,CodigoPostal,Telefono) 
values ('Andre Luis','Alvarado Velasquez','Av. Mexico','Lima','25033','971630312');
insert into Cliente(Nombres,Apellidos,Direccion,Ciudad,CodigoPostal,Telefono) 
values ('Alexis Giorgio','Mogollon Carrillo','Av. Isabela Catolica','Lima','32111','987231122');
insert into Cliente(Nombres,Apellidos,Direccion,Ciudad,CodigoPostal,Telefono) 
values ('Maria Ana','Sanchez Fernandez','Av. Lucanas','Lima','13153','972326546');
insert into Cliente(Nombres,Apellidos,Direccion,Ciudad,CodigoPostal,Telefono) 
values ('Ariana Angelica','Alvarado Arenas','Av. Parinacochas','Lima','15315','987232111');
insert into Cliente(Nombres,Apellidos,Direccion,Ciudad,CodigoPostal,Telefono) 
values ('Enrique Piero','Alvarado Arenas','Av. Mendecito','Lima','15315','978321326');

-- 1
insert into TipoMascota(Tipo) values ('Perro');
-- 2
insert into TipoMascota(Tipo) values ('Gato');
-- 3
insert into TipoMascota(Tipo) values ('Aves');
-- 4
insert into TipoMascota(Tipo) values ('Conejo');
-- 5
insert into TipoMascota(Tipo) values ('Tortuga');


-- 1 
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Mestizo',1);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Pitbull',1);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Pastor alemán',1);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Labrador retriever',1);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Husky siberiano',1);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Golden retriever',1);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Bulldog',1);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Chihuahua',1);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Rottweiler',1);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Shih Tzu',1);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Gran danés',1);

-- 2 
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Mestizo',2);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Persa',2);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Maine Coon',2);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Bengala',2);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Esfinge',2);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Munchkin',2);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Azul ruso',2);

-- 3 
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Mestizo',3);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Búho ',3);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Guacamayo azul ',3);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Periquitos ',3);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('condor ',3);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Cigüeña ',3);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Loros ',3);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Tucanes ',3);

-- 4 
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Mestizo',4);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Holandés enano ',4);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Cabeza de león ',4);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Californiano ',4);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Mini Lop ',4);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('French Angora rabbit ',4);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Arlequín ',4);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Satijn ',4);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Silver Fox ',4);

-- 5 
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Mestizo',5);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Tortuga de orejas rojas ',5);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Tortuga Laúd ',5);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Tortuga rusa ',5);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Tortuga de orejas amarillas ',5);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Tortuga de Cumberland ',5);
INSERT INTO Raza (raza,ID_TipoMacota) VALUES ('Tortuga Carey ',5);


insert into Mascota_Cliente(ID_Cliente,NombreMascota,ID_TipoMacota,ID_Raza,FechaNacimiento,Sexo,Color,Esterilizado,Longitud,peso,Vacunas) 
values (1,'Filurais',1,2,'21-01-01','Macho','Blue','No','48 a 53 cm','17 - 27 kilos','Si');
insert into Mascota_Cliente(ID_Cliente,NombreMascota,ID_TipoMacota,ID_Raza,FechaNacimiento,Sexo,Color,Esterilizado,Longitud,peso,Vacunas) 
values (2,'Michi',2,12,'21-02-15','Hembra','Blanco','No','42 cm','2,5 a 4,5 Kilos','Si');
insert into Mascota_Cliente(ID_Cliente,NombreMascota,ID_TipoMacota,ID_Raza,FechaNacimiento,Sexo,Color,Esterilizado,Longitud,peso,Vacunas) 
values (3,'Leika',1,5,'20-10-20','Hembra','Plomo,Blanco','No','50–56 cm','16–23 kg','Si');
insert into Mascota_Cliente(ID_Cliente,NombreMascota,ID_TipoMacota,ID_Raza,FechaNacimiento,Sexo,Color,Esterilizado,Longitud,peso,Vacunas) 
values (4,'Rabbit',4,28,'20-11-26','Macho','Marron','No','40 cm','17 - 27 kilos','Si');
insert into Mascota_Cliente(ID_Cliente,NombreMascota,ID_TipoMacota,ID_Raza,FechaNacimiento,Sexo,Color,Esterilizado,Longitud,peso,Vacunas) 
values (5,'El Pana Miguel',2,12,'21-06-20','Macho','Naranja','No','13 cm','500 gramos','No,Falta Vacuna Antiparacitario');

INSERT INTO Medicacion (Medicacion,decripcion,Precio) VALUES ('Medicamento esteriliza','anastesia , gasa',50.0);
INSERT INTO Medicacion (Medicacion,decripcion,Precio) VALUES ('Medicamento antipulgas','pastilla , locion',18.0);
INSERT INTO Medicacion (Medicacion,decripcion,Precio) VALUES ('Medicamento antirrabica','algodon , inyeccion',20.0);
INSERT INTO Medicacion (Medicacion,decripcion,Precio) VALUES ('Medicamento Antiparasitario','pastilla , inyeccion,gasa',25.0);

INSERT INTO Tratamiento (ID_Medicacion,Tratamiento,Precio) VALUES (1,'esteriliza',80.00);
INSERT INTO Tratamiento (ID_Medicacion,Tratamiento,Precio) VALUES (2,'antipulgas',35.00);
INSERT INTO Tratamiento (ID_Medicacion,Tratamiento,Precio) VALUES (3,'antirrabica',38.00);
INSERT INTO Tratamiento (ID_Medicacion,Tratamiento,Precio) VALUES (4,'Antiparasitario',38.00);

INSERT INTO Doctor(nombre,apellido,telefono,direccion,correo) VALUES ('JUAN','SUAREZ','987654321','AV. Garcilazo de la vega 1918','Juan_Suarez@gmail.com');
INSERT INTO Doctor(nombre,apellido,telefono,direccion,correo) VALUES ('LUISA','VELASQUEZ','987964321','AV. Montes 2020','LuisaM2021@gmail.com');
INSERT INTO Doctor(nombre,apellido,telefono,direccion,correo) VALUES ('RICHARD','MEDEZ','933654321','JR. Ayacucho 777 ','medez_doc@gmail.com');
INSERT INTO Doctor(nombre,apellido,telefono,direccion,correo) VALUES ('Orlando','Montes','96639321','AV. san bartolo 88','orlandoMontes1999@gmail.com');

INSERT INTO Visitas (ID_MascotaCliente,ID_Doctor,ID_Tratamiento,TipoDeVisita,FechaVisita,Total,FormaDePago,Estado) 
VALUES (1,1,2,'mensual','2021-03-19',53.0,'Efectivo',1);
INSERT INTO Visitas (ID_MascotaCliente,ID_Doctor,ID_Tratamiento,TipoDeVisita,FechaVisita,Total,FormaDePago,Estado) 
VALUES (2,3,1,'operacion','2021-06-10',130.0,'Yape',1);
INSERT INTO Visitas (ID_MascotaCliente,ID_Doctor,ID_Tratamiento,TipoDeVisita,FechaVisita,Total,FormaDePago,Estado) 
VALUES (3,2,2,'mensual','2021-06-11',53.0,'Tarjeta',1);
INSERT INTO Visitas (ID_MascotaCliente,ID_Doctor,ID_Tratamiento,TipoDeVisita,FechaVisita,Total,FormaDePago,Estado) 
VALUES (4,4,1,'operacion',sysdate(),130.0,'Yape',1);
INSERT INTO Visitas (ID_MascotaCliente,ID_Doctor,ID_Tratamiento,TipoDeVisita,FechaVisita,Total,FormaDePago,Estado) 
VALUES (5,1,4,'vacunas','2021-06-16',63.0,'Efectivo',1);




