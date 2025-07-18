<?php
include 'conn.php';
session_start();

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'");
    $row = mysqli_fetch_assoc($login);
    if ($row >= 1) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        header("Location: login.php?error=error");
    }
}
