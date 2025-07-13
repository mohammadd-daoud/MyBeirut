<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Panel</title>
    <link rel="stylesheet" href="stylesNews.css">
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
    <h2 class="page-title">All News</h2>
    <div class="news-container">
        <!-- New News Card 1 -->
        <div class="news-card">
            <div class="news-image">
                <img src="https://desktop.beiruting.com/content/resizedimages/571/600/inside/beirutsportsfestival-beiruting9240524085312161~.jpg" alt="Beirut Sports Event">
            </div>
            <div class="news-content">
                <h3>Beirut Hosts International Sports Event</h3>
                <h6>Beirut.com - 2024</h6>
                <p>Beirut, Lebanon – The city welcomed athletes from around the globe for an exciting international sports competition...</p>
            </div>
        </div>
        <!-- New News Card 2 -->
        <div class="news-card">
            <div class="news-image">
                <img src="https://eclublbs.com/wp-content/uploads/2023/03/New-World.jpeg-uai-634x634.webp" alt="Beirut Tech Summit">
            </div>
            <div class="news-content">
                <h3>Beirut Tech Summit: Innovations in the City</h3>
                <h6>Beirut.com - 2024</h6>
                <p>Beirut recently hosted its annual tech summit, bringing together innovators, entrepreneurs, and investors...</p>
            </div>
        </div>
        <!-- New News Card 3 -->
        <div class="news-card">
            <div class="news-image">
                <img src="https://www.lebanontraveler.com/wp-content/uploads/2019/12/Villa-Audi-Mosaic-Museum-Anotnio-Haber.jpg" alt="Beirut Cultural Festival">
            </div>
            <div class="news-content">
                <h3>Celebrating Beirut's Rich Culture</h3>
                <h6>Beirut.com - 2019</h6>
                <p>The Beirut Cultural Festival brought the city to life with music, art, and performances celebrating Lebanese heritage...</p>
            </div>
        </div>
        <!-- Existing New News Cards -->
        <div class="news-card">
            <div class="news-image">
                <img src="https://fastercapital.com/i/Artistic-Haven--Exploring-Beirut-sThriving-Arts-Scene--Exploring-the-Vibrant-Art-Spaces-in-Beirut.webp" alt="Art in Beirut">
            </div>
            <div class="news-content">
                <h3>Exploring Beirut’s Art Renaissance</h3>
                <h6>Beirut.com - 2024</h6>
                <p>Beirut, Lebanon – A thriving art scene has emerged in the heart of Beirut, blending modern creativity with historical roots...</p>
            </div>
        </div>
        <div class="news-card">
            <div class="news-image">
                <img src="https://www.beirutmarathon.org/images/vrRun.webp" alt="Beirut Marathon">
            </div>
            <div class="news-content">
                <h3>Beirut Marathon: Bringing Communities Together</h3>
                <h6>Beirut.com - 2021</h6>
                <p>Thousands gathered this year for the Beirut Marathon, celebrating resilience, community, and fitness in the city...</p>
            </div>
        </div>
        <div class="news-card">
            <div class="news-image">
                <img src="https://www.beirut.com/wp-content/uploads/2024/11/3-year-old-chef-1024x708.jpg" alt="Beirut Food Festival">
            </div>
            <div class="news-content">
                <h3>Beirut Food Festival: A Culinary Journey</h3>
                <h6>Beirut.com - 2024</h6>
                <p>The annual Beirut Food Festival returned with flavors from across Lebanon, showcasing the rich culinary traditions of the city...</p>
            </div>
        </div>
        <!-- Existing Original News Cards -->
        <div class="news-card">
            <div class="news-image">
                <img src="https://www.beirut.com/wp-content/uploads/2023/10/AUB-1955.jpg" alt="AUB Campus">
            </div>
            <div class="news-content">
                <h3>A Glimpse into History: AUB Campus in 1955</h3>
                <h6>Beirut.com - AUB 1955</h6>
                <p>Beirut, Lebanon – A captivating photograph from 1955 offers a nostalgic look at the American University of Beirut (AUB)...</p>
            </div>
        </div>
        <div class="news-card">
            <div class="news-image">
                <img src="https://www.beirut.com/wp-content/uploads/2023/10/Hamra-1973.jpg" alt="Hamra Street">
            </div>
            <div class="news-content">
                <h3>Hamra Street in 1973: A Glimpse into Beirut's Golden Era</h3>
                <h6>Beirut.com - Hamra 1973</h6>
                <p>Beirut, Lebanon – A newly rediscovered photograph from 1973 offers a vibrant look at Hamra Street during its heyday...</p>
            </div>
        </div>
        <div class="news-card">
            <div class="news-image">
                <img src="https://www.lau.edu.lb/images/history-1946-seaview.jpg" alt="LAU Campus">
            </div>
            <div class="news-content">
                <h3>Charter and Academic Growth</h3>
                <h6>LAU.com - 1946 campus</h6>
                <p>In 1948–49 the AJCW program was expanded under the name Beirut College for Women (BCW). In 1950, it was granted a provisional charter...</p>
            </div>
        </div>
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
