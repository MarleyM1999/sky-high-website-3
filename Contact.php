<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky High 🚬</title>
    <link rel="stylesheet" type="text/css" href="./Assets/Contact.css">
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

    <!-- Contact Section -->
    <div class="contact-section">
        <h1>Contacteer Ons</h1>
        <p>Heeft u vragen of opmerkingen? Vul dan het onderstaande contactformulier in. We streven ernaar om binnen 24 uur te reageren.</p>

        <form action="submit_form.php" method="post">
            <label for="name">Naam:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="message">Bericht:</label><br>
            <textarea id="message" name="message"></textarea><br>
            <input type="submit" value="Verstuur">
        </form>

        <div class="contact-details">
            <h2>Contactgegevens</h2>
            <p>Sky High Zweefvliegclub</p>
            <p>Adres: 123 Straatnaam, Stad, Provincie, Postcode</p>
            <p>Telefoon: 012-345-6789</p>
            <p>Email: info@skyhigh.com</p>
        </div>
    </div>


        

        <!-- Footer -->
        <footer>
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
