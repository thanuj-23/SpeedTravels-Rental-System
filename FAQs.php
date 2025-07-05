<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQs</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/faqs.css">
</head>
<body>

<!-- Navigation Bar-->

  <nav>
    <div class="nav-header">
      <a href="#" class="logo">
        <img src="img/logo3.png" alt="Speed Travels Logo" />
      </a>
      <div class="menu-toggle">☰</div>
    </div>

    <ul class="nav-links">
      <li><a href="Home.php">Home</a></li>
      <li>
        <a href="#">Rentals <span>&#9662;</span></a>
        <div class="dropdown-content">
          <a href="#">Car with Driver</a>
          <a href="#">Van with Driver</a>
          <a href="#">Bus with Driver</a>
          <a href="#">Truck with Driver</a>
        </div>
      </li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="../SpeedTravels-Rental-System/FAQs.php">FAQs</a></li>
    </ul>

    <div class="auth-buttons">
      <a href="#" class="auth-btn host-btn">Become a host</a>
    </div>
  </nav>
  <script src="js/navigation.js"></script>

<br><br>
  <!--FAQs Section -->
  <section class="faq-section">
    <div class="faq-container">
      <div class="faq-header">
        <h1>Frequently Asked Questions</h1>
        <p>Find answers to common questions about bookings, vehicles, and our services.</p>
        
        <!-- Customer/Host Toggle Buttons -->
        <div class="faq-toggle-container">
          <button class="faq-toggle-btn active" id="customer-btn">For Customers</button>
          <button class="faq-toggle-btn" id="host-btn">For Hosts</button>
        </div>
      </div>
      
      <div class="faq-search">
        <input type="text" id="faq-search-input" placeholder="Search FAQs...">
        <button id="faq-search-btn"><i class="fas fa-search"></i></button>
      </div>
      
      <!-- Customer FAQs -->
      <div class="faq-accordion" id="customer-faqs">
        <!-- FAQ Items will be loaded here -->
      </div>
      
      <!-- Host FAQs -->
      <div class="faq-accordion" id="host-faqs" style="display:none;">
        <!-- FAQ Items will be loaded here -->
      </div>
      
      <div class="faq-contact">
        <h3>Still have questions?</h3>
        <p>Contact our support team for more information and assistance.</p>
        <a href="/contact">Contact Us</a>
      </div>
    </div>
  </section>
<script src="js/faqs.js"></script>
<!-- footer -->
<footer>
  <div class="footer-top">
    <a href="#" class="footer-logo">
      <img src="img/logo3.png" alt="Speed Travels Logo" />
    </a>

    <div class="footer-socials">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-x-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
  </div>

  <div class="footer-divider"></div>

  <div class="footer-container">
    <div class="footer-section contact-section">
      <h4>Contact Us</h4>
      <ul class="contact-list">
        <li>
        <a href="tel:+94729969961">+94 72 996 9961</a>
        </li>

        <li>
        <li>
        <a href="https://mail.google.com/mail/?view=cm&to=info@speed-travels.com" target="_blank">
            info@speed-travels.com
        </a>
        </li>


        <li> 236/1A, 3rd Lane, Pragathi Mawatha, Homagama</li>
      </ul>
    </div>

    <div class="footer-section">
      <h4>Services</h4>
      <ul>
        <li><a href="#">Car with Driver</a></li>
        <li><a href="#">Van with Driver</a></li>
        <li><a href="#">Bus with Driver</a></li>
        <li><a href="#">Truck with Driver</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h4>Company</h4>
      <ul>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Feedbacks</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h4>Partners</h4>
      <ul>
        <li><a href="#">Host</a></li>
        <li><a href="#">Client</a></li>
      </ul>
    </div>

    <div class="footer-section">
      <h4>Resources</h4>
      <ul>
        <li><a href="#">FAQs</a></li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="footer-bottom-content">
      <div class="copyright">
        © 2025 - Digital Mobility Solutions Lanka PLC. All rights reserved.
      </div>

      <ul class="footer-links">
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Privacy Policy</a></li>
      </ul>

      <div class="credits">
        Web Design & Development by <a href="https://www.facebook.com/seasongraphix">Season Graphix</a>
      </div>
    </div>
  </div>
</footer>

</body>
</html>