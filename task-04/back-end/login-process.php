<?php

session_start();

include "./config/db.php";

$username = $_POST['username'];
$password = $_POST['password'];
$err_msg = null;

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $username);

$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user || !password_verify($password, $user['password'])) {
    $err_msg = "Username or password is invalid";
    header("Location: ../login.php?error=" . $err_msg);
} else {
    $_SESSION['user'] = [
        'username' => $user['username'],
        'name' => $user['name'],
        'about' => $user['about'],
        'role' => $user['role']
    ];
    header("Location: ../index.php");
}
