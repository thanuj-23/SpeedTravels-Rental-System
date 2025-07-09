<?php include 'header.php'; ?>

<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<main class="main-content">
  <!-- Intro Section -->
  <section class="contact-intro">
    <div class="container">
      <div class="intro-content" data-aos="fade-up">
        <h1>Connect With Us</h1>
        <p>Our team is ready to assist you with all your travel needs and inquiries.</p>
      </div>
    </div>
  </section>

  <!-- Contact Main -->
  <section class="contact-main container">
    <div class="contact-grid">
      <!-- Contact Information -->
      <div class="contact-info" data-aos="fade-right">
        <div class="info-card">
          <h2>Contact Details</h2>
          <p>Reach out to us through any of these channels</p>
          
          <div class="info-items">
            <div class="info-item">
              <div class="info-icon">
                <i class="fas fa-phone-alt"></i>
              </div>
              <div class="info-content">
                <h3>Phone</h3>
                <p><a href="tel:+94729969961">+94 72 996 9961</a></p>
              </div>
            </div>
            
            <div class="info-item">
              <div class="info-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="info-content">
                <h3>Email</h3>
                <p><a href="mailto:info@speed-travels.com">info@speed-travels.com</a></p>
              </div>
            </div>
            
            <div class="info-item">
              <div class="info-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="info-content">
                <h3>Address</h3>
                <p>236/1A, 3rd Lane, Pragathi Mawatha, Homagama, Sri Lanka</p>
              </div>
            </div>
            
            <div class="info-item">
              <div class="info-icon whatsapp-bg">
                <i class="fab fa-whatsapp"></i>
              </div>
              <div class="info-content">
                <h3>WhatsApp</h3>
                <p><a href="https://wa.me/94729969961" target="_blank">Chat with us</a></p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Mini Map -->
        <div class="mini-map-container">
          <h3>Our Location</h3>
          <div class="mini-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.4455011364967!2d80.00314377969343!3d6.8370698755270585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae251f08774db81%3A0x9aa65cd397b74905!2sSpeed%20Travels%20Pvt%20Ltd.!5e0!3m2!1sen!2slk!4v1752091773723!5m2!1sen!2slk" 
            width="100%" height="168" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
      
      <!-- Contact Form -->
      <div class="contact-form-wrapper" data-aos="fade-left">
        <div class="form-card">
          <h2>Send a Message</h2>
          <form class="contact-form">
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" id="name" placeholder="Enter your name" required>
              <i class="fas fa-user"></i>
            </div>
            
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" id="email" placeholder="Enter your email" required>
              <i class="fas fa-envelope"></i>
            </div>
            
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" placeholder="Enter your phone number">
              <i class="fas fa-phone-alt"></i>
            </div>
            
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" placeholder="What's this about?">
              <i class="fas fa-tag"></i>
            </div>
            
            <div class="form-group">
              <label for="message">Your Message</label>
              <textarea id="message" placeholder="How can we help you?" rows="5" required></textarea>
              <i class="fas fa-comment"></i>
            </div>
            
            <button type="submit" class="submit-btn">
              <span>Send Message</span>
              <i class="fas fa-paper-plane"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Features Section -->
  <section class="features-section">
    <div class="container">
      <div class="features-grid">
        <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
          <div class="feature-icon">
            <i class="fas fa-headset"></i>
          </div>
          <h3>24/7 Support</h3>
          <p>Round-the-clock assistance for all your travel needs and emergencies.</p>
        </div>
        
        <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
          <div class="feature-icon">
            <i class="fas fa-clock"></i>
          </div>
          <h3>Quick Response</h3>
          <p>We guarantee a response within 2 hours during business hours.</p>
        </div>
        
        <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
          <div class="feature-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h3>Trusted Service</h3>
          <p>Reliable and professional service you can count on for all your travels.</p>
        </div>
      </div>
    </div>
  </section>
</main>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/contact.js"></script>
<script>
  AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: true
  });
</script>

<?php include 'footer.php'; ?>
