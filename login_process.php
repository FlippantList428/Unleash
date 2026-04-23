<?php 
session_start();
require_once "db.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $login = $_POST['login'];
    $passwd = $_POST['password'];

    $sql = "SELECT id, login, haslo FROM uzytkownicy WHERE login = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $login);
    mysqli_stmt_execute($stmt);
    $wynik = mysqli_stmt_get_result($stmt);

    if ($user = mysqli_fetch_assoc($wynik)) {
        // Weryfikacja zaszyfrowanego hasła (patrz register_process.php)
        if (password_verify($passwd, $user['haslo'])) {
            $_SESSION['zalogowany'] = true;    
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_login'] = $user['login'];
            header("Location: account.php");
        } else {
            echo "Nieprawidłowe hasłó";
        }
    } else {
        echo "Podany użytkownik nie istnieje";
    }
}
?>