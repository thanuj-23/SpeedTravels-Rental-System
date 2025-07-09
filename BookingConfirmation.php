<!-- include header file -->
<?php   include 'header.php'; ?>

<style>
  <?php include './css/booking-confirmation.css'; ?>
</style>

<!-- main content --- start -->
<div>

<!-- Booking Confirmation Section -->
  <section class="confirmation-section">
    <div class="page-wrapper">
      <div class="booking-container">
        <div class="tick-wrapper">
          <svg class="tick-icon" viewBox="0 0 120 120">
            <circle class="tick-circle" cx="60" cy="60" r="54" />
            <path class="tick-check" d="M40 65 L55 80 L85 45" />
          </svg>
        </div>        
        <h2 class="booking-title">Booking Placed</h2>
        <p class="booking-subtitle">We will get back to you on confirmation.</p>

        <div class="booking-details">
          <!--Need to add variables-->
          <div class="detail-row"><div class="label">Ref. No:</div><div class="value"></div></div>
          <div class="detail-row"><div class="label">Trip:</div><div class="value"></div></div>
          <div class="detail-row"><div class="label">Pickup Location:</div><div class="value"></div></div>
          <div class="detail-row"><div class="label">Drop Location:</div><div class="value"></div></div>
          <div class="detail-row"><div class="label">Pickup Time:</div><div class="value"></div></div>
          <div class="detail-row"><div class="label">Pickup Date:</div><div class="value"></div></div>
          <div class="detail-row"><div class="label">Phone Number:</div><div class="value"></div></div>
          <div class="detail-row"><div class="label">Your Message:</div><div class="value"></div></div>
        </div>

        <a href="./index.php" class="explore-button">Back to home</a>

      </div>
    </div>
  </section>

</div>
<!-- main content -- end -->



<!-- include footer file -->
<?php include 'footer.php'; ?>