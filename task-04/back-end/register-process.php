<?php

session_start();

include "./config/db.php";

$username = $_POST['username'];
$name = $_POST['name'];
$password = $_POST['password'];
$password_confirm = $_POST['password-confirm'];
$about = $_POST['about'];
$role = $_POST['role'];
$err_msg = null;

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

if ($user) {
    $err_msg = "Username already exists";
    header("Location: ../register.php?error=" . $err_msg);
} else if ($password !== $password_confirm) {
    $err_msg = "Passwords do not match";
    header("Location: ../register.php?error=" . $err_msg);
} else {
    $sql = "INSERT INTO users (username, password, name, about, role) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bind_param("sssss", $username, $hashed_password, $name, $about, $role);
    $stmt->execute();
    $_SESSION['user'] = [
        'username' => $_POST['username'],
        'name' => $_POST['name'],
        'about' => $_POST['about'],
        'role' => $_POST['role']
    ];
    header("Location: ../index.php");
}
