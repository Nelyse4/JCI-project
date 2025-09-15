<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home | JCI Ottawa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>

<body>

  <?php include('includes/header.php'); ?>

<main>
  <section class="banner">
    <div class="container">
      <div class="carousel" data-carousel>
        <button class="carousel-btn prev" data-carousel-btn="prev"><i class="material-icons">keyboard_arrow_left</i></button>
        <button class="carousel-btn next" data-carousel-btn="next"><i class="material-icons">keyboard_arrow_right</i></button>

        <ul class="images" data-images>
          <li class="img active" data-active><img src="./images/JCi.png" alt="JCI image"></li>
          <li class="img"><img src="./images/jcio.png" alt="JCI image"></li>
          <li class="img"><img src="./images/group.png" alt="JCI image"></li>
          <li class="img"><img src="./images/parliament.jpg" alt="JCI image"></li>
          <li class="img"><img src="./images/jcit.png" alt="JCI image"></li>
          <li class="img"><img src="./images/ott.png" alt="JCI image"></li>
          <li class="img"><img src="./images/vol.png" alt="JCI image"></li>
        </ul>

        <ul class="progress-bar">
          <li class="selected"></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>
  </section>

  <!-- WAVES -->
  <section>
    <div class="waves" aria-hidden="true">
      <svg class="wave wave1" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,40 C150,140 350,0 600,60 C850,120 1050,20 1200,60 L1200,120 L0,120 Z" fill="#2a5298"></path>
      </svg>

      <svg class="wave wave2" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,60 C200,10 400,120 600,80 C800,40 1000,100 1200,60 L1200,120 L0,120 Z" fill="#f7b733"></path>
      </svg>
    </div>

    <div class="container">
      <div class="intro">
        <div class="intro-card">
          <div class="text-content">
            <h2>Who We Are</h2>
            <p>JCI Ottawa is a group of young professionals and entrepreneurs committed to creating positive change in our community. Affiliated with JCI Canada and Junior Chamber International, we have more than 200,000 members in over 100 countries. Through networking, training and personal development opportunities, we inspire our members to build leadership skills and take action. JCI Ottawa members range in age from 18–40.</p>
            <p>Members plan and carry out projects and programs focusing on four key areas: Business Development, Community Development, International Development, and Individual Development.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta-blue">
    <div class="cta-left">
      
      <h4>Have a question?</h4>
      <p>Our team is happy to assist you</p>
      <a href="contact.php" class="btn-white">Contact Us</a>
      
    </div>
    <div class="cta-right">
      <img src="images/JCi.png" alt="Support team">
    </div>
  </section>
  <section class="newsletter">
    <div class="newsletter-title">
  </section>  
  <div class="intro-card" data-aos="fade-up" data-aos-duration="1000">
  <p>JCI Ottawa</p>
  </div>
  
</main>

<?php include('includes/footer.php'); ?>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<!-- Carousel Script+ AOS Init -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
      const images = document.querySelectorAll(".images li");
      const dots = document.querySelectorAll(".progress-bar li");
      const prev = document.querySelector(".prev");
      const next = document.querySelector(".next");
      let currentIndex = 0;

      function displayImage(i) {
        images.forEach(img => img.classList.remove("active"));
        dots.forEach(dot => dot.classList.remove("selected"));

        images[i].classList.add("active");
        dots[i].classList.add("selected");
        currentIndex = i;
      }

      next.addEventListener("click", () => {
        let newIndex = (currentIndex + 1) % images.length;
        displayImage(newIndex);
      });

      prev.addEventListener("click", () => {
        let newIndex = (currentIndex - 1 + images.length) % images.length;
        displayImage(newIndex);
      });

      dots.forEach((dot, i) => {
        dot.addEventListener("click", () => {
          displayImage(i);
        });
      });

      // Autoplay
       setInterval(() => {
        let newIndex = (currentIndex + 1) % images.length;
        displayImage(newIndex);
      }, 3000);
      // AOS init
      AOS.init();
    });
  </script>



</body>
</html>
