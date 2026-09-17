<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Sora & Inter Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Sora:wght@100..800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="home.css" />
    <link rel="stylesheet" href="product.css" />
    <title>Products</title>
</head>

<body>

    <!-- Header / Navbar -->
    <?php include 'components/header.php'; ?>

    <main>

        <!-- Product Hero Section -->
        <section class="product-hero">
            <div class="container hero-container">

                <div class="hero-text">
                    <h1>Everything your home needs to live smarter.</h1>
                    <p>Each product is built to work together as one system, not as separate gadgets you have to manage
                        on their own.</p>
                </div>

                <div class="hero-visual">
                    <div class="product-hero-placeholder">
                        <img src="assets/Centra Hub.webp" alt="Centra Hub" class="hub-center">

                        <div class="orbit-container sense-orbit">
                            <img src="assets/Centra Sense.webp" alt="Centra Sense" class="orbit-item">
                        </div>

                        <div class="orbit-container light-orbit">
                            <img src="assets/Centra Light.webp" alt="Centra Light" class="orbit-item">
                        </div>

                        <div class="orbit-container plug-orbit">
                            <img src="assets/Centra Plug.webp" alt="Centra Plug" class="orbit-item">
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- HUB SHOWCASE -->
        <section class="product-showcase" id="hub">
            <div class="container showcase-container">
                <div class="showcase-visual">
                    <img src="assets/Centra Hub.webp" alt="Centra Hub" class="showcase-image">
                </div>

                <div class="showcase-text">
                    <span class="product-label">CENTRA HUB</span>
                    <h2>The center of your connected home.</h2>
                    <ul class="feature-list">
                        <li><span>✓</span> Connects and coordinates all devices</li>
                        <li><span>✓</span> Runs automations locally</li>
                        <li><span>✓</span> Keeps core functions working without internet</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- SENSE SHOWCASE -->
        <section class="product-showcase" id="sense">
            <div class="container showcase-container">
                <div class="showcase-text">
                    <span class="product-label">CENTRA SENSE</span>
                    <h2>Know what's happening at home.</h2>
                    <ul class="feature-list">
                        <li><span>✓</span> Detects motion, temperature, and activity</li>
                        <li><span>✓</span> Triggers automations based on conditions</li>
                        <li><span>✓</span> Helps the home respond automatically</li>
                    </ul>
                </div>
                <div class="showcase-visual">
                    <img src="assets/Centra Sense.webp" alt="Centra Hub" class="showcase-image">
                </div>

            </div>
        </section>

        <!-- LIGHT SHOWCASE -->
        <section class="product-showcase" id="light">
            <div class="container showcase-container">
                <div class="showcase-visual">
                    <img src="assets/Centra Light.webp" alt="Centra Hub" class="showcase-image">
                </div>

                <div class="showcase-text">
                    <span class="product-label">CENTRA LIGHT</span>
                    <h2>Lighting that responds to you.</h2>
                    <ul class="feature-list">
                        <li><span>✓</span> Adjusts based on presence or time of day</li>
                        <li><span>✓</span> Works seamlessly with routines</li>
                        <li><span>✓</span> Can still be manually controlled</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- PLUG SHOWCASE -->
        <section class="product-showcase" id="plug">
            <div class="container showcase-container">
                <div class="showcase-text">
                    <span class="product-label">CENTRA PLUG</span>
                    <h2>Make everyday devices smarter.</h2>
                    <ul class="feature-list">
                        <li><span>✓</span> Connects existing appliances to the ecosystem</li>
                        <li><span>✓</span> Enables scheduling and automation</li>
                        <li><span>✓</span> Monitors device status in real time</li>
                    </ul>
                </div>
                <div class="showcase-visual">
                    <img src="assets/Centra Plug.webp" alt="Centra Hub" class="showcase-image">
                </div>

            </div>
        </section>

        <!-- How Products Work Together Section-->
        <section class="automation-section">
            <div class="container">
                <div class="automation-header">
                    <h2>Designed to work together.</h2>
                    <p>When devices communicate through the Hub, your home can act on its own, so you don't have to
                        think about it.</p>
                </div>
                <div class="automation-grid">

                    <div class="automation-box">
                        <span class="automation-label">PRIMARY AUTOMATION</span>
                        <div class="automation-flow">
                            <div class="flow-step step-light">Sense detects movement</div>
                            <div class="flow-arrow">↓</div>
                            <div class="flow-step step-primary">Hub processes the rule</div>
                            <div class="flow-arrow">↓</div>
                            <div class="flow-step step-light">Light turns on</div>
                        </div>
                    </div>

                    <div class="automation-box">
                        <span class="automation-label">SECONDARY AUTOMATION</span>
                        <div class="automation-flow">
                            <div class="flow-step step-inactive">No movement detected</div>
                            <div class="flow-arrow">↓</div>
                            <div class="flow-step step-inactive">Hub checks the condition</div>
                            <div class="flow-arrow">↓</div>
                            <div class="flow-step step-dark">Light turns off automatically</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Technology Section -->
        <section class="tech-section">
            <div class="container">
                <span class="tech-label">SMART TECHNOLOGY, WITHOUT THE COMPLEXITY.</span>
                <div class="tech-pills">
                    <div class="tech-pill">Matter</div>
                    <div class="tech-pill">Wi-Fi</div>
                    <div class="tech-pill">Thread</div>
                    <div class="tech-pill">Local Automation</div>
                </div>
            </div>
        </section>

        <!-- Products CTA Section-->
        <section class="products-cta">
            <div class="container">
                <h2>Discover a simpler connected home.</h2>
                <p>Learn what makes Centra different, or get in touch with any questions.</p>
                <div class="cta-buttons">
                    <a href="about.php" class="btn btn-primary">Learn About Centra</a>
                    <a href="contact.php" class="btn btn-outline">Contact Us</a>
                </div>
            </div>
        </section>


    </main>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <script src="script.js"></script>

</body>

</html>