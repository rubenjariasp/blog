DROP DATABASE IF EXISTS blog;
CREATE DATABASE IF NOT EXISTS blog;
connect blog;
CREATE TABLE categories
(
    id   int primary key auto_increment,
    name varchar(15) unique not null
);
CREATE TABLE users
(
    name     char(20)  not null,
    user     char(15) primary KEY,
    password varchar(255) not null,
    question int          not null,
    answer   char(15)  not null,
    rol      int          not null
);

CREATE TABLE inputs
(
    id          int primary key auto_increment,
    id_category int,
    user        char(15),
    title       char(20)  not null,
    description varchar(1000) not null,
    fecha       date         not null,
    foreign key (id_category) references categories (id) on update cascade on delete restrict,
    foreign key (user) references users (user) on update cascade on delete restrict
);

# Insertar categorias
insert into categories(id, name) value (0,'deporte');
insert into categories(id, name) value (0,'drama');
insert into categories(id, name) value (0,'horror');
insert into categories(id, name) value (0,'fantasia');

# Insertar usuarios
insert into users(name, user, password, question, answer, rol) value ('noris prosperi', 'norisprosperi', MD5('ruben'), 1, 'lourdes', 0);

insert into users(name, user, password, question, answer, rol) value ('eudorina prosperi', 'delvalleprosperi', MD5('ruben'), 3, 'rojo', 0);

insert into users(name, user, password, question, answer, rol) value ('jesus arias', 'chusofcb', MD5('ruben'), 2, 'verdoso', 0);

insert into users(name, user, password, question, answer, rol) value ('ruben arias', 'ruprosperi', MD5('ruben'), 1, 'noris', 1);

# Insertar entradas
insert into inputs(id, id_category, user, title, description, fecha) VALUE (0,1, 'chusofcb', 'De Jong remonta su extraño duelo de con Fede Valverde','En enero de 2019, Fede Valverde era el jugador fetiche del Real Madrid. Había sido el mejor jugador de la final de la Supercopa y estaban en un momento álgido. Es entonces cuando las comparaciones con Frenkie de Jong afloraban. Se solía comparar los 5M de euros que había desembolsado el Real Madrid por lo 80M que invirtió el Barça en un jugador que estaba rindiendo menos.',CURRENT_DATE());

insert into inputs(id, id_category, user, title, description, fecha) value (0,2,'norisprosperi','The Vampire Diaries', 'La trama gira en torno a la vida de Elena, sus amigos y otros habitantes de una pequeña ciudad de Virginia, llamada Mystic Falls. Elena Gilbert (Nina Dobrev), es una adolescente joven de la cual se enamoran dos hermanos vampiros, Stefan Salvatore (Paul Wesley), y su hermano Damon Salvatore (Ian Somerhalder). Elena es idéntica a Katherine, la mujer que los convirtió en vampiros y que jugó con el amor que ambos sentían por ella.

The Vampire Diaries fue estrenada en el canal The CW el 10 de septiembre del año 2009 con su primera temporada,1​ y el último episodio fue emitido el 10 de marzo de 2017 dándole fin a la octava y última temporada.',CURRENT_DATE());

insert into inputs (id, id_category, user, title, description, fecha)
values (0, 3, 'chusofcb', 'el conjuro', 'es una serie de películas de terror, distribuidas por la división New Line Cinema de Warner Bros. Pictures. Las películas presentan una toma de ficción sobre los casos de la vida real de Ed y Lorraine Warren, investigadores paranormales y autores asociados con casos importantes pero controvertidos. La saga principal del universo, The Conjuring, sigue sus intentos de ayudar a las personas que se encuentran poseídas por espíritus demoníacos, mientras que el resto de películas son spin-off que se centran en los orígenes de algunas de las entidades que los Warren han encontrado.',CURRENT_DATE());

insert into inputs(id, id_category, user, title, description, fecha) value(0, 1, 'ruprosperi', 'ÁNGEL DI MARÍA ELIGIÓ ENTRE MESSI, CRISTIANO Y NEYMAR', 'Es difícil de decirlo. No porque tenga una buena relación con Cristiano y una buena relación con Messi, porque soy amigo, y una excelente relación con Ney ahora acá (en el PSG) también, que tengo una amistad muy linda. Pero Leo es Leo. Hace cosas extraordinarias. Vos las ves y es natural. No tiene que hacer gimnasio, no tiene que hacer nada que los demás tienen que hacer. Entonces, es imposible decir otro jugador con los que he jugado en mi carrera y de lo que he visto en todo lo que llevo de vida. Creo que Leo es de otro planeta', CURRENT_DATE());