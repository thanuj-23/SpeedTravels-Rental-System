<!-- include header file -->
<?php   include 'header.php'; ?>

<style>
  <?php include './css/BecomeHost.css'; ?>
</style>

<!-- main content -- start---->
<div>
    <div class = "main" id="mainContent">
    <div class="description-section">
     <div class="container">   
      <div class="description-content">
        <h1 class="description-title">Drive Into a Better Future</h1>
        <p class="description-subtitle">Whether you own a Car, Van, Truck, or even a Bus — we’ve got rides waiting for you! Be among the first to join a fast-growing driver community and earn over 100,000 Rupees per month while enjoying flexible and rewarding trips.</p>
        <button class="btn-description mt-4" onclick="scrollToForm()">Join Now</button>
      </div>
     </div> 
    </div>
  <div class="container-lg">
    <div class="benefits-section text-center py-5">
     <h2 class="benefits-title mb-5">Why Drive With Us</h2>
     <div class="row justify-content-center g-4">
      <div class="col-xl-3 col-md col-sm-6">
        <div class="benefit-box h-100">
         <h3>Income</h3>
         <p>Earn over Rs. 100,000 monthly with ease</p>
        </div>
      </div>
     <div class="col-xl-3 col-md col-sm-6">
      <div class="benefit-box h-100">
        <h3>Training</h3>
        <p>Get regular safety and driving programs</p>
      </div>
     </div>
     <div class="col-xl-3 col-md col-sm-6">
       <div class="benefit-box h-100">
        <h3>Rewards</h3>
        <p>Earn more with top ratings and bonuses</p>
       </div>
     </div>
     <div class="col-xl-3 col-md col-sm-6">
      <div class="benefit-box h-100">
        <h3>Low Commission</h3>
        <p>Pay Lesser Commission While Receiving Higher Earnings</p>
      </div>
     </div>
     <div class="col-xl-3 col-md col-sm-6">
      <div class="benefit-box h-100">
        <h3>Flexible Zones</h3>
        <p>Drive within your preferred areas</p>
      </div>
     </div>
     <div class="col-xl-3 col-md col-sm-6">
      <div class="benefit-box h-100">
        <h3>Priority</h3>
        <p>Top performers receive more ride requests and bookings</p>
      </div>
     </div>
  </div>
</div>
</div>
<div id="host-form" class="form-section mx-auto col-lg-8">
  <h2 class="form-title">Join With Us</h2>
  <p class="text-center mb-4">Provide the following details to start your journey with us</p>
  <form action="#" method="POST">
    <div class="form-group-section mb-5">
      <h4 class="section-heading">Personal Details</h4>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="firstName" class="form-label">First Name</label>
          <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required>
        </div>
        <div class="col-md-6">
          <label for="lastName" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="col-md-6">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="phone" placeholder="Phone Number" required>
        </div>
        <div class="col-md-6">
          <label for="province" class="form-label">Province</label>
          <select class="form-select" id="province" required onchange="updateDistricts()">
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
        <div class="col-md-6">
          <label for="district" class="form-label">District</label>
          <select class="form-select" id="district" required>
            <option selected disabled>Select District</option>
          </select>
        </div>
      </div>
    </div>

    <div class="form-group-section mb-5">
      <h4 class="section-heading">Vehicle Details</h4>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="vehicleType" class="form-label">Vehicle Type</label>
          <select class="form-select" id="vehicleType" required>
            <option selected disabled>Select Vehicle Type</option>
            <option value="Bus">Car</option>
            <option value="Car">Van</option>
            <option value="Truck">Bus</option>
            <option value="Van">Truck</option>
          </select>

        </div>
        <div class="col-md-6">
          <label for="vehicleMake" class="form-label">Vehicle Make</label>
          <input type="text" class="form-control" id="vehicleMake" placeholder="Ex: Toyota" required>
        </div>
        <div class="col-md-6">
          <label for="vehicleModel" class="form-label">Vehicle Model</label>
          <input type="text" class="form-control" id="vehicleModel" placeholder="Ex: Prius" required>
        </div>
<div class="col-md-6">
    <label for="vehicleYear" class="form-label">Vehicle Year</label>
    <input type="text" class="form-control" id="vehicleYear" placeholder="Click to select year" readonly required>
    <div id="yearPicker" class="yearpicker-container d-none"></div>
    <!-- Year Picker Dropdown -->
    <div id="yearPicker" class="yearpicker-popup d-none"></div>
</div>
      </div>
    </div>

    <div class="form-group-section mb-4">
      <h4 class="section-heading">Other Details</h4>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="workType" class="form-label">Full Time or Part Time</label>
          <select class="form-select" id="workType" required>
            <option selected disabled>Select</option>
            <option value="Full Time">Full Time</option>
            <option value="Part Time">Part Time</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="experience" class="form-label">Driving Experience (Years)</label>
          <input type="number" class="form-control" id="experience" placeholder="Ex: 3" required>
        </div>
      </div>
    </div>

    <div class="col-12 text-center mt-4">
      <button type="submit" class="btn btn-custom px-5 py-2">Submit</button>
    </div>
  </form>
    </div>
  </div>
    <div id="thankYouMessage" class="thankyou-container d-none">
    <h2 class="text-success fw-bold mb-3">Thank you for your interest!</h2>
    <p class="fs-5">Our team will review your details and get in touch within <strong>24 hours</strong>.</p>
    <div class="mt-4">
      <button id="backToHomeBtn" class="btn btn-custom px-4 py-2">Back to Home</button>
    </div>
  </div>
</div>
<!-- main content -- end -->

<script src="js/becomeHost.js"></script>
<script src="js/districtSelect.js"></script>
<script src="js/phoneInput.js"></script>
<script src="js/vehicleYear.js"></script>
<script src="js/hostMessage.js"></script>

<!-- include footer file -->
<?php include 'footer.php'; ?>