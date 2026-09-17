<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Centra</title>
    <link rel="stylesheet" href="../css/home.css" />
    <link rel="stylesheet" href="../css/contact.css" />
</head>

<body>

    <!-- Header / Navbar -->
    <?php require_once '../components/header.php'; ?>

    <main>
        <section class="contact-content" style="padding-top: 8rem;">
            <div class="container">
                <div class="contact-form-wrapper" style="max-width: 500px; margin: 0 auto;">
                    <h2>Welcome Back</h2>
                    <p style="margin-bottom: 2rem; color: #64748b;">Log in to your Centra account.</p>

                    <?php if (isset($_GET['registered']) && $_GET['registered'] == 1): ?>
                        <div class="success-message">
                            Account created successfully! Please log in.
                        </div>
                        <script>window.history.replaceState(null, null, window.location.pathname);</script>
                    <?php endif; ?>

                    <?php if (isset($_GET['error'])): ?>
                        <div class="success-message" style="background: #fee2e2; color: #b91c1c; border-color: #fecaca;">
                            Invalid email or password.
                        </div>
                        <script>window.history.replaceState(null, null, window.location.pathname);</script>
                    <?php endif; ?>

                    <form class="contact-form" method="POST" action="../includes/process_login.php">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" placeholder="you@email.com" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <div style="position: relative;">
                                <input type="password" id="password" placeholder="Enter your password" name="password"
                                    required style="width: 100%; padding-right: 40px;">
                                <span id="togglePassword"
                                    style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                    <img src="../assets/eye.svg" alt="Show password">
                                </span>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary" name="login_btn" style="width: 100%;">Log
                            In</button>
                    </form>

                    <p style="text-align: center; margin-top: 1.5rem;">
                        Don't have an account? <a href="register.php"
                            style="color: var(--color-primary); font-weight: 600;">Sign up here</a>.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php require_once '../components/footer.php'; ?>

    <script src="../js/script.js"></script>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.innerHTML = type === 'password'
                ? '<img src="../assets/eye.svg" alt="Show password">'
                : '<img src="../assets/eye-off.svg" alt="Hide password">';
        });
    </script>
</body>

</html>