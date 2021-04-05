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
    name     varchar(20)  not null,
    user     varchar(15) primary KEY,
    password varchar(255) not null,
    question int          not null,
    answer   varchar(15)  not null,
    rol      int          not null
);

CREATE TABLE inputs
(
    id          int primary key auto_increment,
    id_category int,
    user        varchar(15),
    title       varchar(20)  not null,
    description varchar(255) not null,
    fecha       date         not null,
    foreign key (id_category) references categories (id) on update cascade on delete restrict,
    foreign key (user) references users (user) on update cascade on delete restrict
);