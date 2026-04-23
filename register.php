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
    <form action="register_process.php" method="POST" class="rejestracja">
        <input type="text" name="login" placeholder="Nazwa użytkownika" required>
        <input type="email" name="email" placeholder="Adres E-mail" required>
        <input type="number" name="phone" placeholder="Numer Telefonu">
        <input type="password" name="password" placeholder="Hasło" required>
        <input type="password" name="confirm_password" placeholder="Powtórz hasło" required>
        <button>Zarejestruj się</button>
    </form>
    <script src="scripts/script.js"></script>
</body>
</html>