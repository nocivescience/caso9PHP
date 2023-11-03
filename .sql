use test;
create table caso9(
    id int not null AUTO_INCREMENT,
    nombre varchar(50),
    apellido varchar(50),
    email varchar(30),
    primary key(id)
)

select * from caso9;

ALTER TABLE caso9 ADD COLUMN pasatiempo varchar(50) AFTER apellido;