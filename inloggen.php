<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="./Assets//Login.css">
</head>
<body>
  <div class="page-layout">
    <!-- Navigatiebalk -->
    <nav>
      <div class="nav-container">
        <div class="nav-left">
          <img class="logo" src="./Images/logo.png" alt="mooi">
          <ul>
            <li><a href="./index.php">Home</a></li>
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
      </div>
    </nav>

    <!-- Login Form -->
    <div class="container">
      <h1>Login Form</h1>
      <form action="./login.php" method="POST">
        <input type="text" name="username" placeholder="Username/Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
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
</body>
</html>
