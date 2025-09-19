<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About | JCI Ottawa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
</head>

<body>

  <?php include 'includes/header.php'; ?>

  <main>

  <section class="hero">
    <div class="container hero-container">
      <div class="about-content" data-aos="fade-right" data-aos-delay="1000">
        <h1><span>EMPOWERING</span><br>OTTAWA’S YOUNG<br>LEADERS TO BE BETTER</h1>
      </div>

      <div class="hero-wrapper" data-aos="zoom-in" data-aos-delay="500">
        <div class="hero-images">
          <div class="hero-img-left">
            <img src="images/group.png" alt="JCI Group Photo">
          </div>
          <div class="hero-img-right">
            <img src="images/JCi.png" alt="JCI Leader">
          </div>
        </div>

        <div class="hero-text">
          <div class="our-story-container" data-aos="flip-up" data-aos-delay="1500" data-aos-once="false">
            <div class="story-left">
              <a href="#" class="our-story-link">Our Story ➜</a>
            </div>
            <div class="story-right">
              <p>
                We are a delighted JCI Local Organization proudly connected with JCI Canada. We focus on a range of social and community 
                development projects designed to foster participation and contribute to change within communities.  
                We focus on developing leadership skills and creating opportunities for growth.  
                JCI Ottawa is defined by its core values of Leadership, Responsibility, Cooperation, and Progress. 
                The organization truly cares about helping people grow as leaders within their communities and beyond. 
                We also joyfully offer youth leadership development programs to inspire young individuals to take initiative and create 
                a positive impact in their community.
              </p>

              <p>
                Building on this foundation, JCI Ottawa stands as a vibrant part of this global movement, actively fostering connections 
                among driven young leaders and offering a platform for innovative projects that address local needs. 
                By cultivating collaborative opportunities and encouraging civic engagement, JCI Ottawa empowers its members 
                to develop practical skills and make a lasting impact, seamlessly contributing to the shared mission of creating 
                positive change within both the local community and the worldwide JCI network.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="what-jci">
    <div class="container">
      <h2 data-aos="fade-up">What Does JCI Offer?</h2>
      <p data-aos="fade-up" data-aos-delay="100" data-aos-once="false">
        First, ask yourself: who do you want to be? Do you want to become someone who leads, creates, speaks, and brings others together? Someone who makes an impact in the world? JCI exists to help you become that version of yourself.
      </p>

      <div class="jci-columns">
        <div class="jci-box" data-aos="fade-up" data-aos-delay="200" data-aos-once="false">
          <h4>The Desire to Be Better</h4>
          <p>JCI provides the training and network to help you grow personally and professionally.</p>
        </div>
        <div class="jci-box" data-aos="fade-up" data-aos-delay="300" data-aos-once="false">
          <h4>The Desire for Community Involvement</h4>
          <p>Our members are active citizens who identify problems and take action to solve them in their communities.</p>
        </div>
        <div class="jci-box" data-aos="fade-up" data-aos-delay="400">
          <h4>The Desire for Fellowship</h4>
          <p>Form a local and global network of friends who support and push each other to grow.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="programs">
    <div class="container">
      <h2 data-aos="fade-up">JCI Programs</h2>
      <div class="programs-content">
        <img src="images/group.png" alt="JCI Programs" data-aos="fade-right" data-aos-once="false">
        <div class="programs-text" data-aos="fade-left" data-aos-delay="200" data-aos-once="false">
          <p>
            JCI Ottawa is involved in a variety of impactful programs to empower young leaders and engage in their community. We offer mentorship, networking events, leadership development, and opportunities for community service.
          </p>
          <a href="#" class="btn-yellow">See Our Programs</a>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-yellow">
    <h3>Curious About JCI Ottawa?</h3>
    <p>Make the first move towards positive change for yourself and the city that you love and call home. Be Better.</p>
    <a href="https://app.glueup.com/org/jciottawa" class="btn-blue">Join JCI Ottawa</a>
  </section>

  <section class="cta-blue">
    <div class="container cta-container">
      <div class="cta-left" data-aos="flip-up" data-aos-duration="2000"data-aos-once="false">
        <h4>Have a question?</h4>
        <p>Our team is happy to assist you</p>
        <a href="contact.php" class="btn-white">Contact Us</a>
      </div>

      <div class="cta-right" data-aos="fade-left" data-aos-duration="2000" data-aos-once="false">
        <img id="ctaImage" src="./images/JCi.png" alt="Support team">
      </div>
    </div>
  </section>

</main>


  <?php include 'includes/footer.php'; ?>
<!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    /*cta-image-slider */
    document.addEventListener("DOMContentLoaded", () => {
    const images = [
      './images/JCi.png',
      './images/group.png',
      './images/parliament.jpg',
      './images/ott.png',
      './images/vol.png'
    ];

    let currentIndex = 0;
    const imgElement = document.getElementById('ctaImage');

    setInterval(() => {
      currentIndex = (currentIndex + 1) % images.length;
      imgElement.style.opacity = 0;

      setTimeout(() => {
        imgElement.src = images[currentIndex];
        imgElement.style.opacity = 1;
      }, 300); // fade out and back in
    }, 2000); // 2 seconds per image
  });

    AOS.init({
      duration: 1000,
      once: true
    });
  </script>
</body>
</html>
