<?php
session_start(); // Grab current session
session_unset(); // Remove all variables
session_destroy(); // Destroy session completely

// back to homepage
header("Location: index.php");
exit();
?>