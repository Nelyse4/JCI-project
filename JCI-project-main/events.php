<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Events | JCI Ottawa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

  <?php include 'includes/header.php'; ?>

  <main class="page-container events-page">

    <!-- Hero Banner -->
    <section class="events-hero">
      <img src="images/vol.png" alt="JCI Events" class="events-bg">
      <div class="events-overlay">
        <h1>JCI Ottawa Events</h1>
        <p>
          JCI Ottawa hosts many events that empower young professionals—from leadership training to debate competitions and networking opportunities.
        </p>
      </div>
    </section>

    <!-- Tabs -->
    <section class="events-tabs">
      <ul class="tab-nav">
        <li class="tab-link active" data-tab="current">Current Events</li>
        <li class="tab-link" data-tab="past">Past Events</li>
        <li class="tab-link" data-tab="calendar">Calendar</li>
      </ul>

      <div class="tab-content active" id="current">
        <p></p>
      </div>

      <div class="tab-content" id="past">
        <p></p>
      </div>

      <div class="tab-content" id="calendar">
        <div id="calendar-frame-container"></div>
      </div>
    </section>

  </main>

  <?php include 'includes/footer.php'; ?>

  <!-- Tabs Script -->
  <script>
    document.querySelectorAll(".tab-link").forEach(function (tab) {
      tab.addEventListener("click", function () {
        // Remove active classes
        document.querySelectorAll(".tab-link").forEach(t => t.classList.remove("active"));
        document.querySelectorAll(".tab-content").forEach(c => c.classList.remove("active"));

        // Add active to current
        this.classList.add("active");
        const tabId = this.getAttribute("data-tab");
        const tabContent = document.getElementById(tabId);
        tabContent.classList.add("active");

        // Lazy load calendar iframe
        if (tabId === "calendar") {
          const container = document.getElementById("calendar-frame-container");
          if (!container.querySelector("iframe")) {
            const iframe = document.createElement("iframe");
            iframe.src = "https://calendar.google.com/calendar/embed?src=ottawa.jci%40gmail.com&ctz=America%2FToronto";
            iframe.style.border = "0";
            iframe.style.width = "100%";
            iframe.style.height = "600px";
            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("scrolling", "no");
            container.appendChild(iframe);
          }
        }
      });
    });
  </script>

</body>
</html>
