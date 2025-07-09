
document.addEventListener("DOMContentLoaded", function() {
  // Initialize elements
  const phoneInput = document.querySelector("#phone");
  const form = document.querySelector("form");
  const thankYouMessage = document.getElementById("thankYouMessage");
  const mainContent = document.getElementById("mainContent");
  const backToHomeBtn = document.getElementById("backToHomeBtn");

  // Initialize intl-tel-input
  const iti = window.intlTelInput(phoneInput, {
    initialCountry: "lk", // Default to Sri Lanka
    preferredCountries: ["lk", "us", "gb", "in"],
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
  });

  // Update input with full number including dial code
  phoneInput.addEventListener("change", function() {
    phoneInput.value = iti.getNumber();
  });

  // Form submission
  form.addEventListener("submit", function(e) {
    e.preventDefault();
    
    // Validate phone number
    if (!validatePhoneNumber(iti)) {
      return false;
    }

    showThankYouMessage();
    
    // Optional: Uncomment to actually submit the form to server
    // form.submit();
  });

  // Phone number validation function
  function validatePhoneNumber(iti) {
    if (!iti.isValidNumber()) {
      
      const phoneError = document.createElement('div');
      phoneError.className = 'invalid-feedback d-block';
      phoneError.textContent = 'Please enter a valid phone number';
      
      
      const existingError = phoneInput.nextElementSibling;
      if (existingError && existingError.classList.contains('invalid-feedback')) {
        existingError.remove();
      }
      
      phoneInput.classList.add('is-invalid');
      phoneInput.insertAdjacentElement('afterend', phoneError);
      
      
      phoneInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
      return false;
    }
    
    
    phoneInput.classList.remove('is-invalid');
    const existingError = phoneInput.nextElementSibling;
    if (existingError && existingError.classList.contains('invalid-feedback')) {
      existingError.remove();
    }
    
    return true;
  }

  
  function showThankYouMessage() {
    // Hide all content
    mainContent.style.display = "none";
    
    thankYouMessage.classList.remove("d-none");
    thankYouMessage.classList.add("fade-in");
    
    thankYouMessage.scrollIntoView({ behavior: 'smooth' });
  }

  // Back to Home button functionality
  if (backToHomeBtn) {
    backToHomeBtn.addEventListener("click", function() {
      // Show the main content again
      mainContent.style.display = "block";
      
      thankYouMessage.classList.add("d-none");
      thankYouMessage.classList.remove("fade-in");
      
      window.scrollTo({ top: 0, behavior: 'smooth' });
      
      // Optional: Reset the form if needed
      // form.reset();
      
      window.location.href = "index.php";
    });
  }

  // Scroll to form function (used by Join Now button)
  window.scrollToForm = function() {
    document.getElementById('host-form').scrollIntoView({ 
      behavior: 'smooth' 
    });
  };
});