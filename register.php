<?php
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

$sql = "INSERT INTO users (email, password, allowed) VALUES ('$email', '$password', 0)";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful. Awaiting admin approval.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>