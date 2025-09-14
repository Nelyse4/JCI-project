<?php include 'includes/header.php'; ?>

<div class="page-container events-page">

  <!-- Hero Banner -->
  <section class="events-hero">
    <img src="images/group.png" alt="JCI Events" class="events-bg">
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
      
    </div>

    <div class="tab-content" id="past">
      
    </div>

    <div class="tab-content" id="calendar">
      <div id="calendar-frame-container"></div>
    </div>
  </section>

</div>

<!-- Tabs Script -->
<script>
  document.querySelectorAll(".tab-link").forEach(function (tab) {
    tab.addEventListener("click", function () {
      // Remove active classes from all tabs and content sections
      document.querySelectorAll(".tab-link").forEach(t => t.classList.remove("active"));
      document.querySelectorAll(".tab-content").forEach(c => c.classList.remove("active"));

      // Activate clicked tab and its content
      this.classList.add("active");
      const tabId = this.getAttribute("data-tab");
      const tabContent = document.getElementById(tabId);
      tabContent.classList.add("active");

      //  load the calendar iframe when the calendar tab is clicked
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

<?php include 'includes/footer.php'; ?>
