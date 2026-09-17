<?php
// Start the session to know if user logged in
session_start();
require_once 'db.php';

if (isset($_POST['login_btn'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Check password if correct
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            // Send them back to the homepage
            header("Location: index.php");
            exit();
        } else {
            // Wrong password
            header("Location: login.php?error=1");
            exit();
        }
    } else {
        // Email not found
        header("Location: login.php?error=1");
        exit();
    }
}
?>