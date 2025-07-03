document.querySelector('.menu-toggle').addEventListener('click', function() {
  document.querySelector('.nav-links').classList.toggle('show');
  document.querySelector('.auth-buttons').classList.toggle('show');
});

// Optional: Enable dropdown click toggle in mobile
const rentalsLink = document.querySelector('.nav-links li:nth-child(2) > a');
const dropdown = document.querySelector('.dropdown-content');

rentalsLink.addEventListener('click', function(e) {
  if(window.innerWidth <= 992) {
    e.preventDefault();
    dropdown.style.display = dropdown.style.display === 'flex' ? 'none' : 'flex';
  }
});

//hide navigation when scroll down
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
