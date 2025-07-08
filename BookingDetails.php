<?php

   // Sample only: Replace this with real DB fetch later
  $booking = [
    'vehicle_image' => 'bus.png',
    'vehicle_name' => 'Luxury Bus',
    'distance' => '120 km',
    'passengers' => 40,
    'price' => '15,000 LKR',
    'pickup_location' => 'Colombo',
    'drop_location' => 'Kandy',
    'pickup_date' => '2025-07-05',
    'pickup_time' => '09:00 AM'
  ]
 
  //include 'db_connection.php'; //db connection

  //$booking_id = $_GET['id'] ?? 1; // Get booking ID from URL or default to 1
  
  /*$sql = "SELECT * FROM bookings WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $booking_id);
  $stmt->execute();
  $result = $stmt->get_result();
  $booking = $result->fetch_assoc();*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Complete Booking | Speed Travels</title>
  <link rel="stylesheet" href="css/navigation.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/booking-details.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" />
  <link rel="icon" href="imgs/logo2.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>
<body>

<!-- Header -->
<?php include 'header.php'; ?>

<section class="booking-page">
  <div class="booking-wrapper">

    <!--Booking summary-->
    <div class="booking-summary">
      <h2>Booking Summary</h2>
      <img src="img/<?php echo $booking['vehicle_image']; ?>" alt="Vehicle" />
      <p><strong><?php echo $booking['vehicle_name'];?></strong></p>
      <div class="summary-row"><strong>Distance:</strong><span><?php echo $booking['distance']; ?></span></div>
      <div class="summary-row"><strong>Passengers:</strong><span><?php echo $booking['passengers']; ?></span></div>
      <div class="summary-row"><strong>Estimated Price:</strong><span><?php echo $booking['price']; ?></span></div>
      <div class="summary-row"><strong>From:</strong><span><?php echo $booking['pickup_location']; ?></span></div>
      <div class="summary-row"><strong>To:</strong><span><?php echo $booking['drop_location']; ?></span></div>
      <div class="summary-row"><strong>Date:</strong><span><?php echo $booking['pickup_date']; ?></span></div>
      <div class="summary-row"><strong>Time:</strong><span><?php echo $booking['pickup_time']; ?></span></div>
      <div class="need-help">
        <h3>Need Help?</h3>
        <p><i class="fas fa-phone-alt"></i> <a href="tel:+94729969961">+94 72 996 9961</a></p>
        <p><i class="fas fa-phone-alt"></i> <a href="tel:+94767309319">+94 76 7309319</a></p>
        <p><i class="fas fa-envelope"></i> <a href="mailto:info@speed-travels.com">info@speed-travels.com</a></p>
      </div>
    </div>

    <!--Booking Form-->
    <div class="booking-form">
      <h2>Complete your booking</h2>
      <form action="BookingConfirmation.php" method="POST">
        <div class="name-row">
          <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" required />
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" required />
          </div>
        </div>
        <div class="email-phone-row">
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone" class="form-input" maxlength="15"required />
          </div>
        </div>
        <div class="province-district-row">
          <div class="form-group">
            <label for="province">Province</label>
            <select id="province" name="province" required onchange="updateDistricts()">
              <option selected disabled>Select Province</option>
              <option value="Western">Western Province</option>
              <option value="Central">Central Province</option>
              <option value="Southern">Southern Province</option>
              <option value="Northern">Northern Province</option>
              <option value="Eastern">Eastern Province</option>
              <option value="North Western">North-Western Province</option>
              <option value="North Central">North-Central Province</option>
              <option value="Uva">Uva Province</option>
              <option value="Sabaragamuwa">Sabaragamuwa Province</option>
            </select>
          </div>
          <div class="form-group">
            <label for="district">District</label>
            <select id="district" name="district" required>
              <option selected disabled>Select District</option>
            </select>
          </div>
        </div>
        <label>Your Message</label>
        <textarea name="message" required></textarea>
        <div class="form-buttons">
          <button type="button" class="prev-btn">Back</button>
          <button type="submit" class="submit-btn">Place Booking</button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- Footer -->
<?php include 'footer.php'; ?>
  <!--JS Files-->
  <script src="js/navigation.js"></script>
  <script src="js/districtSelect.js" defer></script>
  <script src="js/phoneInput.js"></script>
</body>
</html>