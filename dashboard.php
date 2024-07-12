<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
  header("Location: inloggen.php");
  exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="./Assets/dashboard.css">
</head>

<body>
  <div class="page-layout">
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
          <div class="user-info">
            <span>Welcome, <?php echo $_SESSION['username']; ?>!</span>
            <a href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <div class="dashboard-content">
      <!-- Add your dashboard content here -->
    </div>
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