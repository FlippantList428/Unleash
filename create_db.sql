CREATE DATABASE IF NOT EXISTS Unleash;
DEFAULT CHARACTER SET utf8mb4;
DEFAULT COLLATE utf8mb4_polish_ci;
USE Unleash;

CREATE TABLE IF NOT EXISTS uzytkownicy (
    id INT primary key auto_increment,
    login varchar(50) NOT null UNIQUE,
    haslo varchar(255) NOT null,
    email varchar(100) NOT null UNIQUE,
    telefon varchar(15) UNIQUE,
    rejestracja DATETIME DEFAULT CURRENT_TIMESTAMP
)