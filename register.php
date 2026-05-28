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
        <a class="odnosnik" href="index.php">🏠 Strona główna</a>
        <a class="odnosnik" href="#news">🗞️ Nowości</a>
        <a class="odnosnik" href="#">💬 Społeczność</a>
        <a class="odnosnik" href="#trendy">❤️‍🔥 Popularne</a>
        <a class="odnosnik" href="account.php">👨‍🦱 Konto</a>
    </nav>
    <div class="login-box">
        <section class="form">
            <h2>Zarejestruj się!</h2>
            <form action="register_process.php" method="POST" class="rejestracja">
                <label>Wybierz login:</label>
                <input type="text" name="login" placeholder="Nazwa użytkownika" required>
                <label>Wpisz swój adres e-mail:</label>
                <input type="email" name="email" placeholder="Adres E-mail" required>
                <label>Wprowadź swój numer telefonu</label>
                <input type="number" name="phone" placeholder="Numer Telefonu">
                <label>Wpisz hasło</label>
                <input type="password" name="password" placeholder="Hasło" required>
                <label>Potwierdź hasło</label>
                <input type="password" name="confirm_password" placeholder="Powtórz hasło" required>
                <button>Zarejestruj się</button>
            </form>
            <p class="form-button">Masz już konto? <a href="login.php">Zaloguj się tutaj</a></p>
        </section>
    </div>
    <script src="scripts/script.js"></script>
</body>
</html>