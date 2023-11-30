create database veterinaria;

use veterinaria;

DROP database veterinaria;


create table usuarios (
id int not null auto_increment,
nombre varchar (20),
contrasenia varchar (20),
primary key (id)
);

create table consultas(
id int not null auto_increment,
tipoConsulta varchar(30),
nombrePaciente varchar(20),
tipoAnimal varchar (30) not null,
nombreDueño varchar(50),
veterinario varchar (50),
diaConsulta date,
horaConsulta time,
primary key (id)
);

create table medicamentos(
id int not null auto_increment,
imagen blob,
nombre varchar(40),
categoria varchar(20),
cantidad int not null,
precio float not null,
descripcion varchar (2500),
primary key (id)
);

create table veterinarios(
id int not null auto_increment,
nombre varchar (20),
apellidoPaterno varchar (20),
apellidoMaterno varchar (20),
correoElectronico varchar (50),
telefono varchar (15),
hora_inicio time,
hora_fin time,
primary key (id)
);

create table accesorios(
id int not null auto_increment,
ilustracion blob,
nombre varchar(30),
cantidad int not null,
tipo varchar(20),
material varchar(30),
categoria varchar(30),
precio float not null,
primary key (id)
);

create table historialMedico(
id int not null auto_increment,
imagen blob,
nombrePaciente varchar(30),
tipoAnimal varchar(30),
nombreDueño varchar(100),
descripcion varchar (1000),
fechasConsultas date,
primary key (id)
);


INSERT INTO consultas (id, tipoConsulta, nombrePaciente, tipoAnimal, nombreDueño,veterinario, diaConsulta, horaConsulta)
VALUES
    (1, 'Control', 'Rex', 'Perro', 'Laura Smith','Pedro', '2023-01-15', '09:00:00'),
    (2, 'Vacunación', 'Whiskers', 'Gato', 'John Doe','Ana', '2023-02-02', '10:30:00'),
    (3, 'Emergencia', 'Buddy', 'Perro', 'Maria Johnson','Laura', '2023-03-10', '15:45:00'),
    (4, 'Revision', 'Fluffy', 'Gato', 'Robert Brown','Sergio', '2023-04-05', '11:15:00'),
    (5, 'Control', 'Simba', 'León', 'Luisa Perez','Antonio', '2023-05-20', '13:00:00'),
    (6, 'Vacunación', 'Lola', 'Perro', 'Karen White','Elena', '2023-06-12', '09:30:00'),
    (7, 'Emergencia', 'Spike', 'Perro', 'Michael Lee','María', '2023-07-08', '16:20:00'),
    (8, 'Revision', 'Whiskers', 'Gato', 'Elizabeth Davis','Carlos', '2023-08-29', '12:45:00'),
    (9, 'Control', 'Toby', 'Perro', 'Daniel Taylor','Javier', '2023-09-17', '10:00:00'),
    (10, 'Vacunación', 'Mittens', 'Gato', 'Susan Harris','Isabel', '2023-10-30', '09:15:00');

   
