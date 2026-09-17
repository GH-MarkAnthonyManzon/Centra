<?php
// root username, no password set
$conn = mysqli_connect('localhost', 'root', '', 'centra_db', 3307);

// Check connection
if ($conn->connect_error) {
    die('Unable to Connect: ' . $conn->connect_error);
}
?>