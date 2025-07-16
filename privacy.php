<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Speed Travels</title>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="PP.css">
    <!-- Animate.css for additional effects -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - Speed Travels</title>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/privacy.css">
</head>

<body>
    <div class="privacy-container">
        <h1 data-aos="fade-up" data-aos-delay="200">Privacy Policy</h1>
        <p data-aos="fade-up" data-aos-delay="200"><strong>Effective Date:</strong> 08 July 2025</p>

        <p data-aos="fade-up" data-aos-delay="200">At Speed Travels (PVT) LTD, your privacy is important to us. This
            Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our
            website or use our services.</p>

        <h2 data-aos="fade-up" data-aos-delay="200">1. Information We Collect</h2>
        <ul data-aos="fade-up" data-aos-delay="200">
            <li><strong>Personal Information:</strong> Name, email address, phone number, pickup/drop locations.</li>
            <li><strong>Payment Data:</strong> Payment details collected securely via third-party processors.</li>
            <li><strong>Usage Data:</strong> Pages viewed, device information, browser type, IP address.</li>
        </ul>

        <h2 data-aos="fade-up" data-aos-delay="200">2. How We Use Your Information</h2>
        <ul data-aos="fade-up" data-aos-delay="200">
            <li>To provide booking and transportation services efficiently.</li>
            <li>To improve website functionality and user experience.</li>
            <li>To communicate promotions, offers, and important updates (you can opt-out anytime).</li>
            <li>For internal analytics and service improvement.</li>
        </ul>

        <h2 data-aos="fade-up" data-aos-delay="200">3. Sharing Your Information</h2>
        <p data-aos="fade-up" data-aos-delay="200">We do not sell your personal data. We may share your information
            with:</p>
        <ul data-aos="fade-up" data-aos-delay="200">
            <li>Drivers to fulfill your ride bookings.</li>
            <li>Payment processors to complete transactions.</li>
            <li>Legal authorities when required by Sri Lankan law.</li>
        </ul>

        <h2 data-aos="fade-up" data-aos-delay="200">4. Data Security</h2>
        <p data-aos="fade-up" data-aos-delay="200">We implement industry-standard security measures to protect your
            data. However, no electronic transmission is 100% secure, and we cannot guarantee absolute security.</p>

        <h2 data-aos="fade-up" data-aos-delay="200">5. Cookies</h2>
        <p data-aos="fade-up" data-aos-delay="200">Our website uses cookies to enhance user experience and analyze
            performance. You may disable cookies in your browser settings, but some features may not function properly.
        </p>

        <h2 data-aos="fade-up" data-aos-delay="200">6. Your Rights</h2>
        <ul data-aos="fade-up" data-aos-delay="200">
            <li>Access and review your personal data.</li>
            <li>Request corrections to your data.</li>
            <li>Request deletion, subject to legal and operational limitations.</li>
        </ul>

        <h2 data-aos="fade-up" data-aos-delay="200">7. Changes to This Policy</h2>
        <p data-aos="fade-up" data-aos-delay="200">We may update this Privacy Policy occasionally. Changes will be
            posted here with a revised effective date. Continued use of our services indicates your acceptance of the
            updated policy.</p>

        <p class="centered" data-aos="fade-up" data-aos-delay="200">By using our services, you consent to this Privacy
            Policy.</p>
    </div>

    <!-- AOS animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 120
        });
    </script>
    <script>
        // Enhanced hover effects
        document.querySelectorAll('.privacy-container h2').forEach(header => {
            header.addEventListener('mouseenter', function () {
                this.style.transform = 'translateX(15px) scale(1.03)';
                this.style.color = '#2c7be5';
            });

            header.addEventListener('mouseleave', function () {
                this.style.transform = '';
                this.style.color = '';
            });
        });

        // Smooth scroll for better UX
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Initialize AOS with better settings
        AOS.init({
            duration: 800,
            easing: 'ease-in-out-quart',
            once: true,
            offset: 120,
            delay: 100
        });
    </script>
</body>

</html>
<?php include 'footer.php'; ?>