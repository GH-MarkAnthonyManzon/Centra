<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Sora & Inter Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Sora:wght@100..800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="../css/home.css" />
    <link rel="stylesheet" href="../css/contact.css" />
    <title>Contact</title>
</head>

<body>

    <!-- Header / Navbar -->
    <?php require_once '../components/header.php'; ?>

    <main>

        <!-- Contact Hero Section -->
        <section class="contact-hero">
            <div class="container hero-container">
                <div class="hero-text">
                    <h1>Let's talk about your smarter home.</h1>
                    <p>Have a question about Centra? We're here to help you find the right setup for your home.</p>
                </div>
            </div>
        </section>

        <!-- Contact Content Section (Form & Info) -->
        <section class="contact-content">
            <div class="container contact-grid">

                <!-- Contact Form (Left Column) -->
                <div class="contact-form-wrapper">
                    <h2>Send us a message.</h2>


                    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                        <div class="success-message">
                            Message sent successfully!
                        </div>
                        <script>

                            window.history.replaceState(null, null, window.location.pathname);

                            setTimeout(function () {
                                const messageBox = document.querySelector('.success-message');
                                if (messageBox) {
                                    messageBox.style.display = 'none';
                                }
                            }, 5000);
                        </script>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['user_id'])): ?>

                        <form class="contact-form" method="POST" action="../includes/process_contact.php">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" placeholder="Your name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="you@email.com" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" placeholder="What's on your mind?" name="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="inquiry">Inquiry type <span>(optional)</span></label>
                                <select id="inquiry" name="inquiry">
                                    <option value="" disabled selected>Select a category</option>
                                    <option value="products">Product Questions</option>
                                    <option value="ecosystem">Ecosystem & Compatibility</option>
                                    <option value="technical">Technical Support</option>
                                    <option value="partnership">Partnership & Collaboration</option>
                                    <option value="general">General Inquiry</option>
                                    <option value="other">Other</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea id="message" rows="5" placeholder="Tell us more..." name="message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="btn">Send Message</button>
                        </form>

                    <?php else: ?>
                        <div
                            style="background: #f8fafc; border: 1px dashed #cbd5e1; border-radius: 12px; padding: 3rem 2rem; text-align: center; margin-top: 1rem;">
                            <h3 style="margin-bottom: 1rem; font-size: 1.25rem; color: var(--color-text-dark);">Account
                                Required</h3>
                            <p style="color: #64748b; margin-bottom: 2rem;">Please log in or create a free account to send
                                us an inquiry directly.</p>
                            <div style="display: flex; gap: 1rem; justify-content: center;">
                                <a href="login.php" class="btn btn-primary">Log In</a>
                                <a href="register.php" class="btn"
                                    style="border: 2px solid #e2e8f0; color: var(--color-text-dark);">Sign Up</a>
                            </div>
                        </div>
                    <?php endif; ?>


                </div>

                <!-- Contact Information (Right Column) -->
                <div class="contact-info-wrapper">
                    <h2>Contact information.</h2>

                    <div class="info-list">
                        <div class="info-item">
                            <div class="info-icon">✉</div>
                            <div class="info-text">
                                <strong>EMAIL</strong>
                                <p>hello@centra.home</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">✆</div>
                            <div class="info-text">
                                <strong>PHONE</strong>
                                <p>+63 (000) 000-0000</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">⚲</div>
                            <div class="info-text">
                                <strong>LOCATION</strong>
                                <p>Philippines</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon">🕒</div>
                            <div class="info-text">
                                <strong>HOURS</strong>
                                <p>Monday-Friday · 9:00 AM-5:00 PM</p>
                            </div>
                        </div>
                    </div>

                    <div class="response-card">
                        <strong>Response time</strong>
                        <p>We aim to respond to all messages within one business day. For urgent matters, reach us
                            directly by phone during business hours.</p>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- Footer -->
    <?php require_once '../components/footer.php'; ?>

    <script src="../js/script.js"></script>

</body>

</html>