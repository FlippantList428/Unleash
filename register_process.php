<?php 
require_once "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $passwd = $_POST['password'];
    $confirm_passwd = $_POST['confirm_password'];

    // Weryfikacja poprawności haseł
    if ($passwd != $confirm_passwd) {
        die("Hasła się nie zgadzają!");
    }

    // Szyfrowanie haseł
    $hashed_passwd = password_hash($passwd, PASSWORD_DEFAULT);

    // Wysyłanie informacji do bazy danych
    $sql = "INSERT INTO uzytkownicy (login, haslo, email, telefon) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $login, $hashed_passwd, $email, $phone);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: login.php?status=success");
    } else {
        echo "Błąd:" . mysqli_errno($conn);
    }
}
?>