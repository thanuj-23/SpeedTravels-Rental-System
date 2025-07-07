<!-- include header file -->
<?php include 'header.php'; ?>

  <!--Home 1st Section-->
  <section id="hero">
        <div class="container">
            <div class="text-content">
                <h2>Drive Your Journey, Your Way</h2>
                <h1>Locally grown travel and tour service provider</h1>
                <p>Experience unmatched freedom to explore Sri Lanka with Speed Travels – your reliable choice for cars, vans, buses, and trucks, backed by seamless service and local expertise.</p>
            </div>
        </div>

        <div class="right-sec">
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
<div class="compact-search-bar" id="searchBar">
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
<section class="how-it-works">
  <h2 class="section-title">HOW IT WORKS</h2>
  <p class="section-subtitle">Follow these simple steps to book your vehicle</p>
  <br><br>
  <div class="steps-container">
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
<br>
<section class="reviews-section">
        <div class="section-header">
            <h2 class="section-title">Our Passenger's Testimonials</h2>
        </div>
        
        <div class="reviews-slider">
            <div class="reviews-track">
                <!-- Original Review Cards -->
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <div class="review-header">
                        <div class="user-avatar">SP</div>
                        <div class="user-info">
                            <div class="user-name">Saman Perera</div>
                            <div class="review-meta">
                                <span class="review-date">2 days ago on Google</span>
                                <i class="fas fa-check-circle verified-badge"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        Excellent service! The driver was very professional and the car was extremely clean.
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <div class="review-header">
                        <div class="user-avatar">NJ</div>
                        <div class="user-info">
                            <div class="user-name">Nimal Jayawardena</div>
                            <div class="review-meta">
                                <span class="review-date">1 week ago on Google</span>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        Booked for airport transfer. Driver arrived 10 minutes early. Very reasonable rates compared to other services in Colombo. Highly recommended!
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="stars">★★★★☆</div>
                    <div class="review-header">
                        <div class="user-avatar">RF</div>
                        <div class="user-info">
                            <div class="user-name">Rasika Fernando</div>
                            <div class="review-meta">
                                <span class="review-date">3 days ago on Google</span>
                                <i class="fas fa-check-circle verified-badge"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        Good service overall.
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <div class="review-header">
                        <div class="user-avatar">KM</div>
                        <div class="user-info">
                            <div class="user-name">Kavindu Madushanka</div>
                            <div class="review-meta">
                                <span class="review-date">5 days ago on Google</span>
                                <i class="fas fa-check-circle verified-badge"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        Great experience booking my vehicle with them. The driver was friendly and arrived right on time. Highly recommend their service for trips around Colombo.
                    </div>
                </div>

                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <div class="review-header">
                        <div class="user-avatar">IS</div>
                        <div class="user-info">
                            <div class="user-name">Ishara Senanayake</div>
                            <div class="review-meta">
                                <span class="review-date">2 weeks ago on Google</span>
                                <i class="fas fa-check-circle verified-badge"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        Booked a van for our family trip to Kandy. Comfortable ride and reasonable prices. Booking process was smooth and support staff were helpful.
                    </div>
                </div>

                <div class="review-card">
                    <div class="stars">★★★★☆</div>
                    <div class="review-header">
                        <div class="user-avatar">TR</div>
                        <div class="user-info">
                            <div class="user-name">Tharushi Rajapaksha</div>
                            <div class="review-meta">
                                <span class="review-date">1 month ago on Google</span>
                                <i class="fas fa-check-circle verified-badge"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        Service was good overall. The app interface can be improved slightly, but drivers are polite and cars are well maintained. Would use again.
                    </div>
                </div>

                <!-- Duplicate cards for seamless looping -->
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <div class="review-header">
                        <div class="user-avatar">SP</div>
                        <div class="user-info">
                            <div class="user-name">Saman Perera</div>
                            <div class="review-meta">
                                <span class="review-date">2 days ago on Google</span>
                                <i class="fas fa-check-circle verified-badge"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        Excellent service! The driver was very professional and the car was extremely clean.
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <div class="review-header">
                        <div class="user-avatar">NJ</div>
                        <div class="user-info">
                            <div class="user-name">Nimal Jayawardena</div>
                            <div class="review-meta">
                                <span class="review-date">1 week ago on Google</span>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        Booked for airport transfer. Driver arrived 10 minutes early. Very reasonable rates compared to other services in Colombo. Highly recommended!
                    </div>
                </div>
                
                <div class="review-card">
                    <div class="stars">★★★★☆</div>
                    <div class="review-header">
                        <div class="user-avatar">RF</div>
                        <div class="user-info">
                            <div class="user-name">Rasika Fernando</div>
                            <div class="review-meta">
                                <span class="review-date">3 days ago on Google</span>
                                <i class="fas fa-check-circle verified-badge"></i>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        Good service overall.
                    </div>
                </div>
            </div>
        </div>
        
        <div class="review-actions">
            <a href="https://search.google.com/local/writereview?placeid=ChIJje7imY5R4joR7nNiyNu_7sM" 
               target="_blank" 
               class="google-btn">
                <i class="fab fa-google"></i> Review Us on Google
            </a>
        </div>
    </section>

<!-- CLIENT N HOST -->
         <!-- Rent Section (New) -->
        <section class="section rent-section">
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
        <section class="section host-section">
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

<!-- include footer file -->
<?php include 'footer.php'; ?>
