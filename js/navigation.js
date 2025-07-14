document.addEventListener('DOMContentLoaded', function() {
  const menuToggle = document.querySelector('.menu-toggle');
  const navLinks = document.querySelector('.nav-links');
  const authButtons = document.querySelector('.auth-buttons');

  menuToggle.addEventListener('click', function() {
    navLinks.classList.toggle('show');
    authButtons.classList.toggle('show');
  });

  // Hide nav on scroll down
  let prevScrollPos = window.pageYOffset;
  const navbar = document.querySelector("nav");

  window.addEventListener("scroll", function() {
    let currentScrollPos = window.pageYOffset;

    if (prevScrollPos > currentScrollPos) {
      navbar.style.top = "0";
    } else {
      navbar.style.top = "-100px";
    }

    prevScrollPos = currentScrollPos;
  });
});
