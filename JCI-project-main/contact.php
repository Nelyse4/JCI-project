<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact | JCI Ottawa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>

<body>

  <?php include 'includes/header.php'; ?>

  <main>
    <!-- CONTACT PAGE -->
    <section class="contact-hero">
      <div class="overlay">
        <div class="contact-header">
          <h2>Contact Us</h2>
          <p>Get in touch with us about becoming a member. We'd love to meet you in person!</p>
        </div>
      </div>
    </section>

    <section class="contact-container">
      <form class="contact-form" action="https://formsubmit.co/executive@jciottawa.ca" method="POST" data-aos="fade-up">
        <h3>Get In Touch</h3>
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </section>

    <section class="contact-info">
      <h3>We’re here for you.</h3>
      <div class="info-grid">
        <div class="info-box">
          <h4>JCI Ottawa</h4>
          <p>Ottawa, Ontario</p>
        </div>
        <div class="info-box">
          <h4>Email</h4>
          <p>ottawa.jci@gmail.com</p>
        </div>
      </div>
    </section>

    <section class="newsletter-section">
      <h3>Join Our Community</h3>
      <form class="newsletter-form">
        <a href="https://app.glueup.com/org/jciottawa" class="btn-blue">Join JCI Ottawa</a>
      </form>
    </section>
  </main>

  <?php include 'includes/footer.php'; ?>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1000 });
</script>

</body>
</html>
