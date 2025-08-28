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
      <p>No past events available.</p>
    </div>

    <div class="tab-content" id="calendar">
      <!-- Example: My Google Calendar  -->
       <iframe src="https://calendar.google.com/calendar/embed?src=2c04e1cdd588f6bab90124760d055f7f9a62b325706097fa475ec477865a9e3a%40group.calendar.google.com&ctz=America%2FToronto" 
        style="border: 0" width="800" height="600" frameborder="0" scrolling="no">
    </iframe>
    </div>

  </section>

</div>
<script>
  document.querySelectorAll(".tab-link").forEach(function (tab) {
    tab.addEventListener("click", function () {
      document.querySelectorAll(".tab-link").forEach(t => t.classList.remove("active"));
      document.querySelectorAll(".tab-content").forEach(c => c.classList.remove("active"));

      this.classList.add("active");
      document.getElementById(this.getAttribute("data-tab")).classList.add("active");
    });
  });
</script>

<?php include 'includes/footer.php'; ?>
