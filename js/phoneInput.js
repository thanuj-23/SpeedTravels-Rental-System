
// Initialize phone input with country flags
const phoneInput = document.querySelector("#phone");
window.intlTelInput(phoneInput, {
  initialCountry: "lk", // Default to Sri Lanka
  preferredCountries: ["lk", "us", "gb", "in"],
  separateDialCode: true,
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
});

// Update hidden input with full number including dial code
phoneInput.addEventListener("change", function() {
  const iti = window.intlTelInputGlobals.getInstance(phoneInput);
  phoneInput.value = iti.getNumber();
});

//Form validation
document.querySelector("form").addEventListener("submit", function(e) {
  const iti = window.intlTelInputGlobals.getInstance(phoneInput);
  if (!iti.isValidNumber()) {
    e.preventDefault();
    alert("Please enter a valid phone number");
    return false;
  }
});