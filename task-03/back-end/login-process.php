<?php

include "./config/db.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $username);

$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user || $user['password'] !== $password) {
    header("Location: ../login.php?error=invalid_credentials");
}

echo "Hello " . $user['username'] . "!\n";
