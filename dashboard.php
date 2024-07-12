<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="./Assets/dashboard.css">
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
    <div class="dashboard">
      <nav class="dashboard-nav">
        <div class="nav-container">
          <img class="logo" src="./Images/logo.png" alt="mooi">
          <ul>
            <li><a href="./home.html">Home</a></li>
            <li><a href="./OverOns.html">Over</a></li>
            <li><a href="./Weather.html">Weer</a></li>
            <li><a href="./Contact.html">Contact</a></li>
            <li><a href="./planning.php">Planning</a></li>
          </ul>
          <?php if (isset($_SESSION['username'])): ?>
            <div class="user-info">
              <span>Welcome, <?php echo $_SESSION['username']; ?>!</span>
              <a href="logout.php">Logout</a>
            </div>
          <?php else: ?>
            <a href="./inloggen.php">Inloggen</a>
                        <a class="sign-up-btn" href="./accountmkn.php">Registreren</a>
          <?php endif; ?>
        </div>
      </nav>

      <!-- Dashboard content -->
      <div class="dashboard-content">
        <!-- Add your dashboard content here -->

        <!-- Planning section -->
        <div class="planning-section">
          <h1>Planning</h1>
          <!-- Add your planning section content here -->
        </div>
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
