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

    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="contact.css" />
    <title>Contact</title>
</head>

<body>

    <!-- Header / Navbar -->
    <?php include 'components/header.php'; ?>

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
                    <form class="contact-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" placeholder="Your name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" placeholder="you@email.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" placeholder="What's on your mind?">
                        </div>
                        <div class="form-group">
                            <label for="inquiry">Inquiry type <span>(optional)</span></label>
                            <select id="inquiry">
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
                            <textarea id="message" rows="5" placeholder="Tell us more..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
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
    <?php include 'components/footer.php'; ?>

    <script src="script.js"></script>

</body>

</html>