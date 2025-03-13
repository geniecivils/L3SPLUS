<?php
session_start();
if (isset($_SESSION['user_id']) || isset($_COOKIE['user_id'])) {
    //user is logged in.
} else {
    header("Location: ../index.html");
}
?>