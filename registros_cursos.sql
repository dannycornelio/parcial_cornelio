create table registro_cursos(
    id_curso serial primary key,
    nome_curso varchar(100) not null,
    cantidad_periodo int not null,
    fase_actual varchar(30) not null,
    nombre_instrctor varchar(30) not null,
    apellido_instructor varchar(30) not null,
    creditos_curso int not null
)