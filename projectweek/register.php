<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare statement to insert user into the database
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");

    // Hash the password for security
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Bind parameters
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':password', $hashed_password);

    // Execute the statement
    $stmt->execute();

    // Redirect to login page after successful registration
    header("Location: login.html");
    exit();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
