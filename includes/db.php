<?php
$conn = mysqli_connect('localhost', 'root', '', 'centra_db', 3307);

if ($conn->connect_error) {
    die('Unable to Connect: ' . $conn->connect_error);
}
?>