<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- Header / Navbar -->
<nav class="navbar">
    <div class="container nav-container">
        <a href="index.php" class="logo">
            <img src="assets/Centra Logo.svg" alt="Centra" class="logo-normal">
            <img src="assets/Centra Logo White.svg" alt="Centra" class="logo-white">
        </a>

        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>

            <?php if (isset($_SESSION['user_id'])): ?>
                <!-- If logged in, say Hi and show Logout -->
                <li><span style="color: var(--color-primary); font-weight: 600; margin-left: 20px;">Hi,
                        <?php echo $_SESSION['user_name']; ?>!</span></li>
                <li><a href="logout.php" style="color: #b91c1c;">Logout</a></li>
            <?php else: ?>
                <!-- If NOT logged in, show Login -->
                <li><a href="login.php" style="margin-left: 20px; font-weight: 600;">Login / Register</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>