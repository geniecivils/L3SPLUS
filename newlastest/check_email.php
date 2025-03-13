<?php
$allowedEmails = array('test@example.com', 'user@example.com'); // قائمة الإيميلات المسموحة

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];
    if (in_array($email, $allowedEmails)) {
        echo 'allowed';
    } else {
        echo 'denied';
    }
}
?>