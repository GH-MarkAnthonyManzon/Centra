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
    <link rel="stylesheet" href="../css/about.css" />
    <title>About</title>
</head>

<body>

    <!-- Header / Navbar -->
    <?php require_once '../components/header.php'; ?>

    <main>

        <!-- About Hero Section -->
        <section class="about-hero">
            <div class="container hero-container">
                <div class="hero-text">
                    <h1>Smart technology, made for real life.</h1>
                    <p>Centra was built on a simple idea: your home should feel effortless, not like another system to
                        learn.</p>
                </div>
            </div>
        </section>

        <!-- Our Purpose Section -->
        <section class="purpose-section">
            <div class="container purpose-container">
                <div class="purpose-heading">
                    <h2>Making connected living feel simple.</h2>
                </div>
                <div class="purpose-text">
                    <p>Smart homes promise convenience but often deliver clutter, too many apps, too many devices that
                        don't talk to each other. Centra exists to bring it all together into one simple, connected
                        experience.</p>
                </div>
            </div>
        </section>

        <!-- Our Philosophy Section -->
        <section class="philosophy-section">
            <div class="container">
                <h2 class="section-title">Our Philosophy</h2>
                <div class="philosophy-grid">
                    <div class="philosophy-card">
                        <span class="card-number">01</span>
                        <h3>Simple</h3>
                        <p>Technology should be easy to understand and use. Complexity is a design failure, not a
                            feature.</p>
                    </div>
                    <div class="philosophy-card">
                        <span class="card-number">02</span>
                        <h3>Connected</h3>
                        <p>Devices should work together as one ecosystem. Isolation is inconvenience by design.</p>
                    </div>
                    <div class="philosophy-card">
                        <span class="card-number">03</span>
                        <h3>Human</h3>
                        <p>Automation should make life easier while keeping people in full control of their home.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Privacy & Control Section -->
        <section class="privacy-section dark-section">
            <div class="container privacy-container">
                <div class="privacy-text">
                    <div class="pill-label"><span class="pill-dot"></span> Privacy by design</div>
                    <h2>Your home. Your data. Your control.</h2>
                    <p>Your home's data should stay yours. Centra is designed to keep key functions running locally, so
                        your home doesn't have to depend entirely on the cloud to work, giving you more control over
                        how your information is used.</p>
                </div>
                <div class="privacy-grid">
                    <div class="privacy-card">
                        <span class="privacy-icon">⚙</span>
                        <h4>Local Processing</h4>
                        <p>Automations run on Hub</p>
                    </div>
                    <div class="privacy-card">
                        <span class="privacy-icon">☁</span>
                        <h4>Minimal Cloud</h4>
                        <p>Only what's necessary</p>
                    </div>
                    <div class="privacy-card">
                        <span class="privacy-icon">◎</span>
                        <h4>Your Rules</h4>
                        <p>You set the conditions</p>
                    </div>
                    <div class="privacy-card">
                        <span class="privacy-icon">☐</span>
                        <h4>Always On</h4>
                        <p>Works without internet</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section (Light Version) -->
        <section class="light-faq" id="faqs">
            <div class="container">
                <div class="faq-header">
                    <h2>Frequently asked questions.</h2>
                </div>
                <div class="faq-list">
                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What is Centra?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Centra is a smart-home ecosystem that connects your devices — sensors, lighting, plugs,
                                and a central hub — so they work together automatically.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What products are part of the Centra ecosystem?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Four products: Hub, Sense, Light, and Plug. Together they cover control, sensing,
                                lighting, and smart-enabling your existing appliances.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Do I need a hub to use Centra products?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes. The Hub is the center of the ecosystem — it's what lets your other devices
                                communicate and automate together.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Do Centra products work together?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, that's the whole point. Sense, Light, and Plug are all designed to respond to each
                                other through the Hub.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What happens if my internet goes down?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Core automations continue to run locally through the Hub, so your home keeps functioning
                                even without an internet connection.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Is Centra compatible with other smart-home products?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Centra supports common smart-home standards like Matter, Wi-Fi, and Thread, making it
                                easier to connect with other compatible devices.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Can I control my home automatically?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Yes. Once your devices are connected, you can set routines and conditions so your home
                                responds on its own.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>What happens to my smart-home data?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Your data is used to make your home run smoothly, with a focus on keeping key processes
                                local rather than fully cloud-dependent.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Can I still manually control my devices?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Always. Automation is there to help, but you're never locked out of manual control.</p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            <span>Do I need to make my entire home smart at once?</span>
                            <span class="faq-icon">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>No. You can start with a single product and expand your ecosystem at your own pace.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- About CTA Section -->
        <section class="about-cta">
            <div class="container">
                <h2>Ready to make your home smarter?</h2>
                <p>Start with the ecosystem, or get in touch if you have questions.</p>
                <div class="cta-buttons">
                    <a href="product.php" class="btn btn-primary">Explore Products</a>
                    <a href="contact.php" class="btn btn-outline">Contact Us</a>
                </div>
            </div>
        </section>


    </main>

    <!-- Footer -->
    <?php require_once '../components/footer.php'; ?>

    <script src="../js/script.js"></script>

</body>

</html>