INSERT INTO medicamentos (id,imagen, nombre, categoria, cantidad, precio, descripcion)
VALUES
    (1,'https://m.media-amazon.com/images/I/61zWxfaV7TL._AC_SL1500_.jpg', 'Aspirina', 'Analgésico', 100, 400, 'Analgésico común'),
    (2,'https://m.media-amazon.com/images/I/41jeX6Ao8xS._AC_.jpg', 'Amoxicilina', 'Antibiótico', 50, 250, 'Antibiótico de amplio espectro'),
    (3,'https://m.media-amazon.com/images/I/61MGhW4z6JL._AC_SL1500_.jpg', 'Ivermectina', 'Antiparasitario', 30, 130, 'Antiparasitario para gusanos'),
    (4,'https://m.media-amazon.com/images/I/31+Yisu7hSL._AC_.jpg', 'Prednisona', 'Antiinflamatorio', 60, 145, 'Antiinflamatorio esteroideo'),
    (5,'https://m.media-amazon.com/images/I/51aVgdveIML._AC_SL1000_.jpg', 'Frontline', 'Antipulgas', 40, 80, 'Tratamiento antipulgas para perros'),
    (6,'https://m.media-amazon.com/images/I/31jR2TQt6PL._AC_.jpg', 'Dexametasona', 'Antiinflamatorio', 25, 130, 'Antiinflamatorio esteroideo'),
    (7,'https://distribuidoracorsicana.com/cdn/shop/products/RIMADYL100.png?v=1692643865', 'Rimadyl', 'Analgésico', 20, 260, 'Analgésico para perros'),
    (8,'https://lafarmascota.com/wp-content/uploads/2021/12/amoxicilina-acido-clavulanico-spectrum.jpg', 'Clavulanic', 'Antibiótico', 70, 300, 'Antibiótico de amplio espectro'),
    (9,'https://www.petco.com.mx/medias/104714.jpg-1200ftw?context=bWFzdGVyfHJvb3R8NjMyNzQxfGltYWdlL2pwZWd8aGMxL2hlZi85ODIzMzA4MjUxMTY2LzEwNDcxNC5qcGdfMTIwMGZ0d3w1ZjY1YTRmZjhlZTI5MWU2YmQ5ZDhiOWFkMzE1MGFhNzZiYjk3YzM2MTU2OWEwMWExNjRmOTA2NzBhMjYxNzc1', 'Advantage', 'Antipulgas', 35, 320, 'Tratamiento antipulgas para gatos'),
    (10,'https://www.farmaciaveterinariacoapa.com.mx/cdn/shop/products/AddWatermark20200610023324_1024x1024@2x.png?v=1591817670', 'Metacam', 'Antiinflamatorio', 45, 210, 'Antiinflamatorio no esteroideo');

   
INSERT INTO veterinarios (id, nombre, apellidoPaterno, apellidoMaterno, correoElectronico, telefono, hora_inicio, hora_fin)
VALUES
    (1, 'Ana', 'López', 'Gómez', 'ana.lopez@example.com', '123-456-7890', '08:00:00', '16:00:00'),
    (2, 'Pedro', 'Martínez', 'Sánchez', 'pedro.martinez@example.com', '456-789-1234', '09:00:00', '17:00:00'),
    (3, 'María', 'Rodríguez', 'Fernández', 'maria.rodriguez@example.com', '789-123-4567', '08:30:00', '15:30:00'),
    (4, 'Carlos', 'García', 'Luna', 'carlos.garcia@example.com', '234-567-8901', '10:00:00', '18:00:00'),
    (5, 'Laura', 'Pérez', 'Romero', 'laura.perez@example.com', '567-890-1234', '08:00:00', '16:00:00'),
    (6, 'Javier', 'Santos', 'Díaz', 'javier.santos@example.com', '345-678-9012', '09:30:00', '17:30:00'),
    (7, 'Elena', 'Torres', 'Jiménez', 'elena.torres@example.com', '678-901-2345', '08:30:00', '15:30:00'),
    (8, 'Antonio', 'Gómez', 'Vega', 'antonio.gomez@example.com', '456-789-1234', '10:30:00', '18:30:00'),
    (9, 'Isabel', 'Ruiz', 'Ortega', 'isabel.ruiz@example.com', '789-123-4567', '08:00:00', '16:00:00'),
    (10, 'Sergio', 'Fernández', 'Morales', 'sergio.fernandez@example.com', '234-567-8901', '09:00:00', '17:00:00');

   
