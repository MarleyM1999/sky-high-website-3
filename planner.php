<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="./Assets/Home.css">
</head>
<body>
    <?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: inloggen.php");
        exit();
    }

    $host = "localhost";
    $user = "root";
    $password = "BoysVanBoven";
    $database = "SkyHigh";
    $conn = new mysqli($host, $user, $password, $database);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $instructor = $_POST['instructor'];
        $date = $_POST['date'];

        $stmt = $conn->prepare("INSERT INTO flights (instructor, date) VALUES (?, ?)");
        $stmt->bind_param("ss", $instructor, $date);

        if ($stmt->execute()) {
            echo "Flight planned successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $result = $conn->query("SELECT * FROM flights");
    ?>
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
                    <div class="login-signup">
                        <?php if (isset($_SESSION['username'])): ?>
                            <span style="color: #fcfefd; font-weight: bold;">Welcome, <?php echo $_SESSION['username']; ?>!</span>
                            <a href="logout.php">Logout</a>
                        <?php else: ?>
                            <a href="./inloggen.php">Inloggen</a>
                            <a class="sign-up-btn" href="./accountmkn.php">Registreren</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
        <div class="planning-section">
            <form method="post">
                <label for="instructor">Instructor:</label><br>
                <select name="instructor" id="instructor">
                    <?php
                    $instructors = ["John Doe", "Jane Smith", "Michael Johnson"];
                    foreach ($instructors as $instructor) {
                        echo "<option value=\"$instructor\">$instructor</option>";
                    }
                    ?>
                </select><br>
                <label for="date">Date:</label><br>
                <input type="date" id="date" name="date"><br><br>
                <input type="submit" value="Submit">
            </form>

            <h2>Planned flights:</h2>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "Instructor: " . $row["instructor"]. " - Date: " . $row["date"]. "<br>";
                }
            } else {
                echo "No planned flights";
            }
            ?>
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
