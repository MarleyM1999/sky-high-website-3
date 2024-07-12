<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky High 🚬</title>
    <link rel="stylesheet" type="text/css" href="./Assets/styles.css">
</head>
<body>
    <div class="page-layout">
        <!-- Navigatiebalk -->
        <nav>
            <div class="nav-container">
                <div class="nav-left">
                    <img class="logo" src="./Images/logo.png" alt="mooi">
                    <ul>
    <li><a href="./index.html">Home</a></li>
    <li><a href="./OverOns.php">Over</a></li>
    <li><a href="./Weather.php">Weer</a></li>
    <li><a href="./Contact.php">Contact</a></li>
</ul>

                </div>
                <div class="nav-right">
                    <div class="login-signup">
                        <a href="./inloggen.php">Inloggen</a>
                        <a class="sign-up-btn" href="./accountmkn.php">Registreren</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Registratieformulier -->
        <section class="registration-section">
            <h2>Registreren</h2>
            <form class="registration-form" action="signup.php" method="POST">
                <div class="form-group">
                    <label for="username">Gebruikersnaam</label>
                    <input type="text" id="username" name="username" placeholder="Voer gebruikersnaam in" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Voer emailadres in" required>
                </div>
                <div class="form-group">
                    <label for="password">Wachtwoord</label>
                    <input type="password" id="password" name="password" placeholder="Voer wachtwoord in" required>
                </div>
                <button class="signup-btn" type="submit">Registreren</button>
                <p>Heb je al een account? <a href="./inloggen.php">Inloggen</a></p>
            </form>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-content">
                <p>Website gemaakt door Marley, Chaim, Zakaria, Fred. &copy; 2023</p>
                <ul class="footer-links">
                    <li><a href="#">Gebruiksvoorwaarden</a></li>
                    <li><a href="#">Privacybeleid</a></li>
                    <li><a href="#">Neem contact op</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="./Assets/Engine.js"></script>
</body>
</html>
