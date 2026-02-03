<?php
$storedUser = "admin";
$storedPass = "admin123";

$username = trim($_POST['username']);
$password = trim($_POST['password']);

if (strcasecmp($username, $storedUser) != 0) {
    die("Invalid Username");
}

if (strcmp($password, $storedPass) != 0) {
    print("Invalid Password");
    die();
}

echo "Login Successful";
?>
