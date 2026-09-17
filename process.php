<?php
require_once 'db.php';

if (isset($_POST['btn'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $inquiry = $_POST['inquiry'];
    $message = $_POST['message'];

    // Replaced traditional SQL with prepared statements to securely handle and execute database queries.
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, inquiry, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $subject, $inquiry, $message);

    if ($stmt->execute()) {
        header("Location: contact.php?success=1");
        exit();
    } else {
        echo "Failed to send message.";
    }
}

?>