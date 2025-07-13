<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Information</title>
</head>

<style>
    :root {
    --primary-bg: #ffffff;
    --primary-text: #2c3e50;
    --hover-color: #3498db;
    --border-color: #e0e0e0;
    --shadow-color: rgba(0, 0, 0, 0.1);
    --card-bg: #f8f9fa;
    --btn-bg: #3498db;
    --btn-hover-bg: #217dbb;
}

body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    background: var(--card-bg);
    color: var(--primary-text);
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: var(--primary-bg);
    padding: 15px 30px;
    box-shadow: 0 2px 4px var(--shadow-color);
    border-bottom: 1px solid var(--border-color);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logo-img {
    height: 50px;
    width: auto;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
    align-items: center;
    margin: 0;
}

.nav-links a {
    text-decoration: none;
    color: var(--primary-text);
    font-weight: 500;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.nav-links a:hover {
    background-color: var(--hover-color);
    color: #ffffff;
}

.profile-icon {
    display: flex;
    align-items: center;
}

.profile-icon i {
    font-size: 24px;
    color: var(--primary-text);
    transition: color 0.3s ease;
}

.profile-icon i:hover {
    color: var(--hover-color);
}

.page-title {
    text-align: center;
    margin: 20px 0;
    font-size: 24px;
    font-weight: 600;
    color: var(--primary-text);
}

main {
    padding: 20px 30px;
}

section {
    margin-bottom: 30px;
    background: var(--primary-bg);
    border: 1px solid var(--border-color);
    border-radius: 8px;
    box-shadow: 0 2px 4px var(--shadow-color);
    padding: 20px;
}

section h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color: var(--primary-text);
}

section p {
    font-size: 16px;
    color: #34495e;
    line-height: 1.6;
}

section ul {
    list-style: disc inside;
    padding-left: 20px;
}

footer {
    background: var(--primary-bg);
    padding: 20px 30px;
    text-align: center;
    border-top: 1px solid var(--border-color);
}

footer p {
    margin: 0;
    color: var(--primary-text);
}

.email-box {
    text-align: center;
    margin-bottom: 20px;
}

.subscribe-form {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 10px;
}

.subscribe-form input {
    width: 300px;
    padding: 10px;
    border: 1px solid var(--border-color);
    border-radius: 5px;
}

.btn-subscribe {
    background: var(--btn-bg);
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-subscribe:hover {
    background: var(--btn-hover-bg);
}

.contact-info {
    text-align: center;
}

</style>
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
        <section id="garbage">
            <h2>Garbage Pickup</h2>
            <p>Garbage pickup happens every <strong>Every day at 7:00 AM and 10:00 PM </strong>. Please put your garbage to the nearest dumpster. </p>
            <ul>
                <li>Recyclables: Separate plastics, glass, and paper.</li>
                <li>Green Waste: Collected every Monday.</li>
            </ul>
        </section>
        <section id="electricity">
            <h2>Electricity</h2>
            <p>Contact our local utility provider, <strong>City Power Co.</strong>, for service and outage updates.</p>
            <ul>
                <li>Emergency Line: 123-456-7890</li>
                <li>Billing Support: billing@citypower.com</li>
            </ul>
        </section>
        <section id="shops">
            <h2>Local Shops</h2>
            <p>Support your community by shopping local! Here are some great places:</p>
            <ul>
                <li><strong>Spinneys:</strong> Groceries, organic produce and household supplies.</li>
                <li><strong>Kitabi:</strong> A cozy bookstore that sells new and used books.</li>
                <li><strong>Sandwich w Nos:</strong> A local restaurant on Hamra, Beirut, NA, Beirut, Beirut that sells beef and chicken sandwiches. Delivery is available
                <br>
                Call: +961 1 280 222 </li>
                <li><strong>Rasif Beirut:</strong> A local restaurant on 28 Jabre Doumit, Hamra, Beirut, Lebanon, Beirut, Lebanon Beirut Hamra, Beirut, Beirut. 
                <br>
                It has a Mediterranean cuisine that sells the most delicious Lebanese dishes
            <br>
                It is also a cafe to drink so you can drink your favorite coffee and relax.
            <br>
            Call:+961 1 340 081 </li>
                <li><strong>Drop:</strong> Need a cozy place that you can do work and drink your favorite coffee that is made with love? Come to Drop coffee shop on Bliss Street, Beirut.
                <br>
                Visit their Instagram: https://www.instagram.com/drop.byghassannaffaa/ </li>
            </ul>
        </section>
    </main>

    <footer>
        <div class="footer-box">
            <div class="email_box">
                <h3>Subscribe to Our Newsletter</h3>
                <div class="sub-email">
                    <form action="#" method="post">
                        <input type="email" name="email" id="email" placeholder="Your Email Address" class="email-sub-place"
                            required>
                        <button type="submit" class="sub_button" onclick="SaveEmail()">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="logo-footer">
                <a href="#" onclick="reload()" class="logo-img">
                    <img src="assets/hasan.png" alt="logo">
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
