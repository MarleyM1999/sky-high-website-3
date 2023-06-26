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
            <li><a href="./home.html">Home</a></li>
            <li><a href="./OverOns.html">Over</a></li>
            <li><a href="./Weather.html">Weer</a></li>
            <li><a href="./Contact.html">Contact</a></li>
          </ul>
        </div>

        <div class="nav-right">
          <div class="login-signup">
            <?php if (isset($_SESSION['username'])): ?>
              <!-- User is logged in, show username and logout button -->
              <span>Welcome, <?php echo $_SESSION['username']; ?>!</span>
              <a href="logout.php">Logout</a>
            <?php else: ?>
              <!-- User is not logged in, show login and sign up links -->
              <a href="./login.html">Inloggen</a>
              <a class="sign-up-btn" href="./signup.html">Registreren</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>

    <!-- Hero section -->
    <div class="hero-section">
      <div class="hero-content">
        <h1>Welkom bij SkyHigh!</h1>
        <p>Optimaliseer je vliegtijd en verbeter je vliegvaardigheden met ons. Sluit je aan bij de gemeenschap die jouw passie voor zweefvliegen deelt.</p>
        <a href="./signup.html" class="cta-button">Doe met ons mee</a>
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
