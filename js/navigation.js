document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.querySelector('.menu-toggle');
  const navLinks = document.querySelector('.nav-links');
  const authButtons = document.querySelector('.auth-buttons');
  const navbar = document.querySelector("nav");

  // Toggle mobile menu
  menuToggle.addEventListener('click', function(e) {
    e.stopPropagation(); // Prevent this click from triggering the document click handler
    navLinks.classList.toggle('show');
    authButtons.classList.toggle('show');
  });

  // Close menu when clicking anywhere outside
  document.addEventListener('click', function(e) {
    if (!navbar.contains(e.target)) {
      navLinks.classList.remove('show');
      authButtons.classList.remove('show');
    }
  });

  // Prevent clicks inside the nav from closing it
  navbar.addEventListener('click', function(e) {
    e.stopPropagation();
  });

  // Hide nav on scroll down
  let prevScrollPos = window.pageYOffset;

  window.addEventListener("scroll", function() {
    let currentScrollPos = window.pageYOffset;

    if (prevScrollPos > currentScrollPos) {
      navbar.style.top = "0";
    } else {
      navbar.style.top = "-100px";
      // Also close the menu when scrolling down
      navLinks.classList.remove('show');
      authButtons.classList.remove('show');
    }

    prevScrollPos = currentScrollPos;
  });
});