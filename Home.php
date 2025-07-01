<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyRide - Smart Transportation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <header class="header">
        <nav class="navbar animate__animated animate__fadeInDown">
            <div class="logo">
                <img src="assets/logo.png" alt="EasyRide Logo">
                <span>EasyRide</span>
            </div>
            <ul class="nav-links">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">How It Works</a></li>
                <li><a href="#">Pricing</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="login.php" class="btn btn-outline">Login</a>
                <a href="register.php" class="btn btn-primary">Register</a>
            </div>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
        
        <div class="hero animate__animated animate__fadeIn">
            <h1>Smart Transportation <br>Made <span class="highlight">Easy</span></h1>
            <p>Book your ride in seconds and enjoy comfortable transportation at affordable prices.</p>
            <a href="book-ride.php" class="btn btn-primary btn-large">Book a Ride Now</a>
        </div>
        
        <div class="hero-image animate__animated animate__fadeInRight">
            <img src="assets/hero-image.png" alt="EasyRide App">
        </div>
    </header>

    <section class="features">
        <div class="feature-card animate__animated animate__fadeInUp">
            <div class="icon"><img src="assets/icon-fast.png" alt="Fast"></div>
            <h3>Fast Booking</h3>
            <p>Get a ride in just a few taps on your smartphone.</p>
        </div>
        <div class="feature-card animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
            <div class="icon"><img src="assets/icon-affordable.png" alt="Affordable"></div>
            <h3>Affordable Prices</h3>
            <p>Competitive pricing with no hidden charges.</p>
        </div>
        <div class="feature-card animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
            <div class="icon"><img src="assets/icon-safety.png" alt="Safe"></div>
            <h3>Safe Rides</h3>
            <p>Verified drivers and real-time tracking for your safety.</p>
        </div>
    </section>

    <script src="main.js"></script>
</body>
</html>
