<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - CyberSecure</title>
    <link rel="icon" type="image/x-icon" href="images/lock-security_17025141 (1).png">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Lato', sans-serif;
            background-color: #f5f5f5;
            background: url('images/a.jpg')
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Background Image */
        .bg-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            object-fit: cover;
            opacity: 0.9; /* Adjust opacity for desired effect */
        }
        
        /* Navbar */
        .navbar {
            background-color: #093868;
            padding: 10px 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: background-color 0.3s ease;

        }
        
        .navbar-brand {
            color: #f8f9fa;
            font-size: 1.5rem;
            text-decoration: none;
            margin: 0;
        }
        
        .navbar-brand i {
            margin-right: 8px;
            margin: 0;
        }
        
        .navbar-nav {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar-nav ul {
            list-style: none;
            display: flex;
        }
        
        .navbar-nav li {
            margin: 0 10px;
        }
        
        .navbar-nav a {
            color: #f8f9fa;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
        }
        
        .navbar-nav a:hover {
            background-color: #007bff;
            color: white;
            border-radius: 4px;
        }
        
        /* Hero Section */
        .hero-section {
            background-image: url('images/a.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero-section h1 {
            font-size: 3.5rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }
        
        .hero-section p {
            font-size: 1.5rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }
        
        .hero-section .btn {
            background-color: #007bff;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
        
        .hero-section .btn:hover {
            background-color: #0056b3;
        }

        /* About section */
        .about-section {
            padding: 50px 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 1000px;
            animation: fadeIn 1s ease-in-out;
        }

        .about-section p {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.6;
        }

        .about-section h2 {
            font-size: 2rem;
            margin-bottom: 30px;
            color: #093868;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        /* Awards and Partners Section */
        .awards, .partners {
            margin-top: 30px;
        }

        .award-item, .partner-item {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 1s ease-out;
        }

        .award-item:hover, .partner-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .award-icon, .partner-icon {
            font-size: 50px;
            color: #007bff;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }

        .award-title, .partner-title {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: #093868;
        }

        .award-description, .partner-description {
            font-size: 1rem;
            color: #666;
        }

        /* Footer */
        footer {
            background-color: #093868;
            color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }

        footer a {
            color: #007bff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        .footer-nav {
            list-style: none;
            padding: 0;
            margin: 10px 0 0;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .footer-nav a {
            color: #f8f9fa;
            text-decoration: none;
        }

        .footer-nav a:hover {
            color: #007bff;
        }

        /* Utility Classes */
        .text-center {
            text-align: center;
            font-size: 1rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 10px 20px;
            bottom: 0;
            top: 0;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col {
            flex: 1;
            padding: 10px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: #f8f9fa;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #007bff;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Add vertical gutters */
        .awards, .partners {
        margin-top: 30px;
        }

        .awards .award-item, .partners .partner-item {
            text-align: center;
            margin-bottom: 30px; /* This adds vertical spacing between cards */
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 1s ease-out;
         }

    /* Adjust margin-bottom to control vertical gutter size */
        .awards .award-item:not(:last-child), 
        .partners .partner-item:not(:last-child) {
            margin-bottom: 40px; /* Increased spacing for larger vertical gutters */
        }

        .award-item:hover, .partner-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Optional: add spacing between sections */
        .awards {
            margin-bottom: 50px; /* Vertical space between awards and partners sections */
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <header class="navbar">
        <a href="index.html" class="navbar-brand">
            <i class="fas fa-shield-alt"></i> CyberSecure
        </a>
        <nav class="navbar-nav">
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="services.php"><i class="fas fa-cogs"></i> Services</a></li>
                <li><a href="about.php"><i class="fas fa-users"></i> About Us</a></li>
                <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Main Content -->
    <section class="container">
        <!-- Background Image -->
        <img src="images/a.jpg" alt="Background Image" class="bg-image">

        <section class="about-section"><br><br>
            <h1 class="text-center">About Us</h1>
            <p>At CyberSecure, we are committed to safeguarding your digital assets with the highest level of security. Our journey began with a vision to make advanced cybersecurity solutions accessible to businesses of all sizes. We understand the unique challenges faced by small and medium-sized enterprises, and we strive to offer effective solutions that fit your specific needs.</p>
            
            <!-- Awards Section -->
            <div class="awards">
                        <h2 class="text-center">Awards & Recognition</h2>
                <div class="award-item">
                    <i class="fas fa-trophy award-icon"></i>
                    <div class="award-title">Best Cybersecurity Firm 2024</div>
                    <div class="award-description">Awarded by CyberSecurity World for outstanding service and innovation.</div>
                </div>
                <div class="award-item">
                    <i class="fas fa-trophy award-icon"></i>
                    <div class="award-title">Top 10 in Cybersecurity Excellence</div>
                    <div class="award-description">Recognized by Tech Innovators for excellence in cybersecurity solutions.</div>
                </div>
            </div>
            
            <!-- Partners & Certifications Section -->
            <div class="partners">
                <h2 class="text-center">Our Partners & Certifications</h2>
                <div class="partner-item">
                    <i class="fas fa-handshake partner-icon"></i>
                    <div class="partner-title">Government Cybersecurity Certification</div>
                    <div class="partner-description">Certified by the Department of Cybersecurity for meeting rigorous government standards.</div>
                </div>
                <div class="partner-item">
                    <i class="fas fa-handshake partner-icon"></i>
                    <div class="partner-title">ISO/IEC 27001 Certified</div>
                    <div class="partner-description">Accredited for implementing the highest standards in information security management.</div>
                </div>
            </div>
        </section>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 CyberSecure. All rights reserved.</p>
            <ul class="footer-nav">
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="services.php"><i class="fas fa-cogs"></i> Services</a></li>
                <li><a href="about.php"><i class="fas fa-users"></i> About Us</a></li>
                <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
            </ul>
        </div>
        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Change navbar background color on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
