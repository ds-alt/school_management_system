CREATE DATABASE school_management_system;
USE school_management_system;

CREATE TABLE teachers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL
);


CREATE TABLE students (
    id INT PRIMARY KEY AUTO_INCREMENT,
    studentID VARCHAR(20) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    class VARCHAR(50) NOT NULL
);