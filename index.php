<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home | JCI Ottawa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
  
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
            <li class="img"><img src="./images/fb.jpg" alt="JCI image"></li>
            <li class="img"><img src="./images/group.png" alt="JCI image"></li>
            <li class="img"><img src="./images/parliament.jpg" alt="JCI image"></li>
            <li class="img"><img src="./images/JCI Logo.jpg" alt="JCI image"></li>
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
    <section>

      <div class="container">
        <div class="intro">


          <div class="intro-card">
            <div class="text-content">

              <h2>Who We Are</h2>
              <p>JCI Ottawa is a group of young professionals and entrepreneurs committed to creating positive change in our community. Affiliated with JCI Canada and Junior Chamber International we have more than 200,000 members in over 100 countries.
Through networking, training and personal development opportunities, we inspire our members to build leadership skills and take action. JCI Ottawa members range in age from 19-40.</p>
              <p>Members plan and carry out projects and programs focusing on four key areas:
             Business Development
             Community Development
             International Development
             Individual Development
              </p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section class="cta-blue">
      <!-- <div class="container"> -->
        <div class="cta-left">
          <h4>Have a question?</h4>
          <p>Our team is happy to assist you</p>
          <a href="contact.php" class="btn-white">Contact Us</a>
        </div>
        <div class="cta-right">
          <img src="images/JCi.png" alt="Support team">
        </div>
      <!-- </div>   -->
    </section>
    <section class="newsletter">
      <div class="newsletter-title">
        <h3>Get on our <br> Newsletter</h3>
      </div>
      <!-- <form class="newsletter-form">
        <input type="email" placeholder="Enter e-mail address" required>
        <button type="submit">Subscribe</button>
      </form> -->
    </section>

  </main>

  <?php include('includes/footer.php'); ?>

  <script>

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

    })
  
  prev.addEventListener("click", () => {
    let newIndex = (currentIndex - 1 + images.length) % images.length;
    displayImage(newIndex);

    })

  dots.forEach((dot, i)=> {
    dot.addEventListener("click", () => {
      displayImage(i);
    })
  })


</script>

</body>
</html>
