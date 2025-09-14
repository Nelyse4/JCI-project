<?php include 'includes/header.php'; ?>

<!-- CONTACT PAGE -->
<section class="contact-page">
  <div class="contact-header">
    <h2>Contact Us</h2>
    <p>Get in contact with us about becoming a member & discover the power of Junior Chamber International. We'd love to meet you in person!</p>
  </div>

  <div class="contact-container">
    <form class="contact-form" action="https://formsubmit.co/executive@jciottawa.ca" method="POST">
      <h3>Get In Touch</h3>
      <input type="text" name="name" placeholder="Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="tel" name="phone" placeholder="Phone Number">
      <textarea name="message" placeholder="Message" rows="5" required></textarea>
      <button type="submit">Submit</button>
    </form>
  </div>

  <div class="contact-info">
    <h3>We’re here for you.</h3>
    <div class="info-grid">
      <div class="info-box">
        <h4>Office</h4>
        <p>JCI Ottawa, Ottawa, Ontario.</p>
      </div>
      <div class="info-box">
        <h4>Email</h4>
        <p>ottawa.jci@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="newsletter-section">
    <h3>Get on our newsletter</h3>
    <!-- <form class="newsletter-form" action="#" method="POST">
      <input type="email" placeholder="Enter e-mail address" required>
      <button type="submit">Subscribe</button>
    </form> -->
  </div>
</section>

<?php include 'includes/footer.php'; ?>
