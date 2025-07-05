document.addEventListener('DOMContentLoaded', function() {
            // Animate reviews on scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, { threshold: 0.1 });
            
            document.querySelectorAll('.review-card').forEach(card => {
                observer.observe(card);
            });
            
            // Enhanced Google review button
            const googleBtn = document.querySelector('.google-btn');
            googleBtn.addEventListener('click', function(e) {
                // You can add tracking here if needed
                console.log('User clicked Google review button');
            });
        });

        // Optional: Pause animation when not in view
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('.reviews-track');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    } else {
                        entry.target.style.animationPlayState = 'paused';
                    }
                });
            }, { threshold: 0.1 });
            
            observer.observe(slider);
        });