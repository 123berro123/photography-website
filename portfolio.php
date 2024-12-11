<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="hero">
        <div class="overlay">
            <nav class="nav">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <h1>My Portfolio</h1>
            <p>Discover my journey through the lens</p>
        </div>
    </header>

    <main class="portfolio-page">
        <!-- Portfolio Categories -->
        <section class="portfolio-categories">
            <h2>Browse by Category</h2>
            <div class="category-buttons">
                <button class="filter-btn" onclick="filterGallery('all')">All</button>
                <button class="filter-btn" onclick="filterGallery('weddings')">Weddings</button>
                <button class="filter-btn" onclick="filterGallery('portraits')">Portraits</button>
                <button class="filter-btn" onclick="filterGallery('events')">Events</button>
                <button class="filter-btn" onclick="filterGallery('landscapes')">Landscapes</button>
            </div>
        </section>

        <!-- Portfolio Gallery -->
        <section class="portfolio-gallery">
            <h2>My Work</h2>
            <div class="gallery-grid">
                <!-- Wedding Category -->
                <div class="gallery-item weddings">
                    <img src="assets/images/ph1.jpg" alt="Project 1">
                    <div class="overlay">
                        <p>Project 1 - Wedding</p>
                    </div>
                </div>
                <!-- Portrait Category -->
                <div class="gallery-item portraits">
                    <img src="assets/images/ph2.jpg" alt="Project 2">
                    <div class="overlay">
                        <p>Project 2 - Portrait</p>
                    </div>
                </div>
                <!-- Event Category -->
                <div class="gallery-item events">
                    <img src="assets/images/ph3.jpg" alt="Project 3">
                    <div class="overlay">
                        <p>Project 3 - Event</p>
                    </div>
                </div>
                <!-- Landscape Category -->
                <div class="gallery-item landscapes">
                    <img src="assets/images/ph4.jpg" alt="Project 4">
                    <div class="overlay">
                        <p>Project 4 - Landscape</p>
                    </div>
                </div>
                <!-- Additional Projects -->
                <div class="gallery-item weddings">
                    <img src="assets/images/ph5.jpg" alt="Project 5">
                    <div class="overlay">
                        <p>Project 5 - Wedding</p>
                    </div>
                </div>
                <div class="gallery-item portraits">
                    <img src="assets/images/ph6.jpg" alt="Project 6">
                    <div class="overlay">
                        <p>Project 6 - Portrait</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Behind-the-scenes Video -->
        <section class="behind-the-scenes">
            <h2>Behind the Scenes</h2>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/your_video_id" frameborder="0" allowfullscreen></iframe>
        </section>

        <!-- Case Study Section -->
        <section class="portfolio-case-study">
            <h2>Case Study: Wedding Photography</h2>
            <p>This wedding shoot was an incredible experience. We captured the intimate moments between the couple, their families, and friends. From the ceremony to the reception, every moment was beautifully documented, and the clients were thrilled with the outcome.</p>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Your Name. All Rights Reserved.</p>
    </footer>

    <script>
        // Function to filter gallery by category
        function filterGallery(category) {
            const items = document.querySelectorAll('.gallery-item');
            if (category === 'all') {
                items.forEach(item => item.style.display = 'block');
            } else {
                items.forEach(item => {
                    if (item.classList.contains(category)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
        }
    </script>

    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            background-color: #f9f5ef;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: #8b4513;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #b5651d;
        }

        /* Header */
        .hero {
            background-image: linear-gradient(to bottom, rgba(217,185,155), rgba(0, 0, 0, 0.3)), url('images/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 80px 20px;
        }

        .hero .nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            margin-bottom: 30px;
        }

        .hero .nav ul li {
            margin: 0 15px;
        }

        .hero .nav ul li a {
            color: #fff;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: color 0.3s ease;
        }

        .hero .nav ul li a:hover {
            color: #f9f5ef;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            letter-spacing: 1.5px;
        }

        .hero p {
            font-size: 1.3rem;
            margin-top: 10px;
            font-style: italic;
        }

        /* Portfolio Section */
        .portfolio-page {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .portfolio-gallery h2 {
            text-align: center;
            font-size: 2.5rem;
            color: #8b4513;
            margin-bottom: 40px;
        }

        .portfolio-categories h2 {
            text-align: center;
            font-size: 2rem;
            color: #8b4513;
            margin-bottom: 20px;
        }

        .category-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .filter-btn {
            background-color: #8b4513;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .filter-btn:hover {
            background-color: #b5651d;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-item:hover .overlay {
            opacity: 1;
        }

        .overlay p {
            font-size: 1.2rem;
            font-weight: bold;
        }

        /* Behind the Scenes Video Section */
        .behind-the-scenes {
            margin-top: 40px;
        }

        .behind-the-scenes iframe {
            width: 100%;
            height: 500px;
        }

        /* Footer */
        footer {
            text-align: center;
            background-color: #333;
            color: #f9f5ef;
            padding: 20px;
            font-size: 0.9rem;
            margin-top: 40px;
            border-top: 5px solid #8b4513;
        }
    </style>
</body>
</html>
