/*
|--------------------------------------------------------------------------
| setup sql
|--------------------------------------------------------------------------
|   
| To run any .sql 
|
|   C:\Users\Adarsh\Desktop\custom MVC>mysql -u root -p
|    Enter password:*****
|   Welcome to the MariaDB monitor.  Commands end with ; or \g.
|   Your MariaDB connection id is 19
|    Server version: 10.1.28-MariaDB mariadb.org binary distribution
|
|    Copyright (c) 2000, 2017, Oracle, MariaDB Corporation Ab and others.
|
|    Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.
|
|    MariaDB [(none)]> source sqls\setup.sql
|
|
*/
drop database if exists custom_mvc;

create database custom_mvc;

use custom_mvc;

create table tbl_departments(
    id int primary key auto_increment,
    name varchar 50 not null,
    code varchar 5 not null,
    added_date timestamp default CURRENT_TIMESTAMP,
    modified_date timestamp null,
    status tinyint 1 
);

create table tbl_employees(
    id int primary key auto_increment,
    first_name varchar 50 not null,last_name varchar 50  not null,
    email varchar 100 unique,contact_no varchar 20 not null,
    address varchar 100 ,added_date timestamp default CURRENT_TIMESTAMP,
    modified_date timestamp null,status tinyint 1 
);

create table tbl_employee_departments(id int primary key auto_increment,employee_id int,
department_id int,join_date timestamp default CURRENT_TIMESTAMP);

 
alter table tbl_employee_departments add foreign key(employee_id) references
tbl_employees(id);

alter table tbl_employee_departments add foreign key(department_id) references
tbl_departments(id);

create table tbl_clients(
    id int primary key auto_increment,
    client_name varchar 50 not null,
    email varchar 100 unique,
    contact_no varchar 20 not null,
    address varchar 100,
    added_date timestamp default CURRENT_TIMESTAMP,
    modified_date timestamp null,
    status tinyint 1
    );

create table mst_project_status(
    id int primary key auto_increment,
    title varchar 50,
    color varchar 50 
    );

insert into mst_project_status(title,color) 
values('Pending','#fff'),('Running','green'),('Cancel','red');

create table tbl_projects(
    id int primary key auto_increment,
    title varchar 255 not null,
    description text not null,
    client_id int,
    added_date timestamp default CURRENT_TIMESTAMP,
    deadline date not null,
    modified_date timestamp null,
    status int
    );

alter table tbl_projects add foreign key(status) references mst_project_status(id);

create table tbl_project_followups(
    id int primary key auto_increment,
    project_id int, message text,
    followup_date timestamp default CURRENT_TIMESTAMP,
    next_follow_date timestamp
    );

alter table tbl_projects add foreign key(client_id) references tbl_clients(id);
alter table tbl_project_followups add foreign key(project_id) references tbl_projects(id);
