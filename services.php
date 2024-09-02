<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - CyberSecure</title>
    <link rel="icon" type="image/x-icon" href="images/lock-security_17025141 (1).png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General Styles */
    body {
        font-family: 'Lato', sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        color: #333;
    }

    /* Background Image */
    .bg-image {
        position: absolute;
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

    .navbar-brand {
        color: #f8f9fa;
        font-size: 1.5rem;
        text-decoration: none;
    }

    .navbar-brand i {
        margin-right: 8px;
    }

    .navbar-nav {
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
    }

    .navbar-nav a:hover {
        background-color: #007bff;
        color: white;
        border-radius: 4px;
    }

    /* Hero Section */
    .hero-section {
        background-image: url('images/c7.jpg');
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
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-10px);
    }

    .card-icon {
        font-size: 40px;
        color: #007bff;
        margin-bottom: 15px;
    }

    .card-title {
        font-size: 1.5rem;
        margin-bottom: 10px;
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

    </style>
</head>
<body>
    <!-- Background Image -->
    <img src="images/c7.jpg" alt="Background Image" class="bg-image">

    <header class="navbar">
        <a href="index.html" class="navbar-brand"><i class="fas fa-shield-alt"></i> CyberSecure</a>
        <ul class="navbar-nav">
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="services.php"><i class="fas fa-cogs"></i> Services</a></li>
                <li><a href="about.php"><i class="fas fa-users"></i> About Us</a></li>
                <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
    </header>

    <section class="container">
        <h1 class="text-center">Our Services</h1>
        <div class="row">
            <!-- Service 1 -->
            <div class="col">
                <div class="card">
                    <i class="fas fa-network-wired card-icon"></i>
                    <h3 class="card-title">Network Security</h3>
                    <p class="card-text">We provide comprehensive network security solutions to protect your business from unauthorized access and threats.</p>
                    <p class="card-price">$299/month</p>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col">
                <div class="card">
                    <i class="fas fa-lock card-icon"></i>
                    <h3 class="card-title">Data Encryption</h3>
                    <p class="card-text">Secure your sensitive data with our advanced encryption technologies to prevent data breaches.</p>
                    <p class="card-price">$199/month</p>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col">
                <div class="card">
                    <i class="fas fa-shield-alt card-icon"></i>
                    <h3 class="card-title">Threat Detection</h3>
                    <p class="card-text">Our real-time threat detection services help you identify and respond to cybersecurity threats swiftly.</p>
                    <p class="card-price">$249/month</p>
                </div>
            </div>
            <!-- Service 4 -->
            <div class="col">
                <div class="card">
                    <i class="fas fa-user-shield card-icon"></i>
                    <h3 class="card-title">Vulnerability Assessments</h3>
                    <p class="card-text">Identify and mitigate potential vulnerabilities in your IT infrastructure with our expert assessments.</p>
                    <p class="card-price">$350/month</p>
                </div>
            </div>
            <!-- Service 5 -->
            <div class="col">
                <div class="card">
                    <i class="fas fa-firewall card-icon"></i>
                    <h3 class="card-title">Firewall Management</h3>
                    <p class="card-text">Ensure your business is protected with our professional firewall management and monitoring services.</p>
                    <p class="card-price">$299/month</p>
                </div>
            </div>
            <!-- Service 6 -->
            <div class="col">
                <div class="card">
                    <i class="fas fa-cloud card-icon"></i>
                    <h3 class="card-title">Cloud Security</h3>
                    <p class="card-text">Protect your cloud infrastructure with our specialized cloud security solutions.</p>
                    <p class="card-price">$399/month</p>
                </div>
            </div>
            <!-- Service 7 -->
            <div class="col">
                <div class="card">
                    <i class="fas fa-user-secret card-icon"></i>
                    <h3 class="card-title">Penetration Testing</h3>
                    <p class="card-text">Test the robustness of your security defenses with our ethical hacking and penetration testing services.</p>
                    <p class="card-price">$499/month</p>
                </div>
            </div>
        </div>
    </section>

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
