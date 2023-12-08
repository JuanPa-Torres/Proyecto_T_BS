create database Proyecto_BD;

use Proyecto_BD;

 -- drop database Proyecto_BD;
select *from perfiles;
create table Perfiles(
    id tinyint not null auto_increment,
    Perfil varchar(20) not null unique,
    Descripcion text null,
    created_at datetime,
    updated_at datetime null,
    deleted_at datetime null,
    primary key(id)
);

create table Usuarios(
	idUsuario int not null auto_increment,
	Nombre varchar(50) unique,
	Apell_Paterno varchar(50)not null,
	Pais varchar(20),
	Correo_Elec varchar(50)not null,
	Contraseña varchar(150)not null,
	Perfil tinyint not null,
	created_at datetime,
	updated_at datetime null,
	deleted_at datetime null,
	foreign key(Perfil) references Perfiles(id),
	primary key(idUsuario)
);

create table Distribuidor(
    idDistribuidor int not null primary key auto_increment,
    Nombre varchar(50) not null,
    Ciudad varchar(30)not null,
    Telefono long not null,
    Correo varchar(30) not null,
    created_at datetime null,
    updated_at datetime null,
    deleted_at datetime null
);

create table Marca(
    idMarca int not null primary key auto_increment,
    Nombre varchar(60)not null,
    Pais_Origen varchar(50)not null,
    Logo varchar(200)null,
    Pais_Distribuidor varchar(50)not null,
    Distribuidor int not null,
    created_at datetime null,
    updated_at datetime null,
    deleted_at datetime null,
    constraint idDistribuidor foreign key (Distribuidor) 
    	references Distribuidor(idDistribuidor)
    
);

-- drop table Modelo;
create table Modelo(
    idModelo int not null primary key auto_increment,
    Nombre varchar (50)not null,
    Modalidad varchar(50)not null,
    Año int not null,
    Gama varchar(20) not null,
    created_at datetime null,
    updated_at datetime null,
    deleted_at datetime null
);

create table Componentes(
    idComponentes int not null primary key auto_increment,
    Tija varchar(50)not null,
    Amortiguador varchar(50)not null,
    Ruedas_Delanteras varchar(50)not null,
    Ruedas_Traseras varchar(50)not null,
    Llantas varchar(50)not null,
    Cambio_Delantero varchar(50)not null,
    Cambio_Trasero varchar(50)not null,
    Casstte varchar(50)not null,
    Bielas varchar(50)not null,
    Frenos varchar(50)not null,
    Rotores_Frenos varchar(50)not null,
    created_at datetime null,
    updated_at datetime null,
    deleted_at datetime null
);

create table Caracteristicas(
    idCaracteristicas int not null primary key auto_increment,
    Talla_Cuadro varchar(20)not null,
    Material varchar(50)not null,
    Colores_Disponibles varchar(30)not null,
    Geometrias varchar(100)not null,
    Peso varchar(15) not null,
    Limite_Peso varchar(50) not null,
    Garantia varchar(80) not null,
    created_at datetime null,
    updated_at datetime null,
    deleted_at datetime null
);
-- drop table bicicleta;
create table Bicicleta(
	idBicicleta int not null primary key auto_increment,
	Marca int not null,
	Modelo int not null,
	Componentes int not null,
	Caracteristicas int not null,
	Precio int not null,
	Foto varchar(200) null,
	created_at datetime ,
	updated_at datetime null,
	deleted_at datetime null,
	constraint idMarca foreign key (Marca) references Marca(idMarca),
	constraint idModelo foreign key (Modelo) references Modelo(idModelo),
	constraint idComponentes foreign key (Componentes) references Componentes(idComponentes),
	constraint idCaracteristicas foreign key (Caracteristicas)references Caracteristicas(idCaracteristicas)
);



-- select * from caracteristicas;