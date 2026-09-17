<?php
require_once 'db.php';

if (isset($_POST['register_btn'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hashed_password);

    if ($stmt->execute()) {
        header("Location: ../pages/login.php?registered=1");
        exit();
    } else {
        echo "Error creating account. That email might already be in use.";
    }
}
?>