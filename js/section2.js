// Additional animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const steps = document.querySelectorAll('.step');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                    }
                });
            }, { threshold: 0.1 });
            
            steps.forEach(step => {
                observer.observe(step);
            });
        });