document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("hostForm");
  const phoneInputField = document.getElementById("phone");
  const phoneError = document.getElementById("phoneError");
  const mainContent = document.getElementById("mainContent");
  const thankYouMessage = document.getElementById("thankYouMessage");
  const backToHomeBtn = document.getElementById("backToHomeBtn");

  // Initialize intl-tel-input
  const iti = window.intlTelInput(phoneInputField, {
    initialCountry: "lk",
    preferredCountries: ["lk", "us", "in", "gb"],
    separateDialCode: true,
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });

  // Real-time phone number validation
  phoneInputField.addEventListener("input", () => {
    if (iti.isValidNumber()) {
      phoneError.textContent = "";
      phoneInputField.classList.remove("input-error");
    }
  });

  // Form submission handler
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    // Validate phone number
    if (!iti.isValidNumber()) {
      phoneError.textContent = "Please enter a valid phone number.";
      phoneInputField.classList.add("input-error");
      phoneInputField.scrollIntoView({ behavior: "smooth", block: "center" });
      phoneInputField.focus();
      return;
    }

    // Clear errors if valid
    phoneError.textContent = "";
    phoneInputField.classList.remove("input-error");

    // Show thank you modal and blur content
    if (mainContent) {
      mainContent.classList.add("blur-content");
    }

    if (thankYouMessage) {
      thankYouMessage.classList.remove("d-none");
      thankYouMessage.classList.add("thankyou-overlay");
      thankYouMessage.scrollIntoView({ behavior: "smooth" });
    }
  });

  // Handle Back to Home or close
  backToHomeBtn?.addEventListener("click", function () {
    // Remove overlay and blur (if you want to reset without page reload)
    thankYouMessage.classList.add("d-none");
    thankYouMessage.classList.remove("thankyou-overlay");
    mainContent?.classList.remove("blur-content");

    // Or redirect to home:
    window.location.href = "index.php";
  });
});
