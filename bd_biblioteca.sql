create table usuario(
	nro_reg int (10) ZEROFILL NOT null PRIMARY KEY,
    pass varchar (16) not null,
    nombres varchar (50) not null,
    paterno varchar (50) not null,
    materno varchar (50) not null,
    sexo varchar (2) not null,
    fecha_nacimineto date,
    telefono int,
    correo varchar(50),
    direccion varchar (100)
);


create table materia(
    sigla varchar (6) not null primary key,
    nombre_m varchar (50) not null
);

create table tipo(
    id_tip int (2) ZEROFILL not null PRIMARY KEY AUTO_INCREMENT,
    nombre_tipo varchar (20) not null
);


CREATE TABLE upload(
	id_up int AUTO_INCREMENT not null PRIMARY KEY,
    fecha_up date not null,
    hora time not null,

    id_usu_pk int (10) ZEROFILL not null,

    foreign key (id_usu_pk) references usuario (nro_reg)
);

create table documento(
    id_documento int not null AUTO_INCREMENT PRIMARY kEY,
    titulo varchar (200) not null,
    descripcion varchar (400),
    size  int not null,
    formato varchar(50) not null,
    paginas int,

    id_mat_pk varchar (6),
    id_tip_pk int (2) ZEROFILL not null,

    foreign key (id_mat_pk) references materia (sigla),
    foreign key (id_tip_pk) references tipo (id_tip)
    
);

CREATE TABLE download(
id_down int PRIMARY KEY not null AUTO_INCREMENT,
fecha_down date not null,
hora time not null,

id_usd_pk int (10) ZEROFILL not null,
id_dod_pk int not null,

foreign key (id_usd_pk) references usuario (nro_reg),
foreign key (id_dod_pk) references documento (id_documento)

);


CREATE TABLE detalle_up(
    id_up_pk int not null,
    id_doc_pk int not null,
    detalle varchar (40),

    foreign key (id_up_pk) references upload (id_up),
    foreign key (id_doc_pk) references documento (id_documento),
    primary key (id_up_pk,id_doc_pk)
);

create table administrador(
    user varchar(20) not null primary key,
    pass varchar(20) not null
);
