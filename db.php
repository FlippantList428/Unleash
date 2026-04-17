<?php
header('Content-Type: text/html; charset=utf-8');

// Zmienne bazy danych
$user = 'root';
$passwd = '';
$host = 'localhost';
$db = 'Unleash';

// Utworzenie połączenia
$conn = mysqli_connect($host, $user, $passwd, $db);

if (!$conn) {
    die("Błąd połączenia: " . mysqli_connect_error()); 
}

// Ustawienie charset'a
mysqli_set_charset($conn, "utf8mb4");
?>