<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="./Assets/Home.css">
</head>
<body>
  <?php
    // Start the session
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['username'])) {
        // User is not logged in, redirect to the login page
        header("Location: login.html");
        exit();
    }
  ?>
  <div class="page-layout">
    <!-- Navigation bar -->
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
            <?php if (isset($_SESSION['username'])): ?>
              <!-- User is logged in, show username and logout button -->
              <span style="color: #fcfefd; font-weight: bold;">Welcome, <?php echo $_SESSION['username']; ?>!</span>
              <a href="logout.php">Logout</a>
            <?php else: ?>
              <!-- User is not logged in, show login and sign up links -->
              <div class="nav-right">
                    <div class="login-signup">
                    <a href="./inloggen.php">Inloggen</a>
                        <a class="sign-up-btn" href="./accountmkn.php">Registreren</a>
                    </div>
                </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>

    <!-- Planning section -->
                

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
