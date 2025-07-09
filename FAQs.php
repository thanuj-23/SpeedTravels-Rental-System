<!-- include header file -->
<?php   include 'header.php'; ?>

<style>
  <?php include './css/faqs.css'; ?>
</style>



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
      <div class="faq-accordion" id="customer-faqs" data-aos="fade-out" data-aos-duration="">
        <!-- FAQ Items will be loaded here -->
      </div>
      
      <!-- Host FAQs -->
      <div class="faq-accordion" id="host-faqs" style="display:none;">
        <!-- FAQ Items will be loaded here -->
      </div>
      
      <div class="faq-contact" data-aos="fade-out" data-aos-duration="">
        <h3>Still have questions?</h3>
        <p>Contact our support team for more information and assistance.</p>
        <a href="/contact">Contact Us</a>
      </div>
    </div>
  </section>
<script src="js/faqs.js"></script>


<!-- include footer file -->
<?php include 'footer.php'; ?>