<?php
session_start();
$servername = "sql7.freesqldatabase.com";
$username = "sql7767531";
$password = "PghTtfzFY1";
$dbname = "sql7767531";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_email'] = $row['email'];
    setcookie('user_id', $row['id'], time() + (86400 * 1), "/");
    header("Location: ../home.html");
} else {
    echo "Invalid email or password";
}

$conn->close();
?>