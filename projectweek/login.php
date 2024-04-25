<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare statement to retrieve user from the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=:username");
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify password
    if ($user && password_verify($_POST['password'], $user['password'])) {
        // Store username in session for later use
        $_SESSION['username'] = $_POST['username'];

        // Redirect to welcome page after successful login
        header("Location: welcome.php");
        exit();
    } else {
        // Redirect back to login page with error message
        header("Location: login.html?error=1");
        exit();
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
