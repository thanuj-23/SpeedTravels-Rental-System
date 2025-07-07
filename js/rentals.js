document.addEventListener("DOMContentLoaded", function () {
  const showBtn = document.getElementById("RentalBookingForm");
  const closeBtn = document.getElementById("closeBtn");
  const searchForm = document.getElementById("searchForm");

  // Show the form overlay
  showBtn.addEventListener("click", function (e) {
    e.preventDefault(); // Prevent link jump
    searchForm.style.display = "flex";
  });

  // Hide the form
  closeBtn.addEventListener("click", function () {
    searchForm.style.display = "none";
  });
});
