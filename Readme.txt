Please follow instruction for creating database and table

1) create database in mysql named as tinynote using "create database tinynote" command
2) create table for registration using following command in mysql "create table users (user_id INT NOT NULL AUTO_INCREMENT,username VARCHAR(30) NOT NULL,email VARCHAR(30) NOT NULL,password VARCHAR(20) NOT NULL,PRIMARY KEY ( user_id ),UNIQUE KEY (username));"
3)create table for posts using "create table createnote (noteid INT NOT NULL AUTO_INCREMENT,title VARCHAR(30) NOT NULL,description VARCHAR(250) NOT NULL,user_id INT(11) NOT NULL, PRIMARY KEY (noteid));"
