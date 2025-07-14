<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Speed Travels</title>

    <!-- add bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/section1.css">
    <link rel="stylesheet" href="css/section2.css">
    <link rel="stylesheet" href="css/section4.css">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- rental booking css -->
    <link rel="stylesheet" href="css/rentalStyles.css">
    <!-- aos animation -->
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-yXX..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="img/logo2.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>

<body>

    <!-- Navigation Bar-->

  <nav>
    <div class="nav-header">
      <a href="./index.php" class="logo">
        <img src="img/logo3.png" alt="Speed Travels Logo" />
      </a>
      <div class="menu-toggle"><i class="fas fa-bars"></i></div>
    </div>

    <ul class="nav-links">
      <li><a href="./index.php">Home</a></li>
      <li><a href="#" id="RentalBookingForm">Rentals</a></li>
      <li><a href="./AboutUs.php">About Us</a></li>
      <li><a href="./ContactUs.php">Contact Us</a></li>
      <li><a href="./FAQs.php">FAQs</a></li>
    </ul>

    <div class="auth-buttons">
      <a href="BecomeHost.php" class="auth-btn host-btn">Become a host</a>
    </div>
  </nav>

  <!-- Navigation JS -->
  <script src="js/navigation.js"></script>

    <!-- Rental booking form ------ start -->
    <div class="" style="display: none;" id="searchForm">
        <div class="row" style="min-width: 100%;">
            <div class="col-md-4" id="searchRental">

                <!-- close btn -->
                <button type="button" class="btn-close" aria-label="Close" id="closeBtn"></button>

                <form action="./SearchRental.php" method="post">
                    <div class="topic">
                        <h3>Rentals</h3>
                        <p>Let's get you on the road! Fill out the form to reserve your rental vehicle today.</p>
                    </div>

                    <div class="mb-4">
                        <label for="vehicleType" class="form-label">Vehicle Type</label>
                        <select class="form-select" id="vehicleType" name="vehicleType" required>
                            <option selected> <p>Choose vehicle type</p> </option>
                            <option value="Car with Driver">Car with Driver</option>
                            <option value="Van with Driver">Van with Driver</option>
                            <option value="Bus with Driver">Bus with Driver</option>
                            <option value="Truck with Driver">Truck with Driver</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="pickupLocation" class="form-label">Pickup Location</label>
                        <input type="text" class="form-control" id="pickupLocation" placeholder="Enter your city" name="pickupLocation" required>
                    </div>
                    <div class="mb-4">
                        <label for="dropLocation" class="form-label">Drop Location</label>
                        <input type="text" class="form-control" id="dropLocation" placeholder="Enter your city" name="dropLocation" required>
                    </div>
                    <div class="mb-4">
                        <div class="row">
                            <div class="col">
                                <label for="pickupDate" class="form-label">Pickup Date</label>
                                <input type="date" class="form-control" id="pickupDate" placeholder="Select date" name="pickupDate" required>
                            </div>
                            <div class="col">
                                <label for="pickupTime" class="form-label">Pickup Time</label>
                                <input type="time" class="form-control" id="pickupTime" placeholder="Select time" name="pickupTime">
                            </div>
                        </div>
                    </div>

                    <!-- submit button -->
                    <button class="btn btn-sm" type="submit">Search</button>

                </form>

            </div>
        </div>
    </div>
    <!-- Rental booking form ------ end -->

    