INSERT INTO accesorios (id,ilustracion, nombre, cantidad, tipo, material, categoria, precio)
VALUES
    (1,'https://m.media-amazon.com/images/I/61E4xX32KLL._AC_SL1500_.jpg', 'Collar ajustable', 50, 'Collar', 'Nylon', 'Perros', 100),
    (2,'https://m.media-amazon.com/images/I/416gA5HsNxL._AC_.jpg', 'Cepillo de aseo', 40, 'Cepillo', 'Plástico', 'Gatos', 40),
    (3,'https://m.media-amazon.com/images/I/61DNIFA5uyL._AC_SL1381_.jpg', 'Arnés de paseo', 60, 'Arnés', 'Cuero', 'Perros', 130),
    (4,'https://m.media-amazon.com/images/I/71v6eiqbZIL._AC_SL1500_.jpg', 'Juguete interactivo', 30, 'Juguete', 'Plástico', 'Perros', 50),
    (5,'https://m.media-amazon.com/images/I/51KqyxkTUgL._AC_SL1000_.jpg', 'Rascador de gato', 25, 'Rascador', 'Cartón', 'Gatos', 350),
    (6,'https://m.media-amazon.com/images/I/616Ua8J3d2S._AC_SL1444_.jpg', 'Correa extensible', 55, 'Correa', 'Nylon', 'Perros', 140),
    (7,'https://m.media-amazon.com/images/I/61JjReXaemL._AC_SL1479_.jpg', 'Comedero automático', 20, 'Comedero', 'Plástico', 'Perros', 560),
    (8,'https://m.media-amazon.com/images/I/618xzdCsLpL._AC_SL1080_.jpg', 'Camita suave', 35, 'Camita', 'Tela', 'Gatos', 250),
    (9,'https://m.media-amazon.com/images/I/51Mf6qf2nZL._AC_SL1000_.jpg', 'Juguete con plumas', 40, 'Juguete', 'Plástico', 'Gatos', 35),
    (10,'https://m.media-amazon.com/images/I/61iJpVQ3ksL._AC_SL1500_.jpg', 'Transportín de viaje', 15, 'Transportín', 'Plástico', 'Perros', 350);

    
INSERT INTO historialMedico (id, imagen, nombrePaciente, tipoAnimal, nombreDueño, descripcion, fechasConsultas)
VALUES
    (1, "https://cdn.dogsplanet.com/wp-content/uploads/2021/09/razas-de-perros-grandes.jpg",  'Rex', 'Perro', 'Laura Smith', 'Control de rutina', '2023-01-15'),
    (2, "https://larcaveterinaria.com/wp-content/uploads/2019/05/18_22_MAIG_2019.jpg", 'Whiskers', 'Gato', 'John Doe', 'Vacunación anual', '2023-02-02'),
    (3,"https://t1.ea.ltmcdn.com/es/posts/1/0/1/5_chow_chow_25101_4_600.jpg", 'Buddy', 'Perro', 'Maria Johnson', 'Emergencia por lesión', '2023-03-10'),
    (4,"https://larcaveterinaria.com/wp-content/uploads/2019/10/28_24_OCTUBRE_2019.png", 'Fluffy', 'Gato', 'Robert Brown', 'Revisión dental', '2023-04-05'),
    (5,"https://http2.mlstatic.com/D_NQ_NP_725536-MLM71826734500_092023-O.webp", 'Simba', 'Perro', 'Luisa Perez', 'Control y chequeo', '2023-05-20'),
    (6,"https://perro.shop/wp-content/uploads/rottweiler_1.jpg", 'Lola', 'Perro', 'Karen White', 'Vacunación y desparasitación', '2023-06-12'),
    (7,"https://perro.shop/wp-content/uploads/rhodesian-ridgeback.jpg", 'Spike', 'Perro', 'Michael Lee', 'Emergencia por intoxicación', '2023-07-08'),
    (8,"https://larcaveterinaria.com/wp-content/uploads/2019/07/12_16_GENER_2019.jpg", 'Willy', 'Gato', 'Elizabeth Davis', 'Revisión de salud', '2023-08-29'),
    (9,"https://images.ctfassets.net/yqervvhuliag/3gYe8SlHjdVnVaOHUUwKOX/74e37f8a976a1e525787747c5a464d5a/Kenya1.jpg?w=1200&h=1000&fit=fill&f=face&fm=jpg&fl=progressive&q=70",  'Toby', 'Perro', 'Daniel Taylor', 'Control de alergias', '2023-09-17'),
    (10,"https://larcaveterinaria.com/wp-content/uploads/2020/05/41_15_MAIG_2020.png", 'Mittens', 'Gato', 'Susan Harris', 'Vacunación y revisión general', '2023-10-30');
    
insert into usuarios(id, nombre, contrasenia)
values
	(1, 'Eliza', 'martlo12'),
	(2, 'Jhon', 'gato123'),
	(3, 'Maily', 'sapoverde');
	