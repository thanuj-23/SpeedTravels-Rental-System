<!-- include header file -->
<?php include 'header.php'; ?>

  <!--Home 1st Section-->
  <section id="hero">
        <div class="container" data-aos="fade-up" data-aos-duration="">
            <div class="text-content">
                <h2>Drive Your Journey, Your Way</h2>
                <h1>Locally grown travel and tour service provider</h1>
                <p>Experience unmatched freedom to explore Sri Lanka with Speed Travels – your reliable choice for cars, vans, buses, and trucks, backed by seamless service and local expertise.</p>
            </div>
        </div>

        <div class="right-sec" data-aos="fade-out" data-aos-duration="">
            <div class="my-car">
                <div><img src="img/v1.png" alt="Car 1"></div>
                <div><img src="img/van.png" alt="Car 2"></div>
                <div><img src="img/v3.png" alt="Car 3"></div>
                <div><img src="img/v4.png" alt="Car 4"></div>
            </div>
        </div>
    </section>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!--search bar-->
<div class="compact-search-bar" id="searchBar" data-aos="zoom-out" data-aos-duration="">
        <div class="compact-search-container">
            <!-- Location Field -->
            <div class="compact-search-field">
                <label>Location</label>
                <input type="text" id="pickup-location" placeholder="Select Your City">
            </div>
            
            <!-- Pickup Field -->
            <div class="compact-search-field">
                <label>PickUp</label>
                <input type="text" id="drop-location" placeholder="Select Your City">
            </div>
            
            <!-- Car Type Field -->
            <div class="compact-search-field">
                <label>Vehicle Type</label>
                <select id="vehicle-type">
                    <option value="">Choose Vehicle Type </option>
                    <option>Car with Driver</option>
                    <option>Van with Driver</option>
                    <option>Bus with Driver</option>
                    <option>Truck with Driver</option>
                </select>
            </div>
            
            <!-- Date Field -->
            <div class="compact-search-field">
                <label>Pick Up - Drop Off</label>
                <div class="date-range-input">
                    <input type="text" id="date-range" placeholder="Select Date Range" readonly>
                    <i class="fas fa-calendar-alt calendar-icon"></i>
                </div>
            </div>
            
            <!-- Search Button -->
            <button class="compact-search-btn">
                <i class="fas fa-search"></i> Search
            </button>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script src="js/section1.js"></script>
<br><br>

    <!--section2 -->
    <section class="how-it-works" data-aos="fade-up" data-aos-duration="">
    <h2 class="section-title" data-aos="fade-up" data-aos-duration="">HOW IT WORKS</h2>
    <p class="section-subtitle" data-aos="fade-up" data-aos-duration="">Follow these simple steps to book your vehicle</p>
    <br><br>
    <div class="steps-container" data-aos="slide-up" data-aos-duration="">
        <div class="step">
        <div class="step-number"><i class="fas fa-map-marker-alt"></i></div>
        <h3 class="step-title">Select Location & Pick Up </h3>
        <p class="step-description">Choose your location & pick-up location.</p>
        </div>
        
        <div class="step">
        <div class="step-number"><i class="fas fa-car-side"></i></div>
        <h3 class="step-title">Choose Vehicle Type</h3>
        <p class="step-description">Select your preferred vehicle type for your trip.</p>
        </div>
        
        <div class="step">
        <div class="step-number"><i class="fas fa-calendar-alt"></i></div>
        <h3 class="step-title">Pick Up - Drop Off Dates</h3>
        <p class="step-description">Choose your pickup and drop-off dates for booking.</p>
        </div>
        
        <div class="step">
        <div class="step-number"><i class="fas fa-search"></i></div>
        <h3 class="step-title">Search & Book</h3>
        <p class="step-description">Click search to view and book the best available vehicle.</p>
        </div>
    </div>
    </section>

    <script src="js/section2.js"></script>
    <!--Review section -->
    <section class="how-it-works" data-aos="fade-up" data-aos-duration="" style="margin-top:-80px;">
     <h2 class="section-title" data-aos="fade-up" data-aos-duration="">OUR PASSENGER'S TESTIMONIALS</h2>
    </section>
    <section class="reviews-section" data-aos="fade-left" data-aos-duration="" style="margin-left:80px; margin-right:80px;">
        <script defer async src='https://cdn.trustindex.io/loader.js?f646916496036110d036012a70e'></script>
    </section>
<br>
    <!-- CLIENT N HOST -->
            <!-- Rent Section (New) -->
            <section class="section rent-section" data-aos="fade-left" data-aos-duration="">
                <div class="section-content">
                    <h2>Rent With Us</h2>
                    <p>Discover your next ride with Speed Travels. From city drives to long journeys, choose from our wide range of vehicles and enjoy a smooth, reliable, and affordable travel experience.</p>
                    <a href="#" class="learn-more rent-btn">Explore Rentals →</a>
                </div>
                <div class="section-image">
                    <img src="../SpeedTravels-Rental-System/img/img1.jpg" alt="Rent with PickMe">
                </div>
            </section>
            
            <!-- Host Section (New) -->
            <section class="section host-section" data-aos="fade-right" data-aos-duration="">
                <div class="section-image">
                    <img src="../SpeedTravels-Rental-System/img/img2.jpg" alt="Host with PickMe">
                </div>
                <div class="section-content">
                    <h2>Become a Host</h2>
                    <p>Unlock new income opportunities by listing your vehicle on Speed Travels. Rent out your car safely to verified customers and earn without any hassle.</p>
                    <a href="#" class="learn-more host-btn">Start Hosting →</a>
                </div>
            </section>
        </div>
            <!-- aos animation -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
            AOS.init();
        </script>

<!-- include footer file -->
<?php include 'footer.php'; ?>
