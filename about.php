<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="hero">
        <div class="overlay">
            <nav class="nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <div class="hero-text">
                <h1>About Us</h1>
                <p>Discover Our Journey and Passion for Photography</p>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="image-section">
            <img src="assets/images/photographer.jpg" alt="Photographer at the beach">
        </div>
        <div class="text-section">
            <h1>A little about your new third wheel</h1>
            <h2>Hey, I'm Alaa!</h2>
            <p>Well hello there! My name is Alaa, and I'm an adventurous wedding/elopement photographer who lives in baalbeck, Lebanon, with my husband Sean and mini goldendoodle, Mia. I never met a dog I didn't like, and I could live in the mountains. (As long as the mountains have WiFi so I can watch <em>The Office</em> or <em>Ted Lasso</em>.)</p>
            <p>I have a love for people who think outside the box and are not afraid to be themselves, and I love being able to capture that on camera. I'm passionate about elopements and firmly believe that the smallest weddings can be the best ones. Here are a few things about me!</p>
            <ul>
                <li>Believing in loving God + loving people</li>
                <li>Consuming excellent food</li>
                <li>Cuddles</li>
                <li>Reading whatever I can get my hands on</li>
                <li>Really good puns</li>
                <li>Being intentional but also spontaneous</li>
                <li>The perfect home-baked chocolate chip cookie</li>
                <li>Trying "almost" anything once</li>
                <li>Being genuine and sentimental</li>
            </ul>
            <p class="quote">If you want to book a session, head on over to my contact page! I would love to work with you!</p>
        </div>
    </div>

    <main class="about-page">
        <!-- About Intro Section -->
        <section class="about-intro">
            <h2>Who We Are</h2>
            <p>We are a team of passionate photographers who believe in capturing the beauty of fleeting moments. With years of experience, our mission is to create timeless memories for our clients through our lens.</p>
        </section>

        <!-- Our Journey Section -->
        <section class="about-journey">
            <h2>Our Journey</h2>
            <p>What started as a small hobby turned into a lifelong passion for capturing the moments that matter most. Our team has grown over the years, but our commitment to excellence and storytelling remains the same. Every photo is a chance to create a memory that will last forever.</p>
        </section>

        <!-- Our Mission & Team Section -->
        <section class="about-details">
            <div class="about-mission">
                <h3>Our Mission</h3>
                <p>To craft visually stunning stories that resonate with the heart, preserving memories that last a lifetime.</p>
            </div>
            <div class="about-team">
                <h3>Meet the Team</h3>
                <p>Our team is made up of talented individuals who bring their unique styles and skills to every project. Together, we strive for excellence in every click.</p>
            </div>
        </section>

        <!-- Client Testimonials Section -->
        <section class="about-testimonials">
            <h2>What Our Clients Say</h2>
            <div class="testimonial">
                <p>"Working with [Studio Name] was an unforgettable experience. They truly captured the essence of our special day!"</p>
                <p><strong>- Client Name</strong></p>
            </div>
            <div class="testimonial">
                <p>"The photos are absolutely stunning. They made us feel so comfortable during the shoot!"</p>
                <p><strong>- Client Name</strong></p>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="about-faq">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-item">
                <h3>How long do you take to deliver final photos?</h3>
                <p>Typically, we deliver your photos within two weeks after the event. We always strive to provide high-quality edits as quickly as possible.</p>
            </div>
            <div class="faq-item">
                <h3>What types of photography services do you offer?</h3>
                <p>We specialize in weddings, engagement photoshoots, family portraits, and event photography. We also offer custom packages for special occasions.</p>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Your Photography Studio. All rights reserved.</p>
    </footer>

    <style>
          .container {
            display: flex;
            max-width: 1200px;
            margin: 20px;
            background-color: #f7f5f2;
            border-radius: 8px;
            overflow: hidden;
        }

        .image-section {
            flex: 1;
        }

        .image-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .text-section {
            flex: 1;
            background-color: #5c4a2f;
            color: #fff;
            padding: 40px;
        }

        .text-section h1 {
            font-size: 2rem;
            margin: 0 0 10px;
            font-family: 'Georgia', serif;
        }

        .text-section h2 {
            font-size: 1.5rem;
            margin-top: 20px;
            margin-bottom: 10px;
            color: #f7d9b4;
        }

        .text-section p {
            font-size: 1rem;
            line-height: 1.6;
            margin: 10px 0;
        }

        .text-section ul {
            list-style: none;
            padding: 0;
        }

        .text-section ul li {
            margin: 5px 0;
        }

        .highlight {
            font-size: 0.9rem;
            color: #f7d9b4;
        }

        .quote {
            margin: 20px 0;
            font-style: italic;
            color: #ffd89a;
        }
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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

        .hero {
            width: 100%;
            margin: 0;
            background-image: linear-gradient(to bottom, rgba(217,185,155), rgba(0, 0, 0, 0.3));
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

        .about-page {
            display: flex;
            flex-direction: column;
            gap: 40px;
            flex-grow: 1;
            padding: 60px 20px;
            max-width: 1200px;
            margin: 40px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .about-page h2, .about-page h3 {
            text-align: center;
            color: #8b4513;
        }

        .about-intro p, .about-journey p, .about-details p {
            text-align: center;
            font-size: 1.2rem;
            color: #555;
            margin: 0 auto;
            max-width: 800px;
        }

        .about-details {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .about-details .about-mission,
        .about-details .about-team {
            flex: 1;
            min-width: 300px;
            max-width: 550px;
            background: #faf8f6; 
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .about-details .about-mission:hover,
        .about-details .about-team:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        .about-testimonials .testimonial {
            margin-bottom: 20px;
            padding: 20px;
            background: #faf8f6;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .about-faq .faq-item {
            margin-bottom: 20px;
            padding: 15px;
            background: #faf8f6;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        footer {
            text-align: center;
            background-color: #333;
            color: #f9f5ef;
            padding: 20px;
            font-size: 0.9rem;
            margin-top: 40px;
            border-top: 5px solid #8b4513;
            margin: 0;
            width: 100%;
        }
    </style>
</body>
</html>
