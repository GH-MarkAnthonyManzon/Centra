<!doctype html>
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

  <link rel="stylesheet" href="css/home.css" />
  <title>Centra</title>
</head>

<body>
  <!-- Header / Navbar -->
  <?php require_once 'components/header.php'; ?>

  <!-- Main Body -->
  <main>

    <!-- Hero -->
    <section class="hero">
      <div class="container hero-container">

        <!-- Left Column -->
        <div class="hero-text">
          <h1>A simpler way to connect your home.</h1>
          <p>Connect your devices, automate your routines, and control your home from one simple, reliable experience.
          </p>

          <div class="hero-buttons">
            <a href="product.php" class="btn btn-primary">Explore Products</a>
            <a href="about.php" class="btn btn-secondary">Learn How It Works</a>
          </div>
        </div>

        <!-- Right Column -->
        <div class="hero-visual">
          <div class="visual-placeholder-box">
            <img src="assets/House Interior (1).webp" alt="Centra Smart Home Interior">
          </div>
        </div>

      </div>
    </section>

    <!-- Problems -->
    <section class="problems-section">
      <div class="container">

        <div class="problems-header">
          <h2>Your home shouldn't feel<br>complicated.</h2>
        </div>

        <div class="problems-grid">

          <!-- Card 1 -->
          <div class="problem-card">

            <div class="problem-icon">⊘</div>
            <h3>Disconnected devices</h3>
            <p>Products that don't communicate.</p>
          </div>

          <!-- Card 2 -->
          <div class="problem-card">
            <div class="problem-icon">⊞</div>
            <h3>Too many apps</h3>
            <p>Every device shouldn't need another app.</p>
          </div>

          <!-- Card 3 -->
          <div class="problem-card">
            <div class="problem-icon">⎈</div>
            <h3>Complicated controls</h3>
            <p>Smart automation shouldn't require technical knowledge.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Solution -->
    <section class="solutions-section">
      <div class="container solutions-container">

        <div class="solutions-text">
          <h2>One ecosystem. One experience.</h2>
          <p>Centra connects your everyday smart-home devices, sensors, lighting, and plugs,into one ecosystem, so
            they respond to each other instead of working in isolation.</p>
        </div>

        <div class="solutions-visual">
          <div class="flowchart-container">

            <div class="flow-node flow-node-light">
              <h4>Sense</h4>
              <span>Detects conditions</span>
            </div>

            <div class="flow-arrow">↓</div>

            <div class="flow-node flow-node-primary">
              <h4>Hub</h4>
              <span>Processes & routes</span>
            </div>

            <div class="flow-arrow">↓</div>

            <div class="flow-node flow-node-light">
              <h4>Light</h4>
              <span>Responds automatically</span>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- Products  -->
    <section class="products-section">
      <div class="container">

        <div class="products-header">
          <h2>Meet the ecosystem.</h2>
          <a href="product.php" class="explore-link">Explore All Products &rarr;</a>
        </div>

        <!-- We wrap it in a carousel track -->
        <div class="carousel-wrapper">
          <div class="carousel-track">

            <!-- SET 1 (4 Products) -->
            <div class="product-card">
              <img src="assets/Centra Hub.webp" alt="Centra Hub" class="product-image">
              <h4>Centra Hub</h4>
            </div>
            <div class="product-card">
              <img src="assets/Centra Sense.webp" alt="Centra Sense" class="product-image">
              <h4>Centra Sense</h4>
            </div>
            <div class="product-card">
              <img src="assets/Centra Light.webp" alt="Centra Light" class="product-image">
              <h4>Centra Light</h4>
            </div>
            <div class="product-card">
              <img src="assets/Centra Plug.webp" alt="Centra Plug" class="product-image">
              <h4>Centra Plug</h4>
            </div>

            <!-- SET 2 (Exact Duplicate for the seamless loop!) -->
            <div class="product-card">
              <img src="assets/Centra Hub.webp" alt="Centra Hub" class="product-image">
              <h4>Centra Hub</h4>
            </div>
            <div class="product-card">
              <img src="assets/Centra Sense.webp" alt="Centra Sense" class="product-image">
              <h4>Centra Sense</h4>
            </div>
            <div class="product-card">
              <img src="assets/Centra Light.webp" alt="Centra Light" class="product-image">
              <h4>Centra Light</h4>
            </div>
            <div class="product-card">
              <img src="assets/Centra Plug.webp" alt="Centra Plug" class="product-image">
              <h4>Centra Plug</h4>
            </div>

          </div>
        </div>

      </div>
    </section>

    <!-- How It Works -->
    <section class="process-section">
      <div class="container">

        <div class="process-header">
          <h2>Simple by design.</h2>
        </div>

        <div class="process-steps-container">
          <div class="process-line"></div>

          <div class="process-grid">

            <!-- Step 1 -->
            <div class="process-step">
              <div class="step-circle">01</div>
              <h4>CONNECT</h4>
              <p>Add your devices.</p>
            </div>

            <!-- Step 2 -->
            <div class="process-step">
              <div class="step-circle">02</div>
              <h4>SET</h4>
              <p>Create your routines.</p>
            </div>

            <!-- Step 3 -->
            <div class="process-step">
              <div class="step-circle">03</div>
              <h4>LIVE</h4>
              <p>Let your home respond.</p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- About Preview Section -->
    <section class="brand-section dark-section">
      <div class="container brand-container">

        <div class="brand-text">
          <h2>Smart technology, made for real life.</h2>
          <p>We believe smart homes should simplify your life, not add another thing to manage.</p>
          <a href="about.php" class="btn btn-primary">About Centra</a>
        </div>

        <div class="brand-visual">
          <div class="brand-placeholder-box">
            <img src="assets/Smart Home.webp" alt="Smart Home Technology">
          </div>
        </div>

      </div>
    </section>


    <!-- FAQ Section -->
    <section class="faq-section dark-section">
      <div class="container faq-container">

        <div class="faq-header">
          <h2>Common questions.</h2>
          <a href="about.php#faqs" class="explore-link">View All FAQs &rarr;</a>
        </div>

        <div class="faq-list">
          <!-- Question 1 -->
          <div class="faq-item">
            <div class="faq-question">
              <span>Do I need a hub to use Centra products?</span>
              <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">
              <p>Yes. The Hub is the center of the ecosystem — it's what lets your other devices communicate and
                automate together.</p>
            </div>
          </div>

          <!-- Question 2 -->
          <div class="faq-item">
            <div class="faq-question">
              <span>Do Centra products work together?</span>
              <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">
              <p>Yes, that's the whole point. Sense, Light, and Plug are all designed to respond to each other through
                the Hub.</p>
            </div>
          </div>

          <!-- Question 3 -->
          <div class="faq-item">
            <div class="faq-question">
              <span>What happens if my internet goes down?</span>
              <span class="faq-icon">+</span>
            </div>
            <div class="faq-answer">
              <p>Core automations continue to run locally through the Hub, so your home keeps functioning even without
                an internet connection.</p>
            </div>
          </div>
        </div>


      </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section dark-section">
      <div class="container cta-container">

        <h2>Make your home work for you.</h2>
        <p>One ecosystem, designed to keep things simple.</p>

        <div class="cta-buttons">
          <a href="product.php" class="btn btn-primary">Explore Products</a>
          <a href="contact.php" class="btn btn-secondary-light">Contact Us</a>
        </div>

      </div>
    </section>

  </main>

  <!-- Footer -->
  <?php require_once 'components/footer.php'; ?>

  <script src="js/script.js"></script>

</body>

</html>