<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- Header / Navbar -->
<nav class="navbar">
    <div class="container nav-container">
        <a href="/Centra/index.php" class="logo">
            <img src="/Centra/assets/Centra Logo.svg" alt="Centra" class="logo-normal">
            <img src="/Centra/assets/Centra Logo White.svg" alt="Centra" class="logo-white">
        </a>

        <ul class="nav-links">
            <li><a href="/Centra/index.php">Home</a></li>
            <li><a href="/Centra/pages/product.php">Products</a></li>
            <li><a href="/Centra/pages/about.php">About</a></li>
            <li><a href="/Centra/pages/contact.php">Contact</a></li>

            <?php if (isset($_SESSION['user_id'])): ?>
                <li><span class="nav-name">Hi, <?php echo $_SESSION['user_name']; ?>!</span></li>
                <li><a href="/Centra/includes/logout.php" class="nav-logout">Logout</a></li>
            <?php else: ?>
                <li><a href="/Centra/pages/login.php" class="btn-nav-login">Login / Register</a></li>
            <?php endif; ?>

        </ul>
    </div>
</nav>