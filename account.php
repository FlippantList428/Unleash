<?php 
session_start();
// Sprawdzenie czy sesja istnieje
if (!isset($_SESSION['zalogowany']) || $_SESSION['zalogowany'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <title>Unleash</title>
</head>
<body>
    <header>
        <h1>💻 Unleash – Twoje pierwsze źródło informacji</h1>
        <div id="zegar"></div>
    </header>
    <nav>
        <a class="odnosnik" href="index.html">🏠 Strona główna</a>
        <a class="odnosnik" href="#news">🗞️ Nowości</a>
        <a class="odnosnik" href="#">💬 Społeczność</a>
        <a class="odnosnik" href="#trendy">❤️‍🔥 Popularne</a>
        <a class="odnosnik" href="account.php">👨‍🦱 Konto</a>
    </nav>
    <main>
        <h2>Witaj, <?php echo $_SESSION['user_login']; ?>!</h2>
        <p>To jest twój panel profilu</p>
        <a href="logout.php">Wyloguj się</a>
    </main>
</body>
</html>