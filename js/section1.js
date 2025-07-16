//car animation
  $(document).ready(function(){
    $('.my-car').slick({
      dots: true,
      infinite: true,
      speed: 800,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: true,
      adaptiveHeight: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false
          }
        }
      ]
    });
  }); 
 
//date
flatpickr("#date-range", {
    mode: "range",
    dateFormat: "d/m/Y",
    minDate: "today"
  });

  // Optional: Re-trigger animation when user returns to page
        document.addEventListener('visibilitychange', function() {
            if (!document.hidden) {
                const searchBar = document.querySelector('.compact-search-bar');
                searchBar.style.animation = 'none';
                void searchBar.offsetWidth; // Trigger reflow
                searchBar.style.animation = 'pulseHighlight 3s ease-in-out 1';
            }
        });


