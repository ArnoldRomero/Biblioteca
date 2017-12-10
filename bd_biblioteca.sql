create table usuario(
	nro_reg int (10) ZEROFILL NOT null PRIMARY KEY,
    pass varchar (16) not null,
    nombres varchar (50) not null,
    paterno varchar (50) not null,
    materno varchar (50) not null,
    sexo varchar (10) not null,
    fecha_nacimineto date,
    telefono int,
    correo varchar(50),
    direccion varchar (100)
);


create table tipo(
    id_tip int (2) ZEROFILL not null PRIMARY KEY AUTO_INCREMENT,
    nombre_tipo varchar (20) not null
);


CREATE TABLE upload(
	id_up int AUTO_INCREMENT not null PRIMARY KEY,
    fecha_up date not null,
    cantidad int not null,

    id_usu_pk int (10) ZEROFILL not null,

    foreign key (id_usu_pk) references usuario (nro_reg)
);

create table archivo(
    id_archivo int not null AUTO_INCREMENT PRIMARY kEY,
    nombre_ar varchar(200) not null,
    size  int not null,
    formato varchar(50) not null
    
    
);

CREATE TABLE download(
id_down int PRIMARY KEY not null AUTO_INCREMENT,
fecha_down date not null,

id_usd_pk int (10) ZEROFILL not null,
id_ard_pk int not null,

foreign key (id_usd_pk) references usuario (nro_reg),
foreign key (id_ard_pk) references archivo (id_archivo)

);


CREATE TABLE detalle_up(
    id_up_pk int not null,
    id_arc_pk int not null,
    titulo varchar (200) not null,
    descripcion varchar (400),
    
    id_tip_pk int (2) ZEROFILL not null,

    foreign key (id_tip_pk) references tipo (id_tip),
    foreign key (id_up_pk) references upload (id_up),
    foreign key (id_arc_pk) references archivo (id_archivo),
    primary key (id_up_pk,id_arc_pk)
);

create table administrador(
    user varchar(20) not null primary key,
    pass varchar(20) not null
);
