<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinoy Recipes Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (!isset($_SESSION['loggedin'])): ?>
    <section class="login-section">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </section>
    <?php else: ?>
    <header>
        <div class="banner">
            <img src="images/banner.jpg" alt="Delicious Filipino Dishes" class="banner-image">
        </div>
        <div class="nav">
            <h1>Pinoy Recipes</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="adobo.php">Adobo</a></li>
                    <li><a href="sinigang.php">Sinigang na Baboy</a></li>
                    <li><a href="sisig.php">Sisig</a></li>
                    <li><a href="menudo.php">Menudo</a></li>
                    <li><a href="inihaw na bangus.php">Inihaw na Bangus</a></li>
                    <li><a href="caldereta.php">Caldereta</a></li>
                    <li><a href="Humba.php">Humba</a></li>
                    <li><a href="bicol.php">Bicol</a></li>
                    <li><a href="pinakbet.php">Pinakbet</a></li>
                    <li><a href="karekare.php">Karekare</a></li>
                
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="welcome-section">
            <h2>Discover Delicious Filipino Dishes</h2>
            <p>Welcome to Pinoy Flavors: Your Ultimate Guide to Authentic Filipino Recipes Mabuhay! Dive into the vibrant world of Filipino cuisine with Pinoy Flavors, where every dish tells a story of culture, tradition, and love for food. Whether you're a seasoned cook or a curious foodie, our collection of authentic Filipino recipes brings the rich and diverse flavors of the Philippines right to your kitchen. From the comforting warmth of Sinigang to the sweet indulgence of Leche Flan, discover the tastes that make Filipino food truly unique. Join us on this culinary adventure and experience the heart and soul of the Philippines in every bite. Happy cooking!</p>
            <p>Click on the menu above to explore our recipes!</p>
        </section>
    </main>
    <?php endif; ?>

    <footer>
        <p>&copy; 2024 Pinoy Recipes. All Rights Reserved.</p>
          <div class="social-media">
            <a href="https://www.facebook.com" target="_blank">
                <img src="images/facebook.png" alt="Facebook" class="social-media-icon">
            </a>
             <a href="https://www.youtube.com" target="_blank">
                <img src="images/youtube.png" alt="Youtube" class="social-media-icon">
            </a>
             <a href="https://www.twitter.com" target="_blank">
                <img src="images/twitter.png" alt="Twitter " class="social-media-icon">
            </a>
             <a href="https://www.rss.com" target="_blank">
                <img src="images/rss.png" alt="Rss" class="social-media-icon">
            </a>
        </div>
    </footer>
</body>
</html>
