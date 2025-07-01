// Mobile Navigation Toggle
document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const authButtons = document.querySelector('.auth-buttons');
    
    if (hamburger) {
        hamburger.addEventListener('click', function() {
            this.classList.toggle('active');
            navLinks.classList.toggle('active');
            authButtons.classList.toggle('active');
            
            // Animate hamburger lines
            const lines = this.querySelectorAll('.line');
            if (this.classList.contains('active')) {
                lines[0].style.transform = 'rotate(-45deg) translate(-5px, 6px)';
                lines[1].style.opacity = '0';
                lines[2].style.transform = 'rotate(45deg) translate(-5px, -6px)';
            } else {
                lines[0].style.transform = 'rotate(0) translate(0)';
                lines[1].style.opacity = '1';
                lines[2].style.transform = 'rotate(0) translate(0)';
            }
        });
    }
    
    // Form validation and submission
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Add loading state
            const submitButton = this.querySelector('button[type="submit"]');
            if (submitButton) {
                const originalText = submitButton.textContent;
                submitButton.textContent = 'Processing...';
                submitButton.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    submitButton.textContent = originalText;
                    submitButton.disabled = false;
                    
                    // For demo purposes, redirect after "success"
                    if (this.id === 'loginForm') {
                        window.location.href = 'dashboard.php';
                    }
                }, 1500);
            }
        });
    });
    
    // Scroll animations
    const animateOnScroll = function() {
        const elements = document.querySelectorAll('.feature-card, .booking-form, .map-container');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (elementPosition < windowHeight - 100) {
                element.classList.add('animate__fadeInUp');
            }
        });
    };
    
    window.addEventListener('scroll', animateOnScroll);
    animateOnScroll(); // Run once on page load
});

// Ride booking simulation
if (document.getElementById('bookingMap')) {
    // This would be replaced with actual map initialization
    console.log('Map would be initialized here');
    
    // Simulate location selection
    const locationInputs = document.querySelectorAll('#pickup, #destination');
    locationInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('active');
        });
        
        input.addEventListener('blur', function() {
            if (!this.value) {
                this.parentElement.classList.remove('active');
            }
        });
    });
}