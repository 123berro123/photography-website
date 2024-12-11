<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Style */
        body {
            font-family: 'Arial', sans-serif;
            background: #d9b99b;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.3rem;
            margin-top: 10px;
            font-style: italic;
        }

        /* Contact Page Layout */
        .contact-page {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 40px;
        }

        .contact-page h2 {
            text-align: center;
            font-size: 2.5rem;
            color: #8b4513;
            margin-bottom: 30px;
        }

        /* Contact Form */
        .contact-form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 1rem;
            margin-bottom: 5px;
            color: #333;
        }

        input, textarea {
            font-size: 1rem;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            transition: border-color 0.3s ease;
        }

        input:focus, textarea:focus {
            border-color: #8b4513;
            outline: none;
        }

        textarea {
            resize: none;
        }

        .btn {
            background-color: #8b4513;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #b5651d;
        }

        /* Contact Information */
        .contact-info {
            background: #f9f5ef;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            color: #333;
            text-align: center;
        }

        .contact-info p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        /* Map */
        .contact-map {
            margin-top: 40px;
            text-align: center;
        }

        .contact-map iframe {
            border-radius: 10px;
        }

        /* Social Media Links */
        .social-media {
            margin-top: 40px;
            text-align: center;
        }

        .social-icons a {
            margin: 0 10px;
        }

        .social-icons img {
            width: 40px;
            height: 40px;
            transition: transform 0.3s ease;
        }

        .social-icons img:hover {
            transform: scale(1.1);
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-page {
                grid-template-columns: 1fr;
            }
        }
        
.social-media .social-link {
    color: #5a5a5a; /* Gray color */
    font-size: 24px; /* Icon size */
    transition: color 0.3s ease;
}

.social-media .social-link:hover {
    color: #574f3e; /* Darker color on hover */
}

.social-media.social-link i {
    transition: transform 0.3s ease;
}

.social-media .social-link:hover i {
    transform: scale(1.1); /* Slight zoom effect on hover */
}

    </style>
</head>
<body>

    <!-- Header Section -->
    <header class="hero">
        <div class="overlay">
            <h1>Contact Me</h1>
            <p>Let’s get in touch and create something beautiful together</p>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="contact-page">

        <!-- Contact Form -->
        <section class="contact-form">
            <h2>Send Me a Message</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </section>

        <!-- Contact Information Section -->
        <section class="contact-info">
            <h2>Contact Information</h2>
            <p><strong>Email:</strong> yourname@example.com</p>
            <p><strong>Phone:</strong> +1 234 567 890</p>
            <p><strong>Location:</strong> City, Country</p>
        </section>

        <!-- Google Map Embed Section -->
        <section class="contact-map">
            <h2>Find Me on the Map</h2>
            <iframe src="https://www.google.com/maps/embed?pb=...YOUR_GOOGLE_MAP_EMBED_URL..." width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <!-- Social Media Links Section -->
        <section class="social-media">
            <h2>Connect with Me</h2>
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank">
                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                </a>
                <a href="https://twitter.com" target="_blank">
                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                </a>
                <a href="https://instagram.com" target="_blank">
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </a>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Your Name. All Rights Reserved.</p>
    </footer>

</body>
</html>
