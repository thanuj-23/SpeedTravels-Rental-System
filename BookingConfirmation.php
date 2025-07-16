<?php
  // Get reference number from query string
  $ref_no = $_GET['ref'] ?? null;

  // DB connection
  /*$conn = new mysqli('localhost', 'root', '', 'your_database_name');

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Fetch booking details
  $sql = "SELECT * FROM bookings WHERE reference_no = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $ref_no);
  $stmt->execute();
  $result = $stmt->get_result();
  $booking = $result->fetch_assoc();

  if (!$booking) {
    die("Booking not found.");
  }

  // Variables from DB
  $trip = $booking['trip_type'];
  $pickup_location = $booking['pickup_location'];
  $drop_location = $booking['drop_location'];
  $pickup_time = $booking['pickup_time'];
  $pickup_date = $booking['pickup_date'];
  $phone = $booking['phone_number'];
  $message = $booking['message'];*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Booking Confirmation | Speed Travels</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/navigation.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/confirmation.css">
  <link rel="stylesheet" href="css/booking-confirmation.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="img/logo2.png" type="image/x-icon">
</head>
<body>

  <!-- Header -->
  <?php include 'header.php'; ?>

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

        <button href="./index.php" class="explore-button">Back to home</button>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
  <!--JS Files-->
  <script src="js/navigation.js"></script>
</body>
</html>
