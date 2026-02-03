<?php
$name = trim($_POST['name']);
$username = trim($_POST['username']);
$password = trim($_POST['password']);

/* Validation */
if (strlen($username) < 5) {
    die("Username must be at least 5 characters");
}

if (strlen($password) < 6) {
    die("Password must be at least 6 characters");
}

/* Formatting */
$name = ucwords(strtolower($name));
$username = strtolower($username);

/* Security */
$name = htmlspecialchars($name);
$username = addslashes($username);

echo "Registration Successful <br>";
echo "Name: $name <br>";
echo "Username: $username <br>";
?>
