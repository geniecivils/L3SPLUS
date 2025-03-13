<?php
// login.php
$servername = "sql7.freesqldatabase.com";
$username = "sql7767531";
$password = "PghTtfzFY1";
$dbname = "sql7767531";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Connection failed: ' . $conn->connect_error]));
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND approved = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid email or password or not approved yet']);
}

$conn->close();
?>