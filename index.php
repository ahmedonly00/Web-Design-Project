<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberSecure</title>
    <link rel="icon" type="image/x-icon" href="images/lock-security_17025141 (1).png">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
            overflow-x: hidden; /* Prevent horizontal scroll */
        }
        
        /* Navbar */
        .navbar {
            background-color: #093868;
            padding: 15px 20px;
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

        .navbar.scrolled {
            background-color: #0056b3;
        }
        
        .navbar-brand {
            color: #f8f9fa;
            font-size: 1.5rem;
            text-decoration: none;
        }
        
        .navbar-brand i {
            margin-right: 8px;
        }
        
        .navbar-nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
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
            border-radius: 4px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        
        .navbar-nav a:hover {
            background-color: #007bff;
            color: white;
        }
        
        /* Hero Section */
        .hero-section {
            background-image: url('images/1.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 20px;
            margin-top: 60px; /* Adjust for fixed navbar */
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        
        .hero-section h1 {
            font-size: 3.5rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            animation: fadeIn 2s ease-in-out;
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
            transition: background-color 0.3s ease;
            animation: fadeInUp 2s ease-in-out;
        }
        
        .hero-section .btn:hover {
            background-color: #0056b3;
        }

        /* Services Section */
        .services-section {
            padding: 50px 20px;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px 0;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            animation: fadeInUp 1s ease-out;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-icon {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #093868;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
        }

        .card-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-top: 10px;
        }
        
        /* Footer */
        footer {
            background-color: #093868;
            color: #f8f9fa;
            padding: 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
        }

        footer a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
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
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
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
            transition: background-color 0.3s ease;
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

        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(100px); }
            to { opacity: 1; transform: translateX(0); }
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

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1>Protect Your Business from Cyber Threats</h1>
            <p>We offer top-notch cybersecurity solutions tailored to small businesses.</p>
            <a href="services.php" class="btn">Explore Our Services</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="container services-section">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3 class="card-title">Network Security</h3>
                    <p class="card-text">Secure your business network from potential threats and vulnerabilities.</p>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="card-title">Data Protection</h3>
                    <p class="card-text">Ensure the safety and confidentiality of your sensitive business data.</p>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="card-title">24/7 Monitoring</h3>
                    <p class="card-text">Get round-the-clock monitoring and support for your cybersecurity needs.</p>
                </div>
            </div>
        </div>
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
