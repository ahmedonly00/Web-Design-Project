<?php
session_start();

$name = "";
$email = "";
$message = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'cybersecurity_db');

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $message = mysqli_real_escape_string($db, $_POST['message']);

    if (empty($name)) {
        array_push($errors, "Name is required");
    }

    if (empty($email)) {
        array_push($errors, "Email is required");
    }

    if (empty($message)) {
        array_push($errors, "Message is required");
    }

    if (count($errors) == 0) {
        $stmt = $db->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $name, $email, $message);
        if ($stmt->execute()) {
            $_SESSION['username'] = $name;
            $_SESSION['success'] = "Message sent successfully!";
        } else {
            array_push($errors, "Failed to send message");
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - CyberSecure</title>
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
            display: blofleck;
        }
        
        .navbar-nav a:hover {
            background-color: #007bff;
            color: white;
            border-radius: 4px;
        }
        
        /* Hero Section */
        .hero-section {
            background-image: url('images/1.jpg');
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
            color: white;
        }

        .contact-info text-center{
            text-align: center;
            color: white;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 10px;
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

        /* Form Styles */
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form label {
            font-size: 1rem;
            margin-bottom: 5px;
            display: block;
        }

        form input, form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        form input:focus, form textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        form button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #0056b3;
        }

        /* Contact Section */
        .contact-info {
            margin-bottom: 30px;
        }

        .contact-info p {
            font-size: 1.2rem;
            margin: 10px 0;
            color: #333;
        }

        .contact-info i {
            margin-right: 10px;
            color: #007bff;
        }

        .contact-form {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 1rem;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        .form-group i {
            margin-right: 10px;
            color: #007bff;
        }

        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .contact-form button {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        .contact-form button i {
            margin-right: 5px;
        }

        .contact-form button:hover {
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
    <img src="images/2.jpg" alt="Background Image" class="bg-image">

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
        <div><h1 class="text-center">Contact Us</h1></div>
        
        <div class="contact-info text-center">
            <p><i class="fas fa-phone-alt"></i> +250 783 396 996</p>
            <p><i class="fas fa-envelope"></i> support@cybersecure.com</p>
            <p><i class="fas fa-map-marker-alt"></i> 123 CyberSecure Blvd, Kigali City, KK 657</p>
        </div>

        <form action="" method="post" class="contact-form">
            <div class="form-group">
                <label for="name"><i class="fas fa-user"></i> Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message"><i class="fas fa-comment-alt"></i> Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit" name="submit" class="btn"><i class="fas fa-paper-plane"></i> Send Message</button>
        </form>

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
