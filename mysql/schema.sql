/*=== Crear la base de datos ===*/
DROP DATABASE IF EXISTS blog;
CREATE DATABASE IF NOT EXISTS blog;

/* === Conectarse a la base de datos === */
connect blog;

/* === Crear tablas === */

/* Tabla categorias */
CREATE  TABLE  categories(
    id int primary key auto_increment,
    name varchar (15) unique not null
);

/* Tabla usuarios */
CREATE  TABLE users(
    name varchar (20) not null ,
    user varchar(15) primary KEY,
    password varchar (255) not null,
    question int not null,
    answer varchar (15) not null,
    rol int not null
);

/* Tabla entradas */
CREATE TABLE  inputs(
    id int primary key auto_increment,
    id_category int,
    user varchar(15),
    title varchar(20) not null,
    description varchar(255) not null,
    fecha date not null,
    foreign key (id_category) references categories (id) on update cascade on delete restrict,
    foreign  key (user ) references users (user) on update cascade on delete restrict
);
 /*=== Categorias ===*/
/* Insertar categorias */
INSERT INTO categories (id, name) value ();

SELECT * FROM categories;

/* Listar categorias */
INSERT INTO categories (id, name ) VALUE (0, 'Drama');

/* Actualizar categoria */
UPDATE categories SET name='suspenso' WHERE id=1;

/*Borrar categoria*/
DELETE FROM categories WHERE  id=1;

/*=== Usuarios ===*/

 /* Insertar usuario */
INSERT INTO users (name, user, password, question, answer, rol) VALUES ('ruben arias', 'ruprosperi',MD5('ruben'),1,'noris',1);

/*Seleccionar usuarios*/
SELECT * FROM users;

/* Actualizar un usuario */
UPDATE users SET name='Jesus Arias' WHERE user= 'ruprosperi';

/* Eliminar un usuario */
DELETE FROM users WHERE user ='ruprosperi';

 /*=== Entradas ===*/

 /* Insertar entrada */

INSERT INTO inputs (id, id_category, user, title, description, fecha) VALUES (0,2, 'ruprosperi', 'Breakin Bad la mejor serie de la historia', 'La serie extrenada en el 2008, es considerada por la critica estadounidense como la mejor serie de a historia', CURRENT_DATE());