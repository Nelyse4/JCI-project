<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home | JCI Ottawa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>

  <?php include('includes/header.php'); ?>

  <main>
    <section>
      <div class="carousel" data-carousel>
        <button class="carousel-btn prev" data-carousel-btn="prev">prev</button>
        <button class="carousel-btn next" data-carousel-btn="next">next</button>
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
    </section>
    <h1>Welcome to JCI Ottawa</h1>
    <p>This is the homepage content.</p>
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
