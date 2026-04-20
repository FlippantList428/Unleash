<?php 
session_start();
if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true) {
    header("Location: account.php");
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
    <section class="login">
        <h2>Zaloguj się!</h2>
        <form action="login_process.php" method="POST" style="margin-top: 20px;" class="logowanie">
            <input type="text" name="login" placeholder="Login" required><br><br>
            <input type="password" name="password" placeholder="Hasło" required><br><br>
            <button type="submit">Zaloguj się</button>
        </form>
        <p>Nie masz jeszcze konta? <a href="register.php">Zarejestruj się tutaj</a></p>
    </section>
    <script src="scripts/script.js"></script>
</body>
</html>