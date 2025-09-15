<!-- includes/footer.php -->
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<footer class="jci-footer">
  <div class="footer-top">
    <img src="images/JCI Logo.png" alt="JCI Ottawa Logo" class="logo">

    

<div class="social-icons">
  <a href="https://www.facebook.com/JCI.Ottawa/" target="_blank" rel="noopener noreferrer" title="Facebook">
    <img src="images/fb.jpg" alt="Facebook Logo" />
  </a>
  <a href="https://www.instagram.com/jciottawa/" target="_blank" rel="noopener noreferrer" title="Instagram">
    <img src="images/ig.png" alt="Instagram Logo" />
  </a>
  <a href="https://www.linkedin.com/company/jci-ottawa-junior-chamber-international/" target="_blank" rel="noopener noreferrer" title="GitHub">
    <img src="images/linkedIn.png" alt="LinkedIn Logo" />
  </a>
</div>


  </div>

  <hr class="footer-divider" />

  <div class="footer-bottom">
    &copy; Copyright 2025, All Rights Reserved by JCI Ottawa
  </div>
</footer>
<script>
  document.addEventListener("DOMContentLoaded", function () {
  const header = document.getElementById('site-header');

  function checkScroll() {
    if (window.scrollY > 60) {
      header.classList.add('scrolled-down');
      header.classList.remove('default');
    } else {
      header.classList.remove('scrolled-down');
      header.classList.add('default');
    }
  }

  window.addEventListener('scroll', checkScroll);
  checkScroll(); // Initial check on page load
});

</script>

</body>
</html>
