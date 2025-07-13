<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms and Petitions</title>
    <link rel="stylesheet" href="stylesForms.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <img src="./assets/hasan.png" alt="Logo" class="logo-img">
    </div>
    <ul class="nav-links">
        <li><a class="nav-item" href="home.php">Home</a></li>
        <li><a class="nav-item" href="news.php">News Panel</a></li>
        <li><a class="nav-item" href="info.php">Information</a></li>
        <li><a class="nav-item" href="forms.php">Forms and Petitions</a></li>
        <li><a class="nav-item" href="services.php">Services</a></li>
        <li><a class="nav-item" href="about_us.php">About Us</a></li>
    </ul>
    <div class="profile-icon">
        <a href="profile.php">
            <i class='bx bx-user'></i>
        </a>
    </div>
</nav>



    <header>
        <h1 class="page-title">Forms and Petitions</h1>
        <p class="page-subtitle">Select the form or petition you need below.</p>
    </header>
    <main class="form-container">
        <!-- Pay Bill Form -->
        <div class="form-box">
            <a href="PayBillForm.php">
                <h2>Pay my Bill</h2>
                <p>Pay your electricity bill, landline bill, or water bill online.</p>
            </a>
        </div>
        
        <!-- Landline Registration Form -->
        <div class="form-box">
            <a href="landlineregistration.php">
                <h2>Landline Registration</h2>
                <p>Register a new landline or pay for an existing landline.</p>
            </a>
        </div>
        
        <!-- Permit Application Form -->
        <div class="form-box">
            <a href="permits.php">
                <h2>Apply for Permit</h2>
                <p>Apply for demolition, construction, zoning, or parking permits.</p>
            </a>
        </div>
        
        <!-- Road Closure or Repair Request -->
        <div class="form-box">
            <a href="request.php">
                <h2>Road Closure or Repair Request</h2>
                <p>Request road closure for repairs, water pipe repair, or internet cable services.</p>
            </a>
        </div>
        
        <!-- Disaster Aid Application -->
        <div class="form-box">
            <a href="applydisasteraid.php">
                <h2>Apply for Disaster Aid</h2>
                <p>Get help with post-disaster repairs or temporary residency.</p>
            </a>
        </div>
        
        <!-- Open Form -->
        <div class="form-box">
            <a href="openform.php">
                <h2>Request Additional Services</h2>
                <p>Submit an open form for other needs or services.</p>
            </a>
        </div>
    </main>

    <footer>
        <div class="footer-box">
            <div class="email-box">
                <h3>Subscribe to Our Newsletter</h3>
                <form action="#" method="post" class="subscribe-form">
                    <input type="email" placeholder="Your Email Address" required>
                    <button type="submit" class="btn-subscribe">Subscribe</button>
                </form>
            </div>
            <div class="contact-info">
                <h3>Contact Us</h3>
                <p>123 Street Name, Beirut, Lebanon</p>
                <p>Email: info@doyenlabs.com</p>
                <p>Phone: +123 456 7890</p>
            </div>
        </div>
        <p>&copy; 2024 DOYEN LABS. All rights reserved.</p>
    </footer>
</body>
</html>
<?php
if (isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<script>
        alert('Bill payed successfully!');
    </script>";
}
?>
