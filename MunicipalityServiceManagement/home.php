<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesHome.css">
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



<main>
    <h2 align="center">Recent News</h2>
    <div class="news-container">
        <div class="news-card">
            <div class="news-image">
                <img src="https://www.beirut.com/wp-content/uploads/2023/10/AUB-1955.jpg" alt="AUB Campus in 1955">
            </div>
            <div class="news-content">
                <h3>A Glimpse into History: AUB Campus in 1955</h3>
                <h6>Beirut.com - AUB 1955</h6>
                <p>Beirut, Lebanon – A captivating photograph from 1955 offers a nostalgic look at the American University of Beirut (AUB)
                    campus. The image highlights the university’s iconic architecture, lush greenery, and mid-century charm...</p>
            </div>
        </div>

        <div class="news-card">
            <div class="news-image">
                <img src="https://www.beirut.com/wp-content/uploads/2023/10/Hamra-1973.jpg" alt="Hamra Street in 1973">
            </div>
            <div class="news-content">
                <h3>Hamra Street in 1973: A Glimpse into Beirut's Golden Era</h3>
                <h6>Beirut.com - Hamra 1973</h6>
                <p>Beirut, Lebanon – A rediscovered photograph from 1973 offers a vibrant look at Hamra Street during its heyday...</p>
            </div>
        </div>

        <div class="news-card">
            <div class="news-image">
                <img src="https://www.lau.edu.lb/images/history-1946-seaview.jpg" alt="Charter and Academic Growth">
            </div>
            <div class="news-content">
                <h3>Charter and Academic Growth</h3>
                <h6>LAU.com - 1946 campus</h6>
                <p>In 1948–49 the AJCW program was expanded under the name Beirut College for Women (BCW). By 1955, BCW was granted...</p>
            </div>
        </div>

        <!-- Add more news cards here -->
    </div>
</main>


    <footer>

        <div class="footer-box">
        <div class="email_box">
    <h3>Subscribe to Our Newsletter</h3>
    <div class="sub-email">
        <input type="email" name="email" id="email" placeholder="Your Email Address" class="email-sub-place" required>
        <button type="submit" class="sub_button">Subscribe</button>
    </div>
</div>

            <div class="logo-footer">
                <a href="#" onclick="reload()" class="logo-img">
                <img src="./assets/hasan.png" alt="logo">
                </a>
            </div>
            <div class="info">
                <h3>Contact Us</h3>
                <p>123 Street Name, Beirut, Lebanon</p>
                <p>Email: info@doyenlabs.com</p>
                <p>Phone: +123 456 7890</p>
                <br><br><br>
            </div>
        </div>
        <p align="center">&copy; 2024 DOYEN LABS. All rights reserved.</p>
    </footer>

</body>
</